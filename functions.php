<?php

// theme support options
	require_once(get_template_directory().'/assets/functions/theme-support.php'); 

// WP Head and other cleanup functions
	require_once(get_template_directory().'/assets/functions/cleanup.php'); 

// register scripts and stylesheets
	require_once(get_template_directory().'/assets/functions/enqueue-scripts.php'); 

// register custom menus and menu walkers
	require_once(get_template_directory().'/assets/functions/menu.php'); 

// register widgetized sidebars/widget areas
	require_once(get_template_directory().'/assets/functions/sidebar.php'); 

// make WordPress comments suck less
	require_once(get_template_directory().'/assets/functions/comments.php'); 

// support multiple languages
	require_once(get_template_directory().'/assets/translation/translation.php'); 

// remove 4.2 Emoji support
	require_once(get_template_directory().'/assets/functions/disable-emoji.php');

// configure commercial and/or required plugins
	// require_once(get_stylesheet_directory().'/assets/functions/plugin-configuration.php'); 

// register custom post types and native post taxonomies
	require_once(get_template_directory().'/assets/functions/custom-post-types.php');

// register custom taxonomy
	require_once(get_template_directory().'/assets/functions/taxonomy.php');

// assign custom single post templates to category
	// require_once(get_template_directory().'/assets/functions/single-post-templates.php');

// custom login screen
	// require_once(get_template_directory().'/assets/functions/login.php'); 

// customize the WordPress admin
	require_once(get_template_directory().'/assets/functions/admin.php'); 

?>