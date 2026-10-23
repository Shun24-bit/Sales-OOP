<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fare Activity</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-3 w-25">
    <form action="" method="post">
      <input type="number" name="age" id="age" class="form-control mb-3" placeholder="Age" min="10" max="80">
      <input type="number" name="distance" id="distance" class="form-control mb-3" placeholder="Distance (km)">
      <button type="submit" class="mb-3 w-100"  name="btn_compute">Compute</button>
    </form>
  

  <?php
   include "Fare.php";
   if(isset($_POST['btn_compute'])){
    $age      = $_POST['age'];
    $distance = $_POST['distance'];

    $fare = new Fare($age, $distance);
  ?>

  <div class="bg-light">
    <p class="fw-bold">Age: <span class="fw-normal"> <?= $fare->getAge() ?> years old</span></p>

    <p class="fw-bold">Distance: <span class="fw-normal"> <?= $fare->getDistance() ?> km</span></p>

    <p class="fw-bold">Fare: <span class="fw-normal"> <?= $fare->computeFare() ?> </span></p>
  </div>

  <?php
  }
  ?>
  </div>
</body>
</html>