<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Steffen Ritter, rs websystems (steffen.ritter@typo3.org)
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Class Tx_Upgradereport_Controller_ReportController
 */
class Tx_Upgradereport_Controller_AjaxController extends Tx_Extbase_MVC_Controller_ActionController {


	/**
	 * Initializes the controller before invoking an action method.
	 *
	 * @return void
	 */
	protected function initializeAction() {
		parent::initializeAction();
	}

	/**
	 * @param $checkIdentifier
	 *
	 * @return string
	 */
	public function runTestAction($checkIdentifier) {
		return json_encode(array('result' => 'OK'));
	}
}


if (defined('TYPO3_MODE') && isset($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/upgradereport/Classes/Controller/AjaxController.php'])) {
	include_once($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/upgradereport/Classes/Controller/AjaxController.php']);
}

?>