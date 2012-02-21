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
class OverrideDefaultPageLocationListener implements EventListener {
	/**
	 * Overrides default page location if empty
	 * 
	 * @return	void
	 * @see		EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName) {
		if (PORTAL_OVERRIDE_DEFAULT_PAGE_LOCATION) {
			// code taken vom RequestHandler::handle()
			if (!empty($_GET['page']) || !empty($_POST['page'])) {
				return;
			}
			else if (!empty($_GET['form']) || !empty($_POST['form'])) {
				return;
			}
			else if (!empty($_GET['action']) || !empty($_POST['action'])) {
				return;
			}
			else {
				HeaderUtil::redirect('index.php?page=Portal', false);
			}
		}
	}
}
?>