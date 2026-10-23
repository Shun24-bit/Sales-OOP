<?php
  session_start();

  include "../classes/Products.php";

  $user_obj = new Users;

  $all_users = $user_obj->getAllUsers();

  $product = new Products;

  $product_item = $product->getProduct($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Product</title>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
  <nav class="navbar navbar-expand navbar-light bg-white" style="margin-bottom: 80px">
    <div class="container">
      <a href="dashboard.php" class="navbar-brand"> <i class="fa-solid fa-house"></i> </a>

      <div class="navbar-nav text-center">
        <span class="navbar-text"> Welcome <?= $_SESSION['full_name'] ?> </span>
        <form action="../actions/logout.php">
          <button type="submit" class="text-danger bg-transparent border-0"> <i class="fa-solid fa-user-xmark"></i> </button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container w-50">
    <h2 class="text-warning text-center mb-4"> <i class="fa-regular fa-pen-to-square"></i> Edit Product</h2>

    <form action="../actions/edit-product.php?product_id=<?= $product_item['id']?>" method="post">
      <div class="mb-3">
        <label for="product-name" class="text-secondary form-label">Product Name</label>
        <input type="text" name="product_name" id="product_name" class="form-control" value="<?= $product_item['product_name'] ?>">
      </div>

      <div class="row mb-3">
        <div class="col-6">
          <label for="price" class="form-label text-secondary"></label>
          <div class="input-group">
            <div class="input-group-text">$</div>
            <input type="number" name="price" id="price" class="form-control" step="any" required value="<?= $product_item['price'] ?>">
          </div>
        </div>

        <div class="col-6">
          <label for="quantity" class="form-label text-secondary">Quantity</label>
          <input type="number" name="quantity" id="quantity" class="form-control" value="<?= $product_item['quantity']?>">
        </div>
      </div>

      <button type="submit" class="btn btn-warning w-100" name="btn_edit">Edit</button>
    </form>
  </div>
</body>
</html>