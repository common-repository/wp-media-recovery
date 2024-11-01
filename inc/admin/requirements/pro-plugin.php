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

! defined( ABSPATH ) || exit; // Exit if accessed directly

/**
 * Don't allow to have both Free and Pro active at the same time.
 */
function mlr_check_pro_plugin() {
	// Deactitve the Pro version if active.
	if ( is_plugin_active( 'media-library-recovery-pro/media-library-recovery.php' ) ) {
		deactivate_plugins( 'media-library-recovery-pro/media-library-recovery.php', true );
	}
}

register_activation_hook( MLR_PLUGIN_BASENAME, __NAMESPACE__ . '\mlr_check_pro_plugin' );

/**
 * Display a promotion for the pro plugin.
 */
function mlr_display_upgrade_notice() {
	if ( get_option( 'mlr_upgrade_notice' ) && get_transient( 'mlr_upgrade_plugin' ) ) {
		return;
	}

	$mlr = new Media_Library_Recovery();

	$admin_page = ( '' === $mlr->compact_mode ) ? 'admin.php' : 'upload.php';
	?>
		<div class="notice notice-success is-dismissible mlr-admin">
			<h3><?php echo esc_html__( 'Media Library Recovery PRO 🚀', 'wp-media-recovery' ); ?></h3>
			<p>
				<?php
				printf(
					wp_kses(
						/* translators: %1$s is replaced with Found the free version helpful */
						/* translators: %2$s is replaced with Media Library Recovery Pro */
						__( '✨🎉📢 %1$s? Would you be interested in learning more about the benefits of upgrading to the %2$s?', 'wp-media-recovery' ),
						json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
					),
					'<strong>' . esc_html__( 'Found the free version helpful', 'wp-media-recovery' ) . '</strong>',
					'<strong>' . esc_html__( 'Media Library Recovery Pro', 'wp-media-recovery' ) . '</strong>'
				);
				?>
				<!-- <br /> -->
				<?php
				// printf(
				// 	wp_kses(
				// 		/* translators: %1$s is replaced with promo code */
				// 		/* translators: %2$s is replaced with 10% off */
				// 		__( 'Use the %1$s code and get %2$s your purchase!', 'wp-media-recovery' ),
				// 		json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
				// 	),
				// 	'<code>' . esc_html__( 'MLR10', 'wp-media-recovery' ) . '</code>',
				// 	'<strong>' . esc_html__( '10% off', 'wp-media-recovery' ) . '</strong>'
				// );
				?>
			</p>
			<div class="button-group">
				<a href="https://bit.ly/49SFZmD" target="_blank" class="button button-primary button-success">
					<?php echo esc_html__( 'Go Pro', 'wp-media-recovery' ); ?>
					<i class="dashicons dashicons-external"></i>
				</a>
				<a href="<?php echo esc_url( add_query_arg( array( 'page' => 'mlr_settings', 'action' => 'mlr_dismiss_upgrade_notice', '_wpnonce' => wp_create_nonce( 'mlr_upgrade_notice_nonce' ) ), admin_url( $admin_page ) ) ); ?>" class="button">
					<?php echo esc_html__( 'I already did', 'wp-media-recovery' ); ?>
				</a>
				<a href="<?php echo esc_url( add_query_arg( array( 'page' => 'mlr_settings', 'action' => 'mlr_dismiss_upgrade_notice', '_wpnonce' => wp_create_nonce( 'mlr_upgrade_notice_nonce' ) ), admin_url( $admin_page ) ) ); ?>" class="button">
					<?php echo esc_html__( "Don't show this notice again!", 'wp-media-recovery' ); ?>
				</a>
			</div>
		</div>
	<?php
	delete_option( 'mlr_upgrade_notice' );

	// Set the transient to last for 30 days.
	set_transient( 'mlr_upgrade_plugin', true, 30 * DAY_IN_SECONDS );
}

add_action( 'admin_notices', __NAMESPACE__ . '\mlr_display_upgrade_notice' );
