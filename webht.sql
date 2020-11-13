-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2020 lúc 03:40 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webht`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `díplayname` varchar(50) NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `díplayname`, `registration_date`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin', '2020-11-13 19:42:08'),
(110, ' Vutienhieu', '911', 'hiuhiu@gmail.com', 'hiuhiu', '0000-00-00 00:00:00'),
(111, ' phamvanchuong', '912', 'chuong@gmail.com', 'chuong', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_public` tinyint(4) DEFAULT 0,
  `createdate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ID` int(11) NOT NULL,
  `TENTAIKHOAN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MATKHAU` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `MAKICHHOAT` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `QUYEN` int(11) NOT NULL,
  `TRANGTHAI` enum('CHUAXACMINH','DAXACMINH') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`ID`, `TENTAIKHOAN`, `MATKHAU`, `EMAIL`, `MAKICHHOAT`, `QUYEN`, `TRANGTHAI`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'nguyen0@gmail.com', '1f2cc59b02c9cb95f5c5c6648140baef', 1, 'DAXACMINH'),
(2, 'quanly', '76ce09fc04225228897e61087b1172a8', 'ng00@gmail.com', '41470cd9d6af1a7e3ea2d46be0f9ce7b', 2, 'DAXACMINH'),
(3, 'giangvien', '2f830951c2e27fcf934a92d091971a02', 'n000@gmail.com', 'd1ad5f2bacc9463aafc5451c34cbf5ed', 3, 'DAXACMINH'),
(4, 'quanlye', 'b75f58301305183b958bf0488a88add8', '', 'b76c1ee42bdb9e0d1b5b1fa6b52a8208', 4, 'CHUAXACMINH'),
(5, 'sinhvien', '615ad206666f8086103305b8f77173f4', 'nguyencanh00@gmail.com', '03982466c087940d4e7e117e8d784efc', 4, 'DAXACMINH'),
(6, 'sinhvienn', '673d1daf2bcd4f86f8a044ff19c314e3', 'nguyesdf@gmail.com', '43027e97c6d5783b78a6f34240087e2c', 0, 'CHUAXACMINH');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `displayname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password1` varchar(50) NOT NULL,
  `password2` varchar(30) NOT NULL,
  `is_block` tinyint(4) NOT NULL DEFAULT 0,
  `permision` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
