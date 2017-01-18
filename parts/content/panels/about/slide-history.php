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
		
		<span class="history-slide-heading">
			
			timeline

		</span>

		<span class="history-slide-text">
			
			visual timeline and content go here

		</span>

	</div>
	<!-- END content panel -->

</div>
<!-- END panel header -->