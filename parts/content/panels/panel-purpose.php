<?php

	$panel_text = get_field( 'panel_marketing_text' );

?>

<!-- panel header -->
<div id="purpose-header" class="full-width-header">

	<span class="panel-title">

		<?php the_title(); ?>
			
	</span>

	<span class="panel-subhead">

		<?php echo $panel_text; ?>

	</span>

	<a href="#principles" class="panel-button">
		
		explore our principles

	</a>

</div>
<!-- END panel header -->