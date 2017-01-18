requirejs.config({

    // baseUrl: 'js/lib',
    paths: {      
        modernizr   : './lib/modernizr.min',
        app         : 'app',
        jquery      : './lib/jquery.min',
        velocity    : './lib/velocity.min',
        velocityUI  : './lib/velocity.ui.min',
        easing      : './lib/jquery.easing.min',
        foundation  : './lib/foundation.min',
        fullpage    : './lib/fullpage.min',
        lazyload    : './lib/lazyload.min',
        slick       : './lib/slick.min'
    },
    shim: {
    	velocity: {
    		deps: ['jquery']
    	},
    	velocityUI: {
    		deps: ['jquery']
    	},
    	easing: {
    	  	deps: ['jquery']
    	},
        foundation: {
            deps: ['jquery']
        },
        fullpage: {
            deps: ['jquery']
        },
        lazyload: {
            deps: ['jquery']
        },
        slick: {
            deps: ['jquery']
        }
    }
});