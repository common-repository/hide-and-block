/**
* Plugin Name: Hide and Block
* Plugin URI: https://wordtune.de/blog
* Description: Activate the plugin and Dashboard and Admin bar will be hiden for non admins
* Author URI: https://wordtune.de/
* Version:           1.0
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
**/
<?php

add_action( 'wp', function () {
	if ( ! current_user_can( 'manage_options' ) ) {
		show_admin_bar( false );
	}
} );

add_action( 'init', 'blockusers_init' );

function blockusers_init()

{ if ( is_admin() && ! current_user_can( 'administrator' ) && ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) { wp_redirect( home_url() );

exit; } }
add_action( 'wp', function () {
	if ( ! current_user_can( 'manage_options' ) ) {
		show_admin_bar( false );
	}
} );

?>
