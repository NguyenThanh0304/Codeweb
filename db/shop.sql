-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 14, 2018 lúc 06:16 PM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `fullname` int(11) NOT NULL,
  `sdt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `clothes`
--

CREATE TABLE `clothes` (
  `id` int(11) NOT NULL,
  `idproducts` int(11) NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `clothes`
--

INSERT INTO `clothes` (`id`, `idproducts`, `image`, `name`, `gender`, `size`, `price`, `date`) VALUES
(1, 2, 'quanao.jpg', 'Đồ trẻ em', 'Nam', 'M, S', 250000, '2018-01-12 22:12:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `idproducts` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `idproducts`, `image`, `name`, `quantity`, `price`, `date`, `iduser`) VALUES
(8, 3, 'banphim1.jpg', 'bàn phím 01', 2, 150000, '2018-01-14 23:53:05', 96724),
(9, 3, 'banphim3.jpg', 'bàn phím 03', 1, 170000, '2018-01-14 23:53:05', 96724),
(10, 3, 'capsac1.jpg', 'cáp sạc 01', 1, 25900, '2018-01-14 23:53:05', 96724),
(3, 1, 'giaynam3.jpg', 'Giày thể thao nam NA-003', 3, 365000, '2018-01-14 23:53:05', 96724),
(4, 1, 'giaynam4.jpg', 'Giày thể thao nam NA-004', 2, 270000, '2018-01-14 23:53:05', 96724),
(22, 1, 'giaynam10.jpg', 'Giày thể thao nam NA-010', 2, 488000, '2018-01-14 23:53:05', 96724),
(2, 1, 'giaynam2.jpg', 'Giày thể thao nam NA-002', 1, 350000, '2018-01-14 23:53:05', 96724);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(13) NOT NULL,
  `date` datetime NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `date`, `iduser`) VALUES
(20, 'Hồ Minh Chiến', 2147483647, '2018-01-14 23:53:05', 96724);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `others`
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
-- Đang đổ dữ liệu cho bảng `others`
--

INSERT INTO `others` (`id`, `idproducts`, `image`, `name`, `price`, `date`) VALUES
(8, 3, 'banphim1.jpg', 'bàn phím 01', 150000, '2018-01-13 08:50:35'),
(9, 3, 'banphim3.jpg', 'bàn phím 03', 170000, '2018-01-13 09:16:32'),
(10, 3, 'capsac1.jpg', 'cáp sạc 01', 25900, '2018-01-14 14:50:12'),
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`) VALUES
(1, 'shoes'),
(2, 'clothes'),
(3, 'others');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoes`
--

CREATE TABLE `shoes` (
  `id` int(11) NOT NULL,
  `idproducts` int(11) NOT NULL,
  `image` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `shoes`
--

INSERT INTO `shoes` (`id`, `idproducts`, `image`, `name`, `gender`, `price`, `date`) VALUES
(1, 1, 'giaynam1.jpg', 'Giày thể thao nam NA-001', 'Nam', 250000, '2018-01-14 14:04:45'),
(2, 1, 'giaynam2.jpg', 'Giày thể thao nam NA-002', 'Nam', 350000, '2018-01-11 23:40:02'),
(3, 1, 'giaynam3.jpg', 'Giày thể thao nam NA-003', 'Nam', 365000, '2018-01-11 23:40:34'),
(4, 1, 'giaynam4.jpg', 'Giày thể thao nam NA-004', 'Nam', 270000, '2018-01-14 13:41:05'),
(5, 1, 'giaynam5.jpg', 'Giày thể thao nam NA-005', 'Nam', 390000, '2018-01-11 23:41:15'),
(6, 1, 'giaynam6.jpg', 'Giày thể thao nam NA-006', 'Nam', 520000, '2018-01-11 23:41:57'),
(7, 1, 'giaynu1.jpg', 'Giày thể thao nữ N-001', 'Nu', 270000, '2018-01-11 23:42:15'),
(8, 1, 'giaynu2.jpg', 'Giày thể thao nữ N-002', 'Nu', 290000, '2018-01-11 23:48:41'),
(9, 1, 'giaynu8.jpg', 'Giày thể thao nữ N-003', 'Nu', 255000, '2018-01-11 23:50:04'),
(10, 1, 'giaynam7.jpg', 'Giày thể thao nam NA-007', 'Nam', 310000, '2018-01-11 23:51:14'),
(11, 1, 'giaynam8.jpg', 'Giày thể thao nam NA-008', 'Nam', 170000, '2018-01-11 23:51:47'),
(12, 1, 'giaynam9.jpg', 'Giày thể thao nam NA-009', 'Nam', 220000, '2018-01-11 23:52:08'),
(13, 1, 'giaynu9.jpg', 'Giày thể thao nữ N-004', 'Nu', 120000, '2018-01-11 23:52:28'),
(14, 1, 'giaynu4.jpg', 'Giày thể thao nữ N-005', 'Nu', 220000, '2018-01-11 23:53:04'),
(15, 1, 'giaynu5.jpg', 'Giày thể thao nữ N-006', 'Nu', 230000, '2018-01-11 23:54:29'),
(16, 1, 'giaynu6.jpg', 'Giày thể thao nữ N-007', 'Nu', 260000, '2018-01-11 23:55:57'),
(17, 1, 'giaynu7.jpg', 'Giày thể thao nữ N-008', 'Nu', 295000, '2018-01-11 23:56:41'),
(18, 1, 'giaynu171.jpg', 'Giày thể thao nữ N-009', 'Nu', 310000, '2018-01-11 23:58:52'),
(19, 1, 'giaynu10.jpg', 'Giày thể thao nữ N-010', 'Nu', 139000, '2018-01-11 23:59:55'),
(20, 1, 'giaynu11.jpg', 'Giày thể thao nữ N-011', 'Nu', 169000, '2018-01-12 00:00:28'),
(21, 1, 'giaynu18.jpg', 'Giày thể thao nữ N-012', 'Nu', 170000, '2018-01-12 00:00:54'),
(22, 1, 'giaynam10.jpg', 'Giày thể thao nam NA-010', 'Nam', 488000, '2018-01-12 00:01:36'),
(23, 1, 'giaynam11.jpg', 'Giày thể thao nam NA-011', 'Nam', 444000, '2018-01-12 00:02:13'),
(24, 1, 'giaynam12.jpg', 'Giày thể thao nam NA-012', 'Nam', 100000, '2018-01-12 00:02:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idproducts` (`idproducts`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idproducts` (`idproducts`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idproducts` (`idproducts`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `others`
--
ALTER TABLE `others`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `clothes`
--
ALTER TABLE `clothes`
  ADD CONSTRAINT `clothes_ibfk_1` FOREIGN KEY (`idproducts`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `others`
--
ALTER TABLE `others`
  ADD CONSTRAINT `others_ibfk_1` FOREIGN KEY (`idproducts`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `shoes`
--
ALTER TABLE `shoes`
  ADD CONSTRAINT `shoes_ibfk_1` FOREIGN KEY (`idproducts`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
