-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 12:55 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `51414161`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(4) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_edit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` char(2) NOT NULL DEFAULT '1',
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `kategori`, `tanggal_post`, `tanggal_edit`, `status`, `konten`) VALUES
(1, 'Gajah, hewan penuh solidaritas', 'herbivora', '2017-11-24 08:57:20', '2017-12-12 15:14:28', '0', 'Isi artikel yeah..'),
(2, 'Anjing, si hewan yang setia', 'mamalia', '2017-11-24 09:21:54', '2017-11-24 09:21:54', '0', 'Isi artikel'),
(3, 'Harimau Sumatera, si cantik yang kian berkurang', 'berita', '2017-11-24 18:17:20', '2017-11-24 18:17:20', '0', 'Isi artikel..'),
(4, 'Si badak yang kuat', 'mamalia', '2017-11-24 18:19:06', '2017-11-24 18:19:06', '0', 'Isi artikel..'),
(5, 'Ikan mas yang banyak durinya', 'ikan', '2017-11-24 18:19:54', '2017-11-24 18:19:54', '0', 'Isi artikel..'),
(6, 'Paus sperma yang sangat besar', 'ikan', '2017-11-24 18:56:58', '2017-11-24 18:56:58', '0', 'Isi artikel');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
