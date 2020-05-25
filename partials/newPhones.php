<?php shuffle($products); ?>
<!-- New Phones -->
<section id="new-phones">
  <div class="container py-5">
    <h4 class="font-rubik font-20">New Phones</h4>
    <hr>
    <div class="owl-carousel owl-theme">
    <?php foreach($products as $item) { ?>
        <div class="item py-2 bg-light">
          <div class="product font-raleway">
            <a href="#"><img src="<?php echo $item['item_image'] ?? "../assets/images/products/1.png" ?>" alt="Product1" class="img-fluid"></a>
            <div class="text-center">
              <h6><?php echo $item['item_name'] ?? "" ?></h6>
              <div class="rating text-warning font-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">
                <span>$<?php echo $item['item_price'] ?? "0" ?></span>
              </div>
              <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>