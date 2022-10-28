-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Okt 2022 pada 15.00
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesanan_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_awal`
--

CREATE TABLE `pesanan_awal` (
  `id_pesanan` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tgl_pesanan` date NOT NULL,
  `alamat` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kontak` int(11) NOT NULL,
  `menu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan_awal`
--

INSERT INTO `pesanan_awal` (`id_pesanan`, `nama`, `tgl_pesanan`, `alamat`, `jumlah`, `kontak`, `menu`) VALUES
(3, 'dhiya', '2022-10-28', 'jl,jakarta', 20, 123, 'menu3'),
(4, 'dhiya', '2022-10-28', 'jl,jakarta', 20, 123, 'menu3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `waktu`, `foto`) VALUES
(10, 'menu baru', '2022-10-28 14:55:12', 'menu baru.png'),
(11, 'pizza', '2022-10-28 20:49:33', 'pizza.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pesanan_awal`
--
ALTER TABLE `pesanan_awal`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesanan_awal`
--
ALTER TABLE `pesanan_awal`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
