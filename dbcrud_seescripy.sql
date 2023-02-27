-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 27 Feb 2023 pada 20.44
-- Versi server: 5.6.38
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcrud_seescripy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `namaLengkap` varchar(128) NOT NULL,
  `nik` varchar(128) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `jenisKelamin` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `namaLengkap`, `nik`, `jurusan`, `jenisKelamin`) VALUES
(1, 'Muhamad Ardiansyah u', '7262518251828', 'Teknik Informatika', 'Laki - Laki'),
(2, 'Noval Argeswara Firdaus', '17141715141', 'Pemasaran', 'Laki - Laki'),
(3, 'Restu Mutiara Islami', '17151715161', 'Otomotif', 'Perempuan'),
(7, 'Rehan Lesmana ', '161517171', 'Tata Niaga', 'Laki - Laki'),
(8, 'Izul fikar', '1615171716151', 'Teknik Telekomunikasi', 'Laki - Laki'),
(9, 'Ana natasya', '1614167158181', 'Administrasi', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
