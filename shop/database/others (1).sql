-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2018 at 02:14 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `id` int(11) NOT NULL,
  `idproducts` int(11) NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `idproducts`, `image`, `name`, `price`, `date`) VALUES
(8, 3, 'banphim1.jpg', 'bàn phím 01', 150000, '2018-01-13 08:50:35'),
(9, 3, 'banphim3.jpg', 'bàn phím 03', 170000, '2018-01-13 09:16:32'),
(10, 3, 'capsac1.jpg', 'cáp sạc 01', 25000, '2018-01-13 09:17:36'),
(11, 3, 'chuot1.jpg', 'chuột 01', 150000, '2018-01-13 09:18:14'),
(12, 3, 'chuot2.jpg', 'chuột 02', 75000, '2018-01-13 09:19:10'),
(13, 3, 'chuot3.jpg', 'chuột 03', 120000, '2018-01-13 09:19:42'),
(14, 3, 'gaytusuong1.jpg', 'gậy tự sướng 1', 55000, '2018-01-13 09:20:11'),
(15, 3, 'gaytusuong2.jpg', 'gậy tự sướng 02', 70000, '2018-01-13 09:21:37'),
(16, 3, 'giado1.jpg', 'Giá đỡ 01', 90000, '2018-01-13 09:22:06'),
(17, 3, 'loamaytinh1.jpg', 'loa máy tính 01', 240000, '2018-01-13 09:22:35'),
(18, 3, 'loamaytinh2.jpg', 'loa máy tính 02', 350000, '2018-01-13 09:23:10'),
(19, 3, 'mienglotchuot1.jpg', 'miếng lót chuột 01', 20000, '2018-01-13 09:24:16'),
(20, 3, 'mienglotchuot2.jpg', 'miếng lót chuột 02', 25000, '2018-01-13 09:24:53'),
(21, 3, 'sacduphong1.jpg', 'sạc dự phòng 01', 130000, '2018-01-13 09:25:42'),
(22, 3, 'sacduphong2.jpg', 'sạc dự phòng 02', 160000, '2018-01-13 09:26:42'),
(23, 3, 'sacduphong3.jpg', 'sạc dự phòng 03', 180000, '2018-01-13 09:27:47'),
(24, 3, 'tainghe1.jpg', 'tai nghe 01', 80000, '2018-01-13 09:28:26'),
(25, 3, 'tainghe2.jpg', 'tai nghe 02', 85000, '2018-01-13 09:35:15'),
(26, 3, 'tainghe3.jpg', 'tai nghe 03', 70000, '2018-01-13 09:36:11'),
(27, 3, 'usb1.jpg', 'usb 01', 95000, '2018-01-13 09:38:49'),
(28, 3, 'daudocthenho.jpg', 'đầu đọc thẻ nhớ 01', 40000, '2018-01-13 09:39:53'),
(29, 3, 'daudocthenho1.jpg', 'đầu đọc thẻ nhớ 02', 20000, '2018-01-13 10:21:52'),
(30, 3, 'gaytusuong3_moi.jpg', 'gậy tự sướng 03', 55000, '2018-01-13 10:22:24'),
(31, 3, 'thenho16g.jpg', 'thẻ nhớ 16G', 60000, '2018-01-13 10:23:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idproducts` (`idproducts`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `others`
--
ALTER TABLE `others`
  ADD CONSTRAINT `others_ibfk_1` FOREIGN KEY (`idproducts`) REFERENCES `products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
