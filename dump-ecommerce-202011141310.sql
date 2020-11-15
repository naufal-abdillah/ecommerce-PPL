-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: ecommerce
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.14-MariaDB

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
-- Table structure for table `alamatbuyer`
--

DROP TABLE IF EXISTS `alamatbuyer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alamatbuyer` (
  `idBuyer` int(5) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  PRIMARY KEY (`idBuyer`,`alamat`),
  CONSTRAINT `alamatBuyer_FK` FOREIGN KEY (`idBuyer`) REFERENCES `buyer` (`idBuyer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alamatbuyer`
--

LOCK TABLES `alamatbuyer` WRITE;
/*!40000 ALTER TABLE `alamatbuyer` DISABLE KEYS */;
/*!40000 ALTER TABLE `alamatbuyer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barang` (
  `idBarang` int(5) NOT NULL AUTO_INCREMENT,
  `idSeller` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`idBarang`),
  KEY `barang_FK` (`idSeller`),
  CONSTRAINT `barang_FK` FOREIGN KEY (`idSeller`) REFERENCES `seller` (`idSeller`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang`
--

LOCK TABLES `barang` WRITE;
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buyer`
--

DROP TABLE IF EXISTS `buyer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buyer` (
  `idBuyer` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  PRIMARY KEY (`idBuyer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buyer`
--

LOCK TABLES `buyer` WRITE;
/*!40000 ALTER TABLE `buyer` DISABLE KEYS */;
/*!40000 ALTER TABLE `buyer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listorderbarang`
--

DROP TABLE IF EXISTS `listorderbarang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listorderbarang` (
  `idBarang` int(5) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `idOrder` int(11) NOT NULL,
  PRIMARY KEY (`idBarang`,`idOrder`),
  KEY `listOrderBarang_FK` (`idOrder`),
  CONSTRAINT `listOrderBarang_FK` FOREIGN KEY (`idOrder`) REFERENCES `orderan` (`idOrder`),
  CONSTRAINT `listOrderBarang_FK_1` FOREIGN KEY (`idBarang`) REFERENCES `barang` (`idBarang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listorderbarang`
--

LOCK TABLES `listorderbarang` WRITE;
/*!40000 ALTER TABLE `listorderbarang` DISABLE KEYS */;
/*!40000 ALTER TABLE `listorderbarang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderan`
--

DROP TABLE IF EXISTS `orderan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orderan` (
  `idOrder` int(10) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `total` int(11) NOT NULL,
  `statusBayar` enum('belum bayar','sudah dibayar') NOT NULL,
  `statusKirim` enum('belum dikirm','sedang dikirim','sampai tujuan') NOT NULL,
  `idTransport` int(5) NOT NULL,
  `idBuyer` int(5) NOT NULL,
  PRIMARY KEY (`idOrder`),
  KEY `orderan_FK` (`idTransport`),
  KEY `orderan_FK_1` (`idBuyer`),
  CONSTRAINT `orderan_FK` FOREIGN KEY (`idTransport`) REFERENCES `transport` (`idTransport`),
  CONSTRAINT `orderan_FK_1` FOREIGN KEY (`idBuyer`) REFERENCES `buyer` (`idBuyer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderan`
--

LOCK TABLES `orderan` WRITE;
/*!40000 ALTER TABLE `orderan` DISABLE KEYS */;
/*!40000 ALTER TABLE `orderan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seller`
--

DROP TABLE IF EXISTS `seller`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seller` (
  `idSeller` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`idSeller`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seller`
--

LOCK TABLES `seller` WRITE;
/*!40000 ALTER TABLE `seller` DISABLE KEYS */;
/*!40000 ALTER TABLE `seller` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transport`
--

DROP TABLE IF EXISTS `transport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transport` (
  `idTransport` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`idTransport`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transport`
--

LOCK TABLES `transport` WRITE;
/*!40000 ALTER TABLE `transport` DISABLE KEYS */;
/*!40000 ALTER TABLE `transport` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'ecommerce'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-14 13:10:19
