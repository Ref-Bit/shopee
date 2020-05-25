<?php 
  ob_start();
  include 'partials/header.php';


  count($product->getData('cart')) ? include 'partials/cart.php' : include 'partials/not_found/cart.php';
  count($product->getData('wishlist')) ? include 'partials/wishlist.php' : include 'partials/not_found/wishlist.php';

  include 'partials/newPhones.php';
  include 'partials/footer.php';
