<?php

// require files
require_once '../src/Eluceo/iCal/Component.php';
require_once '../src/Eluceo/iCal/PropertyBag.php';
require_once '../src/Eluceo/iCal/Property.php';
require_once '../src/Eluceo/iCal/Component/Calendar.php';
require_once '../src/Eluceo/iCal/Component/Event.php';

// set default timezone (PHP 5.4)
date_default_timezone_set('Europe/Berlin');

// 1. Create new calendar
$vCalendar = new \Eluceo\iCal\Component\Calendar('www.example.com');

// 2. Create an event
$vEvent = new \Eluceo\iCal\Component\Event();
$vEvent->setDtStart(new \DateTime('2012-12-24'));
$vEvent->setDtEnd(new \DateTime('2012-12-24'));
$vEvent->setNoTime(true);
$vEvent->setSummary('Christmas');

// Adding Timezone (optional)
$vEvent->setUseTimezone(true);

// 3. Add event to calendar
$vCalendar->addEvent($vEvent);

// 4. Set headers
header('Content-Type: text/calendar; charset=utf-8');
header('Content-Disposition: attachment; filename="cal.ics"');

// 5. Output
echo $vCalendar->render();