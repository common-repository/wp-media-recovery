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
 * Add plugin rating notice to get some feedback for users.
 */
function mlr_display_rating_notice() {
	if ( ! get_option( 'mlr_rating_notice', '' ) ) {
		$mlr = new Media_Library_Recovery;

		$admin_page = ( '' === $mlr->compact_mode ) ? 'admin.php' : 'upload.php';
		?>
			<div class="notice notice-info is-dismissible mlr-admin">
				<h3><?php echo esc_html( MLR_PLUGIN_NAME ); ?></h3>
				<p>
					<?php
					printf(
						wp_kses(
							/* translators: %1$s is replaced with by giving it 5 stars rating */
							__( '✨💪🔌 Could you please kindly help the plugin in your turn %1$s? (Thank you in advance)', 'wp-media-recovery' ),
							json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
						),
						'<strong>' . esc_html__( 'by giving it 5 stars rating', 'wp-media-recovery' ) . '</strong>'
					);
					?>
				</p>
				<div class="button-group">
					<a href="<?php echo esc_url( MLR_PLUGIN_WPORG_RATE ); ?>" target="_blank" class="button button-primary">
						<?php echo esc_html__( 'Rate us @ WordPress.org', 'wp-media-recovery' ); ?>
						<i class="dashicons dashicons-external"></i>
					</a>
					<a href="<?php echo esc_url( add_query_arg( array( 'page' => 'mlr_settings', 'action' => 'mlr_dismiss_rating_notice', '_wpnonce' => wp_create_nonce( 'mlr_rating_notice_nonce' ) ), admin_url( $admin_page ) ) ); ?>" class="button">
						<?php echo esc_html__( 'I already did', 'wp-media-recovery' ); ?>
					</a>
					<a href="<?php echo esc_url( add_query_arg( array( 'page' => 'mlr_settings', 'action' => 'mlr_dismiss_rating_notice', '_wpnonce' => wp_create_nonce( 'mlr_rating_notice_nonce' ) ), admin_url( $admin_page ) ) ); ?>" class="button">
						<?php echo esc_html__( "Don't show this notice again!", 'wp-media-recovery' ); ?>
					</a>
				</div>
			</div>
		<?php
	}
}

add_action( 'admin_notices', __NAMESPACE__ . '\mlr_display_rating_notice' );
