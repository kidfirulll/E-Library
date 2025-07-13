<?php
session_start();
if (!isset($_SESSION['username'])) {
  echo "<script>alert('Silakan login terlebih dahulu'); window.location='login.php';</script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery Buku - E-Library</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="Nav_Foot.css">
  <link rel="stylesheet" href="Gallery.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include 'Navbar.php'; ?>

<div class="container py-5">
  <h2 class="text-center mb-4">Koleksi Buku Digital</h2>

  <div class="table-responsive">
    <table class="table table-dark table-bordered align-middle table-hover custom-table">
      <thead class="table-primary text-center">
        <tr>
          <th scope="col">Cover</th>
          <th scope="col">Judul</th>
          <th scope="col">Penulis</th>
          <th scope="col">Kategori</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
<?php
include 'KoneksiGallery.php';
$result = $conn->query("SELECT * FROM books");

while ($row = $result->fetch_assoc()):
?>
<tr>
  <td class="text-center">
    <img src="Book/Cover/<?= htmlspecialchars($row['cover']) ?>" class="cover-img" alt="Cover">
  </td>
  <td><?= htmlspecialchars($row['title']) ?></td>
  <td><?= htmlspecialchars($row['author']) ?></td>
  <td><?= htmlspecialchars($row['category']) ?></td>
  <td><?= htmlspecialchars($row['description']) ?></td>
  <td class="text-center">
    <?php if (isset($_SESSION['username'])): ?>
      <a href="Download.php?file=<?= urlencode(basename($row['filepath'])) ?>" class="btn btn-sm btn-success">Download</a>
    <?php else: ?>
      <a href="login.php" class="btn btn-sm btn-secondary">Login dulu</a>
    <?php endif; ?>
  </td>
</tr>
<?php endwhile; ?>

    </table>
  </div>
</div>
<?php include 'Footer.php'; ?>
</body>
</html>
