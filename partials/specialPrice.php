<?php
  $brand = array_map(function($pro){return $pro['item_brand'];}, $products);
  $unique = array_unique($brand);
  sort($unique);

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['special_price_submit'])) $cart->addToCart($_POST['item_id'], $_POST['user_id']);
  }
?>

<!-- Special Price -->
<section id="special-price">
  <div class="container">
    <h4 class="font-rubik font-20">Special Price</h4>
    <hr>
    <div class="button-group text-right font-20 font-jost" id="filters">
      <button class="btn is-checked" data-filter="*">All Brands</button>
      <?php array_map(function($brand){
        printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
        }, $unique)
      ?>
    </div>
    <div class="grid">
      <?php array_map(function($item){ ?>
        <div class="grid-item <?php echo $item['item_brand'] ?? 'Brand'; ?> border">
          <div class="item py-2" style="width: 200px;">
            <div class="product font-raleway">
              <a href="<?php printf('%s?id=%s', 'product.php', $item['item_id'])?>"><img src="<?php echo $item['item_image'] ?? "../assets/images/products/1.png" ?>" alt="Product1" class="img-fluid"></a>
              <div class="text-center">
                <h6><?php echo $item['item_name'] ?? '' ?></h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$<?php echo $item['item_price'] ?? 0 ?></span>
                </div>
                <form method="POST">
                  <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? "1" ?>">
                  <input type="hidden" name="user_id" value="1">
                  <button type="submit" name="special_price_submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php }, $products) ?>
    </div>
  </div>
</section>