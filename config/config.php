<?php

array_insert($GLOBALS['FE_MOD']['events'],3, array
	(
		'export_ical'       =>  'ModuleExportIcal'
	));

/**
 * Add permissions
 */
$GLOBALS['TL_PERMISSIONS'][] = 'calendars';
$GLOBALS['TL_PERMISSIONS'][] = 'calendarp';
?>
