<?php include 'partials/header.php' ?>
<!-- Cart -->
<section id="cart" class="py-3">
  <div class="container">
    <h5 class="font-jost font-20">Shopping Cart</h5>
    <div class="row">
      <div class="col-sm-9">
      <?php 
        foreach($product->getData("cart") as $item):
          $cart = $product->getItemByID($item['item_id']);
          array_map(function($item){ ?>
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
              <div class="d-flex font-raleway">
                <button class="qty-up border-primary border-bottom-0 border-left-0 border-right-0 bg-light" data-id="prod-1"><i class="fas fa-angle-up"></i></button>
                <input type="text" class="qty-input border-left border-right border-top-0 border-bottom-0 px-2 w-100 bg-light text-center" disabled value="1" data-id="prod-1">
                <button class="qty-down border-primary border-top-0 border-left-0 border-right-0 bg-light" data-id="prod-1"><i class="fas fa-angle-down"></i></button>
              </div>
              <button type="submit" class="btn font-jost text-danger px-3 border-right">Delete</button>
              <button type="submit" class="btn font-jost text-primary">Save for later</button>
            </div>
          </div>
          <div class="col-sm-2 text-right">
            <div class="font-20 text-danger font-jost">
              $<span class="product-price"><?php echo $item['item_price'] ?? '' ?></span>
            </div>
          </div>
        </div>
        <?php  },$cart); endforeach; ?>
      </div>
      <div class="col-sm-3">
        <div class="sub-total border text-center mt-2">
          <h6 class="font-raleway font-12 text-success py-3"><i class="mr-2 fas fa-check"></i>Your order is eligible for Free Delivery.</h6>
          <div class="border-top py-4">
            <h5 class="font-16 font-jost">Subtotal (2 items):&nbsp;<span class="text-danger">$<span id="deal-price" class="text-danger">150.00</span></span></h5>
            <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
          </div>
        </div> 
      </div>
    </div>
  </div>
</section>

<?php
  include 'partials/newPhones.php';
  include 'partials/footer.php';
?>