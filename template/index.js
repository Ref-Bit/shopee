$(document).ready(function() {
  /* Banner Carousel */
  $("#banner .owl-carousel").owlCarousel({
    dots: true,
    items: 1,
    loop: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayHoverPause: 3000,
  })

  /* Top Sale Carousel */
  $("#top-sale .owl-carousel").owlCarousel({
    nav: true,
    dots: false,
    items: 1,
    loop: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayHoverPause: 3000,
    responsive:{
      0:{
        items: 1
      },
      600:{
        items: 3
      },
      1000:{
        items: 5
      }
    }
  })

  /* New Phones Carousel */
  $("#new-phones .owl-carousel").owlCarousel({
    nav: false,
    dots: true,
    loop: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayHoverPause: 3000,
    responsive:{
      0:{
        items: 1
      },
      600:{
        items: 3
      },
      1000:{
        items: 5
      }
    }
  })

  /* Blog Carousel */
  $("#blog .owl-carousel").owlCarousel({
    nav: true,
    dots: false,
    loop: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayHoverPause: 3000,
    responsive:{
      0:{
        items: 1
      },
      600:{
        items: 3
      }
    }
  })

  /* Special Price isotope Filter */
  var $grid = $(".grid").isotope({
    itemSelector: '.grid-item',
    layoutMode: 'fitRows'
  })

  $(".button-group").on("click", "button", function(){
    let filterVal = $(this).attr("data-filter")
    $grid.isotope({filter: filterVal});
  })

  /* QTY INC-DEC */
  let $qty_up = $(".qty-up")
  let $qty_down = $(".qty-down")

  $qty_up.click(function(e){
    let $qty_input = $(`.qty-input[data-id='${$(this).data("id")}']`)

    if($qty_input.val() >= 1 && $qty_input.val() <= 9){
      $qty_input.val(function(i, oldVal){
        return ++oldVal;
      })
    }
  });

  $qty_down.click(function(e){
    let $qty_input = $(`.qty-input[data-id='${$(this).data("id")}']`)
    if($qty_input.val() > 1 && $qty_input.val() <= 10){
      $qty_input.val(function(i, oldVal){
        return --oldVal;
      })
    }
  });

});