-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2023 at 09:04 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clockstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int NOT NULL,
  `madh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_user` int NOT NULL,
  `nguoidat_ten` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nguoidat_email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nguoidat_tel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nguoidat_diachi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nguoinhan_ten` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nguoinhan_tel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `total` int NOT NULL,
  `ship` int DEFAULT '0',
  `voucher` int DEFAULT '0',
  `tongthanhtoan` int NOT NULL,
  `pttt` tinyint(1) NOT NULL,
  `nguoinhan_diachi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `madh`, `id_user`, `nguoidat_ten`, `nguoidat_email`, `nguoidat_tel`, `nguoidat_diachi`, `nguoinhan_ten`, `nguoinhan_tel`, `total`, `ship`, `voucher`, `tongthanhtoan`, `pttt`, `nguoinhan_diachi`) VALUES
(8, 'hkhshop24-192530-11122023', 24, 'dsad', 'dsadasd@gmail.com', 'sadasd', '43242342234', '', '', 6800000, 42000, 0, 6842000, 1, ''),
(10, 'hkhshop26-192947-11122023', 26, 'phuchau', '123dsad@gmail.com', 'ádasdasd', '3244234', '', '', 9000000, 42000, 0, 9042000, 1, ''),
(11, 'hkhshop27-203315-11122023', 27, 'hau', 'sadas@gmail.com', '0834252954', 'sdaasd', '', '', 27464426, 42000, 0, 27506426, 1, ''),
(12, 'hkhshop28-203502-11122023', 28, 'test', 'sadsad@gmailc.om', '3424324234', 'sdaasdasd', '', '', 6800000, 42000, 0, 6842000, 1, ''),
(13, 'hkhshop29-205146-11122023', 29, 'phuc hau', '123 long hoa', 'hau@gmail.com', '0852976652', '', '', 11300000, 42000, 0, 11342000, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_pro` int DEFAULT NULL,
  `price` int DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `img` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soluong` int DEFAULT NULL,
  `thanhtien` int DEFAULT NULL,
  `id_bill` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_pro`, `price`, `name`, `img`, `soluong`, `thanhtien`, `id_bill`) VALUES
(3, 6800000, 'Citizen BM6835-23E – Nam – Eco-Drive (Năng Lượng Ánh Sáng)', 'dongho1.jpg', 1, 6800000, 8),
(4, 4500000, 'Citizen AN8195-58E – Nam – Quartz (Pin)', 'dongho2.jpg', 2, 9000000, 10),
(3, 6800000, 'Citizen BM6835-23E – Nam – Eco-Drive (Năng Lượng Ánh Sáng)', 'dongho1.jpg', 1, 6800000, 11),
(3, 6800000, 'Citizen BM6835-23E – Nam – Eco-Drive (Năng Lượng Ánh Sáng)', 'dongho1.jpg', 3, 20400000, 11),
(1, 132213, 'Đồng hồ nam sang trọng', 'dongho6.jpg', 2, 264426, 11),
(3, 6800000, 'Citizen BM6835-23E – Nam – Eco-Drive (Năng Lượng Ánh Sáng)', 'dongho1.jpg', 1, 6800000, 12),
(3, 6800000, 'Citizen BM6835-23E – Nam – Eco-Drive (Năng Lượng Ánh Sáng)', 'dongho1.jpg', 1, 6800000, 13),
(4, 4500000, 'Citizen AN8195-58E – Nam – Quartz (Pin)', 'dongho2.jpg', 1, 4500000, 13);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int NOT NULL,
  `categoryName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`, `status`, `created`, `updated`) VALUES
(1, 'Đồng hồ nam', 1, '2023-12-03 23:44:55', '2023-12-03 23:44:02'),
(4, 'Đồng hồ nữ', NULL, NULL, NULL),
(5, 'Đồng hồ thời trang', NULL, NULL, NULL),
(6, 'Đồng hồ unisex', NULL, NULL, '2023-12-04 16:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentID` int NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `product_ID` int DEFAULT NULL,
  `user_ID` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `status` int DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentID`, `content`, `product_ID`, `user_ID`, `created`, `updated`, `status`) VALUES
(21, 'Sản phẩm tuyệt vời', 1, 1, '2023-12-03 21:52:31', '2023-12-03 21:52:31', 1),
(24, 'sản phẩm xịn', 1, 1, '2023-12-03 23:09:27', '2023-12-03 23:09:27', 1),
(28, 'san pham chat luong', 1, 1, '2023-12-07 20:10:26', '2023-12-07 20:10:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `couponID` int NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `discount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `status` tinyint DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int NOT NULL,
  `product_ID` int DEFAULT NULL,
  `price` float DEFAULT NULL,
  `user_ID` int DEFAULT NULL,
  `totalQuantity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `totalDiscount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `totalPrice` float DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` float DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `category_ID` int DEFAULT NULL,
  `discount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `status` int DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `name`, `price`, `description`, `image`, `category_ID`, `discount`, `created`, `updated`, `status`) VALUES
