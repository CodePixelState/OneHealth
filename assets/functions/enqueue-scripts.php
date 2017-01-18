<?php

    function site_scripts() {
      
        global $wp_styles;

        // foundation scripts file in the footer
        wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/js/foundation.min.js', array( 'jquery' ), '6.2', true );

        // scripts file in the footer
        wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );

        // Removes WP version of jQuery
        wp_deregister_script( 'jquery' );
        wp_deregister_script( 'wp-embed' );

        // load require.js framework
        wp_enqueue_script( 'requirejs', get_stylesheet_directory_uri() . '/assets/js/lib/require.min.js');

        // set require.js paths for localization
        $app_base = get_stylesheet_directory_uri() . '/assets/js';
        
        wp_localize_script( 'requirejs', 'require', array(

            'baseUrl' => $app_base,
            'deps'    => array( $app_base . '/main.min.js')
        
        ));

        // main stylesheet
        wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

        // comment reply script for threaded comments
        if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
        
            wp_enqueue_script( 'comment-reply' );
        
        }

    }

    add_action('wp_enqueue_scripts', 'site_scripts', 999);

    function custom_admin_stylesheet() {

        wp_register_style( 'admin-css', get_stylesheet_directory_uri() . '/assets/css/admin.css', array(), false, 'all' );
        wp_enqueue_style( 'admin-css' );

        // load custom script
        wp_enqueue_script( 'admin-js', get_stylesheet_directory_uri() . '/assets/js/lib/admin-ui.js', array('jquery'));

    }

    add_action( 'admin_enqueue_scripts', 'custom_admin_stylesheet' );