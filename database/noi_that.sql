-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 05:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noi_that`
--

-- --------------------------------------------------------

--
-- Table structure for table `ct_don_hang`
--

CREATE TABLE `ct_don_hang` (
  `id_don_hang` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci COMMENT='Chi tiết đơn hàng';

--
-- Dumping data for table `ct_don_hang`
--

INSERT INTO `ct_don_hang` (`id_don_hang`, `id_san_pham`, `so_luong`) VALUES
(4, 7, 10),
(5, 4, 13),
(5, 7, 10),
(6, 4, 13),
(6, 7, 10),
(7, 3, 1),
(7, 4, 1),
(7, 5, 1),
(8, 3, 2),
(9, 3, 1),
(10, 6, 1),
(12, 4, 1),
(13, 3, 1),
(14, 4, 1),
(15, 3, 1),
(16, 4, 1),
(17, 3, 1),
(18, 3, 1),
(19, 3, 1),
(20, 3, 1),
(21, 6, 1),
(22, 6, 1),
(23, 3, 1),
(24, 3, 1),
(25, 3, 1),
(26, 3, 1),
(27, 3, 1),
(28, 3, 1),
(29, 3, 1),
(30, 3, 1),
(31, 3, 1),
(32, 5, 1),
(33, 3, 1),
(34, 3, 1),
(35, 3, 1),
(36, 3, 1),
(37, 3, 1),
(38, 3, 1),
(43, 5, 1),
(44, 5, 1),
(45, 4, 1),
(46, 3, 1),
(47, 3, 3),
(47, 5, 2),
(47, 6, 1),
(48, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id_don_hang` int(11) NOT NULL,
  `id_khach_hang` int(11) NOT NULL,
  `ghi_chu` text NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `ngay_dat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Đơn hàng';

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`id_don_hang`, `id_khach_hang`, `ghi_chu`, `id_user`, `ngay_dat`) VALUES
(1, 1, '', NULL, '2024-06-04 01:02:25'),
(2, 4, '', NULL, '2024-06-04 01:02:25'),
(3, 12, '', NULL, '2024-06-04 01:02:25'),
(4, 13, '', NULL, '2024-06-04 01:02:25'),
(5, 14, '', NULL, '2024-06-04 01:02:25'),
(6, 15, '', NULL, '2024-06-04 01:02:25'),
(7, 16, 'lẹ má', NULL, '2024-06-04 01:02:25'),
(8, 17, 'aaa', NULL, '2024-06-04 01:02:25'),
(9, 18, '', NULL, '2024-06-04 01:02:25'),
(10, 19, '', NULL, '2024-06-04 01:02:25'),
(11, 20, '', NULL, '2024-06-04 01:02:25'),
(12, 21, '', NULL, '2024-06-04 01:02:25'),
(13, 22, '', NULL, '2024-06-04 01:02:25'),
(14, 23, '', NULL, '2024-06-04 01:02:25'),
(15, 24, '', NULL, '2024-06-04 01:02:25'),
(16, 25, '', NULL, '2024-06-04 01:02:25'),
(17, 31, '', 0, '2024-06-04 01:02:25'),
(18, 32, '', 0, '2024-06-04 01:02:25'),
(19, 33, '', 0, '2024-06-04 01:02:25'),
(20, 34, '', 0, '2024-06-04 01:02:25'),
(21, 35, '', 0, '2024-06-04 01:02:25'),
(22, 36, '', 0, '2024-06-04 01:02:25'),
(23, 37, '', 0, '2024-06-04 01:02:25'),
(24, 45, '', 0, '2024-06-04 01:02:25'),
(25, 51, '', 0, '2024-06-04 01:02:25'),
(26, 53, '', 0, '2024-06-04 01:02:25'),
(27, 54, '', 0, '2024-06-04 01:02:25'),
(28, 55, 'aaaaaaaaaaaaaa', 0, '2024-06-04 01:02:25'),
(29, 56, 'sdsdsds', 1111111, '2024-06-04 01:02:25'),
(30, 57, '', 1111111, '2024-06-04 01:02:25'),
(31, 58, 'sssss', 1111111, '2024-06-04 01:02:25'),
(32, 61, 'ws', 123, '2024-06-04 01:02:25'),
(33, 62, 'qasasasa', 123, '2024-06-04 01:02:25'),
(34, 63, 'asasa', 123, '2024-06-04 01:02:25'),
(35, 64, 'asdada', 123, '2024-06-04 01:02:25'),
(36, 65, 'NTK12345', 123, '2024-06-04 01:02:25'),
(37, 66, '12345', 0, '2024-06-04 01:02:25'),
(38, 67, '12345', 19, '2024-06-04 01:02:25'),
(43, 84, 'aaaa12345', 19, '2024-06-04 01:02:25'),
(44, 85, 'KTN', 19, '2024-06-04 01:02:25'),
(45, 87, 'ÁASASA', 19, '2024-06-04 01:02:25'),
(46, 89, '', 19, '2024-06-04 01:03:48'),
(47, 90, '', 19, '2024-06-04 01:22:02'),
(48, 92, '', 19, '2024-06-04 02:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id_khach_hang` int(11) NOT NULL,
  `ten_khach_hang` varchar(150) NOT NULL,
  `sdt_khach_hang` varchar(50) NOT NULL,
  `email_khach_hang` varchar(150) NOT NULL,
  `dc_khach_hang` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Khách hàng';

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`id_khach_hang`, `ten_khach_hang`, `sdt_khach_hang`, `email_khach_hang`, `dc_khach_hang`) VALUES
(1, 'Nghĩa', '123456789', 'haha@nghia.com', 'safsdfsadfasd'),
(2, 'NghÄ©a', '123456789', 'haha@nghia.com', 'safsdfsadfasd'),
(3, '', '123456789', 'haha@nghia.com', 'safsdfsadfasd'),
(4, 'asdfasdf', '123456789', 'pdt@gmail.com', 'salkdfjalskdjfklsdfj'),
(5, 'afasdfasdf', 'afsdfasdfasd', 'pdt@gmail.com', 'asdfasdf'),
(6, 'Trần Thanh Phương', '6132165165121', 'pdt@gmail.com', 'salkdfjalskdjfklsdfj'),
(7, 'Trần Thanh Phương', '6132165165121', 'pdt@gmail.com', 'salkdfjalskdjfklsdfj'),
(8, 'Trần Thanh Phương', '6132165165121', 'pdt@gmail.com', 'salkdfjalskdjfklsdfj'),
(9, 'Trần Thanh Phương', '6132165165121', 'pdt@gmail.com', 'asdfasdf'),
(10, 'Trần Thanh Phương', '6132165165121', 'pdt@gmail.com', 'asdfasdf'),
(11, 'Trần Thanh Phương', '6132165165121', 'pdt@gmail.com', 'asdfasdf'),
(12, 'Trần Thanh Phương', '6132165165121', 'pdt@gmail.com', 'salkdfjalskdjfklsdfj'),
(13, 'Trần Thanh Phương', '6132165165121', 'pdt@gmail.com', 'salkdfjalskdjfklsdfj'),
(14, 'Trần Thanh Phương', '6132165165121', 'pdt@gmail.com', 'salkdfjalskdjfklsdfj'),
(15, 'Trần Thanh Phương', '6132165165121', 'pdt@gmail.com', 'salkdfjalskdjfklsdfj'),
(16, 'asdfasdf', '6132165165121', 'pdt@gmail.com', 'asdfasdf'),
(17, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(18, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(19, 'NTK', '0123456789', 'ntkha2709@gmail.com', ''),
(20, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(21, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(22, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(23, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(24, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(25, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(26, '', '', '', ''),
(27, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(28, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(29, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(30, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(31, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(32, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(33, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(34, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(35, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(36, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(37, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(41, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(42, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(43, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(44, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(45, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(46, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(47, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(48, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(49, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(50, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(51, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(52, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(53, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(54, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(55, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(56, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(57, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(58, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(59, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(60, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(61, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(62, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(63, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(64, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(65, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(66, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(67, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(68, 'test', '0987654321', '11@gmail.com', 'hádhj'),
(69, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(70, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(71, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(72, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noissss'),
(73, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noissss'),
(74, '1234', '0123456789', 'ntkha2709@gmail.com.com.com.com', 'Ha Noi'),
(75, '12345', '0987654321', '12345@gmail.com', '123456'),
(76, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(77, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(78, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(79, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(80, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(81, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(82, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(83, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(84, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(85, 'KTN', '0123456789', 'KTN@gmail.com', 'KTN'),
(86, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(87, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(88, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(89, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(90, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(91, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi'),
(92, 'NTK', '0123456789', 'ntkha2709@gmail.com', 'Ha Noi');

-- --------------------------------------------------------

--
-- Table structure for table `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `id_loai` int(11) NOT NULL,
  `ten_loai` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Loại sản phẩm';

--
-- Dumping data for table `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`id_loai`, `ten_loai`) VALUES
(1, 'Nội thất làm việc'),
(2, 'Nội thất phòng ngủ '),
(3, 'Nội thất nhà bếp'),
(4, 'Nội thất phòng khách');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(150) NOT NULL,
  `id_loai` int(11) NOT NULL,
  `don_gia` int(20) NOT NULL,
  `hinh` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Sản phẩm';

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `ten_sp`, `id_loai`, `don_gia`, `hinh`) VALUES
(3, 'Bộ bàn ghế làm việc 1', 1, 7413000, 'work1.jpg'),
(4, 'Bộ bàn ghế làm việc 2', 1, 6505000, 'work2.jpg'),
(5, 'Bộ bàn ghế làm việc 3', 1, 6222000, 'work3.jpg'),
(6, 'Bộ bàn ghế làm việc 4', 1, 8089000, 'work4.jpg'),
(7, 'Kệ sách 1', 1, 2830000, 'work5.jpg'),
(8, 'Kệ sách 2', 1, 4717000, 'work6.jpg'),
(9, 'Bộ bàn ghế làm việc 5', 1, 6368000, 'work7.jpg'),
(10, 'Sofa 1', 4, 6739000, 'living1.jpg'),
(11, 'Sofa 2', 4, 7536000, 'living2.jpg'),
(12, 'Sofa 3', 4, 4869000, 'living3.jpg'),
(13, 'Bộ sofa 1', 4, 8424000, 'living4.jpg'),
(14, 'Bộ sofa 2', 4, 16849000, 'living5.jpg'),
(15, 'Bộ sofa 3', 4, 16849000, 'living6.jpg'),
(16, 'Bộ sofa 4', 4, 10424000, 'living7.jpg'),
(17, 'Giường ngủ đơn 1', 2, 7750000, 'sleep1.jpg'),
(18, 'Giường ngủ đôi 1', 2, 11794000, 'sleep2.jpg'),
(19, 'Giường ngủ đôi 2', 2, 15169000, 'sleep3.jpg'),
(20, 'Giường ngủ đôi 3', 2, 12468000, 'sleep4.jpg'),
(21, 'Giường ngủ đôi 4', 2, 16512000, 'sleep5.jpg'),
(22, 'Giường ngủ đôi 5', 2, 17860000, 'sleep6.jpg'),
(23, 'Giường ngủ đôi 6', 2, 15164000, 'sleep7.jpg'),
(24, 'Bộ bàn ghế phòng ăn 1', 3, 16175000, 'dining1.jpg'),
(25, 'Bộ bàn ghế phòng ăn 2', 3, 10783000, 'dining2.jpg'),
(26, 'Bộ bàn ghế phòng ăn 3', 3, 12131000, 'dining3.jpg'),
(27, 'Bộ bàn ghế phòng ăn 4', 3, 25274000, 'dining4.jpg'),
(28, 'Bộ bàn ghế phòng ăn 5', 3, 16175000, 'dining5.jpg'),
(29, 'Bộ bàn ghế phòng ăn 6', 3, 23589000, 'dining6.jpg'),
(30, 'Bộ bàn ghế phòng ăn 7', 3, 32014000, 'dining7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(300) NOT NULL,
  `ho_ten` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(50) NOT NULL,
  `dia_chi` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci COMMENT='User';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `ho_ten`, `so_dien_thoai`, `dia_chi`, `role`) VALUES
(12, 'test2@gmail.com', 'ec6a6536ca304edf844d1d248a4f08dc', 'TEST lần 4', '000909099', 'test 2', 0),
(16, 'phuong@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Thanh PHương', '074027272', 'TEST địa chỉ', 0),
(18, 'kiet@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'Kiệt LÂm', '000009090', 'test địa chỉ Kiệt', 0),
(19, 'ntkha2709@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'NTK', '0123456789', 'Ha Noi', 1),
(20, '1@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1', '0123456789', 'Ha Noi', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  ADD PRIMARY KEY (`id_don_hang`,`id_san_pham`),
  ADD KEY `ct_don_hang_fk1` (`id_san_pham`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_don_hang`,`id_khach_hang`),
  ADD KEY `don_hang_fk1` (`id_khach_hang`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id_khach_hang`);

--
-- Indexes for table `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`id_loai`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `san_pham_fk1` (`id_loai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id_khach_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `id_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  ADD CONSTRAINT `ct_don_hang_fk1` FOREIGN KEY (`id_san_pham`) REFERENCES `san_pham` (`id_sp`),
  ADD CONSTRAINT `ct_don_hang_fk2` FOREIGN KEY (`id_don_hang`) REFERENCES `don_hang` (`id_don_hang`);

--
-- Constraints for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `don_hang_fk1` FOREIGN KEY (`id_khach_hang`) REFERENCES `khach_hang` (`id_khach_hang`);

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_fk1` FOREIGN KEY (`id_loai`) REFERENCES `loai_san_pham` (`id_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
