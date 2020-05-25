<?php 
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['delete_wishlist_product'])) $cart->deleteCartProduct($_POST['item_id'], 'wishlist');
    if(isset($_POST['add_to_cart'])) $cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');
  }
?>
<!-- Cart -->
<section id="cart" class="py-3">
  <div class="container">
    <h5 class="font-rubik font-20">Wishlist</h5>
    <div class="row">
      <div class="col-sm-9">
      <?php 
        foreach($product->getData("wishlist") as $item):
          $cart_item = $product->getItemByID($item['item_id']);
          $subTotal[] = array_map(function($item){ 
      ?>
        <div class="row border-top py-3 mt-3">
          <div class="col-sm-2">
            <img src="<?php echo $item['item_image'] ?? '..assets/images/products/1.png' ?>" alt="Product1" class="img-fluid" height="120px">
          </div>
          <div class="col-sm-8">
            <h5 class="font-jost font-20"><?php echo $item['item_name'] ?? '' ?></h5>
            <small>by <?php echo $item['item_name'] ?? 'Brand' ?></small>
            <div class="d-flex">
              <div class="rating text-warning font-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <a href="#"class="font-raleway px-2 font-14">20,430 ratings</a>
            </div>
            <div class="qty d-flex pt-2">
              <form method="POST">
                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 0?>">
                <button type="submit" name="delete_wishlist_product" class="btn font-jost text-danger pl-0 pr-3 border-right">Delete</button>
              </form>
              <form method="POST">
                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 0?>">
                <button type="submit" name="add_to_cart" class="btn font-jost text-primary">Add to Cart</button>
              </form>
            </div>
          </div>
          <div class="col-sm-2 text-right">
            <div class="font-20 text-danger font-jost">
              $<span class="product_price" data-id="<?php echo $item['item_id'] ?? 0; ?>"><?php echo $item['item_price'] ?? '' ?></span>
            </div>
          </div>
        </div>
        <?php
          return $item['item_price']; 
          },$cart_item);
         endforeach;
        ?>
      </div>
    </div>
  </div>
</section>

