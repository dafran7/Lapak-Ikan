-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2017 at 03:10 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapakikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderbiji`
--

CREATE TABLE `orderbiji` (
  `AI` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `harga` varchar(32) NOT NULL,
  `alamat` text NOT NULL,
  `id_seller` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderbiji`
--

INSERT INTO `orderbiji` (`AI`, `order_id`, `waktu`, `id_user`, `item_id`, `quantity`, `harga`, `alamat`, `id_seller`) VALUES
(18, '14959317068', '2017-05-28 00:35:06', 8, 11, 1, '140411', 'Jl.Kayu Putih Utara 3E', 8),
(19, '14959317068', '2017-05-28 00:35:06', 8, 15, 1, '213', 'Jl.Kayu Putih Utara 3E', 9),
(20, '14959317068', '2017-05-28 00:35:06', 8, 12, 1, '140411', 'Jl.Kayu Putih Utara 3E', 8),
(21, '14959551748', '2017-05-28 07:06:14', 8, 15, 1, '213', 'Jl.Kayu Putih Utara 3E', 9),
(22, '14959551748', '2017-05-28 07:06:14', 8, 12, 1, '140411', 'Jl.Kayu Putih Utara 3E', 8),
(23, '14959551748', '2017-05-28 07:06:14', 8, 11, 1, '140411', 'Jl.Kayu Putih Utara 3E', 8),
(24, '14959553268', '2017-05-28 07:08:46', 8, 15, 1, '213', 'Jl.Kayu Putih Utara 3E', 9),
(25, '14959553268', '2017-05-28 07:08:46', 8, 12, 1, '140411', 'Jl.Kayu Putih Utara 3E', 8),
(26, '149595542410', '2017-05-28 07:10:24', 10, 19, 1, '1234', 'Jl. Jalan Men', 8),
(27, '149595542410', '2017-05-28 07:10:24', 10, 15, 1, '213', 'Jl. Jalan Men', 9),
(28, '149595542410', '2017-05-28 07:10:24', 10, 17, 1, '123411', 'Jl. Jalan Men', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orderdata`
--

CREATE TABLE `orderdata` (
  `order_id` varchar(50) NOT NULL,
  `atasnama` varchar(100) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `harga` varchar(11) NOT NULL,
  `shipper` varchar(20) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `telp` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `orderdata`
--

INSERT INTO `orderdata` (`order_id`, `atasnama`, `waktu`, `harga`, `shipper`, `payment`, `alamat`, `telp`, `id_user`) VALUES
('14959317068', 'Ariel', '2017-05-28 00:35:06', '282035', 'delivery1', 'payment1', 'Jl.Kayu Putih Utara 3E', 14045, 8),
('14959551748', 'Ariel', '2017-05-28 07:06:14', '282035', 'delivery1', 'payment1', 'Jl.Kayu Putih Utara 3E', 14045, 8),
('14959553268', 'Ariel', '2017-05-28 07:08:46', '141624', 'delivery1', 'payment1', 'Jl.Kayu Putih Utara 3E', 14045, 8),
('149595542410', 'Meong', '2017-05-28 07:10:24', '125858', 'delivery1', 'payment1', 'Jl. Jalan Men', 2147483647, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderbiji`
--
ALTER TABLE `orderbiji`
  ADD PRIMARY KEY (`AI`);

--
-- Indexes for table `orderdata`
--
ALTER TABLE `orderdata`
  ADD UNIQUE KEY `waktu` (`waktu`),
  ADD UNIQUE KEY `waktu_2` (`waktu`),
  ADD UNIQUE KEY `order_id` (`order_id`),
  ADD UNIQUE KEY `waktu_3` (`waktu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderbiji`
--
ALTER TABLE `orderbiji`
  MODIFY `AI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
