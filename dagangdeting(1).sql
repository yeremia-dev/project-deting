-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 10:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

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
-- Table structure for table `admin`
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
-- Table structure for table `aduan`
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
-- Table structure for table `kurir`
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
-- Table structure for table `pedagang`
--

CREATE TABLE `pedagang` (
  `id_pedagang` int(11) NOT NULL,
  `nama_pedagang` varchar(24) NOT NULL,
  `alamat_pedagang` varchar(100) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `foto_pedagang` varchar(24) DEFAULT NULL,
  `kategori_dagangan` varchar(24) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pedagang`
--

INSERT INTO `pedagang` (`id_pedagang`, `nama_pedagang`, `alamat_pedagang`, `no_telepon`, `foto_pedagang`, `kategori_dagangan`, `created_at`, `updated_at`) VALUES
(1, 'indah', 'tarutung', '09876543', 'asdfgh', 'sdfghj', '2020-04-24 08:01:50', '2020-04-25 08:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(24) NOT NULL,
  `harga` varchar(24) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `foto_produk` varchar(24) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `lokasi`, `foto_produk`, `created_at`, `updated_at`) VALUES
(1, 'asdfghjk', 'sdfghjk', 'sdfghjk', 'sdfghjk', '2020-04-24 08:02:36', '2020-04-25 08:02:36');

-- --------------------------------------------------------

--
-- Table structure for table `produk_pedagang`
--

CREATE TABLE `produk_pedagang` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_pedagang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk_pedagang`
--

INSERT INTO `produk_pedagang` (`id`, `id_produk`, `id_pedagang`) VALUES
(1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `aduan`
--
ALTER TABLE `aduan`
  ADD PRIMARY KEY (`id_aduan`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `pedagang`
--
ALTER TABLE `pedagang`
  ADD PRIMARY KEY (`id_pedagang`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `produk_pedagang`
--
ALTER TABLE `produk_pedagang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_pedagang` (`id_pedagang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aduan`
--
ALTER TABLE `aduan`
  MODIFY `id_aduan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id_kurir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedagang`
--
ALTER TABLE `pedagang`
  MODIFY `id_pedagang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk_pedagang`
--
ALTER TABLE `produk_pedagang`
  ADD CONSTRAINT `produk_pedagang_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_pedagang_ibfk_2` FOREIGN KEY (`id_pedagang`) REFERENCES `pedagang` (`id_pedagang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
