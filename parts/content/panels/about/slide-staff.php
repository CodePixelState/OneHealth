<?php

	$slide_name    = get_field( 'panel_slide_slug' );

?>

<!-- slide background -->
<div class="slide-background-layers">

	<div class="slide-background background-color"></div>

	<div class="slide-background content-background content-base"></div>

</div>
<!-- END slide background -->

<!-- panel header -->
<div id="<?php echo $slide_name; ?>-header" class="full-width-content">

	<?php

		$slide_title = get_field( 'slide_text_heading' );

	?>

	<!-- content panel -->
	<div id="<?php echo $slide_name; ?>-content" class="half-width-content staff-slide-content">
		
		<span class="staff-slide-heading">
			
			<?php echo $slide_title; ?>

		</span>

		<span class="staff-slide-text">
			
			<?php echo $slide_text; ?>

		</span>

	</div>
	<!-- END content panel -->

	<!-- blocks -->
	<div id="<?php echo $slide_name; ?>-blocks" class="half-width-content staff-slide-content">
		
		<?php

			if ( have_rows( 'slide_content_blocks' ) ) :

				while ( have_rows( 'slide_content_blocks' ) ) : the_row();

				$block_title 		= get_sub_field( 'slide_content_block_title' );
				$block_subheadline	= get_sub_field( 'slide_content_block_subheadline' );
				$block_text 		= get_sub_field( 'slide_content_block_text' );
				$block_image 		= get_sub_field( 'slide_content_block_image' );
				$block_color 		= get_sub_field( 'slide_content_block_background' );
				$block_link_slug 	= get_sub_field( 'slide_content_block_slug' );

				$base_color = $block_color;
				list($r, $g, $b) = sscanf($base_color, "#%02x%02x%02x");

		?>

		<!-- staff block -->
		<div id="<?php echo $block_link_slug; ?>-block" class="staff-slide-block">

			<!-- staff background -->			
			<div class="staff-block-background staff-block-color" style="background-color:rgba(<?php echo "$r, $g, $b,"; ?>1.000);"></div>

			<!-- staff image -->			
			<div class="staff-block-background staff-block-image" style="background-image:<?php echo 'url(' . $block_image['url'] . ');' ?>"></div>

			<!-- staff content -->
			<div class="staff-block-content">

				<span class="staff-name">
					
					<?php echo $block_title; ?>

				</span>

				<span class="staff-title">
					
					<?php echo $block_subheadline; ?>

				</span>

			</div>
			<!-- END staff content -->

		</div>
		<!-- END staff block -->

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