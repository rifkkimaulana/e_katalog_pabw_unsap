-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2023 pada 19.56
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekatalog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(150) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` double NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id`, `nama_barang`, `id_kategori`, `deskripsi`, `harga`, `gambar`) VALUES
(24, 'PAKET BUAH', 7, 'PAKET BUAH-BUAHAN', 50000, 'paketbuah.jpg'),
(25, 'BUAH MANGGA', 8, 'Ini adalah buah mangga', 5000, 'mangga.jpeg'),
(26, 'PEPAYA', 8, 'Ini adalah pepaya', 7000, 'pepaya.jpeg'),
(27, 'SAWO 1Kg', 8, 'Ini adalah buah sawo', 10000, 'sawo.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori_barang` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori_barang`) VALUES
(7, 'PAKET BUAH BUAHAN'),
(8, 'BUAH SATUAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_about`
--

INSERT INTO `tb_about` (`id`, `judul`, `isi`) VALUES
(2, 'About', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus adipiscing risus eget aliquet.  Eco Tree is free website template that can be used for any purpose. Credits go to dev/studios for homepage slider, wpZoom for icons, PhotoVaco for photos, and VectorVaco for the logo graphic. Nulla lorem libero, gravida at tincidunt nec, tincidunt id massa.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_social`
--

CREATE TABLE `tb_social` (
  `id` int(11) NOT NULL,
  `nama_sosmed` varchar(100) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_social`
--

INSERT INTO `tb_social` (`id`, `nama_sosmed`, `link`) VALUES
(1, 'facebook', 'https://facebook.com'),
(2, 'youtube', 'www.twetter.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_twitter`
--

CREATE TABLE `tb_twitter` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_twitter`
--

INSERT INTO `tb_twitter` (`id`, `judul`, `isi`) VALUES
(1, 'Twetter', '@templatemo at scelerisque urna in tellus varius ultricies. Suspendisse enean #FREE tincidunt massa in tellus varius ultricies. Aenean tincidunt massa in tellus varius ultricies. http://bit.ly/131w20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_social`
--
ALTER TABLE `tb_social`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_twitter`
--
ALTER TABLE `tb_twitter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_social`
--
ALTER TABLE `tb_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_twitter`
--
ALTER TABLE `tb_twitter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
