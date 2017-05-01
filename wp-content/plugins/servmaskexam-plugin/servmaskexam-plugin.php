<?php
/**
* Plugin Name: ServMask Exam
* Plugin URI: http://localhost/servmaskexam
* Description: ServMask wordpress plugin exam.
* Author: Dave Medrano
* Author URI: http://localhost/servmaskexam
* Version: 1.0
* License: GPLv2
*/

function servmask_transfer_file() {

  // prepare/extract form variables
  extract($_POST); extract($_FILES);

  $redirect = home_url('servmask-file-transfer');

  // check if the specified username and password is valid
  if( ($user = wp_authenticate($destination_username, $destination_password)) instanceof WP_User) {

    // upload the file to the media library to the destination site
    $attachment_id = media_handle_upload( 'source_filepath', 0 );
    if ( is_wp_error( $attachment_id ) ) {
      $redirect = add_query_arg( 'file-transfer', 'failed', $redirect );
    } else {
      wp_update_post( array('ID' => $attachment_id, 'post_author' => $user->id) );
      $redirect = add_query_arg( 'file-transfer', 'success', $redirect );
    }

  } else {
    $redirect = add_query_arg( 'authentication', 'failed', $redirect );
  }

  wp_safe_redirect( $redirect );
  exit;
}
add_action( 'admin_post_nopriv_servmask_transfer_file_form', 'servmask_transfer_file' );
add_action( 'admin_post_servmask_transfer_file_form', 'servmask_transfer_file' );
