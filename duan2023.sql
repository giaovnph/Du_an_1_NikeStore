-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 03:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pttt` tinyint(1) NOT NULL DEFAULT 1,
  `ngaydathang` varchar(50) DEFAULT NULL,
  `tong` int(10) NOT NULL DEFAULT 0,
  `trangthai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idsp` int(10) NOT NULL,
  `ngaybinhluan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idsp` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `kichco` int(10) NOT NULL,
  `gia` int(10) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(16, 'Nam'),
(17, 'Nữ'),
(18, 'Trẻ Em'),
(19, 'Mới và nổi bật');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gia` double DEFAULT 0,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(10) DEFAULT 0,
  `danhmuc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `gia`, `img`, `mota`, `luotxem`, `danhmuc`) VALUES
(30, 'Nike J', 45, 'product_1.png', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 16),
(31, 'Nike Air RPK', 89, 'product_2.png', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 16),
(32, 'Nike S9 KaMo', 99, 'product_3.png', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 16),
(33, 'Nike Royal C9', 68, 'product_4.png', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 19),
(34, 'Nike Air Star', 78, 'product_5.png', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 19),
(35, 'Nike Baby Z', 45, 'product_6.png', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 18),
(36, 'Nike JK 3R', 89, 'product_7.png', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 18),
(37, 'Nike Barret 3z', 67, 'product_8.png', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 18),
(38, 'Nike Royal C3', 67, 'product_9.png', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 18),
(39, 'Nike S9 K3', 45, 'product_10.webp', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 19),
(40, 'Nike Cola A1', 56, 'product_11.webp', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 19),
(41, 'Nike JK C1', 90, 'product_12.webp', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 17),
(42, 'Nike Lady Killer', 88, 'product_13.webp', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 17),
(43, 'Nike Men L1', 90, 'product_14.webp', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 16),
(44, 'Nike Raper 2C', 45, 'product_15.webp', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 17),
(45, 'Nike Women 6S', 35, 'product_16.webp', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 17);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `sdt` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `diachi`, `sdt`, `role`) VALUES
(1, 'admin', '123456', 'truongtk@gmail.com', '88 Vĩnh Phúc', '126789', 1),
(28, 'chien', '123', 'truongtkph40588@fpt.edu.vn', 'vinh phuc', '092133432423', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sp_dm` (`danhmuc`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sp_dm` FOREIGN KEY (`danhmuc`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
