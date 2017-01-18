jQuery(function($) {

// page title class hook
	$('.wrap > h1').addClass('page-title');
	$('.wrap > h2').addClass('page-title');


// custom configuration of admin bar nodes
	$('#wp-admin-bar-my-account > .ab-sub-wrapper').attr('id', 'account-menu');

	$('#wp-admin-bar-my-sites.sites-dropdown > a.ab-item').attr('id', 'sites-dropdown');

	$('#wp-admin-bar-my-sites > .ab-sub-wrapper').attr('id', 'sites-menu');

	$('#wp-admin-bar-my-sites-list .ab-sub-wrapper').addClass('site-sub-menu');

	$('#wp-admin-bar-site-name .ab-sub-wrapper').addClass('no-sub');

	$('#toplevel_page_current-theme').remove();


// insert custom icon in admin menu; hacky-as-fuck method, slated for demolition
	// $('#adminmenu li:nth-child(2)').attr('id', 'homepage-billboard');


// display quick uploader in custom dashboard
	var dashboardHooker   = $('#dashboard-content'),
		activationControl = $('#activate-uploader'),
		mediaUploader 	  = $('#quick-upload');

	$(activationControl).click(function() {

		dashboardHooker.toggleClass('uploader-open');
		mediaUploader.toggleClass('activated');

	});


});