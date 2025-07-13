<?php
session_start();
if (!isset($_SESSION['username'])) {
  echo "<script>alert('Anda harus login terlebih dahulu'); window.location='login.php';</script>";
  exit;
}

if (!isset($_GET['file'])) {
  echo "File tidak ditemukan.";
  exit;
}

$file = basename($_GET['file']);
$path = "Book/PDF/" . $file;

if (file_exists($path)) {
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename=' . basename($path));
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length: ' . filesize($path));
  readfile($path);
  exit;
} else {
  echo "File tidak ditemukan.";
}
?>
