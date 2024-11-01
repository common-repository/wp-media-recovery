<?php
/**
 * [Short description]
 *
 * @package    DEVRY\MLR
 * @copyright  Copyright (c) 2024, Developry Ltd.
 * @license    https://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 * @since      1.4
 */

namespace DEVRY\MLR;

! defined( ABSPATH ) || exit; // Exit if accessed directly.

/**
 * Add settings link after plugin activation under Plugins.
 */
function mlr_add_action_links( $links, $file_path ) {
	if ( MLR_PLUGIN_BASENAME === $file_path ) {
		$mlr = new Media_Library_Recovery();

		$admin_page = ( '' === $mlr->compact_mode )
			? 'admin.php?page=mlr_settings'
			: 'upload.php?page=mlr_settings';

		$links['mlr-settings'] = '<a href="' . esc_url( admin_url( $admin_page ) ) . '">'
			. esc_html__( 'Settings', 'wp-media-recovery' )
			. '</a>';
		$links['mlr-upgrade']  = '<a href="https://bit.ly/3wMEF6c" target="_blank">'
		. esc_html__( 'Go Pro', 'wp-media-recovery' )
		. '</a>';

		return array_reverse( $links );
	}

	return $links;
}
