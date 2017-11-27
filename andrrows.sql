-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 12:43 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andrrows`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_user` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  `jenis_sepatu` enum('pilih jenis sepatu','flatshoes','olahraga','sneakers','sepatu gunung') NOT NULL,
  `service1` enum('pilih jenis service','fast cleaning','deep cleaning','leather care','repair','repaint','unyellowing and whitening','just for her','waterproff action') NOT NULL,
  `service2` enum('pilih jenis service','fast cleaning','deep cleaning','leather care','repair','repaint','unyellowing and whitening','just for her','waterproff action') NOT NULL,
  `service3` enum('pilih jenis service','fast cleaning','deep cleaning','leather care','repair','repaint','unyellowing and whitening','just for her','waterproff action') NOT NULL,
  `jenis_bahan` enum('pilih bahan sepatu','canvas','kulit imitasi','kulit asli') NOT NULL,
  `warna` enum('pilih jenis warna','hitam','cokelat','putih','merah','biru') NOT NULL,
  `jumlah_sepatu` int(50) NOT NULL,
  `layanan_tambahan` enum('pilih layanan tambahan','layanan antar jemput','layanan antar saja','layanan jemput saja') NOT NULL,
  `total_harga` int(50) NOT NULL,
  `status` enum('Belum Dibayar','Sudah Dibayar','Sedang Di Proses','Selesai Di Proses','Belum Diambil','Sudah Diambil') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `nama`, `alamat`, `no_telp`, `email`, `kode_pos`, `jenis_sepatu`, `service1`, `service2`, `service3`, `jenis_bahan`, `warna`, `jumlah_sepatu`, `layanan_tambahan`, `total_harga`, `status`) VALUES
(6, 8, 'dsca', 'csa', '231', 'cds', 321, '', '', '', '', '', '', 0, '', 0, 'Belum Dibayar'),
(7, 8, 'regdfs', 'fds', '087', 'bgfg', 232, 'sneakers', 'fast cleaning', 'repair', 'just for her', 'kulit imitasi', 'hitam', 1, 'layanan antar saja', 0, 'Belum Dibayar'),
(8, 8, 'mirna', 'malangjiwan bangunharjo sewon bantul', '065', 'vsf', 122, 'flatshoes', 'deep cleaning', 'just for her', 'leather care', 'kulit asli', 'putih', 1, 'layanan antar saja', 0, 'Belum Dibayar'),
(9, 8, 'mirna kusumawati', 'bantul', '097784', 'fdgsg', 123, 'olahraga', 'deep cleaning', 'repaint', 'unyellowing and whitening', 'canvas', 'putih', 2, 'layanan antar jemput', 0, 'Belum Dibayar'),
(10, 8, 'mirna kusumawati', 'mbantul', '0876', 'mirnakusumaw@gmail.com', 5517, 'olahraga', 'leather care', 'unyellowing and whitening', 'leather care', 'kulit imitasi', 'putih', 1, 'layanan antar saja', 0, 'Belum Dibayar'),
(11, 8, 'mirna kusumawati', 'sewon bantul', '08576', 'mirnakusumaw@gmail.com', 542, 'olahraga', 'leather care', 'unyellowing and whitening', 'repaint', 'kulit imitasi', 'cokelat', 1, 'layanan antar saja', 0, 'Belum Dibayar'),
(12, 14, 'mirnads', 'mkdsad', '52', 'egfef', 213, 'sneakers', 'leather care', 'fast cleaning', 'just for her', 'canvas', 'cokelat', 2, 'layanan antar jemput', 0, 'Belum Dibayar'),
(13, 14, 'fsaf', 'hfsh', '867', 'fgdfvd', 232, 'olahraga', 'deep cleaning', 'leather care', 'repaint', 'canvas', 'cokelat', 1, 'layanan antar saja', 150000, 'Belum Dibayar'),
(14, 14, 'vvvdv', 'vsa', '0964', 'sgrg', 32, 'flatshoes', 'leather care', 'repaint', 'deep cleaning', 'canvas', 'cokelat', 1, 'layanan jemput saja', 165000, 'Belum Dibayar');

--
-- Triggers `orders`
--
DELIMITER $$
CREATE TRIGGER `total_harga` BEFORE INSERT ON `orders` FOR EACH ROW BEGIN
SET @service1 = (select harga FROM services WHERE nama_service = new.service1);
SET @service2 = (SELECT harga FROM services WHERE nama_service = new.service2);
SET @service3 = (SELECT harga FROM services WHERE nama_service = new.service3);
SET @layanan_tambahan = (SELECT harga FROM services WHERE nama_service = new.layanan_tambahan);
SET new.total_harga = (@service1+@service2+@service3+@layanan_tambahan)*new.jumlah_sepatu;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id_service` int(20) NOT NULL,
  `nama_service` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id_service`, `nama_service`, `harga`) VALUES
(1, 'fast cleaning', 30000),
(2, 'deep cleaning', 40000),
(3, 'leather care', 60000),
(4, 'repair', 45000),
(5, 'repaint', 50000),
(6, 'unyellowing and whitening', 70000),
(7, 'just for her', 30000),
(8, 'waterproff action', 80000),
(9, 'layanan antar jemput', 30000),
(10, 'layanan antar saja', 15000),
(11, 'layanan jemput saja', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `file` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `level`) VALUES
(12, 'oja', 'ojajnda', '$2y$10$S/UpXS3R/9LDD70NIRjKguaWWloqaVGYkHRRjd4pkqh7exuRg31xa', 'user'),
(13, 'kusumawati', 'miefue', '$2y$10$E8.tJKBtEh4dKq/4WiqNyeBQezqHmxQXvx1tP4yUmkSYTuvBQRIei', 'user'),
(14, 'mirna', 'mirnakusumaw@gmail.com', '$2y$10$6b8.9HKMvTNm5YTGaIrYGuIReb3mJ0wWfOS8ZUXWIuyQE.vNk37uy', 'user'),
(15, 'oja', 'oja@gmail.com', '$2y$10$8Gx02gVn8VtdlwbEpwUTz.voKOzPJ1daO3gXnWe1/FrVz.OwqkRhK', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id_service` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
