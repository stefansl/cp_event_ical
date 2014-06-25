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
 * Namespace
 */
namespace Clickpress\ModuleEventIcal;

echo 'lsdf';
/**
 * Class tl_events
 *
 * @copyright  CLICKPRESS Internetagentur
 * @author     Stefan Schulz-Lauterbach
 * @package    Devtools
 */
class ModuleEventIcal extends Module
{

	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		return parent::generate();
	}	
	
	
	/**
	 * Generate the module
	 */
	protected function compile()
	{
		echo 'test';
	}
}
