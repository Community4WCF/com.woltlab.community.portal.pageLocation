<?php
// wcf imports
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');

/**
 * @package		com.woltlab.community.portal.pageLocation
 * @author		WoltLab Community
 * @copyright	2011 WoltLab Community
 * @license		LGPL <http://www.gnu.org/licenses/lgpl.html>
 * @subpackage	system.event.listener
 * @category	Portal
 */
class HeaderOverridePageLocationListener implements EventListener {
	/**
	 * Overrides link inside page header
	 * 
	 * @return	void
	 * @see		EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName) {
		if (PORTAL_HEADER_OVERRIDE_PAGE_LOCATION) {
			// due to dependencies there is no need to verify anything
			// so we can simply set our desired location
			WCF::getTpl()->assign('customPageLocation', 'index.php?page=Portal');
		}
	}
}
?>