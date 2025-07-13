<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="navbar navbar-expand-lg custom-navbar navbar-dark">
  <div class="container-fluid d-flex align-items-center">
    <div class="d-flex align-items-center">
      <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand d-flex align-items-center" href="Home.php">
        <img src="image/1.png" alt="Logo" class="logo-img d-inline-block align-text-top rounded">
        E - Library
      </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="Home.php">Home</a></li>
        <li class="nav-item"><a class="nav-link active" href="Gallery.php">Gallery</a></li>
        <li class="nav-item"><a class="nav-link active" href="Contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link active" href="Profil.php">About</a></li>

        <?php if (!isset($_SESSION['username'])): ?>
          <li class="nav-item"><a class="nav-link active" href="SignUp.php">SignUp</a></li>
          <li class="nav-item"><a class="nav-link active" href="Login.php">Login</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link active" href="logout.php">Logout</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
