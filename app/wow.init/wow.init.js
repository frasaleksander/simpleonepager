module.exports = function(WOW) {
	var wow = new WOW({
	boxClass:     'wow',      // default
	animateClass: 'animated', // default
	offset:       120,          // default
	mobile:       true,       // default
	live:         true        // default
	});
	wow.init();
	return wow;
}