-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 04:57 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_cashier`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kd_barang` varchar(10) NOT NULL,
  `kd_kategori` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `harga_jual` double NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kd_barang`, `kd_kategori`, `nama_barang`, `warna`, `harga_jual`, `stock`) VALUES
('B01', 1, 'Baju Gembel', 'Merah', 2000, 31),
('B02', 1, 'Baju Koko', 'Putih', 23000, 5),
('B03', 1, 'Baju Tidur', 'Krem', 130000, 12);

-- --------------------------------------------------------

--
-- Table structure for table `det_penjualan`
--

CREATE TABLE `det_penjualan` (
  `no_det` int(11) NOT NULL,
  `kd_penjualan` varchar(25) NOT NULL,
  `kd_barang` varchar(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` double NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `det_penjualan`
--

INSERT INTO `det_penjualan` (`no_det`, `kd_penjualan`, `kd_barang`, `qty`, `harga`, `jumlah`) VALUES
(32, '202004080001', 'B01', 2, 2000, 4000),
(33, '202004080001', 'B02', 3, 23000, 69000),
(34, '202004080001', 'B02', 1, 23000, 23000),
(35, '202004080001', 'B02', 1, 23000, 23000),
(36, '202005050002', 'B02', 3, 23000, 69000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kd_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kd_kategori`, `nama_kategori`) VALUES
(1, 'Baju'),
(2, 'Celana'),
(3, 'Jaket');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `kd_penjualan` varchar(25) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `customer` varchar(50) NOT NULL,
  `total` double NOT NULL,
  `bayar` double NOT NULL,
  `kembalian` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`kd_penjualan`, `tgl`, `jam`, `customer`, `total`, `bayar`, `kembalian`) VALUES
('202002010002', '2020-03-16', '03:05:10', 'ug', 65, 65, 0),
('202004080001', '2020-04-08', '13:54:15', 'susi', 23000, 555533, 532533),
('202005050002', '2020-05-05', '09:30:53', 'bnbn', 69000, 70000, 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `det_penjualan`
--
ALTER TABLE `det_penjualan`
  ADD PRIMARY KEY (`no_det`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`kd_penjualan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `det_penjualan`
--
ALTER TABLE `det_penjualan`
  MODIFY `no_det` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kd_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
