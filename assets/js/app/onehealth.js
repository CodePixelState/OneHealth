define(function (require) {
    
    var $ = require('jquery'),
    	easing 		= require('easing'),
    	foundation 	= require('foundation'),
    	fullpage 	= require('fullpage'),
    	lazyload 	= require('lazyload'),
    	slick 		= require('slick');	


// setup Velocity JS
	window.jQuery = window.$ = require('jquery');
	require('velocity');
	require('lib/velocity.ui.min');

// page load fx
	// $('.content-reveal').delay(1200).fadeIn(3600, 'easeInOutExpo');
	$('.content-reveal').fadeIn(3600, 'easeInOutExpo');
	// $('.content-reveal.delayed').fadeIn(4800, 'easeInOutExpo');

// menu overlay
	var menuToggle = $('#main-menu-button');
	var fullScreen = $('#fullscreen-container');
	var menuItem   = $('#menu-primary-navigation .menu-item a');

	$(document).ready(function(){

		menuToggle.click(function(){

			fullScreen.toggleClass('render-menu');

		});

		menuItem.click(function(){

			fullScreen.toggleClass('render-menu');

		});

	});

	$(document).foundation();

	var contentPanels = $('#site-content');

	$(document).ready(function() {

		contentPanels.fullpage({ 

			controlArrows 		: true,
			navigation		 	: true,
			navigationPosition  : 'right',
			slidesNavigation 	: true,
			slidesNavPosition 	: 'bottom',

			scrollingSpeed 		: 720,
			easing 				: 'easeInOutExpo',
			verticalCentered 	: false,
			css3 				: false,

			anchors 			: ['home', 'purpose', 'principles', 'programs', 'about', 'events', 'footer'],
			// anchors 			: ['home', 'purpose', 'principles', 'programs', 'about', 'footer'],
			normalScrollElements : '#projects-header',
			normalScrollElementTouchThreshold : 10,

			onLeave : function( home ) {

				$('#scroll-icon').addClass('fadeAway');

			}

		});

		$('#panel-nav').prependTo('#right-toolbar');

		var scrollTip 		 = $('.scroll-tip');
		var scrollPlacement  = $('#home-panel .left-toolbar');

		scrollTip.appendTo(scrollPlacement);

		var principlesNav 	 = $('#principles-panel .fp-slidesNav');
		var principlesArrows = $('#principles-panel .fp-controlArrow');
		var programsNav 	 = $('#programs-panel .fp-slidesNav');
		var programsArrows   = $('#programs-panel .fp-controlArrow');
		var aboutNav 	 	 = $('#about-panel .fp-slidesNav');
		var aboutArrows 	 = $('#about-panel .fp-controlArrow');

		principlesNav.appendTo('#principles-footer');
		principlesArrows.prependTo('#principles-footer');
		programsNav.appendTo('#programs-footer');
		programsArrows.prependTo('#programs-footer');
		aboutNav.appendTo('#about-footer');
		aboutArrows.prependTo('#about-footer');

	});

	var video = document.getElementById('ohi-video');
	videoPlay = document.getElementById('ohi-video-play');

	videoPlay.addEventListener('click', function(){

		$(this).toggleClass('fadePlay');

		if ( video.paused ){

			video.play();

		} else {

			video.pause();

		}

	});

	var video2 = document.getElementById('fop-video');
	videoPlay2 = document.getElementById('fop-video-play');

	videoPlay2.addEventListener('click', function(){

		$(this).toggleClass('fadePlay');

		if ( video2.paused ){

			video2.play();

		} else {

			video2.pause();

		}

	});

});