<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="Nav_Foot.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<?php include 'Navbar.php'; ?>

<div class="hero-section text-center text-light d-flex flex-column justify-content-center align-items-center">
  <h1 class="display-4">Selamat Datang di <span class="text-primary">E-Library</span></h1>
  <p class="lead mb-4">Platform Perpustakaan Digital Mahasiswa TI</p>
  <div>
    <a href="gallery.php" class="btn btn-primary me-2">Lihat Koleksi</a>
    <a href="signup.php" class="btn btn-outline-light">Daftar Sekarang</a>
  </div>
</div>

<div class="container py-5 text-light">
  <h3 class="text-center mb-4">Mengapa Memilih E-Library?</h3>
  <div class="row text-center">
    <div class="col-md-4 mb-4">
      <div class="p-3 bg-dark rounded shadow-sm">
        <i class="bi bi-journal-text fs-2 text-primary"></i>
        <h5 class="mt-3">Akses Mudah</h5>
        <p>Baca buku kapan saja dan di mana saja tanpa ribet.</p>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="p-3 bg-dark rounded shadow-sm">
        <i class="bi bi-person-lock fs-2 text-primary"></i>
        <h5 class="mt-3">Login User</h5>
        <p>Fitur login untuk akses koleksi khusus pengguna terdaftar.</p>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="p-3 bg-dark rounded shadow-sm">
        <i class="bi bi-book-half fs-2 text-primary"></i>
        <h5 class="mt-3">Koleksi Lengkap</h5>
        <p>Tersedia berbagai buku pengembangan diri, sejarah, dan lainnya.</p>
      </div>
    </div>
  </div>
</div>


<?php include 'Footer.php'; ?>
</body>
</html>
