window.jQuery = window.$ = require('jquery');
var WOW = require('wowjs');
console.log(WOW);

(function($){

	$(document).ready(function(){
		$('li>ul, li>ol').parent().addClass('has-submenu');
		
	});
})(window.jQuery);