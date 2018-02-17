-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2018 at 11:02 PM
-- Server version: 10.2.10-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- --------------------------------------------------------

--

-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--

-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `First_Name` varchar(25) NOT NULL,
  `Last_Name` varchar(25) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `Phone_Num` int(10) DEFAULT NULL,
  `City` varchar(25) NOT NULL,
  `State` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `User_Id`, `First_Name`, `Last_Name`, `Address`, `Phone_Num`, `City`, `State`) VALUES
(5, 5, 'Tifa', 'Lockheart', '213 Circle Way', 2147483647, 'Nibelheim', 'MI'),
(6, 6, 'Cloud', 'Strife', '534 Circle Way', 2147483647, 'Nibelheim', 'MI'),
(7, 7, 'Barret', 'Wallace', '143 6th District', 1238458742, 'Midgar', 'MD'),
(8, 8, 'Cid', 'Highwind', '154 Rocket Way', 1679854454, 'Rocket Town', 'WA'),
(9, 9, 'Cid', 'Highwind', '154 Rocket Way', 1679854454, 'Rocket Town', 'WA');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Id` int(11) NOT NULL,
  `First_Name` varchar(25) NOT NULL,
  `Last_Name` varchar(25) NOT NULL,
  `Phone_Num` int(10) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `Access_Level` char(2) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `City` varchar(25) NOT NULL,
  `State` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Id`, `First_Name`, `Last_Name`, `Phone_Num`, `Address`, `Access_Level`, `User_Id`, `City`, `State`) VALUES
(1, 'Chris', 'Redfield', 2147483647, '23 Main St', 'AD', 1, 'Racoon City', 'CA'),
(2, 'Jill', 'Valentine', 2147483647, '654 1st St', 'AD', 2, 'Racoon City', 'CA'),
(3, 'Carlos', 'Rivera', 2147483647, '2340 Azure Way', 'AD', 3, 'Orlando', 'FL'),
(4, 'Leon', 'Kennedy', 2147483647, '2384 Calfiornia Blvd', 'AD', 4, 'Los Angeles', 'CA');

-- --------------------------------------------------------

--
-- Table structure for table `lineitems`
--

CREATE TABLE `lineitems` (
  `Id` int(11) NOT NULL,
  `Order_Id` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Product_Content` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id_UNIQUE` (`Id`),
  KEY `fk_LineItems_Order1_idx` (`Order_Id`),
  KEY `fk_LineItems_Products1_idx` (`Product_Id`),
  CONSTRAINT `fk_LineItems_Order1` FOREIGN KEY (`Order_Id`) REFERENCES `order` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_LineItems_Products1` FOREIGN KEY (`Product_Id`) REFERENCES `products` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


--
-- Dumping data for table `lineitems`
--


INSERT INTO `lineitems` (`Id`, `Order_Id`, `Product_Id`, `Quantity`, `Price`, `Content`) VALUES
(9, 15, 1, 1, '15.99', ''),
(10, 16, 1, 1, '15.99', ''),
(11, 21, 1, 20, '15.99', 'wdsdfgh'),
(12, 22, 1, 20, '15.99', 'wdsdfgh'),
(13, 28, 7, 2, '15.99', 'Peekabo'),
(14, 28, 9, 7, '59.99', '25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--

-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,

  `Status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
>>>>>>> 4776f99bf497eb8517a2d0bea028b8ae06548804

--
-- Dumping data for table `order`
--


INSERT INTO `order` (`Id`, `Customer_Id`, `Status`) VALUES
(1, 5, 'Shipped'),
(2, 5, 'Processed'),
(3, 5, 'On Order'),
(4, 6, 'Processed'),
(5, 7, 'Shipped'),
(6, 8, 'Shipped'),
(7, 8, 'On Order'),
(8, 8, 'On Order'),
(10, 5, 'Processing'),
(11, 5, 'Processing'),
(12, 5, 'Processing'),
(13, 5, 'Processing'),
(14, 5, 'Processing'),
(15, 5, 'Processing'),
(16, 9, 'Processing'),
(17, 5, 'Processing'),
(18, 5, 'Processing'),
(19, 5, 'Processing'),
(20, 5, 'Processing'),
(21, 5, 'Processing'),
(22, 9, 'Processing'),
(23, 9, 'Processing'),
(24, 9, 'Processing'),
(25, 9, 'Processing'),
(26, 9, 'Processing'),
(27, 9, 'Processing'),
(28, 9, 'Processing');

-- --------------------------------------------------------


--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Order_Id` int(11) NOT NULL,
  `PaymentType_Id` int(11) NOT NULL,

  `Payment_Amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `payment`
--


INSERT INTO `payment` (`Id`, `Customer_Id`, `Order_Id`, `PaymentType_Id`, `Payment_Amount`) VALUES
(1, 5, 1, 0, '15.99'),
(2, 5, 2, 0, '25.99'),
(3, 5, 3, 0, '15.99'),
(4, 6, 4, 0, '25.99'),
(5, 7, 5, 0, '15.99'),
(6, 8, 6, 0, '59.99'),
(7, 8, 7, 0, '25.99'),
(8, 8, 8, 0, '39.99');

-- --------------------------------------------------------


--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `Catalog_Num` int(11) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Media` varchar(25) NOT NULL,
  `ProductType` varchar(25) NOT NULL,
  `ProductName` varchar(45) NOT NULL,

  `ProductPic` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Catalog_Num`, `Price`, `Media`, `ProductType`, `ProductName`, `ProductPic`) VALUES
