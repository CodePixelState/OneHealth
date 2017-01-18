<!-- menu background -->
<div class="fullscreen-menu-background left"></div>
<!-- END menu background -->

<!-- menu background -->
<div class="fullscreen-menu-background right"></div>
<!-- END menu background -->

<!-- menu -->
<div id="fullscreen-menu">

	<!-- menu content -->
	<div class="fullscreen-menu-content">

		<!-- menu header -->
		<aside id="menu-sidebar">
			
			<span>

				menu sidebar

			</span>

		</aside>
		<!-- END menu sidebar -->

		<!-- menu header -->
		<header id="menu-header">

			<!-- main menu -->
			<div id="main-menu">

				<?php onehealth_nav_menu(); ?>

			</div>
			<!-- END main menu -->

			<!-- social media menu -->
			<div id="menu-overlay-social-media" class="social-media-menu">

				<?php onehealth_social_menu(); ?>

			</div>
			<!-- END social media menu -->

		</header>
		<!-- END menu header -->

	</div>
	<!-- END menu content -->

</div>
<!-- END menu -->

<!-- menu footer -->
<footer id="menu-footer">
	
	<?php get_template_part( 'parts/layout/layout', 'footer' ); ?>

</footer>
<!-- END menu footer -->