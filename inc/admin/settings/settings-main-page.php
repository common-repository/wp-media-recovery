<?php
/**
 * [Short Description]
 *
 * @package    DEVRY\MLR
 * @copyright  Copyright (c) 2024, Developry Ltd.
 * @license    https://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 * @since      1.4
 */

namespace DEVRY\MLR;

! defined( ABSPATH ) || exit; // Exit if accessed directly.

$mlr = new Media_Library_Recovery;

$page = isset( $_REQUEST['p'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['p'] ) ) : '';

$admin_page = ( '' === $mlr->compact_mode ) ? 'admin.php?page=mlr_settings&p=' : 'upload.php?page=mlr_settings&p=';

$prev_page     = ( isset( $page ) && $page > 1 ) ? ( $page - 1 ) : 1;
$next_page     = ( isset( $page ) && $page > 0 ) ? ( $page + 1 ) : 2;
$curr_page     = ( isset( $page ) ) ? (int) $page : 1;
$total_files   = $mlr->get_total_image_files();
$total_pages   = ceil( $total_files / $mlr->results_per_page );
$is_first_page = ( 1 === $curr_page ) ? true : false;
$is_last_page  = ( $curr_page > $total_pages - 1 ) ? true : false;

$prev_page_url = admin_url( $admin_page . $prev_page );
$next_page_url = admin_url( $admin_page . $next_page );

