<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - E-Library</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="Form.css">
  <link rel="stylesheet" href="Nav_Foot.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include 'Navbar.php'; ?>

<div class="container py-5">
  <h2 class="text-center mb-4 text-light">Login Pengguna</h2>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="ProsesLogin.php" method="post" class="p-4 rounded custom-form">
        <div class="mb-4 text-center">
          <h3 class="text-light">Masuk ke Akun</h3>
          <hr class="bg-light mx-auto" style="width: 60px; height: 3px; opacity: 1;">
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <div class="input-group">
            <span class="input-group-text bg-dark text-white"><i class="bi bi-person-fill"></i></span>
            <input type="text" class="form-control" name="username" required>
          </div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <div class="input-group">
            <span class="input-group-text bg-dark text-white"><i class="bi bi-lock-fill"></i></span>
            <input type="password" class="form-control" name="password" required>
          </div>
        </div>
        <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
        <p class="mt-3 text-center">Belum punya akun? <a href="SignUp.php">Daftar di sini</a></p>
      </form> 
    </div>
  </div>
</div>

<?php include 'Footer.php'; ?>
</body>
</html>
