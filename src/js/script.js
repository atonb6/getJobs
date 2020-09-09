(function ($) {
  "use strict"; // Start of use strict

  $(".hero__slider").not(".slick-initialized").slick({
    arrows: false,
    fade: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
  });

  //Match Height
  $(".sameheight").matchHeight();

  //Current
  $(".dashboard__menu__list__item").click(function () {
    $(".dashboard__menu__list__item").removeClass("current");
    $(this).addClass("current");
  });

  //Tags
  $(".close").click(function () {
    $(this).parent().remove();
  });

/*   $(".hero .select").click(function () {
    $(".chevron").toggleClass("rotate");
  }); */

 //Validate Salary

 var salaryMax = 500000
 var salaryMinus = 350000

/*  $(document).on('input', '#claim', function(){ */
  $(document).on('click', '#btn-claim', function(e){
    e.preventDefault();
  var coins = $("#claim").val();

  if(coins > salaryMax){
    coins = "Sobre el rango";
  }else if(coins < salaryMinus){
    coins = "Bajo el rango";
  }else{
    coins = "Dentro del rango";
  }
  $("#salary").text(coins);
})

})(jQuery); // End of use strict
