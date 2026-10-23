<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
  <div class="container w-25">
    <h1 class="text-primary text-center mb-3"> Login <i class="fa-solid fa-right-to-bracket"></i></h1>

    <form action="../actions/login.php" method="post">
      <div class="row mb-3">
        <div class="col-2">
          <label for="username" class="text-secondary form-label">Username</label>
        </div>
        <div class="col-10">
          <input type="text" name="username" id="username" class="form-control ms-1" placeholder="Username">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-2">
          <label for="password" class="text-secondary form-label">Password</label>
        </div>
        <div class="col-10">
          <input type="password" name="password" id="password" class="form-control ms-1" placeholder="Password">
        </div>
      </div>

      <div class="text-center">
        <button type="submit" class="btn text-white bg-primary w-100 mb-4" name="btn_login">Login</button>
      </div>

      <div class="text-center">
        <a href="register.php" class="btn text-white bg-danger w-50 p-0 text-center">Create an Account</a>
      </div>
      

    </form>
  </div>
  
</body>
</html>