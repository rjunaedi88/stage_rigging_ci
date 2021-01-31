-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 02:18 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stage_rigging_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `email`, `password`, `role_admin`) VALUES
(1, 'Rachmat Junaedi', 'Rachmat Junaedi', 'admin@gmail.com', '12345', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_customer` varchar(3) NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto_ktp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`id_customer`, `nama_customer`, `username`, `telepon`, `alamat`, `email`, `password`, `foto_ktp`) VALUES
('001', 'Rachmat Junaedi', 'rahmat', '0989897176767', 'bunga taman', 'rjunaedi88@gmail.com', '123456', 'ff2b923d26d0264daefd80459d41f6bd.jpg'),
('002', 'Ahmad Fauzi', 'fauzi', '08223223223', 'jakarta', 'rjunaedi88@gmail.com', '123456', '72195d7148f99dcda4e3053cefed6e4a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_katalog`
--

CREATE TABLE `tb_katalog` (
  `id_katalog` varchar(3) NOT NULL,
  `nama_katalog` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(12) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_katalog`
--

INSERT INTO `tb_katalog` (`id_katalog`, `nama_katalog`, `deskripsi`, `harga`, `gambar`) VALUES
('001', 'Stage A', 'Luas nya 100m', 100000, 'c5afc688469e8b626e74ffc896cbcabd.jpg'),
('002', 'Stage B', 'Luas nya 200m', 350000, '8f32e5939815e3a53a8495a84a469b6e.jpg'),
('003', 'Stage C', 'Luas nya 300m', 600000, '2abfc4443ce7c84c0839ebd1515e1dee.jpg'),
('004', 'Stage V', 'Luas nya 3050m', 100000, 'ab639d53aeec6cd4b7798b546490091e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pesanan` varchar(12) NOT NULL,
  `id_customer` varchar(3) DEFAULT NULL,
  `id_katalog` varchar(3) DEFAULT NULL,
  `tanggal_pesan` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tipe_pembayaran` varchar(11) NOT NULL,
  `status_pembayaran` varchar(25) DEFAULT NULL,
  `total_harga` int(25) DEFAULT NULL,
  `bukti_pembayaran` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pesanan`, `id_customer`, `id_katalog`, `tanggal_pesan`, `tanggal_kembali`, `tipe_pembayaran`, `status_pembayaran`, `total_harga`, `bukti_pembayaran`) VALUES
('TR202101001', '001', '002', '2021-01-09', '2021-01-11', 'dp', NULL, NULL, NULL),
('TR202101002', '001', '002', '2021-01-12', '2021-01-15', 'tunai', NULL, NULL, NULL),
('TR202101003', '001', '002', '2021-01-10', '2021-01-19', 'dp', 'menunggu pembayaran', NULL, NULL),
('TR202101004', '001', '002', '2021-01-11', '2021-01-14', 'tunai', 'menunggu pembayaran', NULL, NULL),
('TR202101005', '001', '003', '2021-01-12', '2021-01-15', 'dp', 'menunggu pembayaran', 360000, NULL),
('TR202101006', '001', '003', '2021-01-10', '2021-01-10', 'dp', 'menunggu pembayaran', 0, NULL),
('TR202101007', '001', '003', '2021-01-10', '2021-01-10', 'dp', 'menunggu pembayaran', 0, NULL),
('TR202101008', '001', '003', '2021-01-10', '2021-01-10', 'dp', 'menunggu pembayaran', 0, NULL),
('TR202101009', '001', '003', '2021-01-10', '2021-01-10', 'dp', 'menunggu pembayaran', 0, NULL),
('TR202101010', '001', '003', '2021-01-10', '2021-01-10', 'dp', 'menunggu pembayaran', 0, NULL),
('TR202101011', '001', '003', '2021-01-10', '2021-01-10', 'dp', 'menunggu pembayaran', 0, NULL),
('TR202101012', '001', '003', '2021-01-10', '2021-01-10', 'dp', 'menunggu pembayaran', 0, NULL),
('TR202101013', '001', '003', '2021-01-10', '2021-01-10', 'dp', 'menunggu pembayaran', 0, NULL),
('TR202101014', '001', '003', '2021-01-10', '2021-01-10', 'dp', 'menunggu pembayaran', 0, NULL),
('TR202101015', '001', '003', '2021-01-10', '2021-01-10', 'dp', 'menunggu pembayaran', 0, NULL),
('TR202101016', '001', '003', '2021-01-10', '2021-01-10', 'dp', 'menunggu pembayaran', 0, NULL),
('TR202101017', '001', '003', '2021-01-10', '2021-01-10', 'dp', 'menunggu pembayaran', 0, NULL),
('TR202101018', '001', '003', '2021-01-10', '2021-01-10', 'dp', 'menunggu pembayaran', 0, NULL),
('TR202101019', '001', '002', '2021-01-10', '2021-01-10', 'dp', 'menunggu pembayaran', 0, NULL),
('TR202101020', '001', '002', '2021-01-10', '2021-01-13', 'dp', 'menunggu pembayaran', 210000, NULL),
('TR202101021', '001', '002', '2021-01-10', '2021-01-12', 'DP', 'menunggu pembayaran', 700000, NULL),
('TR202101022', '001', '003', '2021-01-10', '2021-01-12', 'DP', 'menunggu pembayaran', 240000, NULL),
('TR202101023', '001', '002', '2021-01-10', '2021-01-10', 'DP', 'menunggu pembayaran', 0, NULL),
('TR202101024', '001', '002', '2021-01-10', '2021-01-12', 'DP', 'menunggu pembayaran', 140000, NULL),
('TR202101025', '001', '001', '2021-01-10', '2021-01-13', 'dp', 'menunggu pembayaran', 60000, NULL),
('TR202101026', '002', '002', '2021-01-12', '2021-01-14', 'dp', 'menunggu pembayaran', 140000, NULL),
('TR202101027', '002', '001', '2021-01-12', '2021-01-14', 'dp', 'menunggu pembayaran', 40000, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `tb_katalog`
--
ALTER TABLE `tb_katalog`
  ADD PRIMARY KEY (`id_katalog`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_katalog` (`id_katalog`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD CONSTRAINT `id_customer` FOREIGN KEY (`id_customer`) REFERENCES `tb_customer` (`id_customer`),
  ADD CONSTRAINT `id_katalog` FOREIGN KEY (`id_katalog`) REFERENCES `tb_katalog` (`id_katalog`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
