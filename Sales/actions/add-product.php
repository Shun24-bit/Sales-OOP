<?php
  include "../classes/Products.php";

  $product = new Products;
  $product->store($_POST);
?>