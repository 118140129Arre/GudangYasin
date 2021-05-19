-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 19, 2021 at 01:30 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16590536_multi_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `keluarberas`
--

CREATE TABLE `keluarberas` (
  `no` int(100) NOT NULL,
  `id_beras` int(100) NOT NULL,
  `beras_keluar` int(100) NOT NULL,
  `jenis_beras` varchar(100) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `pengorder` varchar(100) NOT NULL,
  `tanggal_beras_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keluarberas`
--

INSERT INTO `keluarberas` (`no`, `id_beras`, `beras_keluar`, `jenis_beras`, `merek`, `warna`, `pengorder`, `tanggal_beras_keluar`) VALUES
(39, 1, 5, 'lokal', 'polos', 'putih', 'araa', '2021-05-15'),
(40, 1, 50, 'lokal', 'polos', 'putih', 'ami', '2021-05-16'),
(41, 1, 150, 'lokal', 'polos', 'putih', 'hai', '2021-05-16'),
(42, 1, 10, 'lokal', 'polos', 'putih', 'yo', '2021-05-16'),
(43, 1, 200, 'lokal', 'polos', 'putih', 'inem', '2021-05-16'),
(45, 1, 50, 'lokal', 'polos', 'putih', 'Pasar Kangkung', '2021-05-18'),
(46, 1, 20, 'lokal', 'polos', 'putih', 'Bu Rum', '2021-05-18'),
(47, 2, 50, 'thailand', 'aa', 'putih', 'Pasar Kangkung', '2021-05-18');

--
-- Triggers `keluarberas`
--
DELIMITER $$
CREATE TRIGGER `dlet` AFTER DELETE ON `keluarberas` FOR EACH ROW BEGIN
UPDATE stock_beras SET jumlah_total = jumlah_total + old.beras_keluar
WHERE id_beras2 = old.id_beras;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `keluarberas` AFTER INSERT ON `keluarberas` FOR EACH ROW BEGIN
UPDATE stock_beras SET jumlah_total = jumlah_total - new.beras_keluar
WHERE id_beras2 = new.id_beras;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kerupukkeluar`
--

CREATE TABLE `kerupukkeluar` (
  `no` int(100) NOT NULL,
  `id_kerupuk` int(100) NOT NULL,
  `kerupuk_keluar` int(100) NOT NULL,
  `jenis_kerupuk` varchar(100) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `pengorder` varchar(100) NOT NULL,
  `tanggal_kerupuk_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kerupukkeluar`
--

INSERT INTO `kerupukkeluar` (`no`, `id_kerupuk`, `kerupuk_keluar`, `jenis_kerupuk`, `merek`, `warna`, `pengorder`, `tanggal_kerupuk_keluar`) VALUES
(29, 1, 50, 'udang', 'udang santang', 'putih', 'Bu Amel', '2021-05-18'),
(30, 2, 10, 'udang', 'udang santang', 'kuning', 'Bu Dewi', '2021-05-18'),
(31, 3, 50, 'udang', 'dolar', 'putih', 'Pasar Kangkung', '2021-05-18'),
(32, 4, 30, 'udang', 'dinar koin', 'putih', 'Bu Ema', '2021-05-18');

--
-- Triggers `kerupukkeluar`
--
DELIMITER $$
CREATE TRIGGER `delt` AFTER DELETE ON `kerupukkeluar` FOR EACH ROW BEGIN
UPDATE stock_kerupuk SET stock_total = stock_total + old.kerupuk_keluar
WHERE id_kerupuk2 = old.id_kerupuk;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `otokeluar` AFTER INSERT ON `kerupukkeluar` FOR EACH ROW BEGIN
UPDATE stock_kerupuk SET stock_total = stock_total - new.kerupuk_keluar
WHERE id_kerupuk2 = new.id_kerupuk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kerupukm`
--

CREATE TABLE `kerupukm` (
  `no` int(100) NOT NULL,
  `id_kerupuk` int(100) NOT NULL,
  `kerupuk_masuk` int(11) NOT NULL,
  `jenis_kerupuk` varchar(100) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `tanggal_kerupuk_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kerupukm`
--

INSERT INTO `kerupukm` (`no`, `id_kerupuk`, `kerupuk_masuk`, `jenis_kerupuk`, `merek`, `warna`, `tanggal_kerupuk_masuk`) VALUES
(61, 1, 23, 'udang', 'udang santang', 'putih', '2021-05-09'),
(62, 4, 20, 'udang', 'dinar koin', 'putih', '2021-05-09'),
(63, 1, 45, 'udang', 'udang santang', 'putih', '2021-05-18'),
(64, 2, 50, 'udang', 'udang santang', 'kuning', '2021-05-18'),
(65, 3, 50, 'udang', 'dolar', 'putih', '2021-05-18'),
(66, 4, 70, 'udang', 'dinar koin', 'putih', '2021-05-18');

--
-- Triggers `kerupukm`
--
DELIMITER $$
CREATE TRIGGER `hapus` AFTER DELETE ON `kerupukm` FOR EACH ROW BEGIN
UPDATE stock_kerupuk SET stock_total = stock_total - old.kerupuk_masuk
WHERE id_kerupuk2 = old.id_kerupuk;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `otomulti` AFTER INSERT ON `kerupukm` FOR EACH ROW BEGIN
UPDATE stock_kerupuk SET stock_total = stock_total + new.kerupuk_masuk
WHERE id_kerupuk2 = new.id_kerupuk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `masukberas`
--

CREATE TABLE `masukberas` (
  `no` int(100) NOT NULL,
  `id_beras` int(100) NOT NULL,
  `beras_masuk` int(100) NOT NULL,
  `jenis_beras` varchar(100) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `tanggal_beras_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masukberas`
--

INSERT INTO `masukberas` (`no`, `id_beras`, `beras_masuk`, `jenis_beras`, `merek`, `warna`, `tanggal_beras_masuk`) VALUES
(203, 2, 10, 'thailand', 'aa', 'putih', '2021-05-09'),
(204, 1, 20, 'lokal', 'polos', 'putih', '2021-05-09'),
(205, 1, 20, 'lokal', 'polos', 'putih', '2021-05-15'),
(206, 1, 50, 'lokal', 'polos', 'putih', '2021-05-15'),
(207, 2, 70, 'thailand', 'aa', 'putih', '2021-05-16'),
(208, 1, 15, 'lokal', 'polos', 'putih', '2021-05-16'),
(209, 2, 15, 'thailand', 'aa', 'putih', '2021-05-16'),
(210, 1, 200, 'lokal', 'polos', 'putih', '2021-05-16'),
(213, 1, 100, 'lokal', 'polos', 'putih', '2021-05-18'),
(214, 1, 100, 'lokal', 'polos', 'putih', '2021-05-18'),
(215, 2, 100, 'thailand', 'aa', 'putih', '2021-05-18');

--
-- Triggers `masukberas`
--
DELIMITER $$
CREATE TRIGGER `delet` AFTER DELETE ON `masukberas` FOR EACH ROW BEGIN
UPDATE stock_beras SET jumlah_total = jumlah_total - old.beras_masuk
WHERE id_beras2 = old.id_beras;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `masukberas` AFTER INSERT ON `masukberas` FOR EACH ROW BEGIN
UPDATE stock_beras SET jumlah_total = jumlah_total + new.beras_masuk
WHERE id_beras2 = new.id_beras;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `stock_beras`
--

CREATE TABLE `stock_beras` (
  `id_beras2` int(100) NOT NULL,
  `jenis_beras` varchar(100) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `jumlah_total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_beras`
--

INSERT INTO `stock_beras` (`id_beras2`, `jenis_beras`, `merek`, `warna`, `jumlah_total`) VALUES
(1, 'lokal', 'polos', 'putih', 120),
(2, 'thailand', 'aa', 'putih', 245);

-- --------------------------------------------------------

--
-- Table structure for table `stock_kerupuk`
--

CREATE TABLE `stock_kerupuk` (
  `id_kerupuk2` int(11) NOT NULL,
  `jenis_kerupuk` varchar(100) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `stock_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_kerupuk`
--

INSERT INTO `stock_kerupuk` (`id_kerupuk2`, `jenis_kerupuk`, `merek`, `warna`, `stock_total`) VALUES
(1, 'udang', 'udang santang', 'putih', 118),
(2, 'udang', 'udang santang', 'kuning', 140),
(3, 'udang', 'dolar', 'putih', 100),
(4, 'udang', 'dinar koin', 'putih', 160);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'yasin', 'yasin', 'yasin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keluarberas`
--
ALTER TABLE `keluarberas`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `kerupukkeluar`
--
ALTER TABLE `kerupukkeluar`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `kerupukm`
--
ALTER TABLE `kerupukm`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `masukberas`
--
ALTER TABLE `masukberas`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `stock_beras`
--
ALTER TABLE `stock_beras`
  ADD PRIMARY KEY (`id_beras2`);

--
-- Indexes for table `stock_kerupuk`
--
ALTER TABLE `stock_kerupuk`
  ADD PRIMARY KEY (`id_kerupuk2`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keluarberas`
--
ALTER TABLE `keluarberas`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `kerupukkeluar`
--
ALTER TABLE `kerupukkeluar`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `kerupukm`
--
ALTER TABLE `kerupukm`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `masukberas`
--
ALTER TABLE `masukberas`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
