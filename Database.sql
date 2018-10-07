-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Appointment
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Client`
--

DROP TABLE IF EXISTS `Client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Client` (
  `ClientName` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `ClientAddress` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Client`
--

LOCK TABLES `Client` WRITE;
/*!40000 ALTER TABLE `Client` DISABLE KEYS */;
INSERT INTO `Client` VALUES ('Rohit','rohit','Bangalore','rohit@gmail.com'),('aa','aa','aa','aa'),('bb','bb','bb','bb'),('ii','ii','ii','ii'),('rohit','rohit','Mumbai','Rihut@gmail.com'),('Yogesh D H','Surroor@75','yogeshdh75@gmail.com','haragadde'),('sachin','sa','sachin@gmail.com','banglore');
/*!40000 ALTER TABLE `Client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Consultant`
--

DROP TABLE IF EXISTS `Consultant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Consultant` (
  `ConsultantName` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `E_mail` varchar(20) DEFAULT NULL,
  UNIQUE KEY `ConsultantName` (`ConsultantName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Consultant`
--

LOCK TABLES `Consultant` WRITE;
/*!40000 ALTER TABLE `Consultant` DISABLE KEYS */;
INSERT INTO `Consultant` VALUES ('psychiatrist','pi',NULL),('advisor','ad','rohit@gmail.com'),('Lawyer','la','la@gmail.com'),('Teacher','ti','teacher@gmail.com'),('Insurance','in','fdaf'),('sports','sp','rohit@gmail.com'),('Doctor','doc','doc@gmail.com');
/*!40000 ALTER TABLE `Consultant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TimeDoctor`
--

DROP TABLE IF EXISTS `TimeDoctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TimeDoctor` (
  `Slots` varchar(10) DEFAULT NULL,
  `Monday` int(11) DEFAULT NULL,
  `Tuesday` int(11) DEFAULT NULL,
  `Wednesday` int(11) DEFAULT NULL,
  `Thursday` int(11) DEFAULT NULL,
  `Friday` int(11) DEFAULT NULL,
  `Saturday` int(11) DEFAULT NULL,
  `Sunday` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TimeDoctor`
--

LOCK TABLES `TimeDoctor` WRITE;
/*!40000 ALTER TABLE `TimeDoctor` DISABLE KEYS */;
INSERT INTO `TimeDoctor` VALUES ('12:30PM',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('3:00PM',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('6:00PM',1,NULL,NULL,NULL,NULL,NULL,NULL),('9:00AM',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `TimeDoctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TimeInsurance`
--

DROP TABLE IF EXISTS `TimeInsurance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TimeInsurance` (
  `Slots` varchar(10) DEFAULT NULL,
  `Monday` int(11) DEFAULT NULL,
  `Tuesday` int(11) DEFAULT NULL,
  `Wednesday` int(11) DEFAULT NULL,
  `Thursday` int(11) DEFAULT NULL,
  `Friday` int(11) DEFAULT NULL,
  `Saturday` int(11) DEFAULT NULL,
  `Sunday` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TimeInsurance`
--

LOCK TABLES `TimeInsurance` WRITE;
/*!40000 ALTER TABLE `TimeInsurance` DISABLE KEYS */;
INSERT INTO `TimeInsurance` VALUES ('12:30PM',1,NULL,NULL,NULL,NULL,NULL,NULL),('3:00PM',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('6:00PM',NULL,NULL,NULL,NULL,NULL,NULL,1),('9:00AM',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `TimeInsurance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TimeSlot`
--

DROP TABLE IF EXISTS `TimeSlot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TimeSlot` (
  `DayOfTheWeek` varchar(20) NOT NULL,
  `TimeSlot` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`DayOfTheWeek`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TimeSlot`
--

LOCK TABLES `TimeSlot` WRITE;
/*!40000 ALTER TABLE `TimeSlot` DISABLE KEYS */;
INSERT INTO `TimeSlot` VALUES ('Monday','11:30AM',0);
/*!40000 ALTER TABLE `TimeSlot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TimeTeacher`
--

DROP TABLE IF EXISTS `TimeTeacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TimeTeacher` (
  `Slots` varchar(10) DEFAULT NULL,
  `Monday` int(11) DEFAULT NULL,
  `Tuesday` int(11) DEFAULT NULL,
  `Wednesday` int(11) DEFAULT NULL,
  `Thursday` int(11) DEFAULT NULL,
  `Friday` int(11) DEFAULT NULL,
  `Saturday` int(11) DEFAULT NULL,
  `Sunday` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TimeTeacher`
--

LOCK TABLES `TimeTeacher` WRITE;
/*!40000 ALTER TABLE `TimeTeacher` DISABLE KEYS */;
INSERT INTO `TimeTeacher` VALUES ('12:30PM',1,NULL,1,NULL,NULL,NULL,NULL),('3:00PM',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('6:00PM',1,NULL,1,NULL,NULL,NULL,NULL),('9:00AM',NULL,NULL,NULL,NULL,1,NULL,NULL);
/*!40000 ALTER TABLE `TimeTeacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Timepsychiatrist`
--

DROP TABLE IF EXISTS `Timepsychiatrist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Timepsychiatrist` (
  `Slots` varchar(10) DEFAULT NULL,
  `Monday` int(11) DEFAULT NULL,
  `Tuesday` int(11) DEFAULT NULL,
  `Wednesday` int(11) DEFAULT NULL,
  `Thursday` int(11) DEFAULT NULL,
  `Friday` int(11) DEFAULT NULL,
  `Saturday` int(11) DEFAULT NULL,
  `Sunday` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Timepsychiatrist`
--

LOCK TABLES `Timepsychiatrist` WRITE;
/*!40000 ALTER TABLE `Timepsychiatrist` DISABLE KEYS */;
INSERT INTO `Timepsychiatrist` VALUES ('12:30PM',1,1,NULL,NULL,NULL,NULL,NULL),('3:00PM',1,NULL,NULL,NULL,NULL,NULL,NULL),('6:00PM',1,1,1,NULL,1,1,NULL),('9:00AM',1,NULL,1,NULL,NULL,1,NULL);
/*!40000 ALTER TABLE `Timepsychiatrist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Timesports`
--

DROP TABLE IF EXISTS `Timesports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Timesports` (
  `Slots` varchar(10) DEFAULT NULL,
  `Monday` int(11) DEFAULT NULL,
  `Tuesday` int(11) DEFAULT NULL,
  `Wednesday` int(11) DEFAULT NULL,
  `Thursday` int(11) DEFAULT NULL,
  `Friday` int(11) DEFAULT NULL,
  `Saturday` int(11) DEFAULT NULL,
  `Sunday` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Timesports`
--

LOCK TABLES `Timesports` WRITE;
/*!40000 ALTER TABLE `Timesports` DISABLE KEYS */;
INSERT INTO `Timesports` VALUES ('12:30PM',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('3:00PM',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('6:00PM',1,NULL,NULL,NULL,NULL,NULL,NULL),('9:00AM',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `Timesports` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-15 19:18:04
