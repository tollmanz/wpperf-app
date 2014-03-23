<?php
$wp_config_path = dirname( dirname( __FILE__ ) ) . '/wp-config.php';

if ( file_exists( $wp_config_path ) ) {
	require_once( $wp_config_path );
} else {
	$wp_config_path = dirname( dirname( dirname( __FILE__ ) ) ) . '/wp-config.php';

	if ( file_exists( $wp_config_path ) ) {
		require_once( $wp_config_path );
	}
}