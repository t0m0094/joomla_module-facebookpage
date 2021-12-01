<?php
/**
 * Facebook Page module
 * 
 * @package    ArnsMedia.facebookpage
 * @subpackage Modules
 * @license    GNU General Public License version 3 or later; see LICENSE
 */

// No direct access
defined('_JEXEC') or die;

/*
 * Include the helper
 */
require_once dirname(__FILE__) . '/helper.php';

/*
 * include the params 
 */
$fbpage = ModFacebookpageHelper::getFBPage($params);

/*
 * Load the layout
 */
require JModuleHelper::getLayoutPath('mod_facebookpage');