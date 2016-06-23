<?php


define('TL_MODE', 'FE');
require_once '../../../initialize.php';


/**
 * Class ExportIcal
 *
 * @copyright  Stefan Schulz-Lauterbach 2016
 * @author     Stefan Schulz-Lauterbach <https://clickpress.de>
 * @package    Controller
 */
class ExportIcal extends Frontend
{

    /**
     * Initialize the object (do not remove)
     */
    public function __construct()
    {
        parent::__construct();

        define('BE_USER_LOGGED_IN', false);
        define('FE_USER_LOGGED_IN', false);
    }


    /**
     * Export
     */
    public function export()
    {

        $time = time();

        // Get the current event
        $objEvent = $this->Database->prepare(
            "SELECT *, author AS authorId, (SELECT title FROM tl_calendar WHERE tl_calendar.id=tl_calendar_events.pid) AS calendar, (SELECT name FROM tl_user WHERE id=author) author FROM tl_calendar_events WHERE (id=? OR alias=?)"
            . (!BE_USER_LOGGED_IN ? " AND (start='' OR start<?) AND (stop='' OR stop>?) AND published=1" : "")
        )
            ->limit(1)
            ->execute(
                (is_numeric($this->Input->get('id')) ? $this->Input->get('id') : 0),
                $this->Input->get('id'),
                $time,
                $time
            );


        // require files
        require_once __DIR__ . '/../vendor/autoload.php';

        // set default timezone (PHP 5.4)
        // Todo: set timezone dynamically
        date_default_timezone_set('Europe/Berlin');

        // Todo: correct enddate, if multi-day
        // not final
        if ($objEvent->endTime != null) {
            $objEvent->endTime = $objEvent->endTime + 86400;
        }

        // 1. Create new calendar
        $vCalendar = new \Eluceo\iCal\Component\Calendar('Contao webCMS');

        // 2. Create an event
        $vEvent = new \Eluceo\iCal\Component\Event();
        $vEvent->setDtStart(new \DateTime(date('Y-m-d\TH:i:sP', $objEvent->startTime)));
        $vEvent->setDtEnd(new \DateTime(date('Y-m-d\TH:i:sP', $objEvent->endTime)));

        if ($objEvent->addTime) {
            $vEvent->setNoTime(false);
        } else {
            $vEvent->setNoTime(true);
        }

        // Compatibility calendarextended
        if ($objEvent->cep_location) {
            $vEvent->setLocation($objEvent->cep_location);
        }

        $vEvent->setSummary($objEvent->title);
        $vEvent->setDescription(strip_tags($objEvent->teaser));

        if ($objEvent->recurring) {
            $repeatEach = deserialize($objEvent->repeatEach);

            $freq           = array(
                'days'   => \Eluceo\iCal\Property\Event\RecurrenceRule::FREQ_DAILY,
                'weeks'  => \Eluceo\iCal\Property\Event\RecurrenceRule::FREQ_WEEKLY,
                'months' => \Eluceo\iCal\Property\Event\RecurrenceRule::FREQ_MONTHLY,
                'years'  => \Eluceo\iCal\Property\Event\RecurrenceRule::FREQ_YEARLY,
            );
            $recurrenceRule = new \Eluceo\iCal\Property\Event\RecurrenceRule();
            $recurrenceRule->setFreq($freq[$repeatEach['unit']]);
            $recurrenceRule->setInterval($repeatEach['value']);
            $vEvent->setRecurrenceRule($recurrenceRule);
        }

        // Adding Timezone (optional)
        $vEvent->setUseTimezone(true);

        // 3. Add event to calendar
        $vCalendar->addComponent($vEvent);

        $filename = (!empty($objEvent->alias)) ? $objEvent->alias : standardize($objEvent->title);

        // 4. Set headers
        header('Content-Type: text/calendar; charset=utf-8');
        header('Content-Disposition: attachment; filename="' . $filename . '.ics"');

        // 5. Output
        echo $vCalendar->render();
        exit;
    }
}


$objExp = new ExportIcal();
$objExp->export();

?>