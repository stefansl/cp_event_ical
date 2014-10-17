<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Cp_event_ical
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'ModuleExportIcal' => 'system/modules/cp_event_ical/ModuleExportIcal.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_export_ical' => 'system/modules/cp_event_ical/templates',
));
