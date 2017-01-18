<?php
/*

	Template Name: Homepage

*/
?>

<?php get_header(); ?>
	
	<?php

		$panel_query = array(

			'post_type' 	 => 'content_panel',
			'post_parent' 	 => '0',
			'posts_per_page' => -1,
			'meta_key'  	 => 'panel_order',
			'orderby'   	 => 'meta_value_num',
			'order' 		 => ASC,

		);

		$content_panels = new WP_Query( $panel_query );

	?>

	<!-- page content -->
	<div id="page-content" class="homepage-content content-reveal">
		
		<!-- site content -->
		<section id="site-content">

			<?php

				while ( $content_panels->have_posts() ) : $content_panels->the_post();

				$panel_order = get_field( 'panel_order' );
				$panel_style = get_field( 'background_style' );
				$panel_image = get_field( 'content_panel_image' );
				$panel_color = get_field( 'content_panel_color' );
				$panel_type  = get_field( 'panel_type' );
				$panel_name  = $post->post_name;
				$panel_label = get_field( 'panel_label' );

			?>

				<!-- dynamic panels -->
				<article id="<?php echo $panel_name; ?>-panel" class="section fp-auto-height section-panel" style="<?php if ( $panel_style == 'image' ) { echo 'background-image:url(' . $panel_image['url'] . ');'; } elseif ( $panel_style == 'color' ) { echo 'background-color:' . $panel_color . ';'; } ?>" data-anchor="<?php echo $panel_name; ?>">
					
					<!-- left toolbar -->
					<div class="left-toolbar ui-toolbar">
						


					</div>
					<!-- END left toolbar -->

					<!-- right toolbar -->
					<div class="right-toolbar ui-toolbar">
						

					</div>
					<!-- END right toolbar -->

					<span class="panel-label">

						<?php echo $panel_label; ?>

					</span>

					<div class="panel-content-container">

						<?php

							if ( $panel_type == 'single_panel' ) {

								get_template_part( 'parts/content/panels/panel', 'single' );

							} elseif ( $panel_type == 'slider_panel' ) {

								get_template_part( 'parts/content/panels/panel', 'slider' );

							}

						?>

					</div>

					<!-- slide footer -->
					<footer id="<?php echo $panel_name; ?>-footer" class="panel-footer">

						<?php

							if ( $panel_name == 'footer' ) {

								// get_template_part( 'parts/layout/layout', 'footer' );

							}

						?>

					</footer>
					<!-- END slide footer -->

				</article>
				<!-- END dynamic panels -->

			<?php endwhile; ?>

		</section>
		<!-- END site content -->

	</div>
	<!-- END page content -->

<?php get_footer(); ?>