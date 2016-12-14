window.jQuery = window.$ = require('jquery');
var WOW = require('wowjs');
var Waypoint = require('waypoints/lib/jquery.waypoints.js');

(function($){

	$(document).ready(function(){
		$('li>ul, li>ol').parent().addClass('has-submenu');
		
	});
})(window.jQuery);