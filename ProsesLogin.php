<?php
session_start();
include 'KoneksiUser.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        echo "<script>alert('Login berhasil!'); window.location='home.php';</script>";
    } else {
        echo "<script>alert('Username atau password salah'); history.back();</script>";
    }
}
?>
