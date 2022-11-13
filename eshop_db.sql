-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2022 lúc 03:17 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `eshop_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `url_address` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `post` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime NOT NULL,
  `user_url` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `category`, `disabled`, `parent`) VALUES
(12, 'Adventure', 0, 0),
(13, 'Fantasy', 0, 0),
(14, 'Isekai', 0, 0),
(15, 'Horror', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(4, 'Hiệp', 'thanhhiep77777@gmail.com', 'Thank you', 'Helelhehe', '2022-04-23 14:25:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `disabled` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `countries`
--

INSERT INTO `countries` (`id`, `country`, `disabled`) VALUES
(1, 'Viet Nam', 0),
(2, 'Thailand', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `user_url` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_address` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` double NOT NULL DEFAULT 0,
  `country` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax` double DEFAULT 0,
  `shipping` double DEFAULT 0,
  `date` datetime NOT NULL,
  `sessionid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `home_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_url`, `delivery_address`, `total`, `country`, `state`, `zip`, `tax`, `shipping`, `date`, `sessionid`, `home_phone`, `mobile_phone`) VALUES
(5, 'QY2sebop10ywTgVYPx9VZVQ2tiKiDfjdDzoyVRuVK1vURNx4n', 'Ninh Kieu Thot Not', 20, 'Viet Nam', 'Can Tho', '1', 0, 0, '2022-03-25 07:00:02', 'tk6vcrtcgts8bhg0hn4vq8andq', '', '0962785101'),
(12, 'x6KMcoAUVcaWnH0wRl3pfEgQ7QQkA80VWdjMjmGBgp5BVO782X1', '49 Ấp Mới ', 1741000, 'Viet Nam', 'Can Tho', '2222', 0, 0, '2022-04-22 06:36:55', 'mf5718ntk2b3goa0nd5dh7oqaj', '0362550694', '0362550694'),
(13, 'x6KMcoAUVcaWnH0wRl3pfEgQ7QQkA80VWdjMjmGBgp5BVO782X1', '49 Ấp Mới ', 1807000, 'Thailand', 'Krung Thep Maha Nakh', '960000', 0, 0, '2022-04-23 14:09:12', '2502gqa5jpsf241ko7ghuel888', '0362550694', '0362550694'),
(14, '36YF1sfTIexxF2hlDo7zdniavs', 'Viet Nam ', 50000, 'Viet Nam', 'Can Tho', '94000', 0, 0, '2022-11-13 15:01:44', 'ecsqmuohlqfnnc2a474ugpl44j', '0913854605', '000000000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) NOT NULL,
  `orderid` bigint(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `total` double NOT NULL,
  `productid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `orderid`, `qty`, `description`, `amount`, `total`, `productid`) VALUES
(11, 5, 2, 'T-Shirt', 10, 20, 10),
(12, 6, 1, 'T-Shirt', 10, 10, 10),
(13, 7, 1, 'Tinh Chất Paula’s Choice Niacinamide 20% Treatment', 1512000, 1512000, 17),
(14, 7, 1, 'Serum L’Oreal Revitalift 1.5% Hyaluronic Acid 30ml', 229000, 229000, 19),
(15, 8, 1, 'Treatment Paula’s Choice Advanced Pore Refining 4% BHA 30ml', 891000, 891000, 13),
(16, 8, 1, 'Tinh Chất Paula’s Choice Niacinamide 20% Treatment', 1512000, 1512000, 17),
(17, 9, 1, 'Treatment Paula’s Choice Advanced Pore Refining 4% BHA 30ml', 891000, 891000, 13),
(18, 10, 1, 'Serum L’Oreal Revitalift 1.5% Hyaluronic Acid 30ml', 229000, 229000, 19),
(19, 11, 1, 'Tinh Chất Paula’s Choice Niacinamide 20% Treatment', 1512000, 1512000, 17),
(20, 11, 1, 'Serum L’Oreal Revitalift 1.5% Hyaluronic Acid 30ml', 229000, 229000, 19),
(21, 12, 1, 'Tinh Chất Paula’s Choice Niacinamide 20% Treatment', 1512000, 1512000, 17),
(22, 12, 1, 'Serum L’Oreal Revitalift 1.5% Hyaluronic Acid 30ml', 229000, 229000, 19),
(23, 13, 1, 'Treatment Paula’s Choice Advanced Pore Refining 4% BHA 30ml', 891000, 891000, 13),
(24, 13, 4, 'Serum L’Oreal Revitalift 1.5% Hyaluronic Acid 30ml', 229000, 916000, 19),
(25, 14, 1, 'Doraemon Hoạt Hình Màu - Tập 1 (Tái Bản 2020)', 50000, 50000, 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `user_url` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image3` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image4` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime NOT NULL,
  `slag` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `user_url`, `description`, `category`, `price`, `quantity`, `image`, `image2`, `image3`, `image4`, `date`, `slag`) VALUES
