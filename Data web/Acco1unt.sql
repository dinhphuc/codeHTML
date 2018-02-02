-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 07, 2017 lúc 12:16 PM
-- Phiên bản máy phục vụ: 10.0.33-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `automyth_token`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Account`
--

CREATE TABLE `Account` (
  `id` int(11) NOT NULL,
  `user_id` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `fb_dtsg` text NOT NULL,
  `Token` text NOT NULL,
  `camxuc` text NOT NULL,
  `comments` text NOT NULL,
  `battatcmt` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Account`
--

INSERT INTO `Account` (`id`, `user_id`, `name`, `fb_dtsg`, `Token`, `camxuc`, `comments`, `battatcmt`) VALUES
(1, '123', 'Thanh Trà', 's', 'EAAAAUaZA8jlABAFVJd1DDWLEM0PKZBuk005ZASACMnBK1k5BNfxAHRj59oLvwZAcQVfQ52t6d9fuzINt8Lrh0fJXXdyzhG2kR48HqOnPZC98hCrvGnrSS0yuxeZCaQArNMorEtXSR5HFJrQoeHCENw2LCgSVq6xfkZD', 'LOVE', '<3', '1'),
(2, '123', 'Thuận', 's', 'EAAAAUaZA8jlABAFJ4OCCHwj7zGVPqrra637ac0mxG8eOnrli4vxXLgdcZAUoh7ZA0DnRcvkEE7duyCVPPNP8xZCbT5bUKmEECGIAvixZB5Idy6pl4z5BL7SlEgC9P3xZBNVi0uWWZC4gD86ldgYGlhUYalNdSJ6YFsZD', 'LOVE', '<3', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `Account`
--
ALTER TABLE `Account`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
