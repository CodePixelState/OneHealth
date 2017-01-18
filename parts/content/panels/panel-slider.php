<?php 

	$panel_name = $post->post_name;

	if ( $panel_name == 'principles' ) {

		get_template_part( 'parts/content/panels/panel', 'principles' );

	} elseif ( $panel_name == 'programs' ) {

		get_template_part( 'parts/content/panels/panel', 'programs' );

	} elseif ( $panel_name == 'about' ) {

		get_template_part( 'parts/content/panels/panel', 'about' );

	}

?>