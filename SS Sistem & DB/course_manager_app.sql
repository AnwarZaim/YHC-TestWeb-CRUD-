-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Des 2023 pada 17.59
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course_manager_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kursus`
--

CREATE TABLE `kursus` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `durasi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kursus`
--

INSERT INTO `kursus` (`id`, `judul`, `deskripsi`, `durasi`, `created_at`, `updated_at`) VALUES
(3, 'Kursus Dasar Pemrograman Python', 'Pelajari fondasi pemrograman dengan bahasa Python yang populer. Mulai dari sintaks dasar hingga konsep lanjutan seperti manipulasi data dan pembuatan aplikasi sederhana.', '8 minggu', '2023-12-24 09:37:44', '2023-12-24 09:37:44'),
(4, 'Kursus Pemasaran Digital untuk Pemula', 'emukan strategi pemasaran digital efektif untuk meningkatkan visibilitas dan penjualan produk atau layanan Anda. Mulai dari SEO, media sosial, hingga kampanye iklan online', '6 minggu', '2023-12-24 09:38:03', '2023-12-24 09:38:03'),
(5, 'Kursus Desain Grafis dengan Adobe Illustrator', 'Pelajari keterampilan desain grafis menggunakan Adobe Illustrator. Mulai dari dasar-dasar pembuatan logo, ilustrasi, hingga teknik desain yang canggih.', '10 minggu', '2023-12-24 09:38:26', '2023-12-24 09:38:26'),
(6, 'Kursus Manajemen Proyek Agile', 'Pahami metodologi manajemen proyek Agile dan Scrum. Pelajari cara mengelola proyek secara fleksibel, beradaptasi dengan perubahan, dan memberikan nilai tambah kepada pelanggan.', '5 minggu', '2023-12-24 09:38:44', '2023-12-24 09:38:44'),
(7, 'Kursus Penulisan Kreatif untuk Pemula', 'Temukan teknik-teknik penulisan kreatif, mulai dari pengembangan ide, struktur naratif, hingga pengasahan gaya penulisan. Cocok untuk mereka yang ingin memulai perjalanan menulis.', '7 minggu', '2023-12-24 09:39:04', '2023-12-24 09:39:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `kursus_id` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `embed_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id`, `kursus_id`, `judul`, `deskripsi`, `embed_link`, `created_at`, `updated_at`) VALUES
(10, 3, 'Pengenalan Pemrograman dan Python', 'Memahami konsep dasar pemrograman dan kenapa Python menjadi pilihan yang populer. Pembahasan singkat sejarah dan kegunaan Python', 'www.github.com', '2023-12-24 09:41:42', '2023-12-24 09:41:42'),
(11, 4, 'Pengenalan Pemasaran Digital', 'Pahami konsep dasar pemasaran digital, perubahan tren konsumen, dan bagaimana kehadiran online dapat memengaruhi keberhasilan bisnis. Pelajari pentingnya visibilitas online dan pengenalan brand.', 'www.github.com', '2023-12-24 09:43:45', '2023-12-24 09:43:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kursus`
--
ALTER TABLE `kursus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
