<?php
	
// add custom theme support features
	function onehealth_theme_support() {

	// add excerpt box to page edit screen
		add_post_type_support( 'post', 'excerpt' );

	// add WP Thumbnail Support
		add_theme_support( 'post-thumbnails' );

	// default thumbnail size
		set_post_thumbnail_size(125, 125, true);

	// add RSS Support
		add_theme_support('automatic-feed-links');

	// add Support for WP Menus
		add_theme_support( 'menus' );
		
	// add Support for WP Controlled Title Tag
		add_theme_support( 'title-tag' );
		
	// add HTML5 Support
		add_theme_support( 'html5', 
			
			array( 
			
				'comment-list', 
				'comment-form', 
				'search-form', 
			
			)

		);
		
		add_theme_support( 'post-formats',
			
			array(
				'aside',             // title less blurb
				'gallery',           // gallery of images
				'link',              // quick link to other site
				'image',             // an image
				'quote',             // a quick quote
				'status',            // a Facebook like status update
				'video',             // video
				'audio',             // audio
				'chat'               // chat transcript
			)

		); 
		
		$GLOBALS['content_width'] = apply_filters( 'onehealth_theme_support', 1200 );	
		
	}

	add_action( 'after_setup_theme', 'onehealth_theme_support' );

// custom excerpt length
	function custom_excerpt_length( $length ) {

		return 14;

	}

	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// remove read more link
	function remove_read_more( $more ) {

		global $post;

		return '';

	}

	add_filter( 'excerpt_more', 'remove_read_more', 999 );

?>