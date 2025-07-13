<?php include 'Navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tentang & Kontak - E-Library</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="Nav_Foot.css">
  <link rel="stylesheet" href="Contact.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>

<div class="container py-5 text-light">
  <!-- Tentang -->
  <div class="text-center mb-5">
    <h2 class="text-primary mb-3">Tentang E-Library</h2>
    <p class="text-primary fs-5">
      Website E-Library ini merupakan proyek UAS Pemrograman Web I yang bertujuan menyediakan layanan perpustakaan digital sederhana.
      Website dibuat menggunakan HTML, CSS (Bootstrap), dan PHP (tanpa CMS), serta menampilkan fitur login, registrasi, akses buku, dan navigasi antar halaman.
    </p>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="contact-card bg-dark p-4 rounded text-light shadow">
        <h4 class="text-center mb-4">Kontak Kami</h4>
        <p><i class="bi bi-envelope-fill"></i> Email: 
          <a href="mailto:elibrary@example.com" class="text-decoration-none text-info">elibrary@example.com</a>
        </p>
        <p><i class="bi bi-instagram"></i> Instagram: 
          <a href="https://instagram.com/elibrary.id" class="text-decoration-none text-info" target="_blank">@elibrary.id</a>
        </p>
        <p><i class="bi bi-geo-alt-fill"></i> Alamat: Kampus Merdeka, Indonesia</p>
        <p><i class="bi bi-globe"></i> Website: 
          <a href="#" class="text-decoration-none text-info">www.elibrary.id</a>
        </p>
      </div>
    </div>
  </div>
</div>

<?php include 'Footer.php'; ?>
</body>
</html>
