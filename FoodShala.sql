-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: FoodShala
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.18.04.1

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
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `prefer_food_type` varchar(255) NOT NULL,
  `user_prefer` varchar(255) NOT NULL,
  `user_location` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (5,29,'veg','','','2020-05-03 09:25:04');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `food_order`
--

DROP TABLE IF EXISTS `food_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `food_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_number` varchar(255) NOT NULL,
  `order_by_customers_user_id` varchar(255) NOT NULL,
  `order_to_restaurants_user_id` varchar(255) NOT NULL,
  `order_restaurants_food_id` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `restaurant_rating` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food_order`
--

LOCK TABLES `food_order` WRITE;
/*!40000 ALTER TABLE `food_order` DISABLE KEYS */;
INSERT INTO `food_order` VALUES (69,'123','29','30','23','1',0,'','2020-05-03 21:15:11'),(70,'122','29','28','22','1',0,'','2020-05-03 21:15:12'),(68,'124','29','30','24','1',0,'','2020-05-03 21:15:10'),(67,'125','29','28','25','1',0,'','2020-05-03 21:15:08'),(66,'126','29','28','26','1',0,'','2020-05-03 21:15:06'),(61,'123','29','30','23','1',0,'','2020-05-03 15:09:08'),(62,'123','29','30','23','1',0,'','2020-05-03 15:09:09'),(65,'127','29','28','27','1',0,'','2020-05-03 21:14:57'),(71,'121','29','28','21','1',0,'','2020-05-03 21:15:15');
/*!40000 ALTER TABLE `food_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `restaurants`
--

DROP TABLE IF EXISTS `restaurants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `restaurant_location` varchar(255) NOT NULL,
  `restaurant_mobile` varchar(255) NOT NULL,
  `restaurant_rating` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restaurants`
--

LOCK TABLES `restaurants` WRITE;
/*!40000 ALTER TABLE `restaurants` DISABLE KEYS */;
INSERT INTO `restaurants` VALUES (8,'31','Taj Hotel','Mumbai','7354409622','','2020-05-03 21:21:37'),(6,'28','Food Adda','Khandwa','7354409622','','2020-05-03 09:20:59'),(7,'30','Rajhans Hotel','Bhopal','9575550933','','2020-05-03 14:22:29');
/*!40000 ALTER TABLE `restaurants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `restaurants_dish`
--

DROP TABLE IF EXISTS `restaurants_dish`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `restaurants_dish` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `restaurant_user_id` varchar(255) NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `dish_description` varchar(255) NOT NULL,
  `dish_price` varchar(255) NOT NULL,
  `today_discount_percentage` varchar(255) NOT NULL,
  `dish_food_type` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restaurants_dish`
--

LOCK TABLES `restaurants_dish` WRITE;
/*!40000 ALTER TABLE `restaurants_dish` DISABLE KEYS */;
INSERT INTO `restaurants_dish` VALUES (28,'31','Cold Coffee','Delicious Cold Coffee','85','','veg','2020-05-03 21:23:11'),(27,'28','Paw Bhaji','Mumbai ki Paw Bhaji','125','','veg','2020-05-03 21:14:22'),(26,'28','Gulab Jamun','Sweet and delicious gulab jamun','25','','veg','2020-05-03 19:58:03'),(24,'30','Egg Curry','Delicious Egg Curry','100','','non_veg','2020-05-03 14:26:12'),(25,'28','Fish Curry','Delicious Fish Curry','125','','non_veg','2020-05-03 19:23:11'),(22,'28','Cream Cake','It is made mummy','100','','veg','2020-05-03 14:09:13'),(23,'30','Chole Paneer Kulche','Paneer gravy made with kaju mixture and chola kulcha combo','175','','veg','2020-05-03 14:25:46'),(21,'28','Vada Paw','Its an breakfast dish with oil as important ingredient','25','','veg','2020-05-03 09:24:13');
/*!40000 ALTER TABLE `restaurants_dish` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` varchar(255) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'1','Restaurants'),(2,'2','Customers');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_mobile` varchar(255) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_role` varchar(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_users`
--

LOCK TABLES `tbl_users` WRITE;
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` VALUES (31,'Kunal Rathore','taj@mumbai.com','7354409622','e10adc3949ba59abbe56e057f20f883e','1','2020-05-03 21:21:37'),(28,'Kunal Rathore','Kunalrathore.it@gmail.com','7354409622','e10adc3949ba59abbe56e057f20f883e','1','2020-05-03 09:20:59'),(29,'Bittu Rathore','Bittu@gmail.com','9575550933','e10adc3949ba59abbe56e057f20f883e','2','2020-05-03 09:25:04'),(30,'Laddu Rathore','restraurant@rajhans.com','9575550933','e10adc3949ba59abbe56e057f20f883e','1','2020-05-03 14:22:29');
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-04  2:55:47
