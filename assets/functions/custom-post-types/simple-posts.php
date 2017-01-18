<?php

// define custom post type function and properties
	function simple_post_type() {

		$labels = array(
			
			'name'                  => 'Simple Posts',
			'singular_name'         => 'Simple Post',
			'menu_name'             => 'Simple Posts',
			'name_admin_bar'        => 'Simple Post',
			'archives'              => 'Simple Post Archives',
			'parent_item_colon'     => 'Parent Item:',
			'all_items'             => 'All Simple Posts',
			'add_new_item'          => 'Add New Simple Post',
			'add_new'               => 'Add New',
			'new_item'              => 'New Simple Post',
			'edit_item'             => 'Edit Simple Post',
			'update_item'           => 'Update Simple Post',
			'view_item'             => 'View Simple Post',
			'search_items'          => 'Search Simple Posts',
			'not_found'             => 'Not found',
			'not_found_in_trash'    => 'Not found in Trash',
			'featured_image'        => 'Featured Image',
			'set_featured_image'    => 'Set featured image',
			'remove_featured_image' => 'Remove featured image',
			'use_featured_image'    => 'Use as featured image',
			'insert_into_item'      => 'Insert into item',
			'uploaded_to_this_item' => 'Uploaded to this Simple Post',
			'items_list'            => 'Items list',
			'items_list_navigation' => 'Items list navigation',
			'filter_items_list'     => 'Filter items list',
		
		);
		
		$args = array(
		
			'label'                 => 'Simple Post',
			'description'           => 'Simple post format for non-feature length content.',
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'page-attributes', ),
			'taxonomies'            => array( 'simple-story', 'category' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 3,
			'menu_icon'             => 'dashicons-format-aside',
			'show_in_admin_bar'     => false,
			'show_in_nav_menus'     => false,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			// 'query_var' 			=> 'simple_story_post',
			'capability_type'       => 'page',
			'rewrite'				=> array( 'slug' => 'simple', 'with_front' => false ),
		
		);
	
		register_post_type( 'simple', $args );

	}

	add_action( 'init', 'simple_post_type', 0 );

?>