?>
<div class="mlr-admin">
	<div class="mlr-container">
		<div class="mlr-pro">
			<h4>
				<?php echo esc_html__( 'Get the PRO version today!', 'wp-media-recovery' ); ?>
			</h4>
			<p>
				<?php echo esc_html__( 'With the PRO version you will get a lot more features with better performance and quicker recovery process.', 'wp-media-recovery' ); ?>
			</p>

			<table>
				<tr>
					<th><?php echo esc_html__( 'Feature', 'wp-media-recovery' ); ?></th>
					<th><?php echo esc_html__( 'Free', 'wp-media-recovery' ); ?></th>
					<th><?php echo esc_html__( 'PRO', 'wp-media-recovery' ); ?></th>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Number of files to recover at a time', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( '10', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'unlimited', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Recover media libraries with 10,000+ files as a background process with WP-Cron.', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Change the default wp-content/uploads folder path', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Larger files support', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'WordPress multisite support', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Media type support', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'image-only', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'ALL media', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Post type support', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'page & post', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'ALL post types', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Attach media to posts', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'basic', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'with URL mapping and replacement', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Backup your uploads folder', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Better performance and quicker recovery process', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Search, filter, and sort media files', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'basic', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'advanced', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'User-friendly media file explorer', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'default', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'pro', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Priority email support', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Regular plugin updates', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'delayed', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'first release', 'wp-media-recovery' ); ?></td>
				</tr>
			</table>

			<p class="button-group">
				<a
					class="button button-primary button-pro"
					href="https://bit.ly/49Ri9Yv"
					target="_blank"
				>
					<?php echo esc_html__( 'GET PRO VERSION', 'wp-media-recovery' ); ?>
				</a>
				<a
					class="button button-primary button-watch-video"
					href="https://www.youtube.com/watch?v=umEs5RTxuyI"
					target="_blank"
				>
					<?php echo esc_html__( 'Watch Video', 'wp-media-recovery' ); ?>
				</a>
			</p>
		</div>

		<div class="mlr-explorer">
			<h2>
				<?php echo esc_html__( 'Media Library Recovery', 'wp-media-recovery' ); ?>
			</h2>

			<p>
				<?php
				printf(
					wp_kses(
						/* translators: %1$s is replaced with wp-content/uploads */
						__( 'A tool that helps you recover and restore images from your %1$s folder after a database failure or reset.', 'wp-media-recovery' ),
						json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
					),
					'<code>wp-content/uploads</code>',
				);
				?>
			</p>

			<p>
				<?php echo esc_html__( 'Click on any of the media items below to mark it up for recovery.', 'wp-media-recovery' ); ?>
			</p>

			<hr />

			<p class="mlr-hide-media">
				<label>
					<input 
						type="checkbox" 
						id="mlr-hide-existing-media"
						name="mlr-hide-existing-media" 
					/> 
					<?php echo esc_html__( 'Hide Existing Media', 'wp-media-recovery' ); ?>
				</label>
				<br />
				<small>
					* <?php echo esc_html__( 'Hide media found on the server and database.', 'wp-media-recovery' ); ?>
				</small>
			</p>

			<p>
				<?php
				printf(
					wp_kses(
						/* translators: %2$s is replaced with # of media files */
						/* translators: %2$s is replaced with wp-content/uploads */
						__( 'You have total %1$s image files in your %2$s folder.', 'wp-media-recovery' ),
						json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
					),
					'<strong>' . number_format( $total_files, 0, 2 ) . '</strong>',
					'<code>wp-content/uploads</code>',
				);
				?>
			</p>

			<div class="mlr-explorer-grid">
				<?php echo $mlr->display_media_grid(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			</div>

			<p>
				<div class="mlr-explorer-pagination">
					<div class="button-action">
						<button
							class="button button-primary button-large button-recovery"
							id="mlr-media-recovery-button"
							name="mlr-media-recovery-button"
						>
							<?php echo esc_html__( 'Media Recovery...', 'wp-media-recovery' ); ?>
						</button>
						<span></span>
					</div>
					<div class="button-group">
						<a
							class="button button-primary button-large button-pagination"
							id="mlr-prev-page-button"
							name="mlr-prev-page-button"
							href="<?php echo esc_url( $prev_page_url ); ?>"
							<?php if ( $is_first_page ) : ?>
								disabled
							<?php endif; ?>
						>
							<?php echo esc_html__( '&larr; Previous Page', 'wp-media-recovery' ); ?>
						</a>
						<a
							class="button button-primary button-large button-pagination"
							id="mlr-next-page-button"
							name="mlr-next-page-button"
							href="<?php echo esc_url( $next_page_url ); ?>"
							<?php if ( $is_last_page ) : ?>
								disabled
							<?php endif; ?>
						>
							<?php echo esc_html__( 'Next Page &rarr;', 'wp-media-recovery' ); ?>
						</a>
					</div>
				</div>
			</p>

			<hr />

			<ul>
				<li>
					<i class="dashicons dashicons-visibility"></i> 
					<?php echo esc_html__( 'Files already recovered or found on your server and in your database.', 'wp-media-recovery' ); ?>
				</li>
				<li>
					<i class="dashicons dashicons-hidden"></i> 
					<?php echo esc_html__( 'Files not found in your database and available for recovery.', 'wp-media-recovery' ); ?>
				</li>
				<li>
					<i class="dashicons dashicons-yes"></i> 
					<?php echo esc_html__( 'Files selected for recovery and not found in your database.', 'wp-media-recovery' ); ?>
				</li>
				<li>
					<i class="dashicons dashicons-lock"></i> 
					<?php echo esc_html__( 'Files that cannot be recovered because they exceed your limits.', 'wp-media-recovery' ); ?>
				</li>
			</ul>
		</div>

		<p>
			<a href="javascript:void();" class="button" onclick="window.location.reload( true );">
				<strong>Reload...</strong>
			</a>
		</p>

		<p>
			<?php
			printf(
				wp_kses(
					/* translators: %1$s is replaced with Hint */
					__( '%1$s: Refresh this page manually if the recovering process does not complete within a couple of minutes', 'wp-media-recovery' ),
					json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
				),
				'<strong>' . esc_html__( 'Hint', 'wp-media-recovery' ) . '</strong>'
			);
			?>
		</p>

		<hr />

		<p>
			<?php
			printf(
				wp_kses(
					/* translators: %1$s is replaced with DOES NOT upload or overwrite any media on the server */
					__( '• The plugin %1$s, and it will only scan the default uploads folder.', 'wp-media-recovery' ),
					json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
				),
				'<strong>' . esc_html__( 'DOES NOT upload or overwrite any media on the server', 'wp-media-recovery' ) . '</strong>'
			);
			?>
		</p>

		<p>
			<?php
			printf(
				wp_kses(
					__( '• The plugin allows you to restore existing media from the uploads folder and re-insert it into the WordPress database the right way.', 'wp-media-recovery' ),
					json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
				)
			);
			?>
		</p>

		<p>
			<?php
			printf(
				wp_kses(
					/* translators: %1$s is replaced with max_execution_time */
					__( '• Becasue of your server %1$s time you cannot recover images over 2MB.', 'wp-media-recovery' ),
					json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
				),
				'<code>max_execution_time</code>',
			);
			?>
		</p>

		<p>
			<?php
			printf(
				wp_kses(
					__( '• You cannot duplicate or overwirte existing media files and the plugin only supports images.', 'wp-media-recovery' ),
					json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
				)
			);
			?>
		</p>

		<hr />

		<form method="post" action="<?php echo esc_url( admin_url( 'options.php' ) ); ?>">
			<?php wp_nonce_field( 'mlr_settings_nonce', 'mlr_wpnonce' ); ?>
			<?php
				settings_fields( MLR_SETTINGS_SLUG );
				do_settings_sections( MLR_SETTINGS_SLUG );
			?>
			<p class="submit button-group">
				<button
					type="submit"
					class="button button-primary"
					id="mlr-save-settings"
					name="mlr-save-settings"
				>
					<?php echo esc_html__( 'Save', 'wp-media-recovery' ); ?>
				</button>
			</p>
		</form>

		<br clear="all" />

		<hr />

		<div class="fip-support-credits">
			<p>
				<?php
				printf(
					wp_kses(
						/* translators: %1$s is replaced with "Link to WP.org support forums" */
						__( 'If something is not clear, please open a ticket on the official plugin %1$s. All tickets should be addressed within a couple of working days.', 'wp-media-recovery' ),
						json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
					),
					'<a href="' . esc_url( MLR_PLUGIN_WPORG_SUPPORT ) . '" target="_blank">' . esc_html__( 'Support Forum', 'wp-media-recovery' ) . '</a>'
				);
				?>
			</p>
			<p>
				<strong><?php echo esc_html__( 'Please rate us', 'wp-media-recovery' ); ?></strong>
				<a href="<?php echo esc_url( MLR_PLUGIN_WPORG_RATE ); ?>" target="_blank">
					<img src="<?php echo esc_url( MLR_PLUGIN_DIR_URL ); ?>assets/dist/img/rate.png" alt="Rate us @ WordPress.org" />
				</a>
			</p>
			<p>
				<strong><?php echo esc_html__( 'Having issues?', 'wp-media-recovery' ); ?></strong> 
				<a href="<?php echo esc_url( MLR_PLUGIN_WPORG_SUPPORT ); ?>" target="_blank">
					<?php echo esc_html__( 'Create a Support Ticket', 'wp-media-recovery' ); ?>
				</a>
			</p>
			<p>
				<strong><?php echo esc_html__( 'Developed by', 'wp-media-recovery' ); ?></strong>
				<a href="https://krasenslavov.com/" target="_blank">
					<?php echo esc_html__( 'Krasen Slavov @ Developry', 'wp-media-recovery' ); ?>
				</a>
			</p>
		</div>

		<hr />

		<p>
			<small>
				<?php
				printf(
					wp_kses(
						/* translators: %1$s is replaced with "Link to Patreon account for support" */
						__( '* For the price of a cup of coffee per month, you can %1$s in continuing to develop and maintain all of my free WordPress plugins, every little bit helps and is greatly appreciated!', 'wp-media-recovery' ),
						json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
					),
					'<a href="https://patreon.com/krasenslavov" target="_blank">' . esc_html__( 'help and support me on Patreon', 'wp-media-recovery' ) . '</a>'
				);
				?>
			</small>
		</p>
	</div>
</div>
