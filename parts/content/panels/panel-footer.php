<?php

	// the emptiness

?>

<!-- content container -->
<div id="footer-content" class="full-panel-content row-style">
	
	<!-- top row -->
	<div class="panel-content-row top-row">
		
		<!-- about text -->
		<div id="about-content" class="panel-content-block block-1">
			
			<!-- title -->
			<span class="about-block-title">
				
				about us

			</span>
			<!-- END title -->

			<!-- text -->
			<span class="about-block-text">
				
				The One Health Institute is a unified campus initiative funded through financial support from all eight colleges and the Office of the Vice President of Research.

			</span>
			<!-- END text -->

		</div>
		<!-- END about text -->

		<?php

			$news_query = array(

				'post_type' => array( 'post', 'simple'),
				'category_name' => 'simple-story,news',
				'posts_per_page' => 3,

			);

			$homepage_news = new WP_Query( $news_query );

		?>

		<!-- news feed -->
		<div id="news-feed" class="panel-content-block block-3">
			
			<!-- news feed header -->
			<span class="news-header">
				
				news and updates

			</span>
			<!-- END news feed header -->

			<!-- flex space -->
			<span class="flexor"></span>
			<!-- END flex space -->

			<!-- news feed container -->
			<div class="news-feed-container">

				<?php if ( $homepage_news->have_posts() ) : while ( $homepage_news->have_posts() ) : $homepage_news->the_post(); ?>

				<?php

					$news_type = get_the_category( $post->ID, 'slug' );

					$news_class = $news_type[0]->slug;
// 
					$news_link = get_field( 'news_story_link' );
					$simple_link = get_permalink( $post->ID );

				?>

				<!-- news item link -->
				<?php

					if ( $news_class == 'simple-story' ) {

						echo '<a class="news-item-wrapper ' . $news_class . '" href="' . $simple_link . '">';

					} elseif ( $news_class == 'news' ) {

						echo '<a class="news-item-wrapper ' . $news_class . '" href="' . $news_link . '">';

					}

				?>

					<!-- news item -->
					<div class="news-item">

						<!-- title -->
						<span class="news-title">
							
							<?php the_title(); ?>

						</span>
						<!-- END title -->

						<!-- content -->
						<span class="news-content">
							
							<?php

								the_excerpt();

								// echo $news_class;

							?>

						</span>
						<!-- END content -->

						<!-- button -->
						<span class="news-item-button">
							
							<span class="icon"></span>

						</span>
						<!-- END button -->

					</div>
					<!-- END news item -->

				</a>
				<!-- END news item container-->

				<?php

					endwhile;

					wp_reset_postdata();

					endif;

				?>

			</div>
			<!-- END news feed container -->

		</div>
		<!-- END news feed -->

	</div>
	<!-- END top row -->

	<!-- bottom row -->
	<div class="panel-content-row bottom-row">
		
		<!-- contact header -->
		<div id="contact-header" class="panel-content-block block-1">
			
			<!-- header block -->
			<div class="header-block">
				
				<!-- title -->
				<span class="header-block-title">
					
					get in touch

				</span>
				<!-- END title -->

				<!-- text -->
				<span class="header-block-text">
					
					use this form<br />to drop us a line

				</span>
				<!-- END text -->

			</div>
			<!-- END header block -->

		</div>
		<!-- END contact header -->

		<!-- contact form -->
		<div id="contact-form" class="panel-content-block block-1">
			
			<?php

				gravity_form( 1, $display_title = false, $display_description = false, $ajax = true );

			?>

		</div>
		<!-- END contact form -->

		<div id="contact-info" class="panel-content-block block-1">
			
			<!-- title -->
			<span class="contact-block-title">
				
				contact information

			</span>
			<!-- END title -->

			<!-- text -->
			<span class="contact-block-text">
				
				One Health Institute<br />
				2016 Campus Delivery<br />
				129 Johnson Hall<br />
				Colorado State University<br />
				Fort Collins, Colorado 80523-2016

			</span>
			<!-- END text -->

			<!-- text -->
			<span class="contact-block-text">
				
				<!-- O: (970) 491-4319<br />
				F: (970) 691-3428<br /> -->
				E: onehealth_contact@colostate.edu

			</span>
			<!-- END text -->

			<!-- social media menu -->
			<div id="footer-blocks-social-media">

				<?php onehealth_social_menu(); ?>

			</div>
			<!-- END social media menu -->

		</div>

		<div id="university" class="panel-content-block block-1">
			
			<div class="signature">
				
				<span class="brand-mark">
					
				</span>

			</div>

		</div>

	</div>
	<!-- END bottom row -->

</div>
<!-- END content container -->