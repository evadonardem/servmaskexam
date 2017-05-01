<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
			<?php activate_plugin( 'servmaskexam-plugin/servmaskexam-plugin.php') ?>

			<form action="<?= esc_url( admin_url('admin-post.php') ); ?>" method="post" enctype="multipart/form-data">

				<label>Enter path to the file:</label>
				<input type="file" name="source_filepath" />
				<br><br>

				<label>Enter WordPress site URL:</label>
				<input type="text" name="destination_site" value="<?= (empty($destination_site)) ? home_url() : $destination_site ?>" readonly />
				<br>

				<label>Username:</label>
				<input type="text" name="destination_username" value="<?= $destination_username ?>" />
				<br>

				<label>Password:</label>
				<input type="password" name="destination_password" />
				<br>

				<input type="hidden" name="action" value="servmask_transfer_file_form">
				<button type="submit">Transfer</button>

				<?php if ( filter_input( INPUT_GET, 'authentication' ) === 'failed' ) : ?>
					<span style="color: red;" class="serv-message"><em>* Invalid username and password for WordPress site URL.</em></span>
				<?php endif ?>

				<?php if ( filter_input( INPUT_GET, 'file-transfer' ) === 'success' ) : ?>
					<span style="color: green;" class="serv-message"><em>File transferred successfully.</em></span>
				<?php elseif ( filter_input( INPUT_GET, 'file-transfer' ) === 'failed' ) : ?>
					<span style="color: red;" class="serv-message"><em>File transfer failed.</em></span>
				<?php endif ?>

			</form>

			<script type="text/javascript">
				var $ = jQuery.noConflict();
				$(function() {
					$('form').validate({
			        rules: {
			            'source_filepath': {
			                required: true
			            },
			            'destination_site': {
			                required: true
			            },
									'destination_username': {
			                required: true,
											minlength: 3
			            },
									'destination_password': {
			                required: true,
											minlength: 3
			            }
			        }
			    });
					setTimeout(function() {
						$('span.serv-message').hide();
					}, 3000);
				});
			</script>


		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
