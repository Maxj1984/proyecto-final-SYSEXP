CREATE DATABASE  IF NOT EXISTS `sys_exp` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sys_exp`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: sys_exp
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `solucion_falla`
--

DROP TABLE IF EXISTS `solucion_falla`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solucion_falla` (
  `id_Solucion` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `recomendaciones` varchar(600) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `causas` varchar(600) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `descripccion` varchar(600) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`id_Solucion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solucion_falla`
--

LOCK TABLES `solucion_falla` WRITE;
/*!40000 ALTER TABLE `solucion_falla` DISABLE KEYS */;
INSERT INTO `solucion_falla` VALUES (1,'Problema de Conexion','se debe revisar los cables de conexión y asegurarse de que estén bien conectados','cable desconectado o mal puesto, cable dañado, puerto usb dañado','Si la impresora no está conectada correctamente a la computadora o si hay algún problema con la conexión, la impresora puede no imprimir'),(2,'Impresora no Enciende','Desconecte el cable de alimentación de la impresora y espere al menos un minuto antes de volver a conectarlo. Compruebe si hay luces en la parte trasera y en el interior de la impresora. Compruebe que el cable de alimentación esté bien conectado a la toma de corriente y también a la impresora','cable de alimentación defectuoso, tomacorriente dañado, conector no compatible, fuente de alimentación dañado','Tu impresora no enciende, no reacciona cuando presionas el botón de encendido y las luces no se encienden, no realiza ningun sonido'),(3,'Impresora no Imprime','En este caso, se debe verificar el nivel de tinta, reemplazar el cartucho o rellenar los tanques del color con bajo nivel si es necesario.','bajo nivel de tinta, cabezal dañado, mangueras obstruidas, tinta vieja o seca, cabezal mal colocado','Tu impresora no imprime, las hojas salen en blanco o la impresión es muy tenue, no realiza ningun sonido'),(4,'Conexion USB','Revise el estado de su cable usb o reemplacelo por uno nuevo, envie documento nuevamente a impresion','cable usb dañado, puerto usb en mal estado, mala conexion, controlador no instalado','Cable se ve conectado correctamente a la computadora, pero no genera impresión al enviar documento');
/*!40000 ALTER TABLE `solucion_falla` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-11  0:05:46
