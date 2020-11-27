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
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barang` (
  `idBarang` int(11) NOT NULL AUTO_INCREMENT,
  `idSeller` int(11) NOT NULL,
  `namaBarang` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`idBarang`),
  KEY `barang_FK` (`idSeller`),
  CONSTRAINT `barang_FK` FOREIGN KEY (`idSeller`) REFERENCES `seller` (`idSeller`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang`
--

LOCK TABLES `barang` WRITE;
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` VALUES (1,1,'Sepatu Converse All Star','Jaga agar pilihan sneakernya tetap sporty, fleksibel, dan sangat nyaman dengan sepatu SKECHERS Bounder - Zallow. Kain rajutan rajut yang direkayasa secara lembut dan sintetis bagian atas dalam selip pada peregangan bertali sp',300000,'Fashion','sepatu.jpg'),(2,2,'Samsung Galaxy A31','Barang yg kita jual 100% orignal n bergaransi Resmi',4000000,'Elektronik','hp.jpg'),(4,11,'wow Kamera Mirrorless Xiaomi - Xiaoyi YI M1','hmmm> 20MP Micro Four Thirds sensor',43000000,'fashion','kamera.jpg'),(6,11,'Kamera Mirrorless Xiaomi - Xiaoyi YI M1','> 20MP Micro Four Thirds sensor',3000000,'Elektronik','kamera.jpg');
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `idOrder` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`idOrder`),
  KEY `order_FK` (`idUser`),
  CONSTRAINT `order_FK` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (1,1,'2020-11-22 07:15:56',300000),(2,1,'2020-11-24 09:12:58',4000000),(3,1,'2020-11-24 09:14:41',10000000);
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderdetails`
--

DROP TABLE IF EXISTS `orderdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orderdetails` (
  `idOrder` int(11) NOT NULL,
  `idBarang` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  PRIMARY KEY (`idOrder`,`idBarang`),
  KEY `orderdetails_FK` (`idBarang`),
  CONSTRAINT `orderdetails_FK` FOREIGN KEY (`idBarang`) REFERENCES `barang` (`idBarang`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `orderdetails_FK_1` FOREIGN KEY (`idOrder`) REFERENCES `order` (`idOrder`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderdetails`
--

LOCK TABLES `orderdetails` WRITE;
/*!40000 ALTER TABLE `orderdetails` DISABLE KEYS */;
INSERT INTO `orderdetails` VALUES (1,1,1),(2,2,1);
/*!40000 ALTER TABLE `orderdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seller`
--

DROP TABLE IF EXISTS `seller`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seller` (
  `idSeller` int(11) NOT NULL AUTO_INCREMENT,
  `namaSeller` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`idSeller`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seller`
--

LOCK TABLES `seller` WRITE;
/*!40000 ALTER TABLE `seller` DISABLE KEYS */;
INSERT INTO `seller` VALUES (1,'Kilback-Casper','28994 Westport Trail','8691680609','killback-c@gmail.com','noobmaster69'),(2,'Roob Inc','4 Pepper Wood Drive','9243884472','Roob@gmail.com','lucky_n00b'),(3,'Roberts Group','0 Atwood Drive','8691680609','Roberts@gmail.com','lucky_suk3b3'),(4,'Berge-Legros','5937 Toban Center','5096433308','BL@gmail.com','12345678'),(5,'Renner, Runolfsson and Frami','4 Pepper Wood Drive','8691680609','Renner@gmail.com','cheyhrrrgr'),(6,'Cruickshank-Homenick','5937 Toban Center','9303713750','CH@gmail.com','grgregreger'),(7,'Fay Group','72290 8th Road','8045217310','Fy@gmail.com','g5g54grv'),(8,'Nienow LLC','072 Scoville Junction','5016768311','Nienow@gmail.com','grgtgvevtrtgv'),(9,'Will-Runte','28994 Westport Trail','5016768310','WillR@gmail.com','tgegtr4gvt4r'),(10,'Vandervort, Cronin and Cummerata','57 Harper Hill','5016768319','VCC@gmail.com','gtvgtbvervtb'),(11,'Satan Club','Neraka','086969696969','satan69@gmail.com','$2y$10$hkfSozpcgoNgL7a6CIjCS.QG9h.Z3msvFAty8Bk8UL/3t.JeI.C7C');
/*!40000 ALTER TABLE `seller` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `namaUser` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Homerus Skitteral','Male','57 Harper Hill','5016768310','hskitteral0@marriott.com','zJTsVGBoXX1'),(2,'Nobie Purver','Male','072 Scoville Junction','8378370880','npurver1@meetup.com','xvIikMJALIvc'),(3,'Derrek Crofts','Male','525 Delaware Hill','9243884472','dcrofts2@chronoengine.com','srHY2Zol'),(4,'Brooke Belmont','Male','4 Pepper Wood Drive','8691680609','bbelmont3@macromedia.com','mzKMMK'),(5,'Jenda Probyn','Female','0463 Novick Road','5705748204','jprobyn4@1und1.de','MXcyUzltlsd'),(6,'Donnamarie Ceresa','Female','0 Atwood Drive','6563281542','dceresa5@marriott.com','xVANnZsAydJW'),(7,'Marie-ann Wadworth','Female','7604 Vermont Avenue','5096433308','mwadworth6@google.es','u9w9f9d3ho'),(8,'Prudence Bagott','Female','5937 Toban Center','6136899129','pbagott7@uol.com.br','h4cmRN'),(9,'Mervin Pennicott','Male','72290 8th Road','9303713750','mpennicott8@shop-pro.jp','cP9asd9iF'),(10,'Malorie Thow','Female','28994 Westport Trail','8045217310','mthow9@columbia.edu','74JDqyNWHdu'),(11,'Tumen','Male','Jalan buntu no 99','8562435142536','tumen.paideng@gmail.com','$2y$10$MbQTVAAFUFKZ/uxvCnh3ae5bhvNc9uaZPIfEg3/5QwW0QxDho7vFe');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
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

-- Dump completed on 2020-11-27 16:42:12
