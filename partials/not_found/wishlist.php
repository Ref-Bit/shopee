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
        <div class="row border-top py-3 mt-3">
          <div class="col-sm-12 text-center py-2">    
            <img src="../../assets/images/empty_cart.png" alt="Empty Wishlist" class="img-fluid" style="height:200px;">
            <p class="font-jost font-16 text-black-50">Empty Wishlist</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

