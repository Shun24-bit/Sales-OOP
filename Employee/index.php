<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <style>
    th {
      background-color: black;
      color: white;
      border: solid white 1px;
      width: 250px;
    }
    td {
      border: solid black 1px;
      width: 600px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-5">
      <form action="" method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="John Doe">
        </div>

        <div class="mb-3">
          <label for="civ_status" class="form-label">Civil Status</label>
          <select name="civ_status" id="civ_status" class="form-control">
            <option value="" hidden>Select Civil Status</option>
            <option value="single">Single</option>
            <option value="married">Married</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="position" class="form-label">Position</label>
          <select name="position" id="position" class="form-control">
            <option value="" hidden>Select Positon</option>
            <option value="admin">Admin</option>
            <option value="staff">Staff</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="emp_status" class="form-label">Employment Status</label>
          <select name="emp_status" id="emp_status" class="form-control">
            <option value="" hidden>Select Employment Status</option>
            <option value="contractual">Contractual</option>
            <option value="probationary">Probationary</option>
            <option value="regular">Regular</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="regular_hour" class="form-label">Regular Hours Rendered</label>
          <input type="number" name="regular_hour" id="regular_hour" class="form-control">
        </div>

        <div class="mb-3">
          <label for="overtime" class="form-label">Over Time Hours</label>
          <input type="number" name="overtime" id="overtime" class="form-control">
        </div>

        <button type="submit" name="btn_submit" class="bg-success text-white w-100">Submit</button>
      </form>
      </div>
    
    <div class="col-7">
    <!-- Outout area -->
    <?php
      include "Employee.php";

      if(isset($_POST['btn_submit'])){
        $name             = $_POST['name'];
        $civ_status       = $_POST['civ_status'];
        $position         = $_POST['position'];
        $emp_status       = $_POST['emp_status'];
        $regular_hour     = $_POST['regular_hour'];
        $overtime         = $_POST['overtime'];

        $employee = new employee($name, $civ_status, $position, $emp_status, $regular_hour, $overtime);
      ?>
      <div>
        <table>
          <tr>
            <th class="p-2">Full Name</th>
            <td class="bg-light p-2"> <?= $employee->getName() ?></td>
          </tr>
          <tr>
            <th class="p-2">Civil Status</th>
            <td class="p-2"> <?= $employee->getStatus() ?> </td>
          </tr>
          <tr>
            <th class="p-2">Position</th>
            <td class="bg-light p-2"> <?= $employee->getPosition() ?> </td>
          </tr>
          <tr>
            <th class="p-2">Employment Status</th>
            <td class="p-2"> <?= $employee->getEmpStatus() ?> </td>
          </tr>
          <tr>
            <th class="p-2">Gross Income</th>
            <td class="bg-light p-2"> <?= $employee->getGrossIncome() ?> </td>
          </tr>
          <tr>
            <th class="p-2">Net Income</th>
            <td class="p-2"> <?= $employee->getGrossIncome() - $employee->getDeduction() ?> </td>
          </tr>
        </table>
      </div>

    <?php
      }
    ?>
    </div>
      </div>
   </div>
</body>
</html>