# 📚 E-Library Website

Website perpustakaan digital (E-Library) berbasis web, untuk menyimpan, menampilkan, dan mengelola koleksi buku digital.

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
E-Library/   <br>
├── Home.php <br>
├── Home.css <br>
├── Gallery.php <br>
├── Gallery.css <br>
├── KoneksiGallery.php <br>
├── Download.php (Untuk Koneksi dari Tombol Download) <br>
├── Contact.php <br>
├── Contact.css <br>
├── Profil.php <br>
├── Profil.css <br>
├── KoneksiUser.php ( Koneksi ke database dengan file login dan signup) <br>
├── SignUp.php <br>
├── ProsesSign.php <br>
├── Login.php <br>
├── ProsesLogin.php <br>
├── Form.css (css dari login dan signup) <br>
├── Navbar.php <br>
├── Footer.php <br>
├── Nav_Foot.css (css navbar dan footer) <br>
├── Logout.php <br>
├── elibrary.sql (import ke database MySQL) <br>
├── 1.png (Untuk Logo) <br>
└── README.md <br>

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
