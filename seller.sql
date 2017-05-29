-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2017 at 03:06 PM
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
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id_seller` int(10) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `bs_name` text NOT NULL,
  `bs_address` text NOT NULL,
  `email` varchar(15) NOT NULL,
  `cty_state` text NOT NULL,
  `ZIP` int(6) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `upload_files` text NOT NULL,
  `approval` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id_seller`, `id_user`, `bs_name`, `bs_address`, `email`, `cty_state`, `ZIP`, `notelp`, `upload_files`, `approval`) VALUES
(14, 10, 'Kammpr Inc', 'Di jepang (jembatan panjang)', 'daffanasu@gmail', 'JAPAN,KYOTO', 14045, '082122112211', '149606278410.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id_seller`),
  ADD UNIQUE KEY `id_user_FK` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id_seller` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
