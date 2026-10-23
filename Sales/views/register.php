<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>

  <div class="container w-25">
    <div class="card bg-white">
      <div class="card-header">
        <h1 class="text-danger text-center"> <i class="fa-solid fa-user-plus"></i> Registration</h1>
        <form action="../actions/register.php" method="post">
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-6">
                  <label for="first-name" class="form-label text-secondary">First Name</label>
                  <input type="text" name="first_name" id="first_name" class="form-control">
              </div>
              <div class="col-6">
                  <label for="last-name" class="form-label text-secondary">Last Name</label>
                  <input type="text" name="last_name" id="last_name" class="form-control">
              </div>
            </div>
            
            <label for="username" class="form-label text-secondary">Username</label>
            <input type="text" name="username" id="username" class="form-control mb-3">

            <label for="password" class="form-label text-secondary">Password</label>
            <input type="password" name="password" id="password" class="form-control mb-4">

            <button type="submit" class="btn bg-danger text-white w-100" name="btn_register">Register</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>