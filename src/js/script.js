(function($) {
  "use strict"; // Start of use strict


  $('.hero__slider').not('.slick-initialized').slick({
      arrows: false,
      fade: true,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 2000
  });


  //Match Height
$('.sameheight').matchHeight();





})(jQuery); // End of use strict
