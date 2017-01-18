<?php
	
	// ACF options + configuration
	add_filter('acf/settings/path', 'my_acf_settings_path');
 
	function my_acf_settings_path( $path ) {
	 
	    $path = get_stylesheet_directory() . '/includes/acf/';
	    
	    return $path;
	    
	}

	add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
	function my_acf_settings_dir( $dir ) {
	 
	    $dir = get_stylesheet_directory_uri() . '/includes/acf/';
	    
	    return $dir;
	    
	}

	// ACF options + configuration
	// add_filter('acf/settings/show_admin', '__return_false');

	// include_once( get_stylesheet_directory() . '/includes/acf/acf.php' );

	// add custom theme options
	// require_once(get_stylesheet_directory().'/assets/functions/custom-post-types/theme-options.php'); 

?>