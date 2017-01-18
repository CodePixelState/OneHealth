<?php

// custom favicon
	function add_favicon() {
  	
  		$favicon_url = get_stylesheet_directory_uri() . '/assets/img/icons/brand/favicon_admin.ico';
	
		echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';

	}
  
// add favicon to admin 
	add_action('admin_head', 'add_favicon');

// define widgets to disable
	function remove_default_sidebar_widgets() {

		unregister_widget( 'WP_Widget_Calendar' );
		unregister_widget( 'WP_Widget_Pages' );
		unregister_widget( 'WP_Widget_Archives' );
		unregister_widget( 'WP_Widget_Recent_Posts' );
		unregister_widget( 'WP_Widget_Recent_Comments' );
		unregister_widget( 'WP_Widget_RSS' );
		unregister_widget( 'WP_Widget_Tag_Cloud' );
		unregister_widget( 'WP_Widget_Meta' );
		unregister_widget( 'WP_Widget_Search' );
		unregister_widget( 'WP_Widget_Categories' );

	}

// remove default WP sidebar widgets
	add_action( 'widgets_init', 'remove_default_sidebar_widgets' );

// define widgets/metaboxes to disable
	function disable_default_dashboard_widgets() {

	// dashboard widgets
		remove_meta_box('dashboard_right_now', 'dashboard', 'core');
		remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
		remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
		remove_meta_box('dashboard_plugins', 'dashboard', 'core');
		remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
		remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
		remove_meta_box('dashboard_primary', 'dashboard', 'core');
		remove_meta_box('dashboard_secondary', 'dashboard', 'core');
		remove_meta_box('dashboard_activity', 'dashboard', 'core');
		remove_meta_box('rg_forms_dashboard', 'dashboard', 'core');

	// post edit screen
		remove_meta_box('commentsdiv', 'page', 'normal');

	}

// remove default dashboard widgets
	add_action( 'admin_init', 'disable_default_dashboard_widgets' );
	remove_action( 'welcome_panel', 'wp_welcome_panel' );

// define custom dashboard widget
	function custom_dashboard_widgets() {

        wp_add_dashboard_widget(

            'theme-dashboard-default',
            'Health &amp; Human Sciences WordPress Network',
            'central_dashboard_widget'

        );

    }

// load custom dashboard widget
    add_action( 'wp_dashboard_setup', 'custom_dashboard_widgets' );

// configure custom dashboard widgets
    function central_dashboard_widget() {

    	get_template_part( 'parts/admin/dashboard/dashboard', 'default' );

    }

// define custom dashboard homepage
    function hhs_wordpress_dashboard_page() {

    	add_dashboard_page(

    		'Custom Dashboard',
    		'New Dashboard',
    		'read',
    		'new-dashboard',
    		'hhs_wordpress_dashboard_setup'

    	);

    }

// load custom dashboard homepage
    // add_action( 'admin_menu', 'hhs_wordpress_dashboard_page' );

// configure custom dashboard homepage
    function hhs_wordpress_dashboard_setup() {

    	get_template_part( 'parts/admin/dashboard/dashboard', 'custom' );

    }

