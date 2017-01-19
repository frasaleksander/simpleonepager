(function($) {
  var header = document.getElementById('navhead');
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - (($(window).width()<768) ? $(navhead).height() : 0)
        }, 500);
        return false;
      }
    }
  });
})(window.jQuery);