-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2023 lúc 08:04 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `abc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `ngay` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `email`, `admin_name`, `ngay`, `id_group`) VALUES
(2, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@gmail.com', 'Trí Hải', '2023-11-24 18:37:40', 0),
(3, 'kien', 'cabbea590c0edd4136b9aedc52f10aa1', 'kienttps18183@fpt.edu.vn', 'mr.kevin', '2021-10-23 13:51:13', 1),
(4, 'hai', '123123', 'hai@gmail.com', 'Trí Hải', '2023-11-25 13:51:25', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `baiviet_id` int(11) NOT NULL,
  `tenbaiviet` varchar(100) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `danhmuctin_id` int(11) NOT NULL,
  `baiviet_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`category_id`, `category_name`) VALUES
(1, 'Giày'),
(2, 'Đồng hồ'),
(3, 'Mũ'),
(4, 'Quần'),
(5, 'ÁO');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuctin`
--

CREATE TABLE `danhmuctin` (
  `danhmuctin_id` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuctin`
--

INSERT INTO `danhmuctin` (`danhmuctin_id`, `tendanhmuc`) VALUES
(1, 'Đồng hồ'),
(2, 'Mũ'),
(3, 'Quần'),
(4, 'Áo'),
(7, 'Giày');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `donhang_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mahang` varchar(50) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `ngaydathang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `trangthai` int(11) NOT NULL,
  `huydon` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`donhang_id`, `sanpham_id`, `soluong`, `mahang`, `khachhang_id`, `ngaydathang`, `trangthai`, `huydon`) VALUES
(30, 5, 1, '36905', 23, '2021-08-04 14:21:11', 0, 0),
(31, 2, 1, '97736', 24, '2021-08-04 14:21:14', 0, 0),
(32, 27, 1, '97736', 24, '2021-07-31 14:14:43', 0, 0),
(33, 2, 1, '86120', 25, '2021-07-31 14:17:07', 0, 0),
(34, 27, 1, '86120', 25, '2021-07-31 14:17:07', 0, 0),
(35, 2, 1, '92744', 26, '2021-07-31 14:17:27', 0, 0),
(36, 27, 1, '92744', 26, '2021-07-31 14:17:27', 0, 0),
(37, 2, 1, '41224', 27, '2021-08-04 11:24:45', 1, 0),
(38, 27, 1, '41224', 27, '2021-08-04 11:24:45', 1, 0),
(40, 5, 2, '81211', 20, '2021-08-04 16:11:30', 1, 2),
(43, 30, 1, '66192', 20, '2021-08-12 07:15:05', 0, 0),
(44, 7, 4, '17672', 34, '2023-11-24 21:22:44', 0, 0),
(45, 27, 4, '17672', 34, '2023-11-24 21:22:44', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaodich`
--

