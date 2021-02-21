-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2021 at 05:05 PM
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
(3, 'Ahmad Fauzi', 'fauzi', 'fauzi@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'owner'),
(4, 'Rachmat Junaedi', 'rahmat', 'rahmatrrrrr@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin');

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
('001', 'Le Minerale', 'ale', '08223223223', 'Jl. melati wangi', 'le@mineral.com', 'e10adc3949ba59abbe56e057f20f883e', 'f2c285244753d9a08de1d54f873f916f.jpg');

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
('001', 'Stage A', 'Luas nya 100m ex', 100000, 'cdfd46b355bca76f7700cc78c3fc4d82.jpg'),
('002', 'Stage B', 'Luas nya 200m', 350000, '8f32e5939815e3a53a8495a84a469b6e.jpg'),
('003', 'Stage C', 'Luas nya 300m', 600000, 'f0fedf1d166a3f89ab6e43ac34c30f0a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pesanan` varchar(12) NOT NULL,
  `id_customer` varchar(3) DEFAULT NULL,
  `id_katalog` varchar(3) DEFAULT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `tanggal_pemakaian` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `wilayah` varchar(50) NOT NULL,
  `status_pembayaran` varchar(50) DEFAULT NULL,
  `total_harga` int(25) DEFAULT NULL,
  `bukti_pembayaran` varchar(220) DEFAULT NULL,
  `alamat_event` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
