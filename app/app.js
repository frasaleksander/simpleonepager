window.jQuery = window.$ = require('jquery');

require('./helpers/navigation.js');

window.Waypoint = require('waypoints/lib/jquery.waypoints.js');

window.ScreenSizeObserver = require('fa-screensizeobserver');

require('classlist-polyfill');

require('./smooth-scroll/smooth-scroll.js');

require('./main-menu/main-menu.js');

require('wowjs');



(function($){
	$(document).ready(function(){
		$('li>ul, li>ol').parent().addClass('has-submenu');
	});
})(window.jQuery);

