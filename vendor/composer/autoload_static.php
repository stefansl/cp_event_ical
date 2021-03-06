<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c7fa9e66c2a162ac2a90d9bb5f2488a
{
    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'Eluceo\\iCal' => 
            array (
                0 => __DIR__ . '/..' . '/eluceo/ical/src',
            ),
        ),
    );

    public static $classMap = array (
        'ComposerAutoloaderInit6c7fa9e66c2a162ac2a90d9bb5f2488a' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit6c7fa9e66c2a162ac2a90d9bb5f2488a' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Eluceo\\iCal\\Component' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Component.php',
        'Eluceo\\iCal\\ComponentTest' => __DIR__ . '/..' . '/eluceo/ical/tests/Eluceo/iCal/ComponentTest.php',
        'Eluceo\\iCal\\Component\\Alarm' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Component/Alarm.php',
        'Eluceo\\iCal\\Component\\Calendar' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Component/Calendar.php',
        'Eluceo\\iCal\\Component\\CalendarIntegrationTest' => __DIR__ . '/..' . '/eluceo/ical/tests/Eluceo/iCal/Component/CalendarIntegrationTest.php',
        'Eluceo\\iCal\\Component\\Event' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Component/Event.php',
        'Eluceo\\iCal\\Component\\Timezone' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Component/Timezone.php',
        'Eluceo\\iCal\\Component\\TimezoneRule' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Component/TimezoneRule.php',
        'Eluceo\\iCal\\ParameterBag' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/ParameterBag.php',
        'Eluceo\\iCal\\ParameterBagTest' => __DIR__ . '/..' . '/eluceo/ical/tests/Eluceo/iCal/ParameterBagTest.php',
        'Eluceo\\iCal\\Property' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Property.php',
        'Eluceo\\iCal\\PropertyBag' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/PropertyBag.php',
        'Eluceo\\iCal\\PropertyBagTest' => __DIR__ . '/..' . '/eluceo/ical/tests/Eluceo/iCal/PropertyBagTest.php',
        'Eluceo\\iCal\\PropertyTest' => __DIR__ . '/..' . '/eluceo/ical/tests/Eluceo/iCal/PropertyTest.php',
        'Eluceo\\iCal\\Property\\ArrayValue' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Property/ArrayValue.php',
        'Eluceo\\iCal\\Property\\ArrayValueTest' => __DIR__ . '/..' . '/eluceo/ical/tests/Eluceo/iCal/Property/ArrayValueTest.php',
        'Eluceo\\iCal\\Property\\DateTimeProperty' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Property/DateTimeProperty.php',
        'Eluceo\\iCal\\Property\\DateTimesProperty' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Property/DateTimesProperty.php',
        'Eluceo\\iCal\\Property\\Event\\Attendees' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Property/Event/Attendees.php',
        'Eluceo\\iCal\\Property\\Event\\Description' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Property/Event/Description.php',
        'Eluceo\\iCal\\Property\\Event\\DescriptionTest' => __DIR__ . '/..' . '/eluceo/ical/tests/Eluceo/iCal/Property/Event/DescriptionTest.php',
        'Eluceo\\iCal\\Property\\Event\\Organizer' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Property/Event/Organizer.php',
        'Eluceo\\iCal\\Property\\Event\\OrganizerTest' => __DIR__ . '/..' . '/eluceo/ical/tests/Eluceo/iCal/Property/Event/OrganizerTest.php',
        'Eluceo\\iCal\\Property\\Event\\RecurrenceId' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Property/Event/RecurrenceId.php',
        'Eluceo\\iCal\\Property\\Event\\RecurrenceRule' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Property/Event/RecurrenceRule.php',
        'Eluceo\\iCal\\Property\\Event\\RecurrenceRuleTest' => __DIR__ . '/..' . '/eluceo/ical/tests/Eluceo/iCal/Property/Event/RecurrenceRuleTest.php',
        'Eluceo\\iCal\\Property\\StringValue' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Property/StringValue.php',
        'Eluceo\\iCal\\Property\\StringValueTest' => __DIR__ . '/..' . '/eluceo/ical/tests/Eluceo/iCal/Property/StringValueTest.php',
        'Eluceo\\iCal\\Property\\ValueInterface' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Property/ValueInterface.php',
        'Eluceo\\iCal\\Util\\ComponentUtil' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Util/ComponentUtil.php',
        'Eluceo\\iCal\\Util\\DateUtil' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Util/DateUtil.php',
        'Eluceo\\iCal\\Util\\PropertyValueUtil' => __DIR__ . '/..' . '/eluceo/ical/src/Eluceo/iCal/Util/PropertyValueUtil.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit6c7fa9e66c2a162ac2a90d9bb5f2488a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit6c7fa9e66c2a162ac2a90d9bb5f2488a::$classMap;

        }, null, ClassLoader::class);
    }
}
