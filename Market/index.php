<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fruit</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
  <div class="card w-25 mt-5 mx-auto">
    <div class="card-header">
      <h1 class="text-center">Fruit</h1>
    </div>
    <div class="card-body">
      <form action="" method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Name: </label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="mb-3">
          <label for="price" name="price" class="form-label">Price: </label>
          <input type="number" name="price" id="price" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary w-100" name="btn_submit">Submit</button>
      </form>
    </div>

    <?php
      include "Fruit.php";
      if(isset($_POST['btn_submit'])){
        $name  = $_POST['name'];
        $price = $_POST['price'];

        // Instantiate class
        $fruit = new Fruit($name, $price);
        
        // Set values
        // $fruit->setName($name);
        // $fruit->setPrice($price);
    ?>
      <div class="card-footer">
        <p class="fw-bold">Name: <span class="fw-normal"> <?= $fruit->getName() ?> </span></p>
        <p class="fw-bold">Price: <span class="fw-normal"> <?= $fruit->getprice() ?> </span></p>
      </div>

    <?php
      } 
    ?>
  </div>
</body>
</html>