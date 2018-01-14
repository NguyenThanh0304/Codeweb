-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 13, 2018 lúc 09:05 AM
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
(2, 1, 'https://1.bp.blogspot.com/-cNVf9R2YfvM/WlDzugZMVkI/AAAAAAAAAE4/RKqHXsfQ9N4ouUstxyxIknIgHPvKfirSgCLcBGAs/s1600/4db2b69117e35dc0214a96ab360323ac.jpg', 'Giày Nam  NA002', 2, 700000, '2018-01-09 14:13:33', 12670),
(1, 1, 'https://4.bp.blogspot.com/-Oz2bSqNDKIA/WlDy6PxGWbI/AAAAAAAAAEs/sQ9rflWjTVou50qZ8j87PxLAPLk1M2SfgCLcBGAs/s1600/25e203ecfddb6c27253a422d1fbff09e.jpg', 'Giày Nam NA001', 1, 420000, '2018-01-09 14:13:33', 12670),
(4, 1, 'https://1.bp.blogspot.com/-0NApBkk6DXg/WlD23QlCCaI/AAAAAAAAAFI/KNDCOqDHfZ0FzudyGTe7djvI7hwhHV9_ACLcBGAs/s1600/012d8a35c45638459a29ffcb95be0bf0.jpg', 'Giày Nam NA004', 3, 170000, '2018-01-09 14:13:33', 12670),
(6, 1, 'https://4.bp.blogspot.com/-Zix2KTW5AFY/WlD30kMipFI/AAAAAAAAAFc/3RiZUB0JP90VPcDvYkghA6rFSa9ttxVSQCLcBGAs/s1600/2c8b6113f5a14d3b0432406eada33088.jpg', 'Giày Nam NA006', 1, 220000, '2018-01-09 14:13:33', 12670),
(19, 1, 'https://3.bp.blogspot.com/-kzciAGBOIBo/WlJDctNGK9I/AAAAAAAAAHM/a5dKIH2tFUUaPQoVInbhpbkj0rVyrFOzgCLcBGAs/s1600/521c004ce801bef2347b2ffb57b7833e.jpg', 'Giày Nam NA012', 1, 180000, '2018-01-09 14:13:33', 12670),
(18, 1, 'https://3.bp.blogspot.com/-AotusGwjw7U/WlJDH_rY8uI/AAAAAAAAAHE/hN5ZtDcZrJ4EiJUfe5uGXiz1cZ5XH6iVQCLcBGAs/s1600/1e265aa9625b7d355b6c45cbd21ae25b.jpg', 'Giày Nam NA011', 1, 150000, '2018-01-09 14:13:33', 12670),
(2, 1, 'https://1.bp.blogspot.com/-cNVf9R2YfvM/WlDzugZMVkI/AAAAAAAAAE4/RKqHXsfQ9N4ouUstxyxIknIgHPvKfirSgCLcBGAs/s1600/4db2b69117e35dc0214a96ab360323ac.jpg', 'Giày Nam  NA002', 1, 700000, '2018-01-11 08:34:57', 61748),
(3, 1, 'https://1.bp.blogspot.com/-VBQokE4i1sU/WlD2a_I3OCI/AAAAAAAAAFE/sc4bCNCLY08yQ-OY8zlCVEr4xcGdYPZXgCLcBGAs/s1600/27890bba3603d0370f50d4af79304f34.jpg', 'Giày Nam NA003', 1, 200000, '2018-01-11 08:34:57', 61748),
(4, 1, 'https://1.bp.blogspot.com/-0NApBkk6DXg/WlD23QlCCaI/AAAAAAAAAFI/KNDCOqDHfZ0FzudyGTe7djvI7hwhHV9_ACLcBGAs/s1600/012d8a35c45638459a29ffcb95be0bf0.jpg', 'Giày Nam NA004', 1, 170000, '2018-01-11 08:34:57', 61748),
(1, 1, 'giaynam1.jpg', 'Giày thể thao nam NA-001', 3, 250000, '2018-01-12 17:13:53', 73987),
(2, 1, 'giaynam2.jpg', 'Giày thể thao nam NA-002', 5, 350000, '2018-01-12 17:13:53', 73987),
(9, 1, 'giaynu8.jpg', 'Giày thể thao nữ N-003', 1, 255000, '2018-01-12 17:13:53', 73987),
(3, 3, 'chuot1.2.jpg', 'Chuột Laptop - M021-1', 1, 250000, '2018-01-12 17:13:53', 73987),
(1, 1, 'giaynam1.jpg', 'Giày thể thao nam NA-001', 2, 250000, '2018-01-13 14:48:29', 3712),
(2, 1, 'giaynam2.jpg', 'Giày thể thao nam NA-002', 1, 350000, '2018-01-13 14:48:29', 3712),
(8, 3, 'banphim1.jpg', 'bàn phím 01', 1, 150000, '2018-01-13 14:48:29', 3712),
(14, 3, 'gaytusuong1.jpg', 'gậy tự sướng 1', 1, 55000, '2018-01-13 14:48:29', 3712),
(4, 1, 'giaynam4.jpg', 'Giày thể thao nam NA-004', 1, 270000, '2018-01-13 14:48:29', 3712);

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
(4, 'Nguyen Van A', 1248568493, '2018-01-09 14:13:33', 12670),
(5, 'Nguyen Van A', 1697658151, '2018-01-11 08:34:56', 61748),
(6, 'Nguyen Van C', 2147483647, '2018-01-12 17:13:53', 73987),
(7, 'Hồ Minh Chiến', 1678645214, '2018-01-13 14:48:29', 3712);

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
(1, 1, 'giaynam1.jpg', 'Giày thể thao nam NA-001', 'Nam', 250000, '2018-01-11 23:38:14'),
(2, 1, 'giaynam2.jpg', 'Giày thể thao nam NA-002', 'Nam', 350000, '2018-01-11 23:40:02'),
(3, 1, 'giaynam3.jpg', 'Giày thể thao nam NA-003', 'Nam', 365000, '2018-01-11 23:40:34'),
(4, 1, 'giaynam4.jpg', 'Giày thể thao nam NA-004', 'Nam', 270000, '2018-01-11 23:40:56'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
--
-- By duy
--

CREATE TABLE `bag` (
  `id` int(11) NOT NULL,
  `idproducts` int(11) NOT NULL,
  `image` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO `products` (`id`, `name`) VALUES (7,'bag');
ALTER TABLE `bag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `users`
  MODIFY `phone` int(11) ;
ALTER TABLE `shoes`
  ADD CONSTRAINT `bag_ibfk_1` FOREIGN KEY (`idproducts`) REFERENCES `products` (`id`);
COMMIT;
ALTER TABLE `bag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idproducts` (`idproducts`);
INSERT INTO `bag` (`idproducts`, `image`, `name`, `gender`, `price`, `date`) VALUES
(7,'sp1.jpg','Balô hàn quốc BL01','NAM','120000','2018-01-11 23:42:15'),
(7,'sp2.jpg','Balô hàn quốc BL02','NAM','210000','2018-01-11 23:42:15'),
(7,'sp3.png','Balô hàn quốc BL03','NAM','250000','2018-01-11 23:42:15'),
(7,'sp4.jpg','Balô hàn quốc BL04','NAM','350000','2018-01-11 23:42:15'),
(7,'sp5.jpg','Balô hàn quốc BL05','NAM','210000','2018-01-11 23:42:15'),
(7,'sp6.jpg','Balô hàn quốc BL06','NAM','275000','2018-01-11 23:42:15'),
(7,'sp7.jpg','Balô hàn quốc BL07','NAM','300000','2018-01-11 23:42:15'),
(7,'sp8.jpg','Balô hàn quốc BL08','NAM','287500','2018-01-11 23:42:15'),
(7,'sp9.jpg','Balô hàn quốc BL09','NAM','293750','2018-01-11 23:42:15'),
(7,'sp10.jpg','Balô hàn quốc BL10','NAM','290625','2018-01-11 23:42:15'),
(7,'sp11.jpg','Balô hàn quốc BL11','NU','293750','2018-01-11 23:42:15'),
(7,'sp12.jpg','Balô hàn quốc BL12','NU','290625','2018-01-11 23:42:15'),
(7,'sp13.jpg','Balô hàn quốc BL13','NU','292187.5','2018-01-11 23:42:15'),
(7,'sp14.jpg','Balô hàn quốc BL14','NU','292187.5','2018-01-11 23:42:15'),
(7,'sp15.jpg','Balô hàn quốc BL15','NU','292187.5','2018-01-11 23:42:15'),
(7,'sp16.jpg','Balô hàn quốc BL16','NU','291406.25','2018-01-11 23:42:15'),
(7,'sp17.jpg','Balô hàn quốc BL17','NU','292187.5','2018-01-11 23:42:15'),
(7,'sp18.jpg','Balô hàn quốc BL18','NU','292187.5','2018-01-11 23:42:15'),
(7,'sp19.jpg','Balô hàn quốc BL19','NU','291796.875','2018-01-11 23:42:15'),
(7,'sp20.jpg','Balô hàn quốc BL20','NU','291796.875','2018-01-11 23:42:15'),
(7,'sp21.jpg','Balô hàn quốc BL21','NU','292187.5','2018-01-11 23:42:15'),
(7,'sp22.jpg','Balô hàn quốc BL22','NU','291992.1875','2018-01-11 23:42:15');

