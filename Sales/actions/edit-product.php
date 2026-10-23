<?php
  include "../classes/Products.php";

  $product = new Products;

  if(isset($_POST['btn_edit'])){
    $product_id = $_GET['product_id'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    
    $product->update($product_id, $product_name, $price, $quantity);
  }
  
?>