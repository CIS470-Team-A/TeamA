-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mydb
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.29-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `User_Id` int(11) NOT NULL,
  `First_Name` varchar(25) NOT NULL,
  `Last_Name` varchar(25) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `Phone_Num` int(10) DEFAULT NULL,
  `City` varchar(25) NOT NULL,
  `State` char(2) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `User_Id_UNIQUE` (`User_Id`),
  UNIQUE KEY `Id_UNIQUE` (`Id`),
  KEY `fk_Customer_User1_idx` (`User_Id`),
  CONSTRAINT `fk_Customer_User1` FOREIGN KEY (`User_Id`) REFERENCES `users` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (5,5,'Tifa','Lockheart','213 Circle Way',2147483647,'Nibelheim','MI'),(6,6,'Cloud','Strife','534 Circle Way',2147483647,'Nibelheim','MI'),(7,7,'Barret','Wallace','143 6th District',1238458742,'Midgar','MD'),(8,8,'Cid','Highwind','154 Rocket Way',1679854454,'Rocket Town','WA');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(25) NOT NULL,
  `Last_Name` varchar(25) NOT NULL,
  `Phone_Num` int(10) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `Access_Level` char(2) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `City` varchar(25) NOT NULL,
  `State` char(2) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `User_User_Id_UNIQUE` (`User_Id`),
  UNIQUE KEY `Id_UNIQUE` (`Id`),
  KEY `fk_Employee_User_idx` (`User_Id`),
  CONSTRAINT `fk_Employee_User` FOREIGN KEY (`User_Id`) REFERENCES `users` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (1,'Chris','Redfield',2147483647,'23 Main St','AD',1,'Racoon City','CA'),(2,'Jill','Valentine',2147483647,'654 1st St','AD',2,'Racoon City','CA'),(3,'Carlos','Rivera',2147483647,'2340 Azure Way','AD',3,'Orlando','FL'),(4,'Leon','Kennedy',2147483647,'2384 Calfiornia Blvd','AD',4,'Los Angeles','CA');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lineitems`
--

DROP TABLE IF EXISTS `lineitems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lineitems` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Order_Id` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id_UNIQUE` (`Id`),
  KEY `fk_LineItems_Order1_idx` (`Order_Id`),
  KEY `fk_LineItems_Products1_idx` (`Product_Id`),
  CONSTRAINT `fk_LineItems_Order1` FOREIGN KEY (`Order_Id`) REFERENCES `order` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_LineItems_Products1` FOREIGN KEY (`Product_Id`) REFERENCES `products` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lineitems`
--

LOCK TABLES `lineitems` WRITE;
/*!40000 ALTER TABLE `lineitems` DISABLE KEYS */;
/*!40000 ALTER TABLE `lineitems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Customer_Id` int(11) NOT NULL,
  `Status` varchar(45) NOT NULL,
  `Product_Content` varchar(150) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id_UNIQUE` (`Id`),
  KEY `fk_Order_Customer1_idx` (`Customer_Id`),
  CONSTRAINT `fk_Order_Customer1` FOREIGN KEY (`Customer_Id`) REFERENCES `customer` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (1,5,'Shipped','T-Shirt with Brewing Logos'),(2,5,'Processed','Sweater with Bar Design'),(3,5,'On Order','T-Shirt with Brewing Steps'),(4,6,'Processed','Small Plaque with Soldier Rank'),(5,7,'Shipped','Small Trophy for kids softball'),(6,8,'Shipped','Racing Team Jersey'),(7,8,'On Order','Medium Trophy with speed record'),(8,8,'On Order','Large Trophy with 1st place');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Customer_Id` int(11) NOT NULL,
  `Order_Id` int(11) NOT NULL,
  `PaymentType_Id` int(11) NOT NULL,
  `Payment_Amount` decimal(10,2) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id_UNIQUE` (`Id`),
  KEY `fk_Payment_Customer1_idx` (`Customer_Id`),
  KEY `fk_Payment_Order1_idx` (`Order_Id`),
  CONSTRAINT `fk_Payment_Customer1` FOREIGN KEY (`Customer_Id`) REFERENCES `customer` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Payment_Order1` FOREIGN KEY (`Order_Id`) REFERENCES `order` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
INSERT INTO `payment` VALUES (1,5,1,0,15.99),(2,5,2,0,25.99),(3,5,3,0,15.99),(4,6,4,0,25.99),(5,7,5,0,15.99),(6,8,6,0,59.99),(7,8,7,0,25.99),(8,8,8,0,39.99);
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Catalog_Num` int(11) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Media` varchar(25) NOT NULL,
  `ProductType` varchar(25) NOT NULL,
  `ProductName` varchar(45) NOT NULL,
  `ProductPic` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,2147483647,15.99,'Trophy','Engraving','Small Trophy','smtrophy.jpg'),(2,2147483647,25.99,'Trophy','Engraving','Medium Trophy','mdtrophy.jpg'),(3,2147483647,39.99,'Trophy','Engraving','Large Trophy','lgtrophy.jpg'),(4,2147483647,25.99,'Plaque','Engraving','Small Plaque','smplaque.jpg'),(5,2147483647,59.99,'Plaque','Engraving','Large Plaque','lgplaque.jpg'),(6,2147483647,35.99,'Plaque','Engraving','Medium Plaque','mdplaque.jpg'),(7,2147483647,15.99,'Clothing','Print','T-Shirt Printing','tshirt.jpg'),(8,2147483647,25.99,'Clothing','Print','Sweater Design','sweatshirt.jpg'),(9,2147483647,59.99,'Clothing','Print','Jersey','jersey.jpg');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shoppingcart`
