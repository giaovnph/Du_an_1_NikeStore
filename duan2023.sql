-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 08:28 PM
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

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `name`, `diachi`, `sdt`, `email`, `pttt`, `ngaydathang`, `tong`, `trangthai`) VALUES
(145, 1, 'admin', '88 Vĩnh Phúc', '12345678', 'truongtk@gmail.com', 1, '01:33:19 - 10/12/23', 11400000, 0),
(146, 1, 'admin', '88 Vĩnh Phúc', '12345678', 'truongtk@gmail.com', 1, '01:34:50 - 10/12/23', 1700000, 0),
(147, 1, 'admin', '88 Vĩnh Phúc', '12345678', 'truongtk@gmail.com', 1, '01:45:31 - 10/12/23', 3000000, 0),
(148, 1, 'admin', '88 Vĩnh Phúc', '12345678', 'truongtk@gmail.com', 1, '01:48:38 - 10/12/23', 1150000, 0),
(149, 1, 'admin', '88 Vĩnh Phúc', '12345678', 'truongtk@gmail.com', 1, '02:05:02 - 10/12/23', 3650000, 0),
(150, 31, 'hoa', 'Số 05 - Trịnh Văn Bô - Nam Từ Liêm - Hà Nội', '0956467898', 'hoacomay@gmail.com', 1, '02:24:49 - 10/12/23', 1150000, 0);

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

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idsp`, `ngaybinhluan`) VALUES
(49, 'Sản phẩm rất tốt', 32, 51, '2023-12-09'),
(50, 'Giày đi khá êm chân', 32, 39, '2023-12-09'),
(51, 'Toi đã mua nó vào tháng trước . Tôi rất hài lòng với sản phẩm này !', 31, 45, '2023-12-09');

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

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idsp`, `img`, `name`, `kichco`, `gia`, `soluong`, `thanhtien`, `idbill`) VALUES
(144, 1, 53, 'Product_34.webp', 'Nike Royal King', 36, 1150000, 2, 1150000, 145),
(145, 1, 52, 'Product_44.webp', 'Nike Jordan C6', 36, 1700000, 17, 5100000, 145),
(146, 1, 44, 'product_15.webp', 'Nike Raper 2C', 36, 1750000, 1, 1750000, 145),
(147, 1, 43, 'product_14.webp', 'Nike Men L1', 40, 3400000, 1, 3400000, 145),
(148, 1, 52, 'Product_44.webp', 'Nike Jordan C6', 36, 1700000, 2, 1700000, 146),
(149, 1, 38, 'product_9.png', 'Nike Royal C3', 36, 1850000, 1, 1850000, 147),
(150, 1, 53, 'Product_34.webp', 'Nike Royal King', 36, 1150000, 1, 1150000, 147),
(151, 1, 53, 'Product_34.webp', 'Nike Royal King', 36, 1150000, 1, 1150000, 148),
(152, 1, 37, 'product_8.png', 'Nike Barret 3z', 36, 1950000, 1, 1950000, 149),
(153, 1, 52, 'Product_44.webp', 'Nike Jordan C6', 36, 1700000, 1, 1700000, 149),
(154, 31, 53, 'Product_34.webp', 'Nike Royal King', 36, 1150000, 1, 1150000, 150);

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
(30, 'Nike J', 3050000, 'product_1.png', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 16),
(31, 'Nike Air RPK', 1950000, 'product_2.png', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 16),
(32, 'Nike S9 KaMo', 2450000, 'product_3.png', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 16),
(33, 'Nike Royal C9', 3750000, 'product_4.png', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 19),
(34, 'Nike Air Star', 3650000, 'product_5.png', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 19),
(35, 'Nike Baby Z', 1550000, 'product_6.png', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 18),
(36, 'Nike JK 3R', 1250000, 'product_7.png', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 18),
(37, 'Nike Barret 3z', 1950000, 'product_8.png', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 18),
(38, 'Nike Royal C3', 1850000, 'product_9.png', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 18),
(39, 'Nike S9 K3', 4150000, 'product_10.webp', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 19),
(40, 'Nike Cola A1', 2950000, 'product_11.webp', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 19),
(41, 'Nike JK C1', 1450000, 'product_12.webp', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 17),
(42, 'Nike Lady Killer', 3800000, 'product_13.webp', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 17),
(43, 'Nike Men L1', 3400000, 'product_14.webp', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 16),
(44, 'Nike Raper 2C', 1750000, 'product_15.webp', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 17),
(45, 'Nike Women 6S', 4650000, 'product_16.webp', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 17),
(51, 'Nike Air RamBo', 1560000, 'Product_48.webp', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 16),
(52, 'Nike Jordan C6', 1700000, 'Product_44.webp', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 19),
(53, 'Nike Royal King', 1150000, 'Product_34.webp', 'Mẫu giày mới nhất của nhãn hiệu Nike năm 2023. Kiểu dáng thể thao kết hợp phong cách đường phố. Sự lựa chọn hoàn hảo cho các bạn trẻ năng động', 0, 16);

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
(1, 'admin', '123456', 'truongtk@gmail.com', '88 Vĩnh Phúc', '12345678', 1),
(28, 'chien', '123', 'truongtkph40588@fpt.edu.vn', 'vinh phuc', '092133432423', 0),
(29, 'tkt', '123', 'abc@gmail.com', 'vinh phuc', '989897', 0),
(31, 'hoa', 'qwerty', 'hoacomay@gmail.com', 'Số 05 - Trịnh Văn Bô - Nam Từ Liêm - Hà Nội', '0956467898', 0),
(32, 'chien', 'qwerty', 'toilatoi0933@gmail.com', 'Số 07 - Phạm Văn Đồng - Bắc Từ Liêm - Hà Nội', '0945678999', 0);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
