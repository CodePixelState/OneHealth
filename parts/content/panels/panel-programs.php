<?php

	$slide_name = get_field( 'panel_slide_slug' );
	$panel_text = get_field( 'panel_marketing_text' );

?>

<!-- base slide -->
<section id="programs-base" class="slide">

	<!-- content container re-flow -->
	<!-- <div class="slide-base"> -->

		<!-- panel header -->
		<div id="programs-header" class="half-width-header">

			<span class="panel-title"><?php the_title(); ?></span>

			<span class="panel-subhead"><?php echo $panel_text; ?></span>

		</div>
		<!-- END panel header -->

		<!-- panel content -->
		<div id="programs-content" class="half-width-content">
			
			<?php

				if ( have_rows( 'panel_content_blocks' ) ) :

					while ( have_rows( 'panel_content_blocks' ) ) : the_row();

					$block_title 		= get_sub_field( 'content_block_title' );
					$block_subheadline	= get_sub_field( 'content_block_subheadline' );
					$block_text 		= get_sub_field( 'content_block_text' );
					$block_style 		= get_sub_field( 'content_block_style' );
					$block_image 		= get_sub_field( 'content_block_image' );
					$block_color 		= get_sub_field( 'content_block_color' );
					$block_icon_option	= get_sub_field( 'content_icon_option' );
					$block_icon			= get_sub_field( 'content_block_icon' );
					$block_link_slug 	= get_sub_field( 'content_block_slug' );

					$base_color = $block_color;
					list($r, $g, $b) = sscanf($base_color, "#%02x%02x%02x");

			?>

			<!-- content column -->
			<a href="#<?php echo $slide_name; ?>/<?php echo $block_link_slug; ?>" id="<?php echo $panel_name; ?>" class="content-column">
				
				<!-- background layers -->
				<div class="column-background-fx">
					
					<div class="column-background background-color base" style="background-color:rgba(<?php echo "$r, $g, $b,"; ?>0.500);"></div>
				
					<div class="column-background background-color fx" style="background-color:rgba(<?php echo "$r, $g, $b,"; ?>1.000);"></div>

					<div class="column-background background-color gradient" style="background-image:linear-gradient(180deg,rgba(<?php echo "$r, $g, $b,"; ?>1.000) 0%,rgba(<?php echo "$r, $g, $b,"; ?>0.325) 50%,rgba(<?php echo "$r, $g, $b,"; ?>0.000) 100%);"></div>

					<div class="column-background background-color hover" style="background-color:<?php echo $block_color; ?>;"></div>

				</div>
				<!-- END background layers -->

				<!-- icon box -->
				<div class="icon-box" style="background-image:<?php echo 'url(' . $block_icon['url'] . ');' ?>">
					


				</div>
				<!-- END icon box -->

				<!-- column header -->
				<span class="column-title">
					
					<?php echo the_sub_field( 'content_block_title' ); ?>

				</span>
				<!-- END column header -->

				<!-- block link -->
				<span class="block-link"></span>
				<!-- END block link -->

			</a>
			<!-- END content column -->

			<?php endwhile; endif; ?>

		</div>
		<!-- END panel content -->

		<!-- panel button -->
		<div class="panel-footer-content">
			
			<a href="#programs/food-systems" class="panel-button">
		
				explore our programs

			</a>

		</div>
		<!-- END panel button -->

	<!-- </div> -->
	<!-- END content container re-flow -->

</section>
<!-- END base slide -->

<?php

	$slide_content = get_field( 'content_panel_slides' );

	if ( $slide_content ) :

		foreach ( $slide_content as $post ) :

		setup_postdata( $post );

		$panel_image   = get_field( 'content_panel_image' );
		$slide_name    = get_field( 'panel_slide_slug' );
		$slide_icon	   = get_field( 'panel_slide_icon' );
		$slide_color   = get_field( 'background_overlay_color' );
		$slide_heading = get_field( 'slide_text_heading' );
		$slide_text    = get_field( 'slide_text_content' );
		$slide_image   = get_field( 'slide_image' );
		
		$raw_color 	   = $slide_color;
		list($r, $g, $b) = sscanf($raw_color, "#%02x%02x%02x");

?>

<!-- dynamic slide -->
<section id="<?php echo $slide_name; ?>-slide" class="slide fullscreen-slide slide-fx" data-anchor="<?php echo $slide_name; ?>">

	<!-- slide background -->
	<div class="slide-background-layers">
		
		<div class="slide-background background-image" style="background-image:<?php echo 'url(' . $panel_image['url'] . ');' ?>"></div>
		
		<div class="slide-background content-background content-base" style="background-color:<?php echo $slide_color; ?>;"></div>

	</div>
	<!-- END slide background -->

	<!-- slide content -->
	<div class="half-width-content program-slide-content">
		
		<!-- tab + icon -->
		<div class="panel-header">

			<!-- icon box -->
			<div class="panel-icon-box" style="background-color:<?php echo $slide_color; ?>;">

				<span class="icon-contrast"></span>

				<span class="panel-icon icon" style="background-image:<?php echo 'url(' . $slide_icon['url'] . ');' ?>;"></span>

			</div>
			<!-- END icon box -->

			<!-- header text -->
			<span class="panel-title" style="background-color:rgba(<?php echo "$r, $g, $b,"; ?>0.55);">

				<?php the_title(); ?>
					
			</span>
			<!-- END header text -->

		</div>
		<!-- END tab + icon -->

		<!-- panel content container -->
		<div class="panel-content">
			
			<!-- background layers -->
			<div class="panel-content-background">
				
				<div class="content-background content-base" style="background-color:<?php echo $slide_color; ?>;"></div>

				<div class="content-background content-fx" style="background-color:<?php echo $slide_color; ?>;"></div>

			</div>
			<!-- END background layers -->

			<!-- text content -->
			<div class="panel-text-content">

				<!-- slide heading -->
				<span class="panel-heading">
				
					<?php echo $slide_heading; ?>
				
				</span>
				<!-- END slide heading -->
				
				<!-- slide text -->
				<span class="panel-text">
				
					<?php echo $slide_text; ?>
				
				</span>
				<!-- END slide text -->

			</div>
			<!-- END text content -->

		</div>
		<!-- END panel content container -->

	</div>
	<!-- END slide content -->

	<!-- slide image -->
	<div id="<?php echo $slide_name; ?>-image-content" class="program-image-content">
		
		<!-- feature image -->
		<div class="panel-feature-image" style="background-image:<?php echo 'url(' . $slide_image['url'] . ');' ?>;">
			&nbsp;

		</div>
		<!-- END feature image -->

	</div>
	<!-- END slide image -->

</section>
<!-- END dynamic slide -->

<?php

	endforeach; 

	wp_reset_postdata();

	endif;

?>