<?php


define('TL_MODE', 'FE');
require_once '../../../initialize.php';


/**
 * Class ExportIcal
 *
 * Cron job controller.
 * @copyright  Stefan Schulz-Lauterbach 2005-2013
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

        global $objPage;

        $time = time();

        // Get the current event
        $objEvent = $this->Database->prepare("SELECT *, author AS authorId, (SELECT title FROM tl_calendar WHERE tl_calendar.id=tl_calendar_events.pid) AS calendar, (SELECT name FROM tl_user WHERE id=author) author FROM tl_calendar_events WHERE (id=? OR alias=?)" . (!BE_USER_LOGGED_IN ? " AND (start='' OR start<?) AND (stop='' OR stop>?) AND published=1" : ""))
            ->limit(1)
            ->execute((is_numeric($this->Input->get('id')) ? $this->Input->get('id') : 0), $this->Input->get('id'), $time, $time);

    
        // require files
        require_once __DIR__ . '/../vendor/autoload.php';

        // set default timezone (PHP 5.4)
        date_default_timezone_set('Europe/Berlin');

        // 1. Create new calendar
        $vCalendar = new \Eluceo\iCal\Component\Calendar('Contao webCMS');

        // 2. Create an event
        $vEvent = new \Eluceo\iCal\Component\Event();
        $vEvent->setDtStart(new \DateTime(date('Y-m-d\TH:i:sP', $objEvent->startTime)));
        $vEvent->setDtEnd(new \DateTime(date('Y-m-d\TH:i:sP', $objEvent->endTime)));
        $vEvent->setNoTime(false);
        $vEvent->setLocation($objEvent->cep_location);
        $vEvent->setSummary($objEvent->title);
        $vEvent->setDescription(strip_tags($objEvent->teaser));

        // Adding Timezone (optional)
        $vEvent->setUseTimezone(false);

        // 3. Add event to calendar
        $vCalendar->addComponent($vEvent);

        // 4. Set headers
        header('Content-Type: text/calendar; charset=utf-8');
        header('Content-Disposition: attachment; filename="' . $objEvent->alias .  '.ics"');

        // 5. Output
        echo $vCalendar->render();
        exit;
    }
}


$objExp =   new ExportIcal();
$objExp->export();

?>