<?php include 'partials/header.php' ?>
<?php
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['prodcut_add_cart'])) $cart->addToCart($_POST['item_id'], $_POST['user_id']);
  }

  $item_id = $_GET['id'] ?? 1;
  foreach($product->getData() as $item):
    if($item['item_id'] == $item_id):
?> 

<!-- Product -->
<section id="product" class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <img src="<?php echo $item['item_image'] ?? '../assets/images/products/1.png' ?>" alt="<?php echo $item['item_name'] ?? '' ?>" class="img-fluid">
        <div class="form-row pt-4 font-16 font-jost">
          <div class="col">
            <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
          </div>
          <div class="col">
            <form method="POST">
              <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? "1" ?>">
              <input type="hidden" name="user_id" value="1">
              <button type="submit" name="prodcut_add_cart" class="btn btn-warning form-control">Add to cart</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-6 py-5">
        <h5 class="font-jost font-20"><?php echo $item['item_name'] ?? '' ?></h5>
        <small>by <?php echo $item['item_brand'] ?></small>
        <div class="d-flex">
          <div class="rating text-warning font-12">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <a href="#" class="px-2 font-raleway font-14 transition-500">20,534 ratings | 1000+ anwsered questions</a>
        </div>
        <hr class="m-0">
        <table class="my-3">
          <tr class="font-14 font-raleway">
            <td>M.R.P:</td>
            <td><strike>$700.00</strike></td>
          </tr>
          <tr class="font-14 font-raleway">
            <td>Deal Price:</td>
            <td class="font-20 text-danger">$<span><?php echo $item['item_price'] ?? 0 ?></span><small class="text-dark font-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
          </tr>
          <tr class="font-14 font-raleway">
            <td>Saved:</td>
            <td class="font-16 text-danger">$<span>50.00</span></td>
          </tr>
        </table>
        <div id="policy">
          <div class="d-flex">
            <div class="return text-center mr-5">
              <div class="font-20 my-2 color-secondary">
                <span class="fas fa-retweet border p-3 rounded-pill"></span>
              </div>
              <a href="#" class="font-relaway font-12">10 Days <br> Replacement</a>
            </div>
            <div class="return text-center mr-5">
              <div class="font-20 my-2 color-secondary">
                <span class="fas fa-truck border p-3 rounded-pill"></span>
              </div>
              <a href="#" class="font-relaway font-12">Home <br> Delivery</a>
            </div>
            <div class="return text-center mr-5">
              <div class="font-20 my-2 color-secondary">
                <span class="fas fa-check-double border p-3 rounded-pill"></span>
              </div>
              <a href="#" class="font-relaway font-12">1 Year <br> Warrenty</a>
            </div>
          </div>
        </div>
        <hr>
        <div id="order-details" class="font-raleway d-flex flex-column text-dark">
          <small>Delivered by: Mar 29 - Apr 01</small>
          <small>Sold by: <a href="#">Daily Techs</a>(4.5 of 5 | 18,855 ratings)</small>
          <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 401592</small>
        </div>
        <div class="row align-items-center">
          <div class="col-6">
            <div class="color my-3">
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="font-jost">Color:</h6>
                <div class="p-2 bg-color-yellow rounded-circle"><button class="btn font-14"></button></div>
                <div class="p-2 bg-color-primary rounded-circle"><button class="btn font-14"></button></div>
                <div class="p-2 bg-color-secondary rounded-circle"><button class="btn font-14"></button></div>
              </div>
            </div>  
          </div>
          <div class="col-6">
            <div class="qty d-flex">
              <h6  class="font-jost">Qty:</h6>
              <div class="px-4 d-flex font-raleway">
                <button class="qty-up border-primary border-bottom-0 border-left-0 border-right-0 bg-light" data-id="prod-3"><i class="fas fa-angle-up"></i></button>
                <input type="text" class="qty-input border-left border-right border-top-0 border-bottom-0 px-2 w-50 bg-light text-center" disabled value="1" data-id="prod-3">
                <button class="qty-down border-primary border-top-0 border-left-0 border-right-0 bg-light" data-id="prod-3"><i class="fas fa-angle-down"></i></button>
              </div>
            </div>
          </div>
        </div>
        <div class="size my-3">
          <h6 class="font-jost">Size:</h6>
          <div class="d-flex justify-content-between align-items-center w-75">
            <div class="font-rubik border p-2">
              <button class="btn p-0 font-14">4GB RAM</button>
            </div>
            <div class="font-rubik border p-2">
              <button class="btn p-0 font-14">6GB RAM</button>
            </div>
            <div class="font-rubik border p-2">
              <button class="btn p-0 font-14">8GB RAM</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <h6 class="font-rubik">Product Description</h6>
        <hr>
        <p class="font-raleway font-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, mollitia ducimus vel repudiandae molestiae autem reiciendis vero iste, aut consequuntur debitis impedit, ipsum earum ut illum nesciunt. Eius totam dignissimos nemo neque eligendi adipisci dicta blanditiis odio hic! Reprehenderit voluptates optio voluptate quas est quo officia voluptatem. Sit mollitia obcaecati animi provident minima suscipit fuga, harum sequi consectetur consequuntur saepe, distinctio totam facilis, officia eius ratione! Minus molestiae laudantium sed enim illo excepturi obcaecati molestias ut ex eligendi tempore temporibus dolore voluptatibus voluptates, explicabo quam fugiat deserunt sint. Sunt tenetur praesentium delectus quidem nisi neque facere dicta eius quasi non.</p>
        <p class="font-raleway font-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, mollitia ducimus vel repudiandae molestiae autem reiciendis vero iste, aut consequuntur debitis impedit, ipsum earum ut illum nesciunt. Eius totam dignissimos nemo neque eligendi adipisci dicta blanditiis odio hic! Reprehenderit voluptates optio voluptate quas est quo officia voluptatem. Sit mollitia obcaecati animi provident minima suscipit fuga, harum sequi consectetur consequuntur saepe, distinctio totam facilis, officia eius ratione! Minus molestiae laudantium sed enim illo excepturi obcaecati molestias ut ex eligendi tempore temporibus dolore voluptatibus voluptates, explicabo quam fugiat deserunt sint. Sunt tenetur praesentium delectus quidem nisi neque facere dicta eius quasi non.</p>
      </div>
    </div>
  </div>
</section>

<?php endif; endforeach; ?>

<?php
 include 'partials/topSale.php';
 include 'partials/footer.php';
?>