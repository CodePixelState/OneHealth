<?php

	$panel_title = get_field( 'panel_title' );
	$panel_text  = get_field( 'panel_marketing_text' );

?>

<section id="title-panel" class="panel-content">

	<!-- header text -->
	<header>

		<h2 class="title">One Health</h2>
		<span class="subtitle">Institute</span>

	</header>
	<!-- END header text -->

	<!-- text -->
	<p>
		
		<?php echo $panel_text; ?>

	</p>
	<!-- END text -->

	<!-- button -->
	<a class="homepage-panel-button" href="#purpose">

		<span class="left"></span>

		learn more

		<span class="right"></span>

	</a>
	<!-- END button -->

	<!-- scroll indicator -->
	<div id="scroll-indicator" class="toolbar scroll-tip">
		
		<span id="light-1" class="light"></span>
		<span id="light-2" class="light"></span>
		<span id="light-3" class="light"></span>
		<span id="light-4" class="light"></span>
		<span id="light-5" class="light"></span>
		<span id="light-6" class="light"></span>
		<span id="light-7" class="light"></span>
		<span id="light-8" class="light"></span>

	</div>
	<!-- END scroll indicator -->

	<!-- scroll indicator -->
	<div id="scroll-indicator" class="panel">
		
		<span id="light-1" class="light"></span>
		<span id="light-2" class="light"></span>
		<span id="light-3" class="light"></span>
		<span id="light-4" class="light"></span>
		<span id="light-5" class="light"></span>
		<span id="light-6" class="light"></span>
		<span id="light-7" class="light"></span>
		<span id="light-8" class="light"></span>

	</div>
	<!-- END scroll indicator -->

	<!-- scroll icon -->
	<div id="scroll-icon" class="toolbar scroll-tip">
		
		<svg x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
			
			<path id="mouse" fill="#FFFFFF" d="M32,12c3.9,0,7,3.1,7,7v12c0,3.9-3.1,7-7,7h0c-3.9,0-7-3.1-7-7V19C25,15.1,28.1,12,32,12 L32,12 M32,11.2c-4.3,0-7.8,3.5-7.8,7.7v12c0,4.3,3.5,7.8,7.8,7.8s7.8-3.5,7.8-7.7V19C39.8,14.7,36.3,11.2,32,11.2L32,11.2z"/>

			<path id="wheel" fill="#FFFFFF" d="M32,16.8c0.4,0,0.8,0.3,0.8,0.8v3c0,0.4-0.3,0.8-0.8,0.8c-0.4,0-0.8-0.3-0.8-0.8v-3 C31.2,17.1,31.6,16.8,32,16.8 M32,16c-0.8,0-1.5,0.7-1.5,1.5v3c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5v-3C33.5,16.7,32.8,16,32,16 L32,16z"/>

			<polygon id="arrow" fill="#FFFFFF" points="32,52.5 27.5,48 28,47.5 32,51.5 36,47.5 36.5,48 "/>
		
		</svg>

	</div>
	<!-- END scroll icon -->

</section>