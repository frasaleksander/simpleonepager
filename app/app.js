window.jQuery = window.$ = require('jquery');

window.Waypoint = require('waypoints/lib/jquery.waypoints.js');

window.ScreenSizeObserver = require('fa-screensizeobserver');

require('./smooth-scroll/smooth-scroll.js');

require('./main-menu/main-menu.js');

require('wowjs');



(function($){
	$(document).ready(function(){
		$('li>ul, li>ol').parent().addClass('has-submenu');
	});
})(window.jQuery);

