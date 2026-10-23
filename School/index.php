<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <div class="container w-50">
    <form action="" method="post">
      <div class="card">
        <div class="card-header">
          <h3 class="text-uppercase text-center">registration</h3>
        </div>
        <div class="card-body">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" id="name" class="form-control mb-3" placeholder="Enter your name">

          <label for="year" class="form-label">Year Level</label>
          <select name="year" id="year" class="form-control mb-3">
            <option value="0">Choose your year level</option>
            <option value="year_1">Year 1</option>
            <option value="year_2">Year 2</option>
            <option value="year_3">Year 3</option>
            <option value="year_4">Year 4</option>
          </select>

          <label for="unit" class="form-label">Total Units</label>
          <input type="number" name="number_unit" id="number_unit" class="form-control mb-3" placeholder="Maximum of 23" min="1" max="23">

          <div class="col text-center mb-3">
            <input type="radio" name="lab" value="with_lab"> <label for="with_lab" class="me-3">With Lab</label>
            <input type="radio" name="lab" value="without_lab"> <label for="without_lab">Without Lab</label>
          </div>

          <button type="submit" class="bg-dark text-white text-center w-100" name="btn_submit">Submit</button>
        </div>
      </div>
    </form>

    <?php
      include "School.php";
      if(isset($_POST['btn_submit'])){
        $name = $_POST['name'];
        $year = $_POST['year'];
        $unit = $_POST['number_unit'];
        $lab = $_POST['lab'];

        $school = new school_unit($name, $year, $unit, $lab);
    ?>
    

    <div class="bg-light">
      <p>Student name: <span class="fw-bold"> <?= $school->getName() ?> </span></p>

      <p>Year level: <span class="fw-bold"> <?= $school->getYear() ?> </span></p>

      <p>No. of units: <span class="fw-bold"> <?= $school->getUnit() ?> </p>

      <p class="fw-bold"> <?= $school->totalPrice() ?> </p>
    </div>

    <?php
      }
    ?>
  </div>
</body>
</html>