(1, 2147483647, '15.99', 'Trophy', 'Engraving', 'Small Trophy', 'smtrophy.jpg'),
(2, 2147483647, '25.99', 'Trophy', 'Engraving', 'Medium Trophy', 'mdtrophy.jpg'),
(3, 2147483647, '39.99', 'Trophy', 'Engraving', 'Large Trophy', 'lgtrophy.jpg'),
(4, 2147483647, '25.99', 'Plaque', 'Engraving', 'Small Plaque', 'smplaque.jpg'),
(5, 2147483647, '59.99', 'Plaque', 'Engraving', 'Large Plaque', 'lgplaque.jpg'),
(6, 2147483647, '35.99', 'Plaque', 'Engraving', 'Medium Plaque', 'mdplaque.jpg'),
(7, 2147483647, '15.99', 'Clothing', 'Print', 'T-Shirt Printing', 'tshirt.jpg'),
(8, 2147483647, '25.99', 'Clothing', 'Print', 'Sweater Design', 'sweatshirt.jpg'),
(9, 2147483647, '59.99', 'Clothing', 'Print', 'Jersey', 'jersey.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `products_Id` int(11) DEFAULT NULL,
  `customer_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shoppingcart`
--


INSERT INTO `shoppingcart` (`identifier`, `instance`, `content`, `created_at`, `updated_at`, `products_Id`, `customer_Id`) VALUES
('ABCDNeQanamwpj', 'default', 'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:4:{s:32:\"370d08585360f5c568b18d1f2e4ca1df\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"370d08585360f5c568b18d1f2e4ca1df\";s:2:\"id\";i:2;s:3:\"qty\";s:2:\"10\";s:4:\"name\";s:13:\"Medium Trophy\";s:5:\"price\";d:25.99;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:0:{}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}s:32:\"a775bac9cff7dec2b984e023b95206aa\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"a775bac9cff7dec2b984e023b95206aa\";s:2:\"id\";i:3;s:3:\"qty\";s:1:\"1\";s:4:\"name\";s:12:\"Large Trophy\";s:5:\"price\";d:39.99;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:0:{}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}s:32:\"808821852042d8780b9f862c35c42c68\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"808821852042d8780b9f862c35c42c68\";s:2:\"id\";i:7;s:3:\"qty\";s:1:\"1\";s:4:\"name\";s:16:\"Large Embroidery\";s:5:\"price\";d:49.99;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:0:{}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";s:2:\"id\";i:1;s:3:\"qty\";i:1;s:4:\"name\";s:12:\"Small Trophy\";s:5:\"price\";d:15.99;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:0:{}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}}}', NULL, NULL, NULL, NULL),
('ABCDPJa4guSCwD', 'default', 'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:0:{}}', NULL, NULL, NULL, NULL),
('::1', 'default', 'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:0:{}}', NULL, NULL, NULL, NULL),
('ABCDW0tGr3anba', 'default', 'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:0:{}}', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------


--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,

  `created_at` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `users`
--


INSERT INTO `users` (`Id`, `email`, `password`, `remember_token`, `name`, `updated_at`, `created_at`) VALUES
(1, 'chris.redfield@gmail.com', '$2y$10$3iR.2qkKgfh86eMtLNKUHe7o.U6fS9DiEPZLqvllE/hvU24I5ifrW', 'wcegzccrQdBLLJ91Fpv3IK14gyHq5LxXmBNCIuPZZ1xkA2wemmDjFhWbLfjW', 'Chris Redfield', '2018-02-08 04:31:41', '2018-02-08 04:31:41'),
(2, 'jill.valentine@hotmail.com', '$2y$10$5y4dL6H7pm/yxqhtGOujueuxXlf3z33mEaILnpKhNxpWTlVQ/1QCe', '3Fd9dBJfAa4SFG2n2Te5oV2MlR9mnrB1DIRKjOyiG4pzAyCt47KWZtJT8TtJ', 'Jill Valentine', '2018-02-08 04:32:20', '2018-02-08 04:32:20'),
(3, 'carlos.rivera@ymail.com', '$2y$10$hyLoKAz/YvD6OgmlRVxZfeAsKvKtJd3.CZb2Xs/RUvRLVh8K9gKfy', 'bFYnwdRULETxbQnPUw3Ps3T6UTYq4cobRNvsmAdKPWthR61usW5MSFYxH5kc', 'Carlos Rivera', '2018-02-08 04:32:50', '2018-02-08 04:32:50'),
(4, 'Leon.kennedy@yahoo.com', '$2y$10$rbU8kjYix7om0TBiqAGVnuN2vntfamaqZyusstR4X2U/t83pk9zWu', 'LNtCGnUS45Bfk5ARgNe0SwO7EyC6SH4vjBVAS4obMOXGJzoiGWbUb1RbwPQa', 'Leon Kennedy', '2018-02-08 04:33:31', '2018-02-08 04:33:31'),
(5, 'tifa.lockheart@gmail.com', '$2y$10$P/phm3lZ8mqf7n1k3JWAi.G1/ui1VETXfYVuCsl0qLmhmh8X9D2hO', 'fs2QInkvymmSkdBApWMAL50OBMLDdFCZ4sHzBKFgvEhEk02KayGF5C61yxoL', 'Tifa Lockheart', '2018-02-08 04:34:04', '2018-02-08 04:34:04'),
(6, 'cloud.strife@yahoo.com', '$2y$10$P4jYSFhygfU50juCc20VD.LA4owJWHACNmHmR9.XJqk0GlIY8sGPm', 'lf1df5i2i5SPF4qPYiFnqSIbyNjVJPNsmr61FZBsv8so8cx3y0g5zBQ1JCem', 'Cloud Stife', '2018-02-08 04:34:36', '2018-02-08 04:34:36'),
(7, 'barret.wallace@ymail.com', '$2y$10$rFJq3SHDpAREZTxHOpAnje3qjNs6S2iZsdzqXGCeMkYFgLtNfgDJK', 'YnK4uZtCcz42YmAs3ysbOkMcwCVv8rVfXFAAzMegMid0Tgclf7zNxYXLyYlP', 'Barret Wallace', '2018-02-08 04:35:17', '2018-02-08 04:35:17'),
(8, 'cid.highwind@hotmail.com', '$2y$10$8cJRgcZmJGQNoA9Hst3j3O8y1WNf8jaN6XOoi/8WKJqeR8HaeSIuC', 'sExuhBQYjLHm7F41kfYPtndctUaYwJLfOsTXAtJBR8gJGRrJYicJBCFkW2yA', 'Cid Highwind', '2018-02-08 04:35:42', '2018-02-08 04:35:42'),
(9, 'test@test.test', '$2y$10$xZNJG6edBVnfpC1HK1gDt.7/2ZiGKZFLq1.EArbKjqpNs5OplTuWO', 'U0RXuc3YmGdmp1AZT5Nt2HbThQIPm7fQBaYxnbsHjwzRZrXzHNACUYsH26Y5', 'test@test.test', '2018-02-17 18:08:51', '2018-02-17 18:08:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `User_Id_UNIQUE` (`User_Id`),
  ADD UNIQUE KEY `Id_UNIQUE` (`Id`),
  ADD KEY `fk_Customer_User1_idx` (`User_Id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `User_User_Id_UNIQUE` (`User_Id`),
  ADD UNIQUE KEY `Id_UNIQUE` (`Id`),
  ADD KEY `fk_Employee_User_idx` (`User_Id`);

--
-- Indexes for table `lineitems`
--
ALTER TABLE `lineitems`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id_UNIQUE` (`Id`),
  ADD KEY `fk_LineItems_Order1_idx` (`Order_Id`),
  ADD KEY `fk_LineItems_Products1_idx` (`Product_Id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id_UNIQUE` (`Id`),
  ADD KEY `fk_Order_Customer1_idx` (`Customer_Id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id_UNIQUE` (`Id`),
  ADD KEY `fk_Payment_Customer1_idx` (`Customer_Id`),
  ADD KEY `fk_Payment_Order1_idx` (`Order_Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD KEY `fk_shoppingcart_products1_idx` (`products_Id`),
  ADD KEY `fk_shoppingcart_customer1_idx` (`customer_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `User_Name_UNIQUE` (`email`),
  ADD UNIQUE KEY `Id_UNIQUE` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lineitems`
--
ALTER TABLE `lineitems`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk_Customer_User1` FOREIGN KEY (`User_Id`) REFERENCES `users` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk_Employee_User` FOREIGN KEY (`User_Id`) REFERENCES `users` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lineitems`
--
ALTER TABLE `lineitems`
  ADD CONSTRAINT `fk_LineItems_Order1` FOREIGN KEY (`Order_Id`) REFERENCES `order` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_LineItems_Products1` FOREIGN KEY (`Product_Id`) REFERENCES `products` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_Order_Customer1` FOREIGN KEY (`Customer_Id`) REFERENCES `customer` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_Payment_Customer1` FOREIGN KEY (`Customer_Id`) REFERENCES `customer` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Payment_Order1` FOREIGN KEY (`Order_Id`) REFERENCES `order` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD CONSTRAINT `fk_shoppingcart_customer1` FOREIGN KEY (`customer_Id`) REFERENCES `customer` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_shoppingcart_products1` FOREIGN KEY (`products_Id`) REFERENCES `products` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

