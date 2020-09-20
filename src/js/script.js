(function ($) {
  "use strict"; // Start of use strict

  $('[data-toggle="tooltip"]').tooltip({
    container: 'body'
 });

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

//Share

$('.share-alt').on('click', function(e){
	$(".branch").removeClass("no-animation");
	$('.branch').toggleClass("open");
});

$('.social').on('click', function(e){
	$(".container").removeClass("no-animation");
	$(".container").toggleClass("open");
});

$('.share').on('click', function(e){
	$(".float-circle").removeClass("no-animation");
	$(".float-circle").toggleClass("open");
});

//Datatables Init

$(document).ready(function() {
  $('#dashboard__enterprise__published__table').DataTable( {
      "language": {
          "lengthMenu": "Mostrar _MENU_ registros por página",
          "zeroRecords": "No existe nada - disculpa",
          "info": "Mostrando página _PAGE_ de _PAGES_",
          "infoEmpty": "No existen registros",
          "infoFiltered": "(filtrado por _MAX_ del registro)",
          "search": "Buscar"
      }
  } );
} );


})(jQuery); // End of use strict
