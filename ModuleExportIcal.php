<?php
/**
* Class tl_events
*
* @copyright  CLICKPRESS Internetagentur
* @author     Stefan Schulz-Lauterbach
* @package    Devtools
*/
class ModuleExportIcal extends Events
{


	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_export_ical';


	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### ICAL EXPORT ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}

		// Set the item from the auto_item parameter
		if ($GLOBALS['TL_CONFIG']['useAutoItem'] && isset($_GET['auto_item']))
		{
			$this->Input->setGet('events', $this->Input->get('auto_item'));
		}

		return parent::generate();
	}


	/**
	* Generate the module
	*/
	protected function compile()
	{

		// Get the current event
		$objEvent = $this->Database->prepare("SELECT id, author AS authorId, (SELECT title FROM tl_calendar WHERE tl_calendar.id=tl_calendar_events.pid) AS calendar, (SELECT name FROM tl_user WHERE id=author) author FROM tl_calendar_events WHERE (id=? OR alias=?)" . (!BE_USER_LOGGED_IN ? " AND (start='' OR start<?) AND (stop='' OR stop>?) AND published=1" : ""))
			->limit(1)
			->execute((is_numeric($this->Input->get('events')) ? $this->Input->get('events') : 0), $this->Input->get('events'), $time, $time);

		$this->Template->ical_url = TL_PATH . '/system/modules/cp_event_ical/export/exportIcal.php?id=' . $objEvent->id;

	}


}

?>