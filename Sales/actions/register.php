<?php
  include "../classes/Products.php";

  $user_obj = new Users;

  $user_obj->store($_POST);
?>