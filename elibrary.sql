-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2025 pada 13.00
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elibrary`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `filepath` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `cover`, `title`, `author`, `category`, `description`, `filepath`) VALUES
(1, 'Alchemist.jpg', 'The Alchemist By Paulo Coelho', 'Paulo Coelho', 'Fiksi', 'Novel inspiratif tentang perjalanan spiritual seorang gembala muda yang mencari harta karun.', 'Book/PDF/The Alchemist By Paulo Coelho.pdf'),
(2, 'The 5 Essential.png', 'The 5 Essential People Skills - Menjadi Pribadi Yang Tegas, Mudah Memahami Orang Lain, Dan Cakap Menyelesaikan Konflik', 'Dale Carnegie Training', 'Pengembangan Diri', 'Buku pengembangan keterampilan interpersonal untuk sukses dalam kehidupan dan pekerjaan.', 'Book/PDF/The 5 Essential People Skills - Menjadi Pribadi Yang Tegas, Mudah Memahami Orang Lain, Dan Cakap Menyelesaikan Konflik.pdf'),
(3, 'The hitler.jpg', 'THE HITLER EFFECT TEKNIK DAN TRIK PROPAGANDA PERSUASI MANIPULASI PIKIRAN DAN HIPNOTIS TERSELUBUNG - PUTU YUDIANTARA BAHASA INDONESIA', 'Putu Yudiantara', 'Psikologi', 'Membahas teknik propaganda, manipulasi pikiran, dan hipnosis berdasarkan studi historis.', 'Book/PDF/THE HITLER EFFECT TEKNIK DAN TRIK PROPAGANDA PERSUASI MANIPULASI PIKIRAN DAN HIPNOTIS TERSELUBUNG - PUTU YUDIANTARA BAHASA INDONESIA.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'kai', '$2y$10$8OtxMJpdYiHnc8vmrEaXEOjc6LS4u6cuTn/XF.CBCJ1s1shO2B/42'),
(2, 'samsul', '$2y$10$bhGGOPNiuGNMWCjdlidFKuWKIPHf4AAxKuKp1mwKpWQNnuequ.fiO'),
(3, 'kidfirul', '$2y$10$q3SR3fvtyyTc3T7QFWdOnuwSKTj9fO/0/lNJzgDZ7n2xtWY53Acdi'),
(4, 'andi', '$2y$10$.wXzNuHOV3zSkTyxCm6BoucjtpRx8mgXRuzAD9JcMRlosI2lyBlJ2'),
(5, 'yaya', '$2y$10$s1lq5P3tHSOigWKgNRLrD.PRwNpAtxd0ifspO0rpAiDHk.4V2LGCi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
