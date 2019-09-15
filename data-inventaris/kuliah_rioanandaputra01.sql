-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Sep 2019 pada 19.02
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah_rioanandaputra01`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_inventaris`
--

CREATE TABLE `tb_inventaris` (
  `Kode_Barang` int(11) NOT NULL,
  `Nama_Barang` varchar(100) NOT NULL,
  `Merk_Type` varchar(100) NOT NULL,
  `Bahan` varchar(100) NOT NULL,
  `Asal` varchar(100) NOT NULL,
  `Tahun_Perolehan` year(4) NOT NULL,
  `Satuan` varchar(100) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Kondisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_inventaris`
--

INSERT INTO `tb_inventaris` (`Kode_Barang`, `Nama_Barang`, `Merk_Type`, `Bahan`, `Asal`, `Tahun_Perolehan`, `Satuan`, `Jumlah`, `Kondisi`) VALUES
(1, 'Papan Nama Instansi', '-', 'Seng', 'BOS', 2018, 'Buah', 1, 'Baru'),
(2, 'Lemari Kayu', '-', 'Kayu', 'APBD', 2019, 'Buah', 10, 'Baru'),
(3, 'Notebook', 'Asus', 'Elektoronika', 'Bos', 2019, 'Buah', 5, 'Baru'),
(4, 'Rak Kayu / sepatu', '-', 'Kayu', 'APBD', 2019, 'Buah', 7, 'Baru');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  ADD PRIMARY KEY (`Kode_Barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  MODIFY `Kode_Barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
