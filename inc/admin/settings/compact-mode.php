<?php
/**
 * [Short description]
 *
 * @package    DEVRY\MLR
 * @copyright  Copyright (c) 2024, Developry Ltd.
 * @license    https://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 * @since      1.5
 */

namespace DEVRY\MLR;

! defined( ABSPATH ) || exit; // Exit if accessed directly.

function mlr_display_compact_mode() {
	$mlr = new Media_Library_Recovery();

	$compact_mode = get_option( 'mlr_compact_mode', $mlr->compact_mode );

	// Compact mode option if empty or non-existent then No, otherwise Yes.
	if ( 'yes' === $compact_mode ) {
		$compact_mode = 'selected';
	}

	printf(
		'<select id="mlr-compact-mode" name="mlr_compact_mode">
			<option value="">No</option>
			<option value="yes" %1$s>Yes</option>
		</select>',
		esc_attr( $compact_mode )
	);
	?>
		<p class="description">
			<small>
				<?php echo esc_html__( 'Compact mode will add a sub-menu to Media.', 'wp-media-recovery' ); ?>
			</small>
		</p>
	<?php
}

function mlr_sanitize_compact_mode( $compact_mode ) {
	// Verify the nonce.
	$_wpnonce = ( isset( $_REQUEST['mlr_wpnonce'] ) ) ? sanitize_text_field( wp_unslash( $_REQUEST['mlr_wpnonce'] ) ) : '';

	if ( empty( $_wpnonce ) || ! wp_verify_nonce( $_wpnonce, 'mlr_settings_nonce' ) ) {
		return;
	}

	// Nothing selected.
	if ( empty( $compact_mode ) ) {
		return;
	}

	// Option changed and updated.
	if ( get_option( 'mlr_compact_mode', '' ) !== $compact_mode ) {
		add_settings_error(
			'mlr_settings_errors',
			'mlr_compact_mode',
			esc_html__( 'Compact mode option was updated successfully.', 'wp-media-recovery' ),
			'updated'
		);
	}

	return sanitize_text_field( $compact_mode );
}
