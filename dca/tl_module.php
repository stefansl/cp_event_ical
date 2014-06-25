<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package   ModuleEventIcal
 * @author    Stefan Schulz-Lauterbach
 * @license   GNU/LGPL
 * @copyright CLICKPRESS Internetagentur
 */


/**
 * Extend palette
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['eventreader'] = str_replace('cal_calendar;','cal_calendar,cp_event_ical;',$GLOBALS['TL_DCA']['tl_module']['palettes']['eventreader']);


/**
 * Add fields to tl_module
 */
 
 $GLOBALS['TL_DCA']['tl_module']['fields']['cp_event_ical'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cp_event_ical'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

?>