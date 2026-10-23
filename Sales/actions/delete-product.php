<?php

  include "../classes/Products.php";

  $product = new Products;

  $product->delete($_GET['id']);