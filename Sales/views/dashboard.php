<?php
  session_start();

  include "../classes/Products.php";

  $user_obj = new Users;

  $all_users = $user_obj->getAllUsers();

  $product_obj = new Products;

  $all_products = $product_obj->getAllProducts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
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

  <main class="row justify-content-center gx-0">
    <div class="col-6">
      <div class="row">
        <div class="col-10">
          <h2>Product List</h2>
        </div>
        <div class="col-1">
          <h2><a href="../views/add-product.php"><i class="fa-solid fa-plus text-primary"></i></a></h2>
        </div>
      </div>

      <table class="table table-hover align-middle">
        <thead>
          <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach($all_products as $product){
          ?>
          <tr>
            <td><?= $product['id']?></td>
            <td><?= $product['product_name']?></td>
            <td><?= $product['price']?></td>
            <td><?= $product['quantity']?></td>
            <td>
                <a href="edit-product.php?id=<?= $product['id'] ?>" class="btn btn-outline-warning" title="Edit">
                  <i class="far fa-pen-to-square"></i></a>
                  
                <a href="../actions/delete-product.php?id=<?= $product['id'] ?>" class="btn btn-outline-danger" title="Delete">
                  <i class="far fa-trash-can"></i>
                </a>
            </td>
            <td>
              <a href="buy-product.php" class="btn btn-outline-success" title="Buy"> <i class="fa-solid fa-cash-register"></i> </a>
            </td>
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>


    </div>
  </main>
</body>
</html>