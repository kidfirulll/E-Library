# 📚 E-Library Website

Website perpustakaan digital (E-Library) berbasis web yang saya buat untuk menyimpan, menampilkan, dan mengelola koleksi buku digital.

## 🧩 Fitur Utama
- Halaman **Home** berisi informasi umum
- **Gallery Buku** dengan tampilan grid dan kategori
- **Login & Signup Form** (terpisah) untuk akses user
- **Contact Page** untuk menampilkan informasi kontak (IG, email, dll)
- Akses gallery penuh & download hanya setelah login
- Desain responsif menggunakan Bootstrap
- Proses form menggunakan PHP dan penyimpanan MySQL

## 🛠️ Teknologi yang Digunakan
- HTML5, CSS3
- Bootstrap 5 (via CDN)
- PHP
- MySQL (untuk login dan akses user)
- GitHub untuk manajemen kode

## 🗂️ Struktur File
E-Library/
├── Home.php
├── Home.css
├── Gallery.php
├── Gallery.css
├── KoneksiGallery.php
├── Download.php (Untuk Koneksi dari Tombol Download)
├── Contact.php
├── Contact.css
├── Profil.php
├── Profil.css
├── KoneksiUser.php ( Koneksi ke database dengan file login dan signup)
├── SignUp.php
├── ProsesSign.php
├── Login.php
├── ProsesLogin.php
├── Form.css (css dari login dan signup)
├── Navbar.php
├── Footer.php
├── Nav_Foot.css (css navbar dan footer)
├── Logout.php
├── elibrary.sql (import ke database MySQL)
├── 1.png (Untuk Logo)
└── README.md

noted : untuk isi dari elibrary.sql kamu bisa menambahkannya secara manual ke dalam database secara langsung bukan melalui website 

## 📌 Cara Menjalankan Secara Lokal
1. Clone atau download repository ini
2. Import database `elibrary.sql` ke MySQL (via phpMyAdmin/XAMPP)
3. Letakkan folder project ke dalam `htdocs` (jika pakai XAMPP)
4. Jalankan `http://localhost/E-Library` di browser
5. Login atau buat akun untuk akses gallery

## 👨‍💻 Author
**Kidfirul Abid Muqodimi** – Mahasiswa Teknik Informatika  
Proyek tugas UAS Web 1 Semester 4

---
:)