// define custom toolbar
	function configure_custom_toolbar( $wp_admin_bar ) {

		$wp_admin_bar->remove_node( 'comments' );
		$wp_admin_bar->remove_node( 'wp-logo' );
		$wp_admin_bar->remove_node( 'new-content' );
		$wp_admin_bar->remove_node( 'menu-toggle' );
		$wp_admin_bar->remove_node( 'my-sites' );
		$wp_admin_bar->remove_node( 'site-name' );
		$wp_admin_bar->remove_node( 'updates' );
		// $wp_admin_bar->remove_node( 'logout' );
		$wp_admin_bar->remove_node( 'view' );

		$hhs_title = array(
		
			'id'    => 'hhs-wordpress',
			'title' => '<div class="title-block"><span>Colorado State University</span></div>',
			'parent' => false,
		
		);

		// $update_data = wp_get_update_data();

		// $wp_updates = array(

		// 	'id' 	 => 'updates',
		// 	'title'  => $update_data['counts']['total'],
		// 	'href'   => admin_url( 'update-core.php' ),
		// 	'parent' => false,

		// );

		$site_title = array(
		
			'id'     => 'site-name',
			'title'  => get_bloginfo( 'name' ),
			'href'   => home_url(),
			'parent' => 'top-secondary',
		
		);
		
		$my_sites = array(

			'id' 	 => 'my-sites',
			'title'  => '',
			'href'   => admin_url( 'my-sites.php' ),
			'parent' => 'top-secondary',
			'meta'   => array(

				'class' => 'sites-dropdown'

			),

		);

		$profile_icon = array(

			'id'     => 'edit-profile',
			'parent' => 'user-actions',
			'title'  => '',
			'href'   => admin_url( 'profile.php' ),
			'meta'   => array(

				'class' => 'edit-profile-button'

			),

		);
		
		$logout_icon = array(

			'id'     => 'logout',
			'parent' => 'user-actions',
			'title'  => '',
			'href'   => wp_logout_url(),
			'meta'   => array(

				'class' => 'logout-button'

			),

		);

		$help_icon = array(

			'id'     => 'help-button',
			'title'  => '',
			'parent' => 'top-secondary',

		);

		$view = array(

			'id' 	 => 'view',
			'title'  => 'view',
			'parent' => 'top-secondary',
			'href'   => get_permalink(),

		);

	// custom account node
		$user_id 	  = get_current_user_id();
		$current_user = wp_get_current_user();

		if ( ! $user_id )
			return;

		$proper_avatar = get_avatar( $user_id, 64 ); 
		$wp_my_account = $wp_admin_bar->get_node( 'my-account' );
		$replaceprefix = str_replace( 'Howdy,', '', '' );

		$account_menu = array(

			'id' 	 => 'my-account',
			'parent' => 'top-secondary',
			'title'  => $replaceprefix . $proper_avatar,
			'href'   => admin_url( 'profile.php' ),

		);

	// reset toolbar
		$wp_admin_bar->add_node( $hhs_title );
		// $wp_admin_bar->add_node( $wp_updates );
		// $wp_admin_bar->add_menu( $view );
		$wp_admin_bar->add_node( $site_title );
		// $wp_admin_bar->add_node( $my_sites );
		// $wp_admin_bar->add_node( $help_icon );
		$wp_admin_bar->add_node( $profile_icon );
		$wp_admin_bar->add_node( $logout_icon );
		$wp_admin_bar->add_menu( $account_menu );

	}

// initialize custom toolbar
	add_action( 'admin_bar_menu', 'configure_custom_toolbar', 999 );

// define conditional removal of content editor on specific page templates
	function remove_content_editor() {

		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	
		if( !isset( $post_id ) ) return;

		$template_file = get_post_meta( $post_id, '_wp_page_template', true );

		if ( $template_file === 'templates/homepage.php' ) {

			remove_post_type_support( 'page', 'editor' );
			remove_post_type_support( 'page', 'excerpt' );
			remove_post_type_support( 'page', 'thumbnail' );
	
		}

	}

// remove the content editor
	add_action( 'admin_init', 'remove_content_editor', 1 );

// add custom admin menu item to menu
	add_action( 'admin_menu', 'customize_admin_menu' );

// define custom admin menu item
	function customize_admin_menu() {

		remove_menu_page( 'edit-comments.php' );
		// remove_menu_page( 'tools.php' );

	}

// get content panel order value
	function get_content_panel_order_value( $post_ID ) {

		$content_panel_order = get_field( 'panel_order' );

		if ( $content_panel_order ) {

			$content_panel_order_num = get_field( 'panel_order' );

			return $content_panel_order_num[0];

		}

	}

// add column to edit screen
	function add_content_panel_order_view( $defaults ) {

		$defaults['panel_order_number'] = 'Panel Order';

		return $defaults;

	}

// display content panel order value
	function show_content_panel_order( $column_name, $post_ID ) {

		if ( $column_name == 'panel_order_number' ) {

			$content_panel_order_number = get_field( 'panel_order' );

			// $content_panel_order = get_content_panel_order_value( $post_ID );

			echo '<span>' . $content_panel_order_number . '</span>';

		}

	}

// add column filters + actions
	add_filter( 'manage_content_panel_posts_columns', 'add_content_panel_order_view' );
	add_action( 'manage_content_panel_posts_custom_column', 'show_content_panel_order', 10, 2 );
	// add_action( 'page_row_actions', 'show_content_panel_order', 10, 2 );

?>