<!doctype html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
		
		<meta charset="utf-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<meta class="foundation-mq">
	
			
		<!-- icons + favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apps/apple_touch_icon_144.png" rel="apple-touch-icon" />

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	    <?php wp_head(); ?>

		<!-- Google Analytics -->
		
		<!-- END Google Analytics -->

	</head>
		
	<body <?php body_class(); ?>>

		<!-- off canvas wrapper -->
		<div id="fullscreen-container" class="off-canvas-wrapper" role="main">
			
			<!-- off canvas wrapper inner -->
			<div id="fullscreen-content" class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				
				<!-- off canvas content -->
				<div id="page-content-container" class="off-canvas-content" data-off-canvas-content>
					
					<?php get_template_part( 'parts/menus/menu', 'overlay' ); ?>

					<!-- site header -->
					<header id="site-header" class="header ui-frame" role="banner">
							
						 <?php get_template_part( 'parts/layout/layout', 'header' ); ?>
		 	
					</header>
					<!-- END site header -->