<?php

	$panel_name = $post->post_name;

	if ( $panel_name == 'home' ) {

		get_template_part( 'parts/content/panels/panel', 'home' );

	} elseif ( $panel_name == 'purpose' ) {

		get_template_part( 'parts/content/panels/panel', 'purpose' );		

	} elseif ( $panel_name == 'purpose' ) {

		get_template_part( 'parts/content/panels/panel', 'purpose' );		

	// } elseif ( $panel_name == 'about' ) {

		// get_template_part( 'parts/content/panels/panel', 'about' );

	} elseif ( $panel_name == 'events' ) {

		get_template_part( 'parts/content/panels/panel', 'events' );		

	} elseif ( $panel_name == 'footer' ) {

		get_template_part( 'parts/content/panels/panel', 'footer' );		

	}

?>