--

DROP TABLE IF EXISTS `shoppingcart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `products_Id` int(11) DEFAULT NULL,
  `customer_Id` int(11) DEFAULT NULL,
  KEY `fk_shoppingcart_products1_idx` (`products_Id`),
  KEY `fk_shoppingcart_customer1_idx` (`customer_Id`),
  CONSTRAINT `fk_shoppingcart_customer1` FOREIGN KEY (`customer_Id`) REFERENCES `customer` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_shoppingcart_products1` FOREIGN KEY (`products_Id`) REFERENCES `products` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoppingcart`
--

LOCK TABLES `shoppingcart` WRITE;
/*!40000 ALTER TABLE `shoppingcart` DISABLE KEYS */;
INSERT INTO `shoppingcart` VALUES ('::1','default','O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:3:{s:32:\"370d08585360f5c568b18d1f2e4ca1df\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"370d08585360f5c568b18d1f2e4ca1df\";s:2:\"id\";i:2;s:3:\"qty\";s:1:\"1\";s:4:\"name\";s:13:\"Medium Trophy\";s:5:\"price\";d:25.99;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:0:{}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}s:32:\"a775bac9cff7dec2b984e023b95206aa\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"a775bac9cff7dec2b984e023b95206aa\";s:2:\"id\";i:3;s:3:\"qty\";s:1:\"1\";s:4:\"name\";s:12:\"Large Trophy\";s:5:\"price\";d:39.99;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:0:{}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}s:32:\"808821852042d8780b9f862c35c42c68\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"808821852042d8780b9f862c35c42c68\";s:2:\"id\";i:7;s:3:\"qty\";s:1:\"1\";s:4:\"name\";s:16:\"Large Embroidery\";s:5:\"price\";d:49.99;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:0:{}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}}}',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `shoppingcart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `User_Name_UNIQUE` (`email`),
  UNIQUE KEY `Id_UNIQUE` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'chris.redfield@gmail.com','$2y$10$3iR.2qkKgfh86eMtLNKUHe7o.U6fS9DiEPZLqvllE/hvU24I5ifrW','wcegzccrQdBLLJ91Fpv3IK14gyHq5LxXmBNCIuPZZ1xkA2wemmDjFhWbLfjW','Chris Redfield','2018-02-08 04:31:41','2018-02-08 04:31:41'),(2,'jill.valentine@hotmail.com','$2y$10$5y4dL6H7pm/yxqhtGOujueuxXlf3z33mEaILnpKhNxpWTlVQ/1QCe','3Fd9dBJfAa4SFG2n2Te5oV2MlR9mnrB1DIRKjOyiG4pzAyCt47KWZtJT8TtJ','Jill Valentine','2018-02-08 04:32:20','2018-02-08 04:32:20'),(3,'carlos.rivera@ymail.com','$2y$10$hyLoKAz/YvD6OgmlRVxZfeAsKvKtJd3.CZb2Xs/RUvRLVh8K9gKfy','bFYnwdRULETxbQnPUw3Ps3T6UTYq4cobRNvsmAdKPWthR61usW5MSFYxH5kc','Carlos Rivera','2018-02-08 04:32:50','2018-02-08 04:32:50'),(4,'Leon.kennedy@yahoo.com','$2y$10$rbU8kjYix7om0TBiqAGVnuN2vntfamaqZyusstR4X2U/t83pk9zWu','LNtCGnUS45Bfk5ARgNe0SwO7EyC6SH4vjBVAS4obMOXGJzoiGWbUb1RbwPQa','Leon Kennedy','2018-02-08 04:33:31','2018-02-08 04:33:31'),(5,'tifa.lockheart@gmail.com','$2y$10$P/phm3lZ8mqf7n1k3JWAi.G1/ui1VETXfYVuCsl0qLmhmh8X9D2hO','fs2QInkvymmSkdBApWMAL50OBMLDdFCZ4sHzBKFgvEhEk02KayGF5C61yxoL','Tifa Lockheart','2018-02-08 04:34:04','2018-02-08 04:34:04'),(6,'cloud.strife@yahoo.com','$2y$10$P4jYSFhygfU50juCc20VD.LA4owJWHACNmHmR9.XJqk0GlIY8sGPm','lf1df5i2i5SPF4qPYiFnqSIbyNjVJPNsmr61FZBsv8so8cx3y0g5zBQ1JCem','Cloud Stife','2018-02-08 04:34:36','2018-02-08 04:34:36'),(7,'barret.wallace@ymail.com','$2y$10$rFJq3SHDpAREZTxHOpAnje3qjNs6S2iZsdzqXGCeMkYFgLtNfgDJK','YnK4uZtCcz42YmAs3ysbOkMcwCVv8rVfXFAAzMegMid0Tgclf7zNxYXLyYlP','Barret Wallace','2018-02-08 04:35:17','2018-02-08 04:35:17'),(8,'cid.highwind@hotmail.com','$2y$10$8cJRgcZmJGQNoA9Hst3j3O8y1WNf8jaN6XOoi/8WKJqeR8HaeSIuC','sExuhBQYjLHm7F41kfYPtndctUaYwJLfOsTXAtJBR8gJGRrJYicJBCFkW2yA','Cid Highwind','2018-02-08 04:35:42','2018-02-08 04:35:42');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-15 22:02:21
