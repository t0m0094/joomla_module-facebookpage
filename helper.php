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

class ModFacebookpageHelper {

	public static function getFBPage($params) {
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
		$fbpageredered = '<div class="fb-page"
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

        return $fbpageredered;
    }
}