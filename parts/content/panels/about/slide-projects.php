<?php

	$slide_name = get_field( 'panel_slide_slug' );

?>

<!-- slide background -->
<div class="slide-background-layers">

	<div class="slide-background background-color"></div>

	<div class="slide-background content-background content-base"></div>

</div>
<!-- END slide background -->

<!-- panel header -->
<div id="<?php echo $slide_name; ?>-header" class="full-width-content">

	<!-- content panel -->
	<div id="<?php echo $slide_name; ?>-content" class="half-height-content work-slide-content">
		
		<span class="work-slide-heading">
			
			pilot projects

		</span>

		<span class="work-slide-text">
		

		</span>

	</div>
	<!-- END content panel -->

	<?php

		$projects_text = get_field( 'slide_text_content' );

	?>

	<!-- blocks -->
	<div id="<?php echo $slide_name; ?>-blocks" class="half-height-content work-slide-content">
		
		<!-- title block -->
		<div id="title-block" class="projects-slide-block">
			
			<div class="projects-block-content">

				<span class="work-slide-heading">
				
					pilot projects

				</span>

				<span class="work-slide-text">
					
					<?php echo $projects_text; ?>

				</span>

			</div>

		</div>
		<!-- END title block -->

		<?php

			if ( have_rows( 'slide_content_blocks' ) ) :

				while ( have_rows( 'slide_content_blocks' ) ) : the_row();

				$block_title 		= get_sub_field( 'slide_content_block_title' );
				$block_subheadline	= get_sub_field( 'slide_content_block_subheadline' );
				$block_text 		= get_sub_field( 'slide_content_block_text' );
				$block_image 		= get_sub_field( 'slide_content_block_image' );
				$block_color 		= get_sub_field( 'slide_content_block_background' );
				$block_link_slug 	= get_sub_field( 'slide_content_block_slug' );
				$block_program_area = get_sub_field( 'program_area' );

				$base_color = $block_color;
				list($r, $g, $b) = sscanf($base_color, "#%02x%02x%02x");

				$program_class = $block_program_area;
				$program_label = str_replace( '_', ' ', $program_class );

		?>

		<!-- project block -->
		<div class="projects-slide-block">
			
			<div class="projects-block-content">

				<span class="project-area <?php echo $program_class; ?>">
						
					<?php echo $program_label; ?> + health

				</span>

				<span class="project-name">
						
					<?php echo $block_title; ?>

				</span>

				<!-- flex spacer -->
				<span class="flex-space"></span>
				<!-- END flex spacer -->

				<span class="project-text">
					
					<?php echo $block_text; ?>

				</span>

			</div>

		</div>
		<!-- END project block -->

		<?php endwhile; endif; ?>

	</div>
	<!-- END blocks -->

	<span class="panel-title">

		<?php

			// the_title();

		?>
			
	</span>

	<span class="panel-subhead">

		<?php

			// echo $panel_text;

		?>
		
	</span>

</div>
<!-- END panel header -->