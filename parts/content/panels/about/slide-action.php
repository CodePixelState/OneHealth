<?php

	$slide_name = get_field( 'panel_slide_slug' );
	$panel_text = get_field( 'slide_text_content' );

?>

<!-- slide background -->
<div class="slide-background-layers">

	<div class="slide-background background-color"></div>

</div>
<!-- END slide background -->

<!-- content panel -->
<div id="<?php echo $slide_name; ?>-content">
	
	<!-- video container -->
	<div class="video-container">
		
		<video poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/pixel.gif" id="ohi-video">
			
			<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/OHI_web_final.webm" type="video/webm">
			<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/OHI_web_final.mp4" type="video/mp4">

		</video>

		<!-- video control -->
		<div id="ohi-video-play" class="video-play">
			
			<div class="artwork"></div>

			<!-- content -->
			<div class="video-header">
				
				<span class="panel-title">

					<?php the_title(); ?>
						
				</span>

				<span class="panel-subhead">

					<?php echo $panel_text; ?>
						
				</span>

			</div>
			<!-- END content -->

		</div>
		<!-- END video control -->

	</div>
	<!-- END video container -->

</div>
<!-- END content panel -->