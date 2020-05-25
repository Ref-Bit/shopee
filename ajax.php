<?php

require('database/DBController.php');
require('database/Product.php');

$db = new DBController();
$product = new Product($db);

if(isset($_POST['item_id'])){
  $result = $product->getItemByID($_POST['item_id']);

  echo json_encode($result);
}