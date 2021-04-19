-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2021 pada 01.54
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040163`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `perangkat_keras_komputer`
--

CREATE TABLE `perangkat_keras_komputer` (
  `id` int(11) NOT NULL,
  `No` varchar(10) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Descripsion` varchar(150) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perangkat_keras_komputer`
--

INSERT INTO `perangkat_keras_komputer` (`id`, `No`, `Image`, `Descripsion`, `Price`, `Category`, `Pesan`) VALUES
(1, '1', 'download.jpg', 'Barang ini bagus untuk digunakan terutama dalam hal bermain game', 'Rp.4.000.000', 'Monitor Gaming', 'klik jika ingin memesan'),
(2, '2', 'foto.jpg', 'Barang ini cukup bagus dan kuat untuk editing baik itu edit foto maupun video', 'Rp.9.000.000', 'Monitor Editing', 'klik jika ingin memesan'),
(3, '3', 'foto1.jpg', 'Motherboard ini adalah motherboard yang bisa kamu beli jika kamu seorang Gamer', 'Rp.4.500.000', 'Motherboard', 'klik jika ingin memesan'),
(4, '4', 'foto2.jpg', 'Keyboard ini minimalis cocok buat yang tidak suka rgba, dan harganya cukup terjangkau', 'Rp.400.000', 'Keyboard', 'klik jika ingin memesan'),
(5, '5', 'foto3.jpg', 'Speaker ini memiliki suara yang jelas, cocok buat yang tidak suka dengan bass yang terlalu besar', 'Rp.200.000', 'Spiker', 'klik jika ingin memesan'),
(6, '6', 'foto4.png', 'Case ini cocok buat yang anda yang anti-mainstream, dimana bentuknya berbeda dari umumnya case yang berbentuk kotak', 'Rp.3.000.000', 'Case', 'klik jika ingin memesan'),
(7, '7', 'foto5.jpg', 'Prosesor ini adalah proses dengan spek  yang cukup tinggi, cocok buat kamu yang suka editing atau bermain game berat(Game dengan ukuran yang besar)', 'Rp.8.000.000', 'Prosesor', 'klik jika ingin memesan'),
(8, '8', 'foto6.jpg', 'Vga ini adalah vga yang cukup diminati oleh para gamers ataupun pro player untuk bisa memperkuat dan menstabilkan PC mereka', 'Rp.12.000.000', 'Video Graphics Array(VGA)', 'klik jika ingin memesan'),
(9, '9', 'foto7.jpg', 'Headphone ini sangat nyaman ketika diletakan di telingan, dan suaranya pun jernih dan jelas', 'Rp.500.000', 'Headphone', 'klik jika ingin memesan'),
(10, '10', 'foto8.jpg', 'Mouse ini sangat cocok baik anda yang tidak ingin ribet karena mouse ini di lengkapi dengan bluetooth', 'Rp.750.000', 'Mouse', 'klik jika ingin memesan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `perangkat_keras_komputer`
--
ALTER TABLE `perangkat_keras_komputer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `perangkat_keras_komputer`
--
ALTER TABLE `perangkat_keras_komputer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
