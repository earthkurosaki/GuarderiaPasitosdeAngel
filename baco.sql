-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: guarderia
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `actividades_adicionales`
--

DROP TABLE IF EXISTS `actividades_adicionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actividades_adicionales` (
  `id_actividad` int NOT NULL AUTO_INCREMENT,
  `monto` float NOT NULL,
  `fecha` date NOT NULL,
  `id_ninos` int NOT NULL,
  `id_padres` int NOT NULL,
  `tipoacti` varchar(50) NOT NULL,
  `descripcion` text,
  PRIMARY KEY (`id_actividad`),
  KEY `id_ninos` (`id_ninos`),
  KEY `id_padres` (`id_padres`),
  CONSTRAINT `actividades_adicionales_ibfk_1` FOREIGN KEY (`id_ninos`) REFERENCES `ninos` (`id_ninos`),
  CONSTRAINT `actividades_adicionales_ibfk_2` FOREIGN KEY (`id_padres`) REFERENCES `padres` (`id_padres`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividades_adicionales`
--

LOCK TABLES `actividades_adicionales` WRITE;
/*!40000 ALTER TABLE `actividades_adicionales` DISABLE KEYS */;
/*!40000 ALTER TABLE `actividades_adicionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactanos`
--

DROP TABLE IF EXISTS `contactanos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contactanos` (
  `id_contactanos` int NOT NULL AUTO_INCREMENT,
  `correo` varchar(50) NOT NULL,
  `telefono` char(10) NOT NULL,
  `descripcion` text,
  PRIMARY KEY (`id_contactanos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactanos`
--

LOCK TABLES `contactanos` WRITE;
/*!40000 ALTER TABLE `contactanos` DISABLE KEYS */;
/*!40000 ALTER TABLE `contactanos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cursos` (
  `id_curso` int NOT NULL AUTO_INCREMENT,
  `id_empleados` int NOT NULL,
  `horario` varchar(50) NOT NULL,
  `dia` date NOT NULL,
  `id_nino` int NOT NULL,
  `nombrecurso` varchar(50) NOT NULL,
  PRIMARY KEY (`id_curso`),
  KEY `id_nino` (`id_nino`),
  KEY `id_empleados` (`id_empleados`),
  CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`id_nino`) REFERENCES `ninos` (`id_ninos`),
  CONSTRAINT `cursos_ibfk_2` FOREIGN KEY (`id_empleados`) REFERENCES `empleados` (`id_empleados`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empleados` (
  `id_empleados` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cedula` char(11) NOT NULL,
  `fechanac` date NOT NULL,
  `genero` varchar(20) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` char(10) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `fechaingreso` date NOT NULL,
  `horariolabo` varchar(50) NOT NULL,
  `foracademica` varchar(50) NOT NULL,
  `teleemergencia` char(10) NOT NULL,
  `id_puesto` int NOT NULL,
  PRIMARY KEY (`id_empleados`),
  KEY `id_puesto` (`id_puesto`),
  CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`id_puesto`) REFERENCES `puesto` (`id_puesto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gastos`
--

DROP TABLE IF EXISTS `gastos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gastos` (
  `id_gastos` int NOT NULL AUTO_INCREMENT,
  `renta` float NOT NULL,
  `descservicios` varchar(100) NOT NULL,
  `totalservi` float NOT NULL,
  `descsuministro` varchar(100) NOT NULL,
  `totalsumi` float NOT NULL,
  `monto_total` float NOT NULL,
  PRIMARY KEY (`id_gastos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gastos`
--

LOCK TABLES `gastos` WRITE;
/*!40000 ALTER TABLE `gastos` DISABLE KEYS */;
/*!40000 ALTER TABLE `gastos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ninos`
--

DROP TABLE IF EXISTS `ninos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ninos` (
  `id_ninos` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `fechanac` date NOT NULL,
  `edad` double NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `modnacer` varchar(50) NOT NULL,
  `canthermanos` double NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `niveledu` varchar(50) NOT NULL,
  `id_padres` int NOT NULL,
  `id_personas` int NOT NULL,
  `discapacidad` text,
  `infomedica` text,
  PRIMARY KEY (`id_ninos`),
  KEY `id_padres` (`id_padres`),
  KEY `id_personas` (`id_personas`),
  CONSTRAINT `ninos_ibfk_1` FOREIGN KEY (`id_padres`) REFERENCES `padres` (`id_padres`),
  CONSTRAINT `ninos_ibfk_2` FOREIGN KEY (`id_personas`) REFERENCES `personas_autorizadas` (`id_personas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ninos`
--

LOCK TABLES `ninos` WRITE;
/*!40000 ALTER TABLE `ninos` DISABLE KEYS */;
/*!40000 ALTER TABLE `ninos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nomina`
--

DROP TABLE IF EXISTS `nomina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nomina` (
  `id_nomina` int NOT NULL AUTO_INCREMENT,
  `sueldo_base` decimal(10,2) DEFAULT NULL,
  `sueldo_final` decimal(10,2) DEFAULT NULL,
  `fecha_pago` date NOT NULL,
  `impuestos_sr` decimal(10,2) DEFAULT NULL,
  `pago_final` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_nomina`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nomina`
--

LOCK TABLES `nomina` WRITE;
/*!40000 ALTER TABLE `nomina` DISABLE KEYS */;
INSERT INTO `nomina` VALUES (1,50000.00,-113700.00,'2024-05-01',0.00,-113700.00);
/*!40000 ALTER TABLE `nomina` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `padres`
--

DROP TABLE IF EXISTS `padres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `padres` (
  `id_padres` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cedula` char(11) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `telefono` char(10) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `parentesco` varchar(20) NOT NULL,
  PRIMARY KEY (`id_padres`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `padres`
--

LOCK TABLES `padres` WRITE;
/*!40000 ALTER TABLE `padres` DISABLE KEYS */;
/*!40000 ALTER TABLE `padres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagos`
--

DROP TABLE IF EXISTS `pagos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pagos` (
  `id_pago` int NOT NULL AUTO_INCREMENT,
  `id_padres` int NOT NULL,
  `id_ninos` int NOT NULL,
  `monto_pago` float NOT NULL,
  `fecha_pago` date NOT NULL,
  `tipo_pago` varchar(50) NOT NULL,
  `descpago` varchar(50) NOT NULL,
  `servicio_pago` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pago`),
  KEY `id_padres` (`id_padres`),
  KEY `id_ninos` (`id_ninos`),
  CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`id_padres`) REFERENCES `padres` (`id_padres`),
  CONSTRAINT `pagos_ibfk_2` FOREIGN KEY (`id_ninos`) REFERENCES `ninos` (`id_ninos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagos`
--

LOCK TABLES `pagos` WRITE;
/*!40000 ALTER TABLE `pagos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personas_autorizadas`
--

DROP TABLE IF EXISTS `personas_autorizadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personas_autorizadas` (
  `id_personas` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` char(10) NOT NULL,
  `cedula` char(11) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `parentesco` varchar(20) NOT NULL,
  PRIMARY KEY (`id_personas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personas_autorizadas`
--

LOCK TABLES `personas_autorizadas` WRITE;
/*!40000 ALTER TABLE `personas_autorizadas` DISABLE KEYS */;
/*!40000 ALTER TABLE `personas_autorizadas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `puesto`
--

DROP TABLE IF EXISTS `puesto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `puesto` (
  `id_puesto` int NOT NULL AUTO_INCREMENT,
  `descpuesto` text NOT NULL,
  `puesto` enum('Asistente','Maestra','Mantenimiento','Cuidadoras') NOT NULL,
  PRIMARY KEY (`id_puesto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puesto`
--

LOCK TABLES `puesto` WRITE;
/*!40000 ALTER TABLE `puesto` DISABLE KEYS */;
INSERT INTO `puesto` VALUES (1,'Proporcionar cuidado antes y después de la escuela, apoyar en la implementación de actividades educativas, garantizar la seguridad y bienestar de los niños, fomentar su aprendizaje y desarrollo, colaborar estrechamente con el personal educativo y mantener una comunicación abierta con los padres.','Asistente'),(2,'Planificar y llevar a cabo actividades educativas, fomentar el aprendizaje y desarrollo integral de los niños, mantener un entorno seguro y estimulante, colaborar estrechamente con el personal de apoyo, mantener una comunicación efectiva con los padres y cuidadores, y brindar apoyo emocional y educativo a los niños.','Maestra'),(3,'Realizar tareas de limpieza, mantenimiento y reparación de las instalaciones, inspeccionar y mantener los equipos de juego y asegurarse de que el entorno sea seguro y saludable para los niños.','Mantenimiento'),(4,'Proporcionar cuidado amoroso, atención individualizada y apoyo en el desarrollo de los niños. Sus tareas incluyen alimentar, cambiar pañales, mantener un entorno seguro y limpio, estimular el juego y la socialización, y comunicarse de manera efectiva con los padres para garantizar el bienestar integral de los pequeños.','Cuidadoras');
/*!40000 ALTER TABLE `puesto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trabajo`
--

DROP TABLE IF EXISTS `trabajo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trabajo` (
  `id_padres` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `horalaborales` varchar(20) NOT NULL,
  `telefono` char(10) NOT NULL,
  `puesto` varchar(50) NOT NULL,
  KEY `id_padres` (`id_padres`),
  CONSTRAINT `trabajo_ibfk_1` FOREIGN KEY (`id_padres`) REFERENCES `padres` (`id_padres`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabajo`
--

LOCK TABLES `trabajo` WRITE;
/*!40000 ALTER TABLE `trabajo` DISABLE KEYS */;
/*!40000 ALTER TABLE `trabajo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-09 11:41:25
