-- MySQL dump 10.13  Distrib 5.7.26, for osx10.10 (x86_64)
--
-- Host: localhost    Database: quanlythanhvien_mvc
-- ------------------------------------------------------
-- Server version	5.7.26

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
-- Table structure for table `thanhvien`
--

DROP TABLE IF EXISTS `thanhvien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `thanhvien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(255) NOT NULL,
  `namsinh` int(11) NOT NULL,
  `quequan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thanhvien`
--

LOCK TABLES `thanhvien` WRITE;
/*!40000 ALTER TABLE `thanhvien` DISABLE KEYS */;
INSERT INTO `thanhvien` VALUES (11,'phạm văn chung',1999,'thái lọ'),(12,'sould',77,'china'),(13,'david',77,'uk'),(14,'son',99,'hue'),(15,'minh',2000,'quang nam'),(17,'minh',2000,'quang nam'),(18,'js',66,'us-uk'),(19,'han',99,'bình định'),(20,'xiaomi',2020,'china'),(21,'Ludwig van Beethoven - Compose',1770,'Germany'),(22,'javascript',1995,'Brendan Eich'),(23,'1111 truong truong',1999,'dak lak'),(24,'truong',123,'viet nam'),(25,'nhựt',1999,'vn'),(26,'hoang',1998,'vn'),(27,'abc',1777,'vn'),(28,'truong truong',1999,'viet nam'),(29,'truong truong1',1999,'viet nam'),(30,'truong truong',1999,'viet nam'),(31,'truong truong',1999,'viet nam'),(32,'truong truong',1999,'viet nam'),(33,'truong truong',1999,'viet nam'),(34,'123',123,'123'),(35,'a',111,'viet nam'),(36,'truong truong',1999,'viet nam'),(37,'i love you',2020,'1789'),(38,'mouse',888,'viet nam');
/*!40000 ALTER TABLE `thanhvien` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-15 13:41:58
