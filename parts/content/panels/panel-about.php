<?php

	$panel_title = get_field( 'panel_title' );
	$panel_text  = get_field( 'panel_marketing_text' );

?>

<!-- base slide -->
<section id="about-base" class="slide">
	
	<!-- content container re-flow -->
	<div class="slide-base">

		<!-- left content pane -->
		<div class="half-width-content left">
			
			<div class="gradient-overlay base"></div>
			<div class="gradient-overlay dark"></div>

			<!-- text container -->
			<div class="text-container">
				
				<span class="panel-title">
					
					<?php echo $panel_title; ?>

				</span>

				<span class="panel-subhead">
					
					<?php echo $panel_text; ?>

				</span>

				<!-- button -->
				<a class="block-button-link" href="#about/history">
					
					our story
				
				</a>
				<!-- END button -->

			</div>
			<!-- END text container -->

		</div>
		<!-- END left content pane -->

		<!-- right content pane -->
		<div class="half-width-content right">
			
			<?php

				$blocks  = get_field( 'panel_content_blocks' );
				$about = $blocks[0];
				$staff = $blocks[1];
				$works = $blocks[2];

				$about_title = $about['content_block_title'];
				$about_text  = $about['content_block_text'];
				$about_ID    = $about['content_block_slug'];

				$staff_title = $staff['content_block_title'];
				$staff_text  = $staff['content_block_text'];
				$staff_ID 	 = $staff['content_block_slug'];
				$staff_icon  = $staff['content_block_icon'];

				$works_title = $works['content_block_title'];
				$works_text  = $works['content_block_text'];
				$works_ID 	 = $works['content_block_slug'];
				$works_icon  = $works['content_block_icon'];

			?>

			<!-- full width content block -->
			<div id="<?php echo $about_ID; ?>-block" class="half-height-content top">
				
				<!-- title -->
				<span class="content-title">

					<?php echo $about_title; ?>

				</span>
				<!-- END title -->

				<!-- text -->
				<span class="content-text">
					
					<?php echo $about_text; ?>

				</span>
				<!-- END text -->

				<!-- button -->
				<a class="block-button-link" href="#about/action">
					
					watch our video
				
				</a>
				<!-- END button -->

			</div>
			<!-- END full width content block -->

			<!-- 50/50 content block -->
			<div class="half-height-content bottom">

				<!-- staff block -->
				<div id="<?php echo $staff_ID; ?>-block" class="half-width-block left">
					
					<!-- icon -->
					<div class="about-icon-box" style="background-image:<?php echo 'url(' . $staff_icon['url'] . ');' ?>"> 
					</div>
					<!-- END icon -->

					<!-- staff title -->
					<span class="block-title">
						
						<?php echo $staff_title; ?>

					</span>
					<!-- END staff title -->

					<!-- flexbox spacer -->
					<span class="flex-space"></span>
					<!-- END flexbox spacer -->

					<!-- button -->
					<a class="block-button-link" href="#about/staff">
						
						meet our team
					
					</a>
					<!-- END button -->

				</div>
				<!-- END staff block -->
				
				<!-- work block -->
				<div id="<?php echo $works_ID; ?>-block" class="half-width-block right">
					
					<!-- icon -->
					<div class="about-icon-box" style="background-image:<?php echo 'url(' . $works_icon['url'] . ');' ?>"> 
					</div>
					<!-- END icon -->

					<!-- work title -->
					<span class="block-title">

						<?php echo $works_title; ?>

					</span>
					<!-- END work title -->

					<!-- flexbox spacer -->
					<span class="flex-space"></span>
					<!-- END flexbox spacer -->

					<!-- button -->
					<a class="block-button-link" href="#about/projects">
						
						pilot projects
					
					</a>
					<!-- END button -->

				</div>
				<!-- END work block -->

			</div>

		</div>
		<!-- END right content pane -->

	</div>
	<!-- END content container re-flow -->

</section>
<!-- END base slide -->

<?php

	$slide_content = get_field( 'content_panel_slides' );

	if ( $slide_content ) :

		foreach ( $slide_content as $post ) :

		setup_postdata( $post );

		$slide_image   = get_field( 'content_panel_image' );
		$slide_name    = get_field( 'panel_slide_slug' );
		$slide_icon	   = get_field( 'panel_slide_icon' );
		$slide_color   = get_field( 'background_overlay_color' );
		
		$raw_color 	   = $slide_color;
		list($r, $g, $b) = sscanf($raw_color, "#%02x%02x%02x");

?>

<!-- dynamic slide -->
<section id="<?php echo $slide_name; ?>-slide" class="slide fullscreen-slide slide-fx" data-anchor="<?php echo $slide_name; ?>">

	<?php 

		if ( $slide_name == 'staff' ) {

			get_template_part( 'parts/content/panels/about/slide', 'staff' );

		} elseif ( $slide_name == 'projects' ) {

			get_template_part( 'parts/content/panels/about/slide', 'projects' );

		} elseif ( $slide_name == 'action' ) {

			get_template_part( 'parts/content/panels/about/slide', 'action' );

		} elseif ( $slide_name == 'history' ) {

			get_template_part( 'parts/content/panels/about/slide', 'history' );

		} elseif ( $slide_name == 'video' ) {

			get_template_part( 'parts/content/panels/about/slide', 'video' );

		}

	?>

</section>
<!-- END dynamic slide -->

<?php

	endforeach; 

	wp_reset_postdata();

	endif;

?>