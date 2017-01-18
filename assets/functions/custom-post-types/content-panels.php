<?php

// define custom post type function and properties
	function content_panel_post_type() {

		$labels = array(
			
			'name'                  => 'Content Panels',
			'singular_name'         => 'Content Panel',
			'menu_name'             => 'Content Panels',
			'name_admin_bar'        => 'Content Panel',
			'archives'              => 'Content Panel Archives',
			'parent_item_colon'     => 'Parent Item:',
			'all_items'             => 'All Content Panels',
			'add_new_item'          => 'Add New Content Panel',
			'add_new'               => 'Add New',
			'new_item'              => 'New Content Panel',
			'edit_item'             => 'Edit Content Panel',
			'update_item'           => 'Update Content Panel',
			'view_item'             => 'View Content Panel',
			'search_items'          => 'Search Content Panels',
			'not_found'             => 'No Content Panels Found',
			'not_found_in_trash'    => 'Not found in Trash',
			'featured_image'        => 'Content Panel Background',
			'set_featured_image'    => 'Set Content Panel Background',
			'remove_featured_image' => 'Remove Content Panel Background',
			'use_featured_image'    => 'Use as Content Panel Background',
			'insert_into_item'      => 'Insert into Content Panel',
			'uploaded_to_this_item' => 'Uploaded to this Content Panel',
			'items_list'            => 'Items list',
			'items_list_navigation' => 'Items list navigation',
			'filter_items_list'     => 'Filter items list',
		
		);
	
		$args = array(

			'label'                 => 'Content Panel',
			'description'           => 'Content panels to populate the full screen homepage layout.',
			'labels'                => $labels,
			'supports'              => array( 'title', 'page-attributes' ),
			'taxonomies'            => array(),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 3,
			'menu_icon'             => 'dashicons-layout',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => false,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		
		);
	
		register_post_type( 'content_panel', $args );

	}

	add_action( 'init', 'content_panel_post_type', 0 );

?>