CREATE TABLE `giaodich` (
  `giaodich_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `magiaodich` varchar(100) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `khachhang_id` int(11) NOT NULL,
  `tinhtrangdon` int(11) NOT NULL,
  `huydon` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giaodich`
--

INSERT INTO `giaodich` (`giaodich_id`, `sanpham_id`, `soluong`, `magiaodich`, `ngaythang`, `khachhang_id`, `tinhtrangdon`, `huydon`) VALUES
(0, 5, 1, '45295', '2021-08-04 14:31:50', 0, 0, 1),
(0, 6, 1, '45295', '2021-08-04 14:31:50', 0, 0, 1),
(0, 5, 1, '36905', '2021-07-31 13:49:44', 23, 0, 0),
(0, 2, 1, '97736', '2021-07-31 14:14:43', 24, 0, 0),
(0, 27, 1, '97736', '2021-07-31 14:14:43', 24, 0, 0),
(0, 2, 1, '86120', '2021-07-31 14:17:07', 25, 0, 0),
(0, 27, 1, '86120', '2021-07-31 14:17:07', 25, 0, 0),
(0, 2, 1, '92744', '2021-07-31 14:17:27', 26, 0, 0),
(0, 27, 1, '92744', '2021-07-31 14:17:27', 26, 0, 0),
(0, 2, 1, '41224', '2021-08-04 11:24:45', 27, 1, 0),
(0, 27, 1, '41224', '2021-08-04 11:24:45', 27, 1, 0),
(0, 27, 1, '5441', '2021-07-31 21:20:42', 29, 0, 0),
(0, 5, 2, '81211', '2021-08-04 16:11:30', 20, 1, 2),
(0, 27, 1, '25390', '2021-08-12 07:05:19', 20, 1, 0),
(0, 6, 1, '81861', '2021-08-12 07:04:25', 32, 0, 2),
(0, 30, 1, '66192', '2021-08-12 07:15:05', 20, 0, 0),
(0, 7, 4, '17672', '2023-11-24 21:22:44', 34, 0, 0),
(0, 27, 4, '17672', '2023-11-24 21:22:44', 34, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `giohang_id` int(11) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `giasanpham` double NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`giohang_id`, `tensanpham`, `sanpham_id`, `giasanpham`, `hinhanh`, `soluong`) VALUES
(63, 'Áo thun ', 44, 149000, 'ao2.jpeg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `khachhang_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `giaohang` int(11) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`khachhang_id`, `name`, `phone`, `address`, `email`, `password`, `giaohang`, `note`) VALUES
(33, 'Nguyễn Trí Hải', '0343943640', 'Hh', 'hai@gmail.com', '4297f44b13955235245b2497399d7a93', 0, ''),
(34, 'kiệt nguyễn lê bá tuấn', '015645465', 'chơn tâm 01', 'kiet@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 'tuyet');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `sanpham_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sanpham_name` varchar(255) NOT NULL,
  `sanpham_chitiet` text NOT NULL,
  `sanpham_mota` text NOT NULL,
  `sanpham_gia` varchar(100) NOT NULL,
  `sanpham_giakhuyenmai` varchar(100) NOT NULL,
  `sanpham_active` int(11) NOT NULL,
  `sanpham_hot` int(11) NOT NULL,
  `sanpham_soluong` int(11) NOT NULL,
  `sanpham_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`sanpham_id`, `category_id`, `sanpham_name`, `sanpham_chitiet`, `sanpham_mota`, `sanpham_gia`, `sanpham_giakhuyenmai`, `sanpham_active`, `sanpham_hot`, `sanpham_soluong`, `sanpham_image`) VALUES
(42, 4, 'Quần đùi nam ', 'Vải kaki', 'đẹp', '149000', '69000', 0, 0, 100, 'quan1.jpg'),
(43, 5, 'Áo khoác dù', 'Vải dù', 'đẹp', '249.000', '149000', 0, 0, 100, 'ao1.jpg'),
(44, 5, 'Áo hoodie drew', 'ấm ấp', 'dày dặn', '390000', '249000', 0, 0, 100, 'ao5.jpg'),
(45, 5, 'Áo hoodie sọc', 'không sù lông', 'đẹp', '249.000', '149000', 0, 0, 100, 'ao4.jpg'),
(46, 5, 'Áo hoodie', 'Vải dày không xù lông', 'Đẹp', '249.000', '129000', 0, 0, 100, 'ao3.jpg'),
(47, 5, 'Áo thun ', 'Thoáng mát', 'Co giản', '149000', '69000', 0, 0, 100, 'ao2.jpeg'),
(49, 5, 'Áo jean nam', 'Vải cao cấp', 'Màu xanh đen', '490000', '290000', 0, 0, 100, 'ao6.jpg'),
(50, 4, 'Quần jean xám', 'Vải dày dặn', 'Đẹp', '249.000', '149000', 0, 0, 100, 'q2.jpg'),
(51, 4, 'Quần jean nam', 'Màu xanh phối họa tiết\r\n', 'Sang xịn', '249.000', '199000', 0, 0, 100, 'q1.jpg'),
(52, 4, 'Quần âu nam', 'Vải cao cấp ', 'Quần âu nam', '399000', '249000', 0, 0, 100, 'q3.jpg'),
(53, 4, 'Quần âu nam caro', 'cao cấp', 'đẹp', '249.000', '190000', 0, 0, 100, 'q4.jpg'),
(54, 4, 'Quần âu nam', 'Đẹp', 'Quần âu nam màu xanh', '249.000', '199000', 0, 0, 100, 'q.jpg'),
(55, 3, 'Mũ MLB', 'Sang xịn đẹp', 'Mũ Nam Nữ', '249.000', '149000', 0, 0, 100, 'u1.jpg'),
(56, 3, 'Mũ lưỡi trai', 'Đẹp', 'Mũ Lưỡi Trai ', '149000', '69000', 0, 0, 100, 'u2.jpg'),
(57, 3, 'Mũ vành tròn', 'Đẹp', 'Mũ vành tròn', '190000', '149000', 0, 0, 100, 'u3.jpg'),
(58, 3, 'Mũ vành tròn có họa tiết', 'Đẹp', 'Mũ vành tròn có họa tiết', '149000', '99000', 0, 0, 100, 'u4.jpg'),
(59, 3, 'Mũ jean', 'Vải jean cao cấp', 'Mũ Jean', '249.000', '199000', 0, 0, 100, 'u5.jpg'),
(60, 3, 'Mũ lưỡi trai trắng', 'Đẹp', 'Mũ trắng', '149000', '90000', 0, 0, 100, 'u6.jpg'),
(61, 2, 'Đồng hồ', 'Đẹp', 'Đồng hồ', '499000', '349000', 0, 0, 100, 'd1.jpg'),
(62, 2, 'Đồng hồ', 'Đẹp', 'Đồng hồ ', '399000', '249000', 0, 0, 100, 'd3.jpg'),
(63, 2, 'Đồng hồ', 'Đẹp', 'Đồng hồ', '399000', '149000', 0, 0, 100, 'd4.jpg'),
(64, 2, 'Đồng hồ', 'Đẹp', 'Đồng hồ', '490000', '199000', 0, 0, 100, 'd6.jpg'),
(65, 2, 'Đồng hồ', 'Đẹp', 'Đồng hồ', '249.000', '149000', 0, 0, 100, 'd11.jpg'),
(66, 2, 'Đồng hồ', 'Đẹp', 'Đồng hồ', '399000', '249000', 0, 0, 100, 'd22.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` varchar(100) NOT NULL,
  `slider_caption` text NOT NULL,
  `slider_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_image`, `slider_caption`, `slider_active`) VALUES
(1, 'b2.jpg', 'Chỉ khuyến mãi vào lúc :', 1),
(2, 'b3.jpg', 'slider 50%', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`baiviet_id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `danhmuctin`
--
ALTER TABLE `danhmuctin`
  ADD PRIMARY KEY (`danhmuctin_id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`donhang_id`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`giohang_id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`khachhang_id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sanpham_id`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `baiviet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `danhmuctin`
--
ALTER TABLE `danhmuctin`
  MODIFY `danhmuctin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `donhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `giohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
