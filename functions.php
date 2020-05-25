<?php 
  require('database/DBController.php');
  require('database/Product.php');
  require('database/Cart.php');
  
  $db = new DBController(); 

  $product = new Product($db);
  $products = $product->getData();


  $cart = new Cart($db);