<?php
  shuffle($products);

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['top_sale_submit'])) $cart->addToCart($_POST['item_id'], $_POST['user_id']);
  }
?>

<!-- Top Sale -->
<section id="top-sale">
  <div class="container py-5">
    <h4 class="font-rubik font-20">Top Sale</h4>
    <hr>
    <div class="owl-carousel owl-theme">
      <?php foreach($products as $item) { ?>
        <div class="item py-2">
          <div class="product font-raleway">
            <a href="<?php printf('%s?id=%s', 'product.php', $item['item_id'])?>"><img src="<?php echo $item['item_image'] ?? "../assets/images/products/1.png" ?>" alt="Product1" class="img-fluid"></a>
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
              <form method="POST">
                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? "1" ?>">
                <input type="hidden" name="user_id" value="1">
                <button type="submit" name="top_sale_submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </form>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>