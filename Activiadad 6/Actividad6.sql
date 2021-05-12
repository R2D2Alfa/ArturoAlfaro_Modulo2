-- MariaDB dump 10.19  Distrib 10.4.18-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: alfaroarturoind
-- ------------------------------------------------------
-- Server version	10.4.18-MariaDB

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
-- Table structure for table `libros`
--

DROP TABLE IF EXISTS `libros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libros` (
  `id_libros` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `creador` varchar(50) NOT NULL,
  `año` int(4) NOT NULL,
  `editorial` varchar(50) DEFAULT NULL,
  `lugar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_libros`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libros`
--

LOCK TABLES `libros` WRITE;
/*!40000 ALTER TABLE `libros` DISABLE KEYS */;
INSERT INTO `libros` VALUES (1,'The green mile','Stephen King',1996,'New American Library','Estados Unidos'),(2,'La historia interminable','Michael Ende',1979,'Alfaguara','Alemania'),(3,'Niebla','Miguel de Unamuno',1914,'Renacimiento','España'),(4,'El invierno en Lisboa','Antonio Muñoz Molina',1987,'Booket','España'),(5,'Los pilares de la tierra','Ken Follet',1989,'DeBolsillo','Inglaterra');
/*!40000 ALTER TABLE `libros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `música`
--

DROP TABLE IF EXISTS `música`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `música` (
  `id_música` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `creador` varchar(50) NOT NULL,
  `año` int(4) NOT NULL,
  `album` varchar(50) DEFAULT 'The Wall',
  PRIMARY KEY (`id_música`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `música`
--

LOCK TABLES `música` WRITE;
/*!40000 ALTER TABLE `música` DISABLE KEYS */;
INSERT INTO `música` VALUES (1,'Feel','Robbie Williams',2002,'Escapology'),(2,'Under pressure','Queen/David Bowie',1981,'Hot Space'),(3,'Photograph','Ed Sheeran',2014,'X'),(4,'Blackbird','The Beatles',1968,'The white album'),(5,'Wonderwall','Oasis',1995,'(What\'s the Story) Morning Glory?');
/*!40000 ALTER TABLE `música` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `películas`
--

DROP TABLE IF EXISTS `películas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `películas` (
  `id_películas` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `creador` varchar(50) NOT NULL,
  `año` int(4) NOT NULL,
  `actorPrin` varchar(50) DEFAULT NULL,
  `clasificación` varchar(2) DEFAULT 'AA',
  PRIMARY KEY (`id_películas`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `películas`
--

LOCK TABLES `películas` WRITE;
/*!40000 ALTER TABLE `películas` DISABLE KEYS */;
/*!40000 ALTER TABLE `películas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videojuegos`
--

DROP TABLE IF EXISTS `videojuegos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videojuegos` (
  `id_videojuegos` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `creador` varchar(50) NOT NULL,
  `año` int(4) NOT NULL,
  `protagonista` varchar(50) DEFAULT 'Sans',
  PRIMARY KEY (`id_videojuegos`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videojuegos`
--

LOCK TABLES `videojuegos` WRITE;
/*!40000 ALTER TABLE `videojuegos` DISABLE KEYS */;
INSERT INTO `videojuegos` VALUES (1,'Minecraft','Notch',2009,'Steve'),(2,'Sonic Heroes','Sega',2003,'Sonic'),(3,'Pokemon Colosseum','Genius Sonority',2003,'Leo'),(4,'The Legend of Zelda: Ocarina of time ','Shigeru Miyamoto',1998,'Link'),(5,'Super Mario Sunshine','Nintendo',2002,'Mario');
/*!40000 ALTER TABLE `videojuegos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-11 22:22:53
