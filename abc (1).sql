-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2023 lúc 04:55 AM
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
  PRIMARY KEY (`baiviet_id`)
  KEY `fk_baiviet_danhmuctin` (`danhmuctin_id`),
  CONSTRAINT `fk_baiviet_danhmuctin` FOREIGN KEY (`danhmuctin_id`) REFERENCES `danhmuctin` (`danhmuctin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`baiviet_id`, `tenbaiviet`, `tomtat`, `noidung`, `danhmuctin_id`, `baiviet_img`) VALUES
(10, 'Phối áo len với áo khoác dài - Cách phối đồ nam mùa đông chuẩn fashionsita', 'Mỗi khi tiết trời đổ lạnh, những chiếc áo khoác dáng dài lại làm chao đảo giới trẻ với những mẫu mã vô cùng sành chảnh và thời trang của mình. Đây chắc hẳn là item không thể thiếu của những chàng trai đam mê style Hàn Quốc. Với áo khoác dài, anh em có rất nhiều option đa dạng, chẳng hạn như áo nỉ, áo thun dài, áo hoodie,.. Nhưng để diện mạo chuẩn idol Hàn Quốc nhất, các ông nên ưu tiên những mẫu áo len cổ lọ hoặc cổ tròn.\r\n\r\nChiếc áo len khi được phối cùng với áo khoác dài sẽ vừa giúp tổng thể trở nên thời thượng hơn vừa giữ ấm cho cơ thể.\r\n\r\nVề quần và phụ kiện thì mọi người có thể kết hợp với quần âu, quần kaki bó và đôi boot cao cổ.', 'Áo khoác dạ mix cùng quần kaki đen', 4, 'phoido.webp'),
(11, 'Hướng dẫn cách phân biệt Air Jordan 1 Real và Fake', 'Bạn đang cố gắng tìm hiểu cách phân biệt đôi Air Jordan 1 phối màu Volt Gold của Nike là thật hay giả? Thì đây là bài viết dành cho bạn. Authentic Shoes sẽ hướng dẫn bạn check đôi Air Jordan 1 Volt Gold qua bài viết này.\r\n\r\nNói một cách ngắn gọn, cách nhanh nhất để phát hiện Air Jordan 1 Volt Gold giả là nhìn vào nhãn ở mặt ngoài của lưỡi gà, vì một đôi giày fake không bao giờ có thể làm chính xác 100% đối với độ dày, font chữ và hình dạng của những dòng chữ có trên đó.', 'Kiểm tra tag size bên trong giày Air Jordan 1 Volt Gold ', 7, 'jor.jpg'),
(12, 'Cách mặc quần ', 'Bước 1 phải biết tự mặc quần\r\nBước 2 xỏ quần vào chân\r\nBước 3 kéo quần lên\r\nBước 4 gài nút, kéo ba gết \r\nthế là xong', 'hi', 3, 'q5.png');

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
(5, 'Áo');

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
(8, 'Áo'),
(9, 'Quần'),
(10, 'Mũ'),
(11, 'Đồng hồ'),
(12, 'Giày');

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
  PRIMARY KEY (`donghang_id`),
  KEY `fk_donhang_sanpham` (`sanpham_id`),
  KEY `fk_donhang_khachhang` (`khachhang_id`),
  CONSTRAINT `fk_donhang_sanpham` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`sanpham_id`),
  CONSTRAINT `fk_donhang_khachhang` FOREIGN KEY (`khachhang_id`) REFERENCES `khachhang` (`khachhang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`donhang_id`, `sanpham_id`, `soluong`, `mahang`, `khachhang_id`, `ngaydathang`, `trangthai`, `huydon`) VALUES
(3, 46, 5, '93554', 37, '2023-11-30 03:49:34', 0, 0);

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
  `huydon` int(11) NOT NULL DEFAULT 0,
   PRIMARY KEY (`donghang_id`),
  KEY `fk_giaodich_sanpham` (`sanpham_id`),
  KEY `fk_giaodich_khachhang` (`khachhang_id`),
  CONSTRAINT `fk_giaodich_sanpham` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`sanpham_id`),
  CONSTRAINT `fk_giaodich_khachhang` FOREIGN KEY (`khachhang_id`) REFERENCES `khachhang` (`khachhang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giaodich`
--

INSERT INTO `giaodich` (`giaodich_id`, `sanpham_id`, `soluong`, `magiaodich`, `ngaythang`, `khachhang_id`, `tinhtrangdon`, `huydon`) VALUES
(0, 46, 5, '93554', '2023-11-30 03:49:34', 37, 0, 0);

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
  PRIMARY KEY (`giohang_id`)
  KEY `fk_giohang_sanpham` (`sanpham_id`),
  CONSTRAINT `fk_giohang_sanpham` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`sanpham_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(34, 'kiệt nguyễn lê bá tuấn', '015645465', 'chơn tâm 01', 'kiet@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 'tuyet'),
(35, 'Nguyễn Trí Hải', '0343943640', 'Hh', 'xxxibsunflower@gmail.com', '4297f44b13955235245b2497399d7a93', 0, ''),
(36, 'Nguyễn Trí Hải', '0343943640', 'Hh', 'haitri@gmail.com', '4297f44b13955235245b2497399d7a93', 0, ''),
(37, 'Nguyễn Trí Hải', '0343943640', 'Hh', 'haitri@gmail.com', '4297f44b13955235245b2497399d7a93', 0, '123');

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
PRIMARY KEY (`sanpham_id`)
  KEY `fk_sanpham_danhmuc` (`category_id`),
  CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`category_id`) REFERENCES `danhmuc` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`sanpham_id`, `category_id`, `sanpham_name`, `sanpham_chitiet`, `sanpham_mota`, `sanpham_gia`, `sanpham_giakhuyenmai`, `sanpham_active`, `sanpham_hot`, `sanpham_soluong`, `sanpham_image`) VALUES
(42, 4, 'Quần đùi nam ', 'Vải kaki', 'đẹp', '149000', '69000', 0, 0, 100, 'quan1.jpg'),
(43, 5, 'Áo khoác dù', 'Vải dù', 'đẹp', '249.000', '149000', 0, 0, 100, 'ao1.jpg'),
(44, 5, 'Áo thun ', 'Co giãn ', 'Thoáng mát', '149000', '79000', 0, 0, 100, 'ao2.jpeg'),
(46, 5, 'Áo Hoodies', 'dddddddddddddddddddddddddep áo màu nâu vippro', 'dep', '140000', '120000', 0, 0, 10, 'ao4.jpg'),
(50, 1, 'Giày Nike Max 90', 'màu đỏ chứng tỏ <3 e', 'dep chat', '2320000', '2100000', 0, 0, 100, '101318_605068_87046.jpg'),
(51, 1, 'Giày Nike Jordan 1  đen Cổ cao', 'den va chat', 'dep', '2530000', '2200000', 0, 0, 100, '327be0b2-3ec1-4e5d-b2e5-a4583025cee6.webp'),
(52, 1, 'Giày Nike Jordan 1 Xanh Dương Cổ cao', 'đẹp', 'bền', '2320000', '210000', 0, 0, 100, 'jor.jpg'),
(53, 2, 'Đồng hồ fa', 'xin', 'dep', '140000', '120000', 0, 0, 100, 'd4.jpg'),
(54, 3, 'Mũ NewYork', 'xin', 'dep', '75000', '69000', 0, 0, 100, 'u1.jpg');

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
  MODIFY `baiviet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `danhmuctin`
--
ALTER TABLE `danhmuctin`
  MODIFY `danhmuctin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `donhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `giohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
