<?php
  session_start();
  require '../classes/Products.php';

  $product_obj = new Products;
  $product = $product_obj->getProduct();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product</title>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
  <nav class="navbar navbar-expand navbar-light bg-white" style="margin-bottom: 80px">
    <div class="container">
      <a href="dashboard.php" class="navbar-brand"> <i class="fa-solid fa-house"></i> </a>

      <div class="navbar-nav">
        <span class="navbar-text"> <?= $_SESSION['full_name'] ?> </span>
        <form action="../actions/logout.php">
          <button type="submit" class="text-danger bg-transparent border-0"> <i class="fa-solid fa-user-xmark"></i> </button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container w-25">
    <h1 class="text-primary text-center"> <i class="fa-solid fa-store"></i> Add Product</h1>

    <form action="../actions/add-product.php" method="post">
      
      <label for="product-name" class="form-label text-secondary">Product Name</label>
      <input type="text" name="product_name" id="product_name" class="form-control mb-3" required>

      <div class="row mb-3">
        <div class="col-6">
          <label for="price" class="form-label text-secondary">Price</label>
          <div class="input-group">
            <div class="input-group-text">$</div>
            <input type="number" name="price" id="price"  class="form-control" step="any" required>
          </div>
        </div>

        <div class="col-6">
          <label for="quantity" class="form-label text-secondary">Quantity</label>
          <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>
      </div>

      <button type="submit" class="btn btn-primary text-center w-100" name="btn_add">Add</button>
      
    </form>
  </div>
  
</body>
</html>