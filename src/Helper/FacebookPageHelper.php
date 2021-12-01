<?php
/**
 * @package     ArnsMedia.facebook
 * @subpackage  mod_facebookpage
 *
 * @copyright   (C) 2021 Arns Media
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 */

namespace Joomla\Module\FacebookPage\Site\Helper;

\defined('_JEXEC') or die;

use Joomla\CMS\Access\Access;
use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Uri\Uri;
use Joomla\Component\Content\Site\Helper\RouteHelper;

/**
 * Helper for mod_facebookpage
 *
 * @since  1.0
 */
abstract class FacebookPageHelper
{
	/**
	 * Get the facebook page html markup
	 *
	 * @param   \Joomla\Registry\Registry  &$params  object holding the models parameters
	 *
	 * @return  mixed
	 *
	 * @since 1.0
	 */
	public static function getFacebookPage(&$params)
	{
		//Params
		$href = $params->get('href','https://www.facebook.com/facebook');
		$pagename = $params->get('pagename', 'Facebook');
		$width = $params->get('width','340');
		$height = $params->get('height','500');
		$tabs = $params->get('tabs','');

		if(is_array($tabs)) {
			$tabs = implode (", ", $tabs);
		}

		$hide_cover = $params->get('hide_cover','false');
		$show_facepile = $params->get('show_facepile','true');
		$hide_cta = $params->get('hide_cta','false');
		$small_header = $params->get('small_header','false');
		$adapt_width = $params->get('adapt_width','true');

		//Plugin code
		$htmlmarkup = '<div class="fb-page"
		data-href="'.$href.'"
		data-width="'.$width.'"
		data-height="'.$height.'"
		data-tabs="'.$tabs.'"
		data-hide-cover="'.$hide_cover.'"
		data-show-facepile="'.$show_facepile.'"
		data-hide-cta="'.$hide_cta.'"
		data-small-header="'.$small_header.'"
		data-adapt-container-width="'.$adapt_width.'">
			<blockquote cite="'.$href.'" class="fb-xfbml-parse-ignore">
				<a href="'.$href.'">'.$pagename.'</a>
			</blockquote>
		</div>';

        return $htmlmarkup;
	}
}
