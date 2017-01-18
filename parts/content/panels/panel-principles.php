<?php

	$slide_name = get_field( 'panel_slide_slug' );
	$panel_text = get_field( 'panel_marketing_text' );

?>

<!-- base slide -->
<section id="principles-base" class="slide slide-fx">

	<!-- panel header -->
	<div id="principles-header" class="full-width-header">

		<span class="panel-title"><?php the_title(); ?></span>

		<span class="panel-subhead"><?php echo $panel_text; ?></span>

	</div>
	<!-- END panel header -->

	<!-- panel content -->
	<div id="principles-content" class="full-width-content three-column-content">
		
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

		<a href="#<?php echo $slide_name; ?>/<?php echo $block_link_slug; ?>" id="<?php echo $panel_name; ?>" class="content-column three-columns">

			<!-- background layers -->
			<div class="column-background-fx">
				
				<div class="column-background background-color base" style="background-color:rgba(<?php echo "$r, $g, $b,"; ?>0.500);"></div>
			
				<div class="column-background background-color fx" style="background-color:rgba(<?php echo "$r, $g, $b,"; ?>1.000);"></div>

				<div class="column-background background-color gradient" style="background-image:linear-gradient(180deg,rgba(<?php echo "$r, $g, $b,"; ?>0.425) 0%,rgba(<?php echo "$r, $g, $b,"; ?>0.000) 100%);"></div>
				<div class="column-background background-color gradient" style="background-image:linear-gradient(180deg,rgba(<?php echo "$r, $g, $b,"; ?>1.000) 0%,rgba(<?php echo "$r, $g, $b,"; ?>0.000) 50%,rgba(<?php echo "$r, $g, $b,"; ?>0.000) 100%);"></div>

				<div class="column-background background-color hover" style="background-color:<?php echo $block_color; ?>;"></div>

			</div>
			<!-- END background layers -->

			<!-- icon box -->
			<div class="icon-box" style="background-image:<?php echo 'url(' . $block_icon['url'] . ');' ?>background-color:<?php echo $block_color; ?>;">
				


			</div>
			<!-- END icon box -->

			<!-- column header -->
			<span class="column-title">

				<?php echo the_sub_field( 'content_block_title' ); ?>
					
				<span class="column-subhead">

					<?php echo the_sub_field( 'content_block_subheadline' ); ?>
						
				</span>

			</span>
			<!-- END column header -->

			<!-- column text -->
			<span class="column-text">
				
				<?php echo the_sub_field( 'content_block_text' ); ?>

			</span>
			<!-- END column text -->

			<!-- block link -->
			<span class="block-link"></span>
			<!-- END block link -->
			
		</a>

		<?php endwhile; endif; ?>

	</div>
	<!-- END panel content -->

</section>
<!-- END base slide -->

<?php

	$slide_content = get_field( 'content_panel_slides' );

	if ( $slide_content ) :

		foreach ( $slide_content as $post ) :

		setup_postdata( $post );

		$slide_image    = get_field( 'content_panel_image' );
		$slide_name     = get_field( 'panel_slide_slug' );
		$slide_color    = get_field( 'background_overlay_color' );
		$slide_icon     = get_field( 'panel_slide_icon' );
		$slide_subtitle = get_field( 'slide_text_heading' );
		$slide_text     = get_field( 'slide_text_content' );
		$slide_btn 		= get_field( 'slide_button_option' );
		$slide_link 	= get_field( 'slide_button_link' );
		$slide_btn_text = get_field( 'slide_button_text' );
		$slide_accent   = get_field( 'slide_accent_text' );

?>

<!-- dynamic slide -->
<section id="<?php echo $slide_name; ?>-slide" class="slide fullscreen-slide slide-fx" data-anchor="<?php echo $slide_name; ?>">
	
	<!-- background fx -->
	<div class="slide-background-layers">
		
		<div class="slide-background background-image" style="background-image:<?php echo 'url(' . $slide_image['url'] . ');' ?>"></div>

		<div class="slide-background background-color" style="background-color:<?php echo $slide_color; ?>;"></div>

		<div class="slide-background content-background content-base" style="background-color:<?php echo $slide_color; ?>;"></div>

		<div class="slide-background content-background content-fx" style="background-color:<?php echo $slide_color; ?>;"></div>

	</div>
	<!-- END background fx -->

	<!-- content -->
	<div class="slide-content">
		
		<!-- content text -->
		<div class="slide-text-content">
			
			<!-- icon -->
			<img class="slide-content-icon" src="<?php echo $slide_icon['url']; ?>" alt="<?php echo $slide_icon['alt']; ?>" />
			<!-- END icon -->

			<!-- heading -->
			<span class="text-heading">
				
				<?php echo $slide_subtitle; ?>

			</span>
			<!-- END heading -->

			<!-- text -->
			<p>

				<?php echo $slide_text; ?>

			</p>
			<!-- END text -->

			<!-- button -->
			<a class="slide-content-link" href="<?php echo $slide_link; ?>">

				<?php echo $slide_btn_text; ?>

			</a>
			<!-- END button -->

		</div>
		<!-- END content text -->

		<!-- marketing text -->
		<div class="slide-text-accent">
			
			<span class="accent-text">
				
				<?php echo $slide_accent; ?>

			</span>

		</div>
		<!-- END marketing text -->

	</div>
	<!-- END content -->

	<!-- slide label -->
	<span class="slide-label" style="background-color:<?php echo $slide_color; ?>;">
		
		<?php the_title(); ?>

	</span>
	<!-- END slide label -->

</section>
<!-- END dynamic slide -->

<?php

	endforeach; 

	wp_reset_postdata();

	endif;

?>