(1, 'HqHCpOBVjr6w1PQ1iZWODgmxEpxunXlr', 'Dragon Ball Full Color Phần Bốn Frieza Đại Đế Tập 01', 13, 77000, 200, 'uploads/product/dragon-ball-full-color-phan-bon-frieza-dai-de-tap-01_e98165f426d84371bc1726e1a8da8228_master.jpg', 'uploads/product/dragon-ball-full-color-phan-bon-frieza-dai-de-tap-01_e98165f426d84371bc1726e1a8da8228_master.jpg', 'uploads/product/dragon_ball_full_color_-_frieza_dai_de_-_tap_1_-_postcard__mau_1__2.jpg', 'uploads/product/dragon_ball_full_color_-_frieza_dai_de_-_tap_1_-_postcard__mau_2__2.jpg', '2022-11-13 13:51:12', 'dragon-ball-full-color-phan-bon-frieza-dai-de-tap-01'),
(3, 'HqHCpOBVjr6w1PQ1iZWODgmxEpxunXlr', 'OVERLORD - Tập 9 (Phiên Bản Manga)', 14, 38000, 200, 'uploads/product/overlord-9-_manga_---b_a-1---m_t-trong.jpg', 'uploads/product/overlord_9_manga_-_b_a_1_-_m_t_ngo_i.jpg', 'uploads/product/overlord-9-_manga_---b_a-1---m_t-trong.jpg', 'uploads/product/overlord_9_manga_-_b_a_1_-_m_t_ngo_i.jpg', '2022-11-13 14:47:01', 'overlord-tap-9-phien-ban-manga'),
(4, 'HqHCpOBVjr6w1PQ1iZWODgmxEpxunXlr', 'Attack On Titan Omnibus 1 (Tập 1 - 3)\r\n', 15, 350000, 200, 'uploads/product/ae1915c0da7babc312caf4a2d8d67484.jpg.webp', 'uploads/product/3184ae3d83efde624295a51545ba9c06.jpg', 'uploads/product/4d13778effd22c20ca8171ef02cfacde.jpg.webp', 'uploads/product/76e453b96d837c2705d6eaba462b9a39.jpg.webp', '2022-11-13 14:53:15', 'attack-on-tittan-omnimus-1-tap-01-03'),
(19, 'HqHCpOBVjr6w1PQ1iZWODgmxEpxunXlr', 'Doraemon Hoạt Hình Màu - Tập 1 (Tái Bản 2020)', 12, 50000, 200, 'uploads/product/image_209573.jpg', 'uploads/product/image_209573.jpg', 'uploads/product/2021_01_13_10_06_18_3-390x510.jpg', 'uploads/product/2021_01_13_10_06_18_2-390x510.jpg', '2022-04-13 16:49:54', 'doraemon-hoat-hinh-mau-tap-01-tai-ban-2020'),
(20, 'HqHCpOBVjr6w1PQ1iZWODgmxEpxunXlr', 'Bộ Sách Thanh Gươm Diệt Quỷ - Kimetsu No Yaiba (Trọn Bộ 23 Tập)', 13, 575000, 200, 'uploads/product/z3680312186383_32a55c39695c9d9c11a3fa0248b56c5d.jpg', 'uploads/product/z3680312186383_32a55c39695c9d9c11a3fa0248b56c5d.jpg', 'uploads/product/z3680312186383_32a55c39695c9d9c11a3fa0248b56c5d.jpg', 'uploads/product/z3680312186383_32a55c39695c9d9c11a3fa0248b56c5d.jpg', '2022-04-23 14:34:47', 'bo-sach-thanh-guom-diet-quy-tron-bo-23-tap');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `setting` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(2048) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `setting`, `value`, `type`) VALUES
(1, 'phone_number', '+19247198473194', ''),
(2, 'email', 'voduchuy2001@gmail.com', ''),
(3, 'facebook_link', 'https://www.facebook.com/Thanhhiep2k1/', ''),
(4, 'twitter_link', '', ''),
(9, 'contact_info', 'E-Shopper Inc.\r\n\r\n<b>935 W. Webster Ave New Streets Chicago, IL 60614, NY</b>\r\n\r\nNewyork USA\r\n\r\nMobile: +2346 17 38 93\r\n\r\nFax: 1-714-252-0026\r\n\r\nEmail: info@e-shopper.com', 'textarea'),
(10, 'instagram_link', 'https://hehe.instagram', ''),
(11, 'youtube_link', 'https://youtube.com/hehe/', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int(11) NOT NULL,
  `header1_text` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `header2_text` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slider_images`
--

INSERT INTO `slider_images` (`id`, `header1_text`, `header2_text`, `text`, `link`, `image`, `image2`, `disabled`) VALUES
(6, '.', '.', '.', '.', 'uploads/sliders/fNDmLKuRJUuNqFoVv5TLYLYFEB7jIhltQDjYDZtuK2SjbC2CX47zh2OgWEuq.jpg', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `state` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `disabled` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `states`
--

INSERT INTO `states` (`id`, `parent`, `state`, `disabled`) VALUES
(1, 1, 'Can Tho', 0),
(2, 1, 'HCM', 0),
(3, 2, 'Krung Thep Maha Nakhon', 0),
(4, 2, 'Phuket', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `url_address` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `rank` varchar(8) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `url_address`, `name`, `email`, `password`, `date`, `rank`) VALUES
(4, 'HqHCpOBVjr6w1PQ1iZWODgmxEpxunXlr', 'Admin', 'admin@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', '2022-03-25 06:47:01', 'admin'),
(5, 'QY2sebop10ywTgVYPx9VZVQ2tiKiDfjdDzoyVRuVK1vURNx4n', 'Tuyet', 'ttuyet@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', '2022-03-25 06:47:36', 'customer'),
(6, 'PkyPpiG5CmRdYPtFd3oUucj0U0cdSAFecGEpkv', 'Hiep', 'hiep@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2022-04-21 19:27:26', 'customer'),
(7, 'x6KMcoAUVcaWnH0wRl3pfEgQ7QQkA80VWdjMjmGBgp5BVO782X1', 'Nguyễn Thành Hiệp', 'thanhhiep77777@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2022-04-22 05:48:13', 'customer'),
(8, '36YF1sfTIexxF2hlDo7zdniavs', 'thao', 'nghaongu@gmail.com', 'f40f8165b7ac94315dd2cd66eb55157f5d9d81e1', '2022-11-13 15:00:44', 'customer');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url_address` (`url_address`),
  ADD KEY `title` (`title`),
  ADD KEY `image` (`image`),
  ADD KEY `user_url` (`user_url`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`),
  ADD KEY `disabled` (`disabled`),
  ADD KEY `parent` (`parent`);

--
-- Chỉ mục cho bảng `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `subject` (`subject`),
  ADD KEY `name` (`name`);

--
-- Chỉ mục cho bảng `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disabled` (`disabled`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`user_url`),
  ADD KEY `date` (`date`),
  ADD KEY `sessionid` (`sessionid`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderid` (`orderid`),
  ADD KEY `description` (`description`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slag` (`slag`),
  ADD KEY `date` (`date`),
  ADD KEY `quantity` (`quantity`),
  ADD KEY `price` (`price`),
  ADD KEY `category` (`category`),
  ADD KEY `description` (`description`),
  ADD KEY `user_url` (`user_url`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setting` (`setting`);

--
-- Chỉ mục cho bảng `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disabled` (`disabled`);

--
-- Chỉ mục cho bảng `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`),
  ADD KEY `disabled` (`disabled`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url_address` (`url_address`),
  ADD KEY `email` (`email`),
  ADD KEY `name` (`name`),
  ADD KEY `rank` (`rank`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
