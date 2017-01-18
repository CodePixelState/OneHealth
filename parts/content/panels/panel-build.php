<?php

	$panel_subheadline = get_field( 'panel_subheadline' );

?>

<!-- base slide -->
<section class="slide">

	<!-- panel header -->
	<div id="programs-header" class="half-width-header">

		<span class="panel-title"><?php the_title(); ?></span>

		<span class="panel-subhead"><?php echo $panel_subheadline; ?></span>

	</div>
	<!-- END panel header -->

</section>
<!-- END base slide -->

<?php

	$slide_content = get_field( 'content_panel_slides' );

	if ( $slide_content ) :

		foreach ( $slide_content as $post ) :

		setup_postdata( $post );

?>

<!-- dynamic slide -->
<section class="slide">
	
	<span class="number">
		
		<?php the_title(); ?>

	</span>

</section>
<!-- END dynamic slide -->

<?php

	endforeach; 

	wp_reset_postdata();

	endif;

?>