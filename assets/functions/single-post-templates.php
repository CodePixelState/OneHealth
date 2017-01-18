<?php

// simple post template
	function wp_simple_post_template( $single_template ) {

		global $post;

		if ( $post->category_name == 'simple-post' ) {

			$single_template = dirname( __FILE__ ) . '/single-simple-post.php';

		}

		return $single_template;

	}

	add_filter( 'single_template', 'wp_simple_post_template' );

?>