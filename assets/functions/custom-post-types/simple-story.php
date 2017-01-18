<?php

// define custom post type function and properties
	function simple_story_post_type() {

		register_post_type( 'simple_story',

			array(
					
				'labels' => array(

					'name'                  => __( 'Simple Posts' ),
					'singular_name'         => __( 'Simple Post' ),
					'all_items'             => __( 'All Simple Posts' ),
					'add_new'               => __( 'Add New' ),
					'add_new_item'          => __( 'Add New Simple Post' ),
					'edit'             		=> __( 'Edit' ),
					'edit_item'             => __( 'Edit Simple Post' ),
					'new_item'              => __( 'New Simple Post' ),
					'search_items'          => __( 'Search Simple Posts' ),
					'not_found'             => __( 'Not found' ),
					'parent_item_colon'     => ''
				
				),
				
				'public'				=> true,
				'publicly_queryable' 	=> true,
				'exclude_from_search'   => true,
				'show_ui' 				=> true,
				'show_in_nav_menus' 	=> false,
				'show_in_admin_bar' 	=> false,
				'query_var' 			=> true,
				'can_export' 			=> true,
				'rewrite' 				=> array( 'slug' => 'simple_story', 'with_front' => false ),
				'has_archive' 			=> false,
				'capability_type' 		=> 'post',
				'hierarchical' 			=> false,
				'menu_position' 		=> 5,
				'menu_icon'             => 'dashicons-format-aside',
				'taxonomies'            => array( 'category' ),
				'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', ),

			)

		);

	}

	add_action( 'init', 'simple_story_post_type' );

?>