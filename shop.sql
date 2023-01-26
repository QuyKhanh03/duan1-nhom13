-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 26, 2023 lúc 04:11 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `cate_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`cate_id`, `name`) VALUES
(1, 'Áo'),
(2, 'Quần');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `des` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `des`, `id_user`, `id_product`, `time`) VALUES
(3, 'good', 2, 18, '2022-12-06 10:05:37'),
(5, 'hello\r\n', 2, 18, '2022-12-06 10:11:41'),
(6, 'godd', 2, 19, '2022-12-06 10:17:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `date_order` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_user` int(11) NOT NULL,
  `totals` float NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id_order`, `date_order`, `id_user`, `totals`, `status`) VALUES
(35, '2022-12-01 03:27:54', 2, 20, 1),
(36, '2022-12-02 15:09:10', 8, 20, 1),
(37, '2022-12-01 12:34:10', 2, 20, 0),
(38, '2022-12-03 10:14:33', 2, 30, 0),
(39, '2022-12-06 16:29:50', 9, 170, 0),
(40, '2022-12-07 13:52:00', 2, 20, 0),
(41, '2022-12-07 13:53:59', 2, 200, 0),
(42, '2022-12-07 13:55:06', 2, 100, 0),
(43, '2022-12-07 14:01:18', 2, 80, 0),
(44, '2022-12-08 09:31:25', 2, 200, 0),
(45, '2022-12-09 15:41:17', 8, 150, 0),
(46, '2022-12-09 15:43:19', 8, 80, 0),
(47, '2022-12-16 13:40:35', 9, 520, 0),
(48, '2022-12-20 04:36:14', 2, 60, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `stt` int(11) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `quality` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`stt`, `name_product`, `quality`, `id_order`, `price`, `picture`) VALUES
(13, 'Áo phông xanh', 1, 35, 20, 'n_arrival_product12.jpg'),
(14, 'Áo phông xanh', 1, 36, 20, 'n_arrival_product12.jpg'),
(15, 'Áo phông xanh', 1, 37, 20, 'n_arrival_product12.jpg'),
(16, 'QUẦN JOGGER UN IN MF HAYHO', 1, 38, 30, '1.2.24.3.18.005.222.23-10200011-bst-1.jpg'),
(17, 'Quần jean nữ ngắn', 1, 39, 20, 'cart_img02.jpg'),
(18, 'Áo len', 5, 39, 150, 'n_arrival_product07.jpg'),
(19, 'Quần jean nữ ngắn', 1, 40, 20, 'cart_img02.jpg'),
(20, 'Quần jean nữ ngắn', 10, 41, 200, 'cart_img02.jpg'),
(21, 'Quần jean nữ ngắn', 5, 42, 100, 'cart_img02.jpg'),
(22, 'Quần jean nữ ngắn', 4, 43, 80, 'cart_img02.jpg'),
(23, 'Quần jean nữ ngắn', 10, 44, 200, 'cart_img02.jpg'),
(24, 'Áo len', 5, 45, 150, 'n_arrival_product07.jpg'),
(25, 'Áo phông xanh', 4, 46, 80, 'n_arrival_product12.jpg'),
(26, 'Quần jean nữ ngắn', 2, 47, 40, 'cart_img02.jpg'),
(27, 'Áo len', 16, 47, 480, 'n_arrival_product07.jpg'),
(28, 'Quần jean nữ ngắn', 3, 48, 60, 'cart_img02.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(1111) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name_product`, `image`, `price`, `description`, `quantity`, `cate_id`) VALUES
(18, 'Áo len', 'n_arrival_product07.jpg', 30, '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ÁO NỈ DA CÁ TRƠN BASIC SIÊU HOT \r\n\r\nÁo nỉ dài tay ᴠải thun da cá với 95% ѕợi bông Cotton + 5% ѕpandeх (để đảm bảo độ bền ᴠà cân bằng ᴠải tốt, chống nhăn )\r\nÁo thoát mồ hôi rất tốt, đàn hồi, co giãn thoải mái ,chất mịn, đanh, không bai xù, đổ lông sau khi giặt, áo bền màu khi sử dụng                            ', 11, 1),
(19, 'Quần jean nữ ngắn', 'cart_img02.jpg', 20, '                                                                                                                                ÁO NỈ DA CÁ TRƠN BASIC SIÊU HOT \r\n\r\nÁo nỉ dài tay ᴠải thun da cá với 95% ѕợi bông Cotton + 5% ѕpandeх (để đảm bảo độ bền ᴠà cân bằng ᴠải tốt, chống nhăn )\r\nÁo thoát mồ hôi rất tốt, đàn hồi, co giãn thoải mái ,chất mịn, đanh, không bai xù, đổ lông sau khi giặt, áo bền màu khi sử dụng                                                                                                                ', 9, 1),
(20, 'Áo phao', 'features_product04.jpg', 30, 'ÁO NỈ DA CÁ TRƠN BASIC SIÊU HOT \r\n\r\nÁo nỉ dài tay ᴠải thun da cá với 95% ѕợi bông Cotton + 5% ѕpandeх (để đảm bảo độ bền ᴠà cân bằng ᴠải tốt, chống nhăn )\r\nÁo thoát mồ hôi rất tốt, đàn hồi, co giãn thoải mái ,chất mịn, đanh, không bai xù, đổ lông sau khi giặt, áo bền màu khi sử dụng', 5, 1),
(22, 'Áo phông xanh', 'n_arrival_product12.jpg', 20, 'ÁO NỈ DA CÁ TRƠN BASIC SIÊU HOT \r\n\r\nÁo nỉ dài tay ᴠải thun da cá với 95% ѕợi bông Cotton + 5% ѕpandeх (để đảm bảo độ bền ᴠà cân bằng ᴠải tốt, chống nhăn )\r\nÁo thoát mồ hôi rất tốt, đàn hồi, co giãn thoải mái ,chất mịn, đanh, không bai xù, đổ lông sau khi giặt, áo bền màu khi sử dụng', 16, 1),
(24, 'QUẦN DÀI NAM BALLOON ĐÍNH PATCH W22', '1.2.24.3.21.004.222.01-10200011-bst-1.jpg', 30, '                                QUẦN DÀI NAM BALLOON ĐÍNH PATCH W22                            ', 10, 2),
(25, 'Áo sơ mi nam', 'n_arrival_product12.jpg', 29, 'ÁO NỈ DA CÁ TRƠN BASIC SIÊU HOT Áo nỉ dài tay ᴠải thun da cá với 95% ѕợi bông Cotton + 5% ѕpandeх (để đảm bảo độ bền ᴠà cân bằng ᴠải tốt, chống nhăn ) Áo thoát mồ hôi rất tốt, đàn hồi, co giãn thoải mái ,chất mịn, đanh, không bai xù, đổ lông sau khi giặt, áo bền màu khi sử dụng', 50, 1),
(26, 'QUẦN JOGGER UN IN MF HAYHO', '1.2.24.3.18.005.222.23-10200011-bst-1.jpg', 30, '                                                                QUẦN JOGGER UN IN MF HAYHO                                                        ', 10, 2),
(31, 'Áo hoodie', 'trending_product10.jpg', 40, '                                Áo Hoodie Nỉ với Chất liệu Nỉ Ngoại tốt; mang phong cách thời trang thời thượng các bạn trẻ; đặc biệt không những giúp bạn giữ ấm trong mùa lạnh mà còn có thể chống nắng, chống gió, chống bụi, chống rét                            ', 10, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id_role`, `fullname`) VALUES
(1, 'admin'),
(2, 'Người dùng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `email`, `address`, `phone`, `id_role`) VALUES
(1, 'Khanh Pham', '827ccb0eea8a706c4c34a16891f84e7b', 'phamkhanh@gmail.com', 'Trịnh văn bô', '1234567890', 2),
(2, 'Pham Khanh', '827ccb0eea8a706c4c34a16891f84e7b', 'khanh1@gmail.com', 'trinh van bo', '0981324706', 2),
(8, 'Khánh Cu To', '827ccb0eea8a706c4c34a16891f84e7b', 'khanhcuto@gmail.com', 'Hưng Hà', '0981222888', 2),
(9, 'Admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', 'Trinh Van Bo', '0981324706', 1),
(11, '1234', '827ccb0eea8a706c4c34a16891f84e7b', '123@gmail.com', '', '', 2),
(13, 'Khanh  ', '81dc9bdb52d04dc20036dbd8313ed055', 'khanh@khanh.com', '', '', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`stt`),
  ADD KEY `id_order` (`id_order`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`cate_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
