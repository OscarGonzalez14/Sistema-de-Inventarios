-- MySQL dump 10.15  Distrib 10.0.30-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: inventories
-- ------------------------------------------------------
-- Server version	10.0.30-MariaDB-0+deb8u1

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
-- Table structure for table `Proveedores`
--

DROP TABLE IF EXISTS `Proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Proveedores` (
  `idProveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombreProveedor` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `telefonoProveedor` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `nom_contacto` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`idProveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Proveedores`
--

LOCK TABLES `Proveedores` WRITE;
/*!40000 ALTER TABLE `Proveedores` DISABLE KEYS */;
INSERT INTO `Proveedores` VALUES (1,'Freund','2345678','freund@gmail.com','williams'),(2,'EPA','245678','epa@gmail.com','carlos'),(3,'Vidri','2345678','vidri@outlook.com','Oscar Gonzalez');
/*!40000 ALTER TABLE `Proveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cli` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono_cli` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion_cli` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `correo_cli` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_cli` date NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Carlos Rojas','23746578','Caserio La Vuelta','carlos@gmail.com','2018-03-30'),(2,'juan Gomez','123764665','casrio la vuelta del muñeco','juan@hotmail.com','2018-04-10'),(3,'Carlos ','1275757','casrio la Cumbre','carlitos@gmail.com','2018-04-11'),(4,'Marbin Antonio Rodriguez','2575756678','San Salvador','iuffjvoiuf@hffj','2018-04-11'),(5,'Eliza Saravia','847865856','San Salvador','eliza@hotmail.com','2018-04-23'),(6,'Williams Palacios','6478589','Olocuilta','williams@outlook.com','2018-04-25'),(7,'Salvador Rojas','589906-','Candelaria','salvador@gmail.com','2018-04-04'),(8,'Alisson Luna','79496086','Zacatecoluca','ali@gmail.com','2018-04-18'),(9,'ROMENA','223456','San Salvador','romena@ro.com','2018-04-02'),(10,'Carlos mejia','223456','kjhjml.dfjl/v','carlos@gmail.com','2018-04-07'),(11,'Freund','22894567','San Salvador','freund@outlook.com','2018-04-19'),(12,'El Chory','22345677','Salvador del Myndo','choripanes@elchory.com','2018-05-01'),(13,'Comedor \"El buen Sabor\"','2345686','Caserío La Vuelta','buensabor@gmail.com','2018-05-02'),(14,'Toño Hernández','1374894','hidfh.lfmgl','toño@gmail.com','2018-05-04'),(15,'Panes El chory','23555995','San Salvador','elchory@gmail.com','2018-05-17'),(16,'Cafeterias Selectos','2345679','San Jacinto','cafeteriasanjacinto@callejas.com','2018-05-18'),(17,'Comedor \"Que icooo\"','34957776','Salvador del Mundo','queico@gmail.com','2018-05-18'),(18,'Restaurante La Pampa','2376855909','La Libretad','lapampa@gmail.com','2018-05-18');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configuracion`
--

DROP TABLE IF EXISTS `configuracion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configuracion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_emp` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion_emp` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `nit` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configuracion`
--

LOCK TABLES `configuracion` WRITE;
/*!40000 ALTER TABLE `configuracion` DISABLE KEYS */;
INSERT INTO `configuracion` VALUES (1,'Aceros Y Equipos','Km 21, a # 16, Autopista Comalapa, San Salvador','2347-2222','Fabricación de Equipos de Metal','0614-290209-000-0');
/*!40000 ALTER TABLE `configuracion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `dui` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `cargo` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `nivel` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `password2` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `fechaIngreso` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (9,'Oscar Antonio Gonzalez','01840981-4','Bodeguero','antonio1','ADMINISTRADOR','12345','12345','2018-03-25'),(10,'Juan de los Palotes','12434565-8','auxiliar de Bodega','juancito','BODEGUERO','54321','54321','2018-03-26'),(11,'Carlos Mejia Barahona','12838999998','admin','charly','ADMINISTRADOR','54321','54321','2018-05-02'),(12,'Marbin Rodriguez','1233456-9','Bodega','marbin','BODEGUERO','1233','1233','2018-05-13'),(14,'Clara Yamileth','1233456-8','auxiliar de Bodega','clarita','ADMINISTRADOR','54321','54321','2018-05-14'),(16,'Macario Martinez','12334567-8','Bodega','maca','BODEGUERO','12344','12344','2018-05-17'),(17,'Juan Gabriel','1263367','administrador','jaunga','ADMINISTRADOR','12345','12345','2018-05-17'),(18,'Juan de los Palitos','137484489','Bodega','palito','CONTADOR','8.8.8.8','8.8.8.8','2018-05-18');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-21 10:56:00
