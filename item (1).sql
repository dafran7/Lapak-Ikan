-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2017 at 11:38 AM
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
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `nama_item` varchar(255) NOT NULL,
  `deskripsi_item` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` float NOT NULL,
  `diskon` int(11) NOT NULL,
  `penjualan` int(11) NOT NULL,
  `fresh` int(11) NOT NULL,
  `pengunjung` int(11) NOT NULL,
  `gambar_item` varchar(1000) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `nama_item`, `deskripsi_item`, `quantity`, `harga`, `berat`, `diskon`, `penjualan`, `fresh`, `pengunjung`, `gambar_item`, `id_user`) VALUES
(1, 'Meong', 'AYAM                  ', 0, 14045, 0, 0, 0, 0, 0, '1493975904.jpg', 0),
(2, 'RPL', 'RPL JAYA!!                  ', 0, 100000, 0, 0, 0, 0, 0, '14939766739.jpg', 8),
(3, 'RPL', 'RPL JAYA!!                  ', 0, 100000, 0, 0, 0, 0, 0, '14939767599.jpg', 0),
(4, 'test', 'ayam goreng\r\nayam bakar\r\nayam', 0, 14045, 0, 0, 0, 0, 0, '14943168738.jpg', 8),
(6, 'asdasd', '33132zccadad', 12, 12334323, 1, 23, 0, 0, 0, '14943205928.jpg', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