(1, 'Đồng hồ nam sang trọng', 132213, 'Mẫu Casio MTP-V001L-1BUDF phiên bản dây da đen có vân lịch lãm, thiết kế đơn giản 3 kim trên mặt số size 38mm, nền cọc số học trò kiểu dáng mỏng trẻ trung.', 'dongho6.jpg', 1, '123', '2023-12-03 17:34:44', '2023-12-03 17:34:44', 1),
(3, 'Citizen BM6835-23E – Nam – Eco-Drive (Năng Lượng Ánh Sáng)', 6800000, 'Mẫu Citizen BM6835-23E dây da đen phiên bản da trơn phong cách thời trang cho phái mạnh, cọc số nhỏ phối tone màu đỏ nổi bật trên nền mặt số đen size 42mm.', 'dongho1.jpg', 1, '123', NULL, NULL, 1),
(4, 'Citizen AN8195-58E – Nam – Quartz (Pin)', 4500000, 'Mẫu Citizen AN8195-58E thiết kế 3 núm vặn điều chỉnh các tính năng Chronograph (đo thời gian) hiện thị trên nền mặt số đen size 42mm.', 'dongho2.jpg', 5, '123', NULL, NULL, 1),
(5, 'SR SG1056.4601TE', 5600000, 'Mẫu SR SG1056.4601TE kiểu dáng đơn giản 3 kim cùng với cọc vạch số được tạo hình mỏng trẻ trung, nổi bật với phần vỏ máy pin được thiết kế siêu mỏng chỉ dày 6mm', 'dongho3.jpg', 5, '123', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int NOT NULL,
  `userName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fullName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` int DEFAULT '1',
  `role` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `phone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userName`, `password`, `address`, `email`, `fullName`, `status`, `role`, `created`, `updated`, `phone`) VALUES
(1, '123', '123', '13221', '123@gmail.com', '123', 1, 'user', '2023-12-03 18:24:35', '2023-12-03 18:24:35', '12312312312'),
(2, 'admin', 'admin', '123312', '132312', '321313', 1, 'admin', '2023-12-03 22:15:39', '2023-12-03 22:15:39', '1231231232'),
(8, 'hau123', '123456', 'can tho', 'hau@gmail.com', 'danh phuc hau', 1, 'user', NULL, NULL, '0852976652'),
(24, 'guest108', '123456', 'dsadasd', 'sadasd', 'dsad', 1, 'user', NULL, NULL, '43242342234'),
(25, 'guest520', '123456', '123dsada', 'danhphuchau0004@gmail.com', 'phuc hau', 1, 'user', NULL, NULL, '3242343242'),
(26, 'guest384', '123456', '123dsad', 'ádasdasd', 'phuchau', 1, 'user', NULL, NULL, '3244234'),
(27, 'User385', '123456', '', '', '', 1, 'user', NULL, NULL, ''),
(28, 'User115', '123456', '', '', '', 1, 'user', NULL, NULL, ''),
(29, 'User351', '123456', '123 long hoa', 'hau@gmail.com', 'phuc hau', 1, 'user', NULL, NULL, '0852976652');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `id_pro` (`id_pro`),
  ADD KEY `id_bill` (`id_bill`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `FK_product` (`product_ID`),
  ADD KEY `FK_user` (`user_ID`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`couponID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `product_ID` (`product_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `category_ID` (`category_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `couponID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`userID`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `products` (`productID`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_product` FOREIGN KEY (`product_ID`) REFERENCES `products` (`productID`),
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`user_ID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `product_ID` FOREIGN KEY (`product_ID`) REFERENCES `products` (`productID`),
  ADD CONSTRAINT `user_ID` FOREIGN KEY (`user_ID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_ID`) REFERENCES `categories` (`categoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
