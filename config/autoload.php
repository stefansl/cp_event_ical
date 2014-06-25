<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Cp_event_ical
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Clickpress',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Clickpress\ModuleEventIcal\ModuleEventIcal' => 'system/modules/cp_event_ical/classes/ModuleEventIcal.php',
));
