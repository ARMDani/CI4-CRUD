-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2022 pada 14.58
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sukabaca`
--

CREATE TABLE `sukabaca` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sukabaca`
--

INSERT INTO `sukabaca` (`id`, `judul`, `slug`, `penulis`, `penerbit`, `sampul`, `created_at`, `updated_at`) VALUES
(2, 'Belajar Coding', 'belajar-coding', 'Muhammad Mukamil', 'Pti', 'pemrograman2.jpg', NULL, '2022-01-19 23:26:10'),
(10, 'sdgs', 'sdgs', 'dfsagds', 'gadf', 'pemrograman1.jpg', '2022-01-20 09:30:03', '2022-01-20 22:09:36'),
(11, 'Dasar Pemrograman Web PHP-MySQL dengan Dreamweaver', 'dasar-pemrograman-web-php-mysql-dengan-dreamweaver', 'Muhammad Mukamil', 'Pti', 'pemrograman2.jpg', '2022-01-20 19:44:07', '2022-01-20 22:13:52'),
(13, 'coding', 'coding', 'mukalil', 'pti', '', '2022-01-20 21:55:45', '2022-01-20 21:56:38'),
(14, 'coba 3', 'coba-3', 'Muhammad Mukamil', 'fsadfgasi', 'safjasud', '2022-01-20 22:04:45', '2022-01-20 22:04:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sukabaca`
--
ALTER TABLE `sukabaca`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sukabaca`
--
ALTER TABLE `sukabaca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
