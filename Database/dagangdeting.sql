-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2020 pada 08.23
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dagangdeting`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` char(24) NOT NULL,
  `nama_admin` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL,
  `email` varchar(24) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `aduan`
--

CREATE TABLE `aduan` (
  `id_aduan` int(11) NOT NULL,
  `nama_pengadu` varchar(24) NOT NULL,
  `email_pengadu` varchar(24) NOT NULL,
  `nomor_telepon` varchar(13) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `foto_buktiAduan` varchar(24) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurir`
--

CREATE TABLE `kurir` (
  `id_kurir` int(11) NOT NULL,
  `nama_kurir` char(24) NOT NULL,
  `alamat_kurir` char(100) NOT NULL,
  `nomor_telepon` varchar(13) NOT NULL,
  `nomor_ktp` varchar(17) NOT NULL,
  `foto_ktp` varchar(24) DEFAULT NULL,
  `foto_stnk` varchar(24) DEFAULT NULL,
  `foto_SIM` varchar(24) DEFAULT NULL,
  `foto_kurir` varchar(24) DEFAULT NULL,
  `jenis_kelamin` varchar(24) NOT NULL,
  `status` int(11) NOT NULL,
  `jenis_kendaraan` varchar(24) NOT NULL,
  `nomor_kendaraan` varchar(24) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pedagang`
--

CREATE TABLE `pedagang` (
  `id_pedagang` int(11) NOT NULL,
  `nama_pedagang` varchar(24) NOT NULL,
  `alamat_rinci` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `foto_pedagang` varchar(24) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pedagang`
--

INSERT INTO `pedagang` (`id_pedagang`, `nama_pedagang`, `alamat_rinci`, `kabupaten`, `kecamatan`, `kelurahan`, `no_hp`, `no_wa`, `foto_pedagang`, `created_at`, `updated_at`) VALUES
(1, 'indah', 'tarutung', '', '', '', '09876543', '', 'asdfgh', '2020-04-24 08:01:50', '2020-04-25 08:01:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(24) NOT NULL,
  `harga` varchar(24) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'asdfghjk', 'sdfghjk', 'sdfghjk', '2020-04-24 08:02:36', '2020-04-25 08:02:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_pedagang`
--

CREATE TABLE `produk_pedagang` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_pedagang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk_pedagang`
--

INSERT INTO `produk_pedagang` (`id`, `id_produk`, `id_pedagang`) VALUES
(1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `aduan`
--
ALTER TABLE `aduan`
  ADD PRIMARY KEY (`id_aduan`);

--
-- Indeks untuk tabel `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indeks untuk tabel `pedagang`
--
ALTER TABLE `pedagang`
  ADD PRIMARY KEY (`id_pedagang`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `produk_pedagang`
--
ALTER TABLE `produk_pedagang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_pedagang` (`id_pedagang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aduan`
--
ALTER TABLE `aduan`
  MODIFY `id_aduan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id_kurir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pedagang`
--
ALTER TABLE `pedagang`
  MODIFY `id_pedagang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `produk_pedagang`
--
ALTER TABLE `produk_pedagang`
  ADD CONSTRAINT `produk_pedagang_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_pedagang_ibfk_2` FOREIGN KEY (`id_pedagang`) REFERENCES `pedagang` (`id_pedagang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
