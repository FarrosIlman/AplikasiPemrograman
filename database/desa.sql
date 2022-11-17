-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2022 pada 09.45
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(6) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `umur` int(3) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `notelp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `nama`, `umur`, `desa`, `notelp`) VALUES
(1, 'Reza Pertamax', 21, 'Pulogado', '819035445'),
(2, 'Jhonatan Lind', 19, 'Ampela', '856854755'),
(3, 'Hendrawan', 22, 'Pulogado', '819058645'),
(4, 'Indrawati', 21, 'Bugangan', '856985482'),
(5, 'Priska Leonard', 18, 'Poncol', '893154524'),
(6, 'Jaehyunio', 24, 'Cirawitan', '855685458'),
(7, 'Adele Sinta', 19, 'Ampela', '8596545856'),
(8, 'Cintia Sarisa', 23, 'Samborejo', '8776585845'),
(9, 'Riski', 26, 'Wuled', '855632521'),
(10, 'santi Persa', 18, 'Domiyang', '819568445'),
(11, 'Dimas Julio', 20, 'Wonoyoso', '877595865'),
(12, 'Larisa Bella', 20, 'Buaran', '855669365'),
(13, 'Rahayu Purwanti', 19, 'Watukumpul', '877998568'),
(14, 'Ida Puspita', 21, 'Buaran', '856985458'),
(15, 'Winarno', 25, 'Poncol', '859654568'),
(16, 'dafas', 12, 'Tirto', '81909231'),
(17, 'Falahi', 12, 'Tirto', '812457775'),
(18, 'loj', 8, 'diyt', '0707'),
(19, '', 0, '', ''),
(20, '', 0, '', ''),
(21, 'hgdhc', 21, 'hgdhdg', 'dchyyhd');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
