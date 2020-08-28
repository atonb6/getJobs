(function($) {
  "use strict"; // Start of use strict


  $('.hero__slider').not('.slick-initialized').slick({
      arrows: false,
      fade: true,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 3000
  });


  //Match Height
$('.sameheight').matchHeight();

  //Current
  $('.dashboard__menu__list__item').click(function(){
    $('.dashboard__menu__list__item').removeClass('current');
    $(this).addClass('current');
  });


})(jQuery); // End of use strict
