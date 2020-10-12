(function ($) {
  "use strict"; // Start of use strict

  //LOADER

  $(window).on('load', function(){
    $('.loader').fadeOut("slow");
  });

  $('[data-toggle="tooltip"]').tooltip({
    container: "body",
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

  var salaryMax = 500000;
  var salaryMinus = 350000;

  /*  $(document).on('input', '#claim', function(){ */
  $(document).on("click", "#btn-claim", function (e) {
    e.preventDefault();
    var coins = $("#claim").val();

    if (coins > salaryMax) {
      coins = "Sobre el rango";
    } else if (coins < salaryMinus) {
      coins = "Bajo el rango";
    } else {
      coins = "Dentro del rango";
    }
    $("#salary").text(coins);
  });

  //Share

  $(".share-alt").on("click", function (e) {
    $(".branch").removeClass("no-animation");
    $(".branch").toggleClass("open");
  });

  $(".social").on("click", function (e) {
    $(".container").removeClass("no-animation");
    $(".container").toggleClass("open");
  });

  $(".share").on("click", function (e) {
    $(".float-circle").removeClass("no-animation");
    $(".float-circle").toggleClass("open");
  });

  //Datatables Init

  var table = $("#dashboard__enterprise__published__table__tbl").DataTable({
    language: {
      lengthMenu: "Mostrar _MENU_ registros por página",
      zeroRecords: "No existe nada - disculpa",
      info: "Mostrando página _PAGE_ de _PAGES_",
      infoEmpty: "No existen registros",
      infoFiltered: "(filtrado por _MAX_ del registro)",
      search: "Buscar",
      paginate: {
        next: "Siguiente",
        previous: "Anterior",
      },
      select: {
        rows: "%d filas seleccionadas",
      },
    },
    fixedColumns: {
      leftColumns: 2,
    },
    columnDefs: [
      {
        orderable: false,
        className: "select-checkbox",
        targets: 0,
      },
    ],
    select: {
      style: "multi",
      selector: "td:first-child label",
      rows: {
        _: "Has seleccionado %d filas",
        0: "Haz clic en una fila para seleccionarla",
        1: "Sólo 1 fila seleccionada",
      },
    },
    order: [[1, "asc"]],
  });

  /*   $("#dashboard__enterprise__published__table__tbl").on( 'click', '#removetable', function () {
    table
        .row( $(this).parents('tr') )
        .remove()
        .draw();
} ); */

  /*   $("#dashboard__enterprise__published__table__tbl").on("click",".select_all", function (e) {
        table.rows().select();
  }); */

  //Benefits
  $(".btn.btn--benefits").on("click", function (e) {
    e.preventDefault();

    $(this).toggleClass("checked");
  });

  //mobile Menu home change
  var page = window.location.pathname;

  console.log(page);
  if ( page == '/' || page == '/index.php' || page == '/getJobs/index.php'){
    $(".navbar-toggler-icon").on("click", function (e) {
      e.preventDefault();
      $(".header").toggleClass("open");
    });
  } else {
    $(".navbar-toggler-icon").on("click", function (e) {
      e.preventDefault();
      $(".header").toggleClass("open-intern");
    });
  }

  //Menu arrow

  $(".menu-arrow").on("click", function(e){
    e.preventDefault();
    $(".move").toggleClass('move-in');
    $(".menu-arrow .material-icons").toggleClass('rotate');

  })
})(jQuery); // End of use strict
