<?php
  require_once 'Database.php';

  class Users extends Database{
    public function store($request)
    {
      // $id         = $request['id'];
      $first_name = $request['first_name'];
      $last_name  = $request['last_name'];
      $username   = $request['username'];
      $password   = $request['password'];

      $password = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO users (first_name, last_name, username, password) VALUES ('$first_name', '$last_name', '$username', '$password')";

      if($this->conn->query($sql)){
        header('location: ../views/login.php');
        exit;
      } else {
        die('Error creating the user: ' . $this->conn->error);
      }
    }

    public function login($request)
    {
      $username = $request['username'];
      $password = $request['password'];

      $sql = "SELECT * FROM users WHERE username = '$username'";

      if($result = $this->conn->query($sql)){
        if($result->num_rows === 1){
          $user = $result->fetch_assoc();

          if(password_verify($password, $user['password'])){
            session_start();

            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['full_name'] = $user['first_name'] . " " . $user['last_name'];

            header('location: ../views/dashboard.php');
            exit;
          } else {
            die('Password is incorrect');
          }
        } else {
          die('Username not found.');
        }
      } else {
        die('Error retrieving the user: ' . $this->conn->error);
      }
    }

    public function logout()
    {
      session_start();
      session_unset();
      session_destroy();

      header('location: ../views/login.php');
      exit;
    }

    public function getAllUsers(){
      $sql = "SELECT * FROM users";

      if($result = $this->conn->query($sql)){
        return $result;
      } else {
        die('Error retrieving all users: ' . $this->conn->error);
      }
    }
  } //closing tab for Users



  class Products extends Database{
    public function store($request)
    {
      $product_id   = $request['id'];
      $product_name = $request['product_name'];
      $price        = $request['price'];
      $quantity     = $request['quantity'];

      $sql = "INSERT INTO products (product_name, price, quantity) VALUES ('$product_name', '$price','$quantity')";

      if($this->conn->query($sql)){
        header('location: ../views/dashboard.php');
        exit;
      } else {
        die('Error adding the product: ' . $this->conn->error);
      }
    }

    public function getAllProducts(){
      $sql = "SELECT * FROM products";

      if($result = $this->conn->query($sql)){
        return $result;
      } else {
        die('Error retrieving all products: ' . $this->conn->error);
      }
    }

    public function getProduct($product_id){
      # $id = $_SESSION['id']; # this is the id of the user who is currently logged-in
      # $id = $_GET['id'];

      $sql = "SELECT * FROM products WHERE id = $product_id";

      if($result = $this->conn->query($sql)){
        return $result->fetch_assoc();
      } else {
        die('Error retrieving the product: ' . $this->conn->error);
      }
    }

    public function update($product_id, $product_name, $price, $quantity){
      # session_start();
      
      $sql = "UPDATE products SET product_name = '$product_name', price = '$price', quantity = '$quantity' WHERE id = $product_id";

      if($this->conn->query($sql)){
        header('location: ../views/dashboard.php');
        exit;
      } else {
        die('Error updating the product: ' . $this->conn->error);
      } 
    }

    public function delete($product_id){
      # session_start();
      # $id = $_GET['id'];

      $sql = "DELETE FROM products WHERE id = $product_id";

      if($this->conn->query($sql)){
        header("location: ../views/dashboard.php");
        exit;
      } else {
        die("Error deleting the product: " . $this->conn->error);
      }
    }
  }