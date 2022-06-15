-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 03, 2021 lúc 12:29 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webgr09`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminUser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminPass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminLever` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `adminLever`) VALUES
(1, 'Admin', 'admin@gmail.com', 'Admin', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_ward` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_district` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `orderId` int(11) NOT NULL,
  `orderNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `orderDate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grandTotal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `orderStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detailId` int(11) NOT NULL,
  `orderNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productId` int(11) UNSIGNED NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ward` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `paymentId` int(11) NOT NULL,
  `paymentNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paymentMethod` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) UNSIGNED NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productPrice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productDesc` text COLLATE utf8_unicode_ci NOT NULL,
  `productMovement` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productStrap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productSize` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productImage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productImageDetail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productDetail1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productDetail2` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `productPrice`, `productDesc`, `productMovement`, `productStrap`, `productSize`, `productImage`, `productImageDetail`, `productDetail1`, `productDetail2`) VALUES
(1, ' RA-NB0104', '200', 'This sophisticated ORIENT 32mm mechanical watch showcases a stainless steel case and a stylish white dial.Complementing its sophisticated design are a stretched straight bar index and an hour markers of rhinestones on the dial.This model supports continuous running time of 40 hours and water resistance of 100 meters.', 'Mechanical', 'Leather', '32', '11638437707.jpg', '11035am.jpg', 'Stainless Steel Case', 'Water Resistance 100m'),
(2, ' RA-NB0105S', '200', 'This sophisticated ORIENT 32mm mechanical watch showcases a stainless steel case and a stylish white dial.Complementing its sophisticated design are a stretched straight bar index and an hour markers of rhinestones on the dial.This model supports continuous running time of 40 hours and water resistance of 100 meters.', 'Mechanical', 'Leather', '32', '21638437783.jpg', '21036am.jpg', 'Stainless Steel Case', 'Water Resistance 100m'),
(3, ' RA-NR2004S', '180', 'This is Orient contemporary mechanical watch with date for Ladies.  Powered by an in-house manufactured automatic Calibre 55744, tthis new timepiece expertly balances a precision mechanical movement with modern design and fashion-forward colour combinations. An attractive see-through case back enhances the refined aesthetic design. The simple and clean design equipped with sapphire crystal provide a perfect accent for any occasion.', 'Mechanical', 'Leather', '32', '31638437847.jpg', '31037am.jpg', 'Stainless Steel Case', 'Water Resistance 50m'),
(4, ' RA-NR2005S', '180', 'This is Orient contemporary mechanical watch with date for Ladies.  Powered by an in-house manufactured automatic Calibre 55744, tthis new timepiece expertly balances a precision mechanical movement with modern design and fashion-forward colour combinations. An attractive see-through case back enhances the refined aesthetic design. The simple and clean design equipped with sapphire crystal provide a perfect accent for any occasion.', 'Mechanical', 'Leather', '32', '41638437885.jpg', '41038am.jpg', 'Stainless Steel Case', 'Water Resistance 50m'),
(5, ' RA-AR0004S', '270', '\"This new watch Contemporary Semi-skeleton with small second is introduced in our collection as a new, definitive model to lead the Contemporary collection.\r\n\r\nTo strengthen the Contemporary collection with semi-skeleton & small second model, we developed the new “Cal. F6S,” which adds the small second function to our standard Cal.F6. This new Caliber perfectly balances each element on the dial - skeleton at 9 o’clock, small second hand at 6 and ORIENT & Lion logo at 12. The semi-skeleton overlapping small seconds subdial adds interest and offers a glimpse of the movement of the escape wheel. Also, the dial is double-layered for a deep, three-dimensional look, drawing the eye to the movement of both hour and minute hands. Its 40.8mm size case has a sapphire glass to stage the beauty of the mechanical movement, and RA-AR0004S supports water resistance of 50 meters.\"', 'Mechanical', 'Leather', '40.8', '51638437925.jpg', '51038am.jpg', 'Stainless Steel Case', 'Water Resistance 50m'),
(6, ' RA-AR0005Y', '270', '\"This new watch Contemporary Semi-skeleton with small second is introduced in our collection as a new, definitive model to lead the Contemporary collection.\r\n\r\nTo strengthen the Contemporary collection with semi-skeleton & small second model, we developed the new “Cal. F6S,” which adds the small second function to our standard Cal.F6. This new Caliber perfectly balances each element on the dial - skeleton at 9 o’clock, small second hand at 6 and ORIENT & Lion logo at 12. The semi-skeleton overlapping small seconds subdial adds interest and offers a glimpse of the movement of the escape wheel. Also, the dial is double-layered for a deep, three-dimensional look, drawing the eye to the movement of both hour and minute hands. Its 40.8mm size case has a sapphire glass to stage the beauty of the mechanical movement, and RA-AR0004S supports water resistance of 50 meters.\"', 'Mechanical', 'Leather', '40.8', '61638437980.jpg', '61039am.jpg', '\" Stainless Steel Case \"', 'Water Resistance 50m'),
(7, ' RA-AR0004S', '270', '\"This new watch Contemporary Semi-skeleton with small second is introduced in our collection as a new, definitive model to lead the Contemporary collection.\r\n\r\nTo strengthen the Contemporary collection with semi-skeleton & small second model, we developed the new “Cal. F6S,” which adds the small second function to our standard Cal.F6. This new Caliber perfectly balances each element on the dial - skeleton at 9 o’clock, small second hand at 6 and ORIENT & Lion logo at 12. The semi-skeleton overlapping small seconds subdial adds interest and offers a glimpse of the movement of the escape wheel. Also, the dial is double-layered for a deep, three-dimensional look, drawing the eye to the movement of both hour and minute hands. Its 40.8mm size case has a sapphire glass to stage the beauty of the mechanical movement, and RA-AR0004S supports water resistance of 50 meters.\"', 'Mechanical', 'Leather', '40.8', '51638438039.jpg', '51040am.jpg', 'Stainless Steel Case', 'Water Resistance 50m'),
(8, 'RA-NB0101B', '450', 'This sophisticated ORIENT 32mm mechanical watch showcases a stainless steel case and a stylish black dial.Complementing its sophisticated design are a stretched straight bar index and an hour markers of rhinestones on the dial.This model supports continuous running time of 40 hours and water resistance of 100 meters.', 'Mechanical', 'Metal', '32', '101638438184.jpg', '101043am.jpg', 'Stainless Steel Case', 'Water Resistance 100m'),
(9, 'RA-NB0102S', '450', 'This sophisticated ORIENT 32mm mechanical watch showcases a stainless steel case and a stylish black dial.Complementing its sophisticated design are a stretched straight bar index and an hour markers of rhinestones on the dial.This model supports continuous running time of 40 hours and water resistance of 100 meters.', 'Mechanical', 'Metal', '32', '111638438221.jpg', '111043am.jpg', '\" Stainless Steel Case \"', 'Water Resistance 100m'),
(10, 'RA-NB0103Q', '450', 'This sophisticated ORIENT 32mm mechanical watch showcases a stainless steel case and a stylish black dial.Complementing its sophisticated design are a stretched straight bar index and an hour markers of rhinestones on the dial.This model supports continuous running time of 40 hours and water resistance of 100 meters.', 'Mechanical', 'Metal', '32', '121638438273.jpg', '121044am.jpg', 'Stainless Steel Case', 'Water Resistance 100m'),
(11, ' RA-NR2001G', '520', 'This is Orient contemporary mechanical watch with date for Ladies.  Powered by an in-house manufactured automatic Calibre 55744, tthis new timepiece expertly balances a precision mechanical movement with modern design and fashion-forward colour combinations. An attractive see-through case back enhances the refined aesthetic design. The simple and clean design equipped with sapphire crystal provide a perfect accent for any occasion.', 'Mechanical', 'Metal', '32', '111638438373.jpg', '111046am.jpg', '\" Stainless Steel Case \"', 'Water Resistance 50m'),
(12, 'RA-NR2002P', '500', 'This is Orient contemporary mechanical watch with date for Ladies.  Powered by an in-house manufactured automatic Calibre 55744, tthis new timepiece expertly balances a precision mechanical movement with modern design and fashion-forward colour combinations. An attractive see-through case back enhances the refined aesthetic design. The simple and clean design equipped with sapphire crystal provide a perfect accent for any occasion.', 'Mechanical', 'Metal', '32', '131638438411.jpg', '131046am.jpg', '\" Stainless Steel Case \"', 'Water Resistance 50m'),
(13, ' RA-NR2003S', '500', 'This is Orient contemporary mechanical watch with date for Ladies.  Powered by an in-house manufactured automatic Calibre 55744, tthis new timepiece expertly balances a precision mechanical movement with modern design and fashion-forward colour combinations. An attractive see-through case back enhances the refined aesthetic design. The simple and clean design equipped with sapphire crystal provide a perfect accent for any occasion.', 'Mechanical', 'Metal', '32', '141638438553.jpg', '141049am.jpg', '\" Stainless Steel Case \"', 'Water Resistance 50m'),
(14, 'RA-AR0002B', '600', '\"This new watch we call Contemporary Semi-skeleton with small second is introduced in our collection as a new, definitive model to lead the Contemporary collection.\r\n\r\nTo strengthen the Contemporary collection with semi-skeleton & small second model, we developed the new “Cal. F6S,” which adds the small second function to our standard Cal.F6. This new Caliber perfectly balances each element on the dial - skeleton at 9 o’clock, small second hand at 6 and ORIENT & Lion logo at 12. The semi-skeleton overlapping small seconds sub dial adds interest and offers a glimpse of the movement of the escape wheel. Also, the dial is double-layered for a deep, three-dimensional look, drawing the eye to the movement of both hour and minute hands. Its 40.8mm size case has a sapphire glass to stage the beauty of the mechanical movement, and RA-AR0002B supports water resistance of 50 meters.\"', 'Mechanical', 'Metal', '40.8', '171638439111.jpg', '171058am.jpg', '\" Stainless Steel Case \"', 'Water Resistance 50m'),
(15, ' RA-AR0003L', '600', '\"This new watch we call Contemporary Semi-skeleton with small second is introduced in our collection as a new, definitive model to lead the Contemporary collection.\r\n\r\nTo strengthen the Contemporary collection with semi-skeleton & small second model, we developed the new “Cal. F6S,” which adds the small second function to our standard Cal.F6. This new Caliber perfectly balances each element on the dial - skeleton at 9 o’clock, small second hand at 6 and ORIENT & Lion logo at 12. The semi-skeleton overlapping small seconds subdial adds interest and offers a glimpse of the movement of the escape wheel. Also, the dial is double-layered for a deep, three-dimensional look, drawing the eye to the movement of both hour and minute hands. Its 40.8mm size case has a sapphire glass to stage the beauty of the mechanical movement, and RA-AR0003L supports water resistance of 50 meters/\"', 'Mechanical', 'Metal', '40.8', '181638439152.jpg', '181059am.jpg', '\" Stainless Steel Case \"', 'Water Resistance 50m'),
(16, ' GW01008W', '300', 'The sophisticated ORIENT 38mm quartz watch features a stainless steel gold case, white dial, and crocodile textured classic band. Distinguished features of elegance include stick-style hour markers, gold hands, and a convenient date aperture at the 6 o’clock position. The GW01008W is designed with sapphire glass for additional protection and supports water resistance of 50 meters.', 'Quartz', 'Leather', '38', '211638439499.jpg', '211104am.jpg', 'Stainless Steel Case', 'Water Resistance 50m'),
(17, ' GW01009B', '300', 'The sophisticated ORIENT 38mm quartz watch features a stainless steel case, black dial, and crocodile textured classic band. Distinguished features of sophistication include stick-style hour markers, silver hands, and a convenient date aperture at the 6 o’clock position. The GW01009B is designed with sapphire glass for additional protection and supports water resistance of 50 meters.', 'Quartz', 'Leather', '38', '221638439537.jpg', '221105am.jpg', 'Stainless Steel Case', 'Water Resistance 50m'),
(18, 'GW0100DB', '350', 'This elegant ORIENT 38mm quartz watch showcases a stainless steel dark gray case, black dial, and crocodile textured classic band. Notable features of sophistication include a convenient date aperture at the 6 o’clock position, tastefully designed silver roman numeral hour markers, silver hands, and sapphire glass for additional protection. The GW0100DB supports 50 meters of water resistance.', 'Quartz', 'Leather', '38', '231638439579.jpg', '231106am.jpg', 'Stainless Steel Case', 'Water Resistance 50m'),
(19, 'GW0100EW', '350', 'This elegant ORIENT 38mm quartz watch showcases a stainless steel rose gold case, white dial, and crocodile textured classic band. Notable features of sophistication include a convenient date aperture at the 6 o’clock position, tastefully designed black roman numeral hour markers, black hands, and sapphire glass for additional protection. The GW0100EW supports 50 meters of water resistance.', 'Quartz', 'Leather', '38', '241638439637.jpg', '241107am.jpg', 'Stainless Steel Case', 'Water Resistance 50m'),
(20, ' UA07001B', '350', 'This sophisticated ORIENT 35mm quartz watch features a rose gold stainless steel case, classic black band, and attractive black dial. Enhancing its contemporary allure are stylish rose gold hands, refined stick-style hour markers, and protective sapphire glass. The UA07001B supports water resistance of 50 meters.', 'Quartz', 'Leather', '35', '251638439681.jpg', '251108am.jpg', 'Stainless Steel Case', 'Water Resistance 50m'),
(21, 'UA07003W', '350', 'This sophisticated ORIENT 35mm quartz watch features a rose gold stainless steel case, classic white band, and attractive white dial. Enhancing its contemporary allure are stylish rose gold hands, refined stick-style hour markers, and protective sapphire glass. The UA07003W supports water resistance of 50 meters.', 'Quartz', 'Metal', '35', '261638439736.jpg', '261108am.jpg', 'Stainless Steel Case', 'Water Resistance 50m'),
(22, 'SZ2F006W', '500', 'This contemporary ORIENT 25mm quartz watch showcases its gold stainless steel case and band with an attractive white dial. Complementing its sophisticated design are stylish gold hands with luminous accents, Arabic numeral hour markers, a convenient date aperture, and screw-down crown to ensure water resistance. The SZ2F006W supports water resistance of 100 meters.', 'Quartz', 'Metal', '25', '271638439779.jpg', '271109am.jpg', 'Stainless Steel Case', 'Water Resistance 100m'),
(23, 'SZ3G001B', '500', 'This sophisticated ORIENT 28mm quartz watch showcases its stainless steel case and band with an alluring black dial. Enhancing its contemporary allure are stylish silver hands and markers with luminous accents, a convenient date aperture, and screw-down crown to ensure water resistance. The SZ3G001B is protected by sapphire glass and supports water resistance of 100 meters.', 'Quartz', 'Metal', '28', '281638439822.jpg', '281110am.jpg', 'Stainless Steel Case', 'Water Resistance 100m'),
(24, 'EUAG001W', '600', 'This contemporary ORIENT 42mm mechanical tonneau watch measures at 36mm x 50mm, showcasing a rose gold stainless steel case, crocodile textured band, and textured white dial. Additional features include attractive rose gold hands, two perpetual calendar displays, a convenient date aperture, stylish rose gold hour markers, roman numeral placement at 12 o’clock, and automatic self-winding functionality. The sophisticated EUAG001W supports water resistance of 50 meters.', 'Quartz', 'Metal', '36', '301638439952.jpg', '241112am.jpg', 'Stainless Steel Case', 'Water Resistance 50m'),
(25, ' EUAG005W', '600', 'This contemporary ORIENT 42mm mechanical tonneau watch measures at 36mm x 50mm, showcasing a stainless steel case, crocodile textured band, and textured white dial. Additional features include attractive silver hands, two perpetual calendar displays, a convenient date aperture, stylish silver hour markers, roman numeral placement at 12 o’clock, and automatic self-winding functionality. The sophisticated EUAG005W supports water resistance of 50 meters.', 'Quartz', 'Leather', '36', '311638440007.jpg', '251113am.jpg', '\" Stainless Steel Case \"', 'Water Resistance 50m'),
(26, ' RA-KV0304Y', '700', 'This refined ORIENT 40.4mm quartz watch features a stainless steel case and leather band with brown dial. Distinguished features of sophistication include sub-dials for seconds, hours and 30-minute chronograph, a convenient date aperture and rose gold hands. The RA-KV0304Y supports water resistance of 50 meters.', 'Quartz', 'Leather', '40.4', '321638440045.jpg', '321114am.jpg', 'Stainless Steel Case', 'Water Resistance 50m'),
(27, ' RA-KV0301L', '700', 'This refined ORIENT 40.4mm quartz watch features a stainless steel case and band with blue dial. Distinguished features of sophistication include sub-dials for seconds, hours and 30-minute chronograph, a convenient date aperture and silver hands. The RA-KV0301L supports water resistance of 50 meters.', 'Quartz', 'Leather', '40.4', '331638440148.jpg', '331115am.jpg', 'Stainless Steel Case', 'Water Resistance 50m'),
(28, 'RA-KV0302S', '700', 'This refined ORIENT 40.4mm quartz watch features a stainless steel case and band with white dial. Distinguished features of sophistication include sub-dials for seconds, hours and 30-minute chronograph, a convenient date aperture and blue hands. The RA-KV0302S supports water resistance of 50 meters.', 'Mechanical', 'Leather', '40.4', '341638440181.jpg', '341116am.jpg', 'Stainless Steel Case', 'Water Resistance 50m'),
(29, ' RA-KV0303B', '700', 'This refined ORIENT 40.4mm quartz watch features a stainless steel case and leather band with black dial. Distinguished features of sophistication include sub-dials for seconds, hours and 30-minute chronograph, a convenient date aperture and silver hands. The RA-KV0303B supports water resistance of 50 meters.', 'Quartz', 'Leather', '40.4', '351638440212.jpg', '351116am.jpg', 'Stainless Steel Case', 'Water Resistance 50m');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`orderId`);

--
-- Chỉ mục cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detailId`),
  ADD KEY `productId` (`productId`);

--
-- Chỉ mục cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`paymentId`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detailId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `paymentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD CONSTRAINT `tbl_order_detail_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `tbl_product` (`productId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
