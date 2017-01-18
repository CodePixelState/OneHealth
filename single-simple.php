<?php get_header(); ?>
			
<!-- post container -->
<div id="post-content">

	<!-- inner content + row -->
	<div id="inner-content">

		<!-- post -->
		<main id="post-main" class="post-block" role="main">

			<!-- left toolbar -->
			<div class="left-toolbar ui-toolbar">
				
				

			</div>
			<!-- END left toolbar -->

			<!-- right toolbar -->
			<div class="right-toolbar ui-toolbar">
				

			</div>
			<!-- END right toolbar -->

			<span class="panel-label">

				<?php the_title(); ?>

			</span>

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'simple' ); ?>
		    	
		    <?php endwhile; endif; ?>
		
		</main>
		<!-- END post -->

		<?php

			// get_sidebar();

		?>

	</div>
	<!-- END inner content + row -->

</div>
<!-- END post container -->

<?php get_footer(); ?>