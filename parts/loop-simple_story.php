<?php
	
	

?>

<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<!-- article header -->
	<header class="article-header">	
		
		<h1 class="entry-title single-title" itemprop="headline">

			<?php the_title(); ?>
				
		</h1>
		
		<?php get_template_part( 'parts/simple', 'byline' ); ?>
    
    </header>
    <!-- END article header -->
					
	<!-- entry content -->
    <section class="entry-content" itemprop="articleBody">
		
		<?php the_content(); ?>
	
	</section>
	<!-- END entry content -->
					
	<!-- article footer -->	
	<footer class="article-footer">
		
		<?php

			wp_link_pages(

				array(

					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ),
					'after'  => '</div>'

				)

			);

		?>
		
		<p class="tags">

			<?php

				the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', '');

			?>
				
		</p>

	</footer>
	<!-- END article footer -->
													
</article>
<!-- END article -->