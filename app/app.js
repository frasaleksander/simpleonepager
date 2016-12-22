window.jQuery = window.$ = require('jquery');
require('wowjs');
var Waypoint = require('waypoints/lib/jquery.waypoints.js');
require('./smooth-scroll/smooth-scroll.js');
//require('./wow.init/wow.init.js')(WOW);
console.log(window.WOW);





(function($){

	$(document).ready(function(){
		$('li>ul, li>ol').parent().addClass('has-submenu');
		
	});
})(window.jQuery);

