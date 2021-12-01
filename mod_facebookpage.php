<?php
/**
 * @package     ArnsMedia.facebook
 * @subpackage  mod_facebookpage
 *
 * @copyright   (C) 2021 Arns Media
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Module\FacebookPage\Site\Helper\FacebookPageHelper;

$fbpage = FacebookPageHelper::getFacebookPage($params);

require ModuleHelper::getLayoutPath('mod_facebookpage');
