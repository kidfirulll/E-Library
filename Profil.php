<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile - E-Library</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="profil.css">
  <link rel="stylesheet" href="Nav_Foot.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php include 'Navbar.php'; ?>

<div class="container py-5">
  <div class="text-center mb-4">
    <h2 class="cinzel-heading text-primary">Tentang E-Library</h2>
    <hr class="bg-light mx-auto" style="width: 80px; height: 3px; opacity: 1;">
  </div>

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-lg custom-profile-card">
        <div class="card-body">
          <h5 class="card-title text-primary">Profil Singkat</h5>
          <p class="card-text">
            <strong>E-Library</strong> adalah platform perpustakaan digital yang dirancang untuk memenuhi tugas UAS Pemrograman Web 1. Website ini menyediakan galeri buku, sistem login sederhana, dan akses pengguna ke file buku digital.
          </p>
          <hr class="bg-light">
          <h6>Pengembang Website</h6>
          <ul>
            <li><strong>Nama:</strong> Kidfirul Abid Muqodimi</li>
            <li><strong>NPM:</strong> 2313020251</li>
            <li><strong>Kelas:</strong> 2D </li>
            <li><strong>Mata Kuliah:</strong> Pemrograman Web 1</li>
          </ul>
          <p class="mt-4">Website ini dibangun menggunakan <strong>HTML, CSS, Bootstrap, dan PHP</strong> murni tanpa CMS.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'Footer.php'; ?>
</body>
</html>
