-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 01:57 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hp`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_hp`
--

CREATE TABLE `data_hp` (
  `id_hp` int(4) NOT NULL,
  `nama_hp` varchar(256) COLLATE utf8_bin NOT NULL,
  `harga_hp` varchar(64) COLLATE utf8_bin NOT NULL,
  `ram_hp` varchar(64) COLLATE utf8_bin NOT NULL,
  `memori_hp` varchar(64) COLLATE utf8_bin NOT NULL,
  `processor_hp` varchar(64) COLLATE utf8_bin NOT NULL,
  `kamera_hp` varchar(64) COLLATE utf8_bin NOT NULL,
  `harga_angka` varchar(64) COLLATE utf8_bin NOT NULL,
  `ram_angka` varchar(64) COLLATE utf8_bin NOT NULL,
  `memori_angka` varchar(64) COLLATE utf8_bin NOT NULL,
  `processor_angka` varchar(64) COLLATE utf8_bin NOT NULL,
  `kamera_angka` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `data_hp`
--

INSERT INTO `data_hp` (`id_hp`, `nama_hp`, `harga_hp`, `ram_hp`, `memori_hp`, `processor_hp`, `kamera_hp`, `harga_angka`, `ram_angka`, `memori_angka`, `processor_angka`, `kamera_angka`) VALUES
(1, 'Oppo Neo 7', '1700000', '1', '16', 'Quadcore', '8', '4', '1', '3', '3', '3'),
(2, 'Mito A880', '550000\r\n', '1', '8', 'Quadcore', '5', '5', '1', '2', '3', '1'),
(3, 'Samsung Galaxy Note 9', '11200000\r\n', '6', '128', 'Octacore', '12', '1', '5', '5', '5', '3'),
(4, 'Oppo A83', '1899000', '3', '32', 'Octacore', '13', '4', '3', '4', '4', '3'),
(5, 'Honor 8x', '3649000\r\n', '4', '128', 'Octacore', '20', '3', '4', '5', '5', '5'),
(6, 'Sony Xperia Z1', '1250000', '3', '32', 'Quadcore', '20.7', '4', '3', '4', '3', '5'),
(7, 'ASIAFONE ULTIMA', '749000\r\n', '1', '8', 'Quadcore', '5', '5', '1', '2', '3', '1'),
(8, 'LG K4 LTE', '745000\r\n', '1', '8', 'Quadcore', '5', '5', '1', '2', '3', '1'),
(9, 'Google Pixel 2 XL', '7200000', '4', '64', 'Octacore', '12', '5', '4', '5', '5', '3'),
(10, 'Xiaomi Redmi Note 4x', '1530000', '3', '32', 'Octacore', '13', '4', '3', '4', '5', '3'),
(11, 'Realme 2 Pro', '2949000', '4', '64', 'Octacore', '16', '4', '4', '5', '5', '5'),
(12, 'Vivo Y91', '1709000', '2', '16', 'Quadcore', '13', '4', '2', '3', '3', '3'),
(13, 'XIAOMI POCOPHONE F1', '4675000\r\n', '6', '64', 'Octacore', '12', '2', '5', '5', '5', '3'),
(14, 'Nokia 5', '1625000', '3', '16', 'Octacore', '13', '4', '3', '3', '5', '3'),
(15, 'evercross S45\r\n', '520000', '1', '8', 'Quadcore', '5', '5', '1', '2', '3', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_hp`
--
ALTER TABLE `data_hp`
  ADD PRIMARY KEY (`id_hp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_hp`
--
ALTER TABLE `data_hp`
  MODIFY `id_hp` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
