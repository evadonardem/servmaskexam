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

				<?php if ( filter_input( INPUT_GET, 'authentication' ) === 'failed' ) : ?>
					<p style="color: red;"><em>* Invalid username and password for WordPress site URL.</em></p>
				<?php endif ?>

				<?php if ( filter_input( INPUT_GET, 'file-transfer' ) === 'success' ) : ?>
					<p style="color: green;"><em>File transferred successfully.</em></p>
				<?php elseif ( filter_input( INPUT_GET, 'file-transfer' ) === 'failed' ) : ?>
					<p style="color: red;"><em>File transfer failed.</em></p>
				<?php endif ?>


				<input type="hidden" name="action" value="servmask_transfer_file_form">
				<button type="submit">Transfer</button><!--more-->

			</form>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
