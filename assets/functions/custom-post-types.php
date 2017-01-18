<?php
	
	require_once(get_stylesheet_directory().'/assets/functions/custom-post-types/content-panels.php');
	require_once(get_stylesheet_directory().'/assets/functions/custom-post-types/simple-posts.php');

	// require_once(get_stylesheet_directory().'/assets/functions/custom-post-types/custom-fields.php');

	function custom_post_type_cat_filter($query) {
  if ( !is_admin() && $query->is_main_query() ) {
    if ($query->is_category()) {
      $query->set( 'post_type', array( 'post', 'simple' ) );
    }
  }
}

add_action('pre_get_posts','custom_post_type_cat_filter');

?>