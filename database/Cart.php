<?php

class Cart
{
  public $db = null;

  public function __construct(DBController $db)
  {
    if(!isset($db->con)) return null;
    $this->db = $db;
  }

  public function insertIntoCartTable($params = null, $table = 'cart')
  {
    if($this->db->con != null){
      if($params != null){
        $columns = implode(',', array_keys($params));
        $values = implode(',', array_values($params));

        $query = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

        $result = $this->db->con->query($query);
        return $result;
      }
    }
  }

  public function addToCart($item_id, $user_id)
  {
    if(isset($item_id) && isset($user_id)){
      $params = array(
        "item_id" => $item_id,
        "user_id" => $user_id
      );

      $result = $this->insertIntoCartTable($params);
      if($result){
        header("Location:".$_SERVER["PHP_SELF"]);
      }
    }
  }

  public function deleteCartProduct($item_id = null, $table = 'cart')
  {
    if($item_id != null){
      $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id = {$item_id}");
      if($result){
        header("Location:".$_SERVER['PHP_SELF']);
        return $result;
      }
    }
  }

  public function getSum($arr)
  { 
    if(isset($arr)){
      $sum = 0;
      foreach ($arr as $item){
        $sum += floatval($item[0]);
      }
      return sprintf('%.2f', $sum);
    }
  }

  public function getCartID($cartArray = null, $key = 'item_id')
  {
    if($cartArray != null){
      $cart_id = array_map(function($value) use ($key){
        return $value[$key];
      }, $cartArray);
      return $cart_id;
    }
  }

  public function saveForLater($item_id = null, $saveTable = 'wishlist', $fromTable = 'cart')
  {
    if($item_id != null){
      $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id={$item_id};";
      $query .= "DELETE FROM {$fromTable} WHERE item_id={$item_id};";
      echo $query;

      $result = $this->db->con->multi_query($query);
      if($result){
        header("Location:".$_SERVER['PHP_SELF']);
      }
      return $result;
    }
  }

}