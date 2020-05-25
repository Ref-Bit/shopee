<?php 
  shuffle($products);

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['new_phones_submit'])) $cart->addToCart($_POST['item_id'], $_POST['user_id']);
  }
?>
<!-- New Phones -->
<section id="new-phones">
  <div class="container py-5">
    <h4 class="font-rubik font-20">New Phones</h4>
    <hr>
    <div class="owl-carousel owl-theme">
    <?php foreach($products as $item) { ?>
        <div class="item py-2 bg-light">
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
                <?= 
                  in_array($item['item_id'], $cart->getCartID($product->getData('cart')) ?? [] )
                   ? '<button type="submit" name="new_phones_submit" class="btn btn-light rounded-0 font-12 font-weight-bold" disabled>In Cart <i class="fas fa-check"></i></button>'
                    
                   : '<button type="submit" name="new_phones_submit" class="btn btn-warning rounded-0 font-12 font-weight-bold">Add to cart</button>'
                ?>
              </form>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>