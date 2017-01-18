<?php

// Register Custom Taxonomy
	function simple_taxonomy() {

		$labels = array(
		
			'name'                       => 'Simple Posts',
			'singular_name'              => 'Simple Post',
			'menu_name'                  => 'Simple Posts',
			'all_items'                  => 'All Simple Posts',
			'parent_item'                => '',
			'parent_item_colon'          => '',
			'new_item_name'              => 'New Simple Post',
			'add_new_item'               => 'Add New Simple Post',
			'edit_item'                  => 'Edit Simple Post',
			'update_item'                => 'Update Simple Post',
			'view_item'                  => 'View Simple Post',
			'separate_items_with_commas' => '',
			'add_or_remove_items'        => '',
			'choose_from_most_used'      => '',
			'popular_items'              => '',
			'search_items'               => '',
			'not_found'                  => '',
			'no_terms'                   => '',
			'items_list'                 => '',
			'items_list_navigation'      => '',
	
		);
	
		$args = array(
	
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => false,
			'show_tagcloud'              => true,
	
		);
	
		register_taxonomy( 'simple_post', array( 'post', 'simple' ), $args );

	}

	add_action( 'init', 'simple_taxonomy', 0 );

?>