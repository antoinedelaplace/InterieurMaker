-- MySQL dump 10.13  Distrib 5.1.73, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: symfony
-- ------------------------------------------------------
-- Server version	5.1.73

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
-- Table structure for table `agent`
--

DROP TABLE IF EXISTS `agent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `IdDomaine` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agent`
--

LOCK TABLES `agent` WRITE;
/*!40000 ALTER TABLE `agent` DISABLE KEYS */;
/*!40000 ALTER TABLE `agent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `domaine`
--

DROP TABLE IF EXISTS `domaine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `domaine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NomDomaine` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domaine`
--

LOCK TABLES `domaine` WRITE;
/*!40000 ALTER TABLE `domaine` DISABLE KEYS */;
INSERT INTO `domaine` VALUES (6,'plomberie'),(7,'maconnerie'),(8,'electricite'),(9,'peinture'),(10,'architecture');
/*!40000 ALTER TABLE `domaine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fiche_intervention`
--

DROP TABLE IF EXISTS `fiche_intervention`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fiche_intervention` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IdUser` int(11) NOT NULL,
  `IdDomaine` int(11) NOT NULL,
  `Probleme` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Habitation` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fiche_intervention`
--

LOCK TABLES `fiche_intervention` WRITE;
/*!40000 ALTER TABLE `fiche_intervention` DISABLE KEYS */;
INSERT INTO `fiche_intervention` VALUES (1,1,1,'Gros soucis !',''),(2,1,1,'Soucis a expliquer',''),(3,1,1,'Soucis a expliquer',''),(4,1,1,'Soucis a expliquer',''),(5,1,1,'Soucis a expliquer',''),(6,1,1,'Soucis a expliquer',''),(7,1,1,'Soucis a expliquer',''),(8,1,1,'Soucis a expliquer',''),(9,1,1,'Soucis a expliquer',''),(10,1,1,'Soucis a expliquer',''),(11,1,1,'Soucis a expliquer',''),(12,1,1,'Soucis a expliquer',''),(13,1,1,'Soucis a expliquer',''),(14,1,1,'Soucis a expliquer',''),(15,1,1,'Soucis a expliquer',''),(16,1,1,'Soucis a expliquer',''),(17,1,1,'Soucis a expliquer',''),(20,1,3,'Soucis a expliquer',''),(21,1,1,'Soucis a expliquer',''),(22,1,1,'Soucis a expliquer',''),(23,1,1,'Soucis a expliquer',''),(24,1,1,'Soucis a expliquer',''),(25,1,1,'Soucis a expliquer',''),(26,1,1,'Soucis a expliquer',''),(27,1,1,'Soucis a expliquer',''),(28,1,1,'Soucis a expliquer',''),(29,1,1,'Soucis a expliquer',''),(30,1,4,'Soucis a expliquer',''),(31,1,4,'Soucis a expliquer',''),(32,1,4,'Soucis a expliquer',''),(33,1,3,'Soucis a expliquer',''),(34,1,3,'Soucis a expliquer',''),(35,1,4,'Soucis a expliquer',''),(36,1,4,'Soucis a expliquer',''),(37,1,3,'Soucis a expliquer',''),(38,1,3,'Soucis a expliquer',''),(39,1,3,'Soucis a expliquer',''),(40,1,3,'',''),(41,1,3,'',''),(42,1,3,'',''),(43,1,4,'',''),(44,1,1,'',''),(45,1,3,'',''),(46,1,1,'',''),(47,1,8,'',''),(48,1,10,'',''),(49,1,6,'',''),(50,1,7,'',''),(51,1,10,'',''),(52,1,7,'','');
/*!40000 ALTER TABLE `fiche_intervention` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planning`
--

DROP TABLE IF EXISTS `planning`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `planning` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `HeureDebut` datetime NOT NULL,
  `HeureFin` datetime NOT NULL,
  `IdAgent` int(11) NOT NULL,
  `IdFiche` int(11) NOT NULL,
  `HeureSaisie` datetime NOT NULL,
  `Validation` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planning`
--

LOCK TABLES `planning` WRITE;
/*!40000 ALTER TABLE `planning` DISABLE KEYS */;
INSERT INTO `planning` VALUES (1,'2008-00-00 00:00:00','0000-00-00 00:00:00',1,1,'0000-00-00 00:00:00',1),(2,'2008-00-00 00:00:00','0000-00-00 00:00:00',1,1,'0000-00-00 00:00:00',1),(3,'2008-00-00 00:00:00','0000-00-00 00:00:00',1,1,'0000-00-00 00:00:00',1),(4,'2008-00-00 00:00:00','0000-00-00 00:00:00',1,1,'2008-00-00 00:00:00',1),(6,'2016-08-09 08:00:00','2016-08-09 08:15:00',1,1,'2016-09-25 15:49:48',1),(7,'2016-08-09 08:20:00','2016-08-09 08:35:00',1,2,'2016-09-26 22:55:21',1),(8,'2016-08-08 08:20:00','2016-08-08 08:35:00',1,3,'2016-09-26 22:55:25',1),(9,'2016-08-09 08:00:00','2016-08-09 08:15:00',1,4,'2016-09-26 22:55:31',1),(10,'2016-08-09 08:00:00','2016-08-09 08:15:00',1,5,'2016-09-26 22:55:33',1),(11,'2016-08-09 09:00:00','2016-08-09 09:15:00',1,6,'2016-09-26 22:55:36',1),(12,'2016-08-08 08:00:00','2016-08-08 08:15:00',1,7,'2016-09-26 22:55:40',1),(13,'2016-08-08 08:40:00','2016-08-08 08:55:00',1,8,'2016-09-26 22:55:45',1),(14,'2016-08-09 08:20:00','2016-08-09 08:35:00',1,9,'2016-09-26 22:55:47',1),(15,'2016-08-08 11:20:00','2016-08-08 11:35:00',1,10,'2016-09-26 22:55:56',1),(16,'2016-08-08 10:00:00','2016-08-08 10:15:00',1,11,'2016-09-26 22:56:02',1),(17,'2016-08-11 08:20:00','2016-08-11 08:35:00',1,12,'2016-09-27 22:03:00',1),(18,'2016-08-11 10:20:00','2016-08-11 10:35:00',1,13,'2016-09-27 22:04:17',1),(19,'2016-08-11 10:20:00','2016-08-11 10:35:00',1,14,'2016-09-27 22:04:47',1),(20,'2016-08-12 09:00:00','2016-08-12 09:15:00',1,15,'2016-09-27 22:13:49',1),(21,'2016-08-10 16:00:00','2016-08-10 16:15:00',1,16,'2016-09-27 22:14:02',1),(22,'2016-08-11 17:00:00','2016-08-11 17:15:00',1,17,'2016-09-27 22:15:23',1),(23,'2016-08-10 10:40:00','2016-08-10 10:55:00',1,20,'2016-10-05 16:39:59',1),(24,'2016-09-05 08:20:00','2016-09-05 08:35:00',1,21,'2016-10-08 15:32:54',1),(25,'2016-09-04 08:40:00','2016-09-04 08:55:00',1,22,'2016-10-08 15:33:02',1),(26,'2016-09-04 10:00:00','2016-09-04 10:15:00',1,23,'2016-10-08 15:33:18',1),(27,'2016-09-04 10:00:00','2016-09-04 10:15:00',1,24,'2016-10-08 15:34:06',1),(28,'2016-09-05 08:00:00','2016-09-05 08:15:00',1,25,'2016-10-08 15:37:22',1),(29,'2016-09-05 08:00:00','2016-09-05 08:15:00',1,26,'2016-10-08 15:42:09',1),(30,'2016-09-05 08:00:00','2016-09-05 08:15:00',1,27,'2016-10-08 15:42:28',1),(31,'2016-09-05 08:00:00','2016-09-05 08:15:00',1,28,'2016-10-08 15:43:38',1),(32,'2016-09-05 08:00:00','2016-09-05 08:15:00',1,29,'2016-10-08 16:29:55',1),(33,'2016-09-05 08:00:00','2016-09-05 08:15:00',1,30,'2016-10-08 16:30:36',1),(34,'2016-09-04 08:00:00','2016-09-04 08:15:00',1,31,'2016-10-08 17:02:18',1),(35,'2016-09-06 08:40:00','2016-09-06 08:55:00',1,32,'2016-10-08 17:02:26',1),(36,'2016-09-05 09:20:00','2016-09-05 09:35:00',1,33,'2016-10-08 17:18:45',1),(37,'2016-09-04 09:20:00','2016-09-04 09:35:00',1,34,'2016-10-08 17:24:06',1),(38,'2016-09-11 08:20:00','2016-09-11 08:35:00',1,35,'2016-10-12 11:19:56',1),(39,'2016-09-11 08:20:00','2016-09-11 08:35:00',1,36,'2016-10-12 11:20:52',1),(40,'2016-10-11 08:20:00','2016-10-11 08:35:00',1,37,'2016-10-12 11:20:57',1),(41,'2016-10-12 09:00:00','2016-10-12 09:15:00',1,38,'2016-10-12 11:21:08',1),(42,'2016-10-10 08:00:00','2016-10-10 08:15:00',1,39,'2016-10-12 11:21:55',1),(43,'2016-11-15 08:00:00','2016-11-15 08:15:00',1,40,'2016-11-16 16:41:07',1),(44,'2016-11-14 08:00:00','2016-11-14 08:15:00',1,41,'2016-11-19 18:20:48',1),(45,'2016-11-16 08:00:00','2016-11-16 08:15:00',1,42,'2016-11-19 18:21:10',1),(46,'2016-11-15 08:20:00','2016-11-15 08:35:00',1,43,'2016-11-19 18:54:12',1),(47,'2016-11-16 08:20:00','2016-11-16 08:35:00',1,44,'2016-11-19 18:54:25',1),(48,'2016-11-17 08:20:00','2016-11-17 08:35:00',1,45,'2016-11-19 18:57:23',1),(49,'2016-11-14 08:40:00','2016-11-14 08:55:00',1,46,'2016-11-19 18:58:04',1),(50,'2016-11-15 08:00:00','2016-11-15 08:15:00',1,47,'2016-11-19 18:58:20',1),(51,'2016-11-16 08:00:00','2016-11-16 08:15:00',1,48,'2016-11-19 18:58:25',1),(52,'2016-11-16 08:00:00','2016-11-16 08:15:00',1,49,'2016-11-19 19:10:56',1),(53,'2016-11-16 08:00:00','2016-11-16 08:15:00',1,50,'2016-11-19 19:11:03',1),(54,'2016-11-17 08:00:00','2016-11-17 08:15:00',1,51,'2016-11-19 19:41:04',1),(55,'2016-11-16 09:00:00','2016-11-16 09:15:00',1,52,'2016-11-19 19:41:42',1);
/*!40000 ALTER TABLE `planning` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `Nom` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Adresse` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CodePostal` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ville` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateNaissance` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'romain@test.com','romain@test.com','romain@test.com','romain@test.com',1,'4o2gp1bg7ncw4ogkgss4808gs80c8gk','$2y$13$p7C8UsdIgjTM9uZgVntl6Op5KfZUn5Cea.qsYcR21GVviSw67vHh2','2016-09-21 16:11:52',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,'lzjm','romain','testadresse','80000','Amiens','','23/12/1992');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-19 18:50:30
