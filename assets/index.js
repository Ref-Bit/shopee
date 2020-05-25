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
  let $deal_price = $("#deal_price")
  
  $qty_up.click(function(e){
    let $qty_input = $(`.qty-input[data-id='${$(this).data("id")}']`)
    let $product_price = $(`.product_price[data-id='${$(this).data("id")}']`)
    
    $.ajax({
      url: "ajax.php",
      type: "POST",
      data: {
        item_id: $(this).data("id")
      },
      success: function(result){
        let obj = JSON.parse(result);
        let item_price = obj[0]['item_price'];
        
        if($qty_input.val() >= 1 && $qty_input.val() <= 9){
          $qty_input.val(function(i, oldVal){
            return ++oldVal;
          })
          $product_price.text(parseInt(item_price * $qty_input.val()).toFixed(2))
  
          let subtotal = parseInt($deal_price.text()) + parseInt(item_price)
          $deal_price.text(subtotal.toFixed(2))
        }
      }
    })
  });

  $qty_down.click(function(e){
    let $qty_input = $(`.qty-input[data-id='${$(this).data("id")}']`)
    let $product_price = $(`.product_price[data-id='${$(this).data("id")}']`)

    $.ajax({
      url: "ajax.php",
      type: "POST",
      data: {
        item_id: $(this).data("id")
      },
      success: function(result){
        let obj = JSON.parse(result);
        let item_price = obj[0]['item_price'];
        
        if($qty_input.val() > 1 && $qty_input.val() <= 10){
          $qty_input.val(function(i, oldVal){
            return --oldVal;
          })
          $product_price.text(parseInt(item_price * $qty_input.val()).toFixed(2))

          let subtotal = parseInt($deal_price.text()) - parseInt(item_price)
          $deal_price.text(subtotal.toFixed(2))
        }
      }
    })
  });

});