-- MySQL dump 10.13  Distrib 8.0.41, for Win64 (x86_64)
--
-- Host: localhost    Database: bdesystem_db
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `account_tb`
--

DROP TABLE IF EXISTS `account_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `account_tb` (
  `Acc_ID` varchar(45) NOT NULL,
  `Acc_Fullname` varchar(100) DEFAULT NULL,
  `Acc_Username` varchar(45) DEFAULT NULL,
  `Acc_Password` varchar(100) DEFAULT NULL,
  `Acc-Telephone` varchar(45) DEFAULT NULL,
  `Acc-Email` varchar(45) DEFAULT NULL,
  `Acc_Line` varchar(45) DEFAULT NULL,
  `Acc-Start` varchar(45) DEFAULT NULL,
  `Acc-Stop` varchar(45) DEFAULT NULL,
  `Acc_Activate` varchar(45) DEFAULT NULL,
  `Acc_Rule` varchar(45) DEFAULT NULL,
  `Acc_Status` varchar(45) DEFAULT NULL,
  `Acc_Picture` varchar(500) DEFAULT NULL,
  `Acc_Site` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Acc_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account_tb`
--

LOCK TABLES `account_tb` WRITE;
/*!40000 ALTER TABLE `account_tb` DISABLE KEYS */;
INSERT INTO `account_tb` VALUES ('Acc-0001','Admin-System','Admin','3ce3691e8325aaa7613734042df6c8f0ce2d862d',NULL,NULL,NULL,NULL,NULL,'Actived','Admin','Online',NULL,NULL),('Acc-0002','User-System','U001','3ce3691e8325aaa7613734042df6c8f0ce2d862d',NULL,NULL,NULL,NULL,NULL,'Actived','User','Online',NULL,NULL);
/*!40000 ALTER TABLE `account_tb` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-06-20  0:20:43
