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
  `nombre` varchar(100) NOT NULL,
  `descripcion` text,
  `cupo_maximo` double NOT NULL,
  `edad_minima` double DEFAULT NULL,
  `edad_maxima` double DEFAULT NULL,
  `costo` double DEFAULT NULL,
  PRIMARY KEY (`id_actividad`)
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
-- Table structure for table `autorizadas_nino`
--

DROP TABLE IF EXISTS `autorizadas_nino`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `autorizadas_nino` (
  `id_nino` int NOT NULL,
  `id_personas` int NOT NULL,
  KEY `id_nino` (`id_nino`),
  KEY `id_personas` (`id_personas`),
  CONSTRAINT `autorizadas_nino_ibfk_1` FOREIGN KEY (`id_nino`) REFERENCES `nino` (`id_nino`),
  CONSTRAINT `autorizadas_nino_ibfk_2` FOREIGN KEY (`id_personas`) REFERENCES `personas_autorizadas` (`id_personas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autorizadas_nino`
--

LOCK TABLES `autorizadas_nino` WRITE;
/*!40000 ALTER TABLE `autorizadas_nino` DISABLE KEYS */;
/*!40000 ALTER TABLE `autorizadas_nino` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactanos`
--

DROP TABLE IF EXISTS `contactanos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contactanos` (
  `id_contacto` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(75) NOT NULL,
  `telefono` char(10) NOT NULL,
  `mensaje` text NOT NULL,
  PRIMARY KEY (`id_contacto`)
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
  `nombre` varchar(75) NOT NULL,
  `descripcion` text,
  `duracion` varchar(75) NOT NULL,
  `horario` time NOT NULL,
  `dia` varchar(75) NOT NULL,
  `id_empleados` int unsigned NOT NULL,
  PRIMARY KEY (`id_curso`),
  KEY `id_empleados` (`id_empleados`),
  CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`id_empleados`) REFERENCES `empleados` (`id_empleados`)
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
-- Table structure for table `descripcion_factura`
--

DROP TABLE IF EXISTS `descripcion_factura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `descripcion_factura` (
  `id_descripcion` int NOT NULL AUTO_INCREMENT,
  `id_factura` int NOT NULL,
  `id_servicio` int NOT NULL,
  `cantidad` int NOT NULL,
  `total_parcial` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_descripcion`),
  KEY `id_factura` (`id_factura`),
  KEY `id_servicio` (`id_servicio`),
  CONSTRAINT `descripcion_factura_ibfk_1` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_factura`),
  CONSTRAINT `descripcion_factura_ibfk_2` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descripcion_factura`
--

LOCK TABLES `descripcion_factura` WRITE;
/*!40000 ALTER TABLE `descripcion_factura` DISABLE KEYS */;
/*!40000 ALTER TABLE `descripcion_factura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empleados` (
  `id_empleados` int unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` char(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechanac` date NOT NULL,
  `genero` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo_electronico` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaingreso` date NOT NULL,
  `horariolabo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foracademica` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `teleemergencia11` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_puesto` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_empleados`),
  UNIQUE KEY `empleados_cedula_unique` (`cedula`),
  UNIQUE KEY `empleados_correo_electronico_unique` (`correo_electronico`),
  KEY `empleados_id_puesto_foreign` (`id_puesto`),
  CONSTRAINT `empleados_id_puesto_foreign` FOREIGN KEY (`id_puesto`) REFERENCES `puestos` (`id_puesto`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES (6,'Laiyine','Suriel','40230304698','2006-10-17','Femenino','Ipisa ','8294241751','LAIYINESURIEL@gmail.com ','2024-09-11','jrEW34ETYJHGFBFDV','WAESRDTDYHDGBFDVFSVBGNHY ','8294240238',2,NULL,NULL),(8,'Noelia','Blanco','85965821456','2000-09-20','Femenino','Los Girasoles ','8296536336','noeliab@gmail.com','2024-01-25','Mañaba','Bachiller ','8095236415',2,NULL,NULL),(9,'Fernanda','Vicente','74523695415','1980-09-23','Femenino','Gurabo, Casa 19','8092331535','fernanda@gmail.com','2023-01-09','Mañana','Universitaria ','8295564411',2,NULL,NULL),(12,'Abbyyyyyyyy','Padilla','96963254147','1976-05-26','Femenino','Gurabo ','9696663663','noelia99b@gmail.com','2024-01-25','Mañana','Bachiller ','6369963663',4,NULL,NULL);
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factura`
--

DROP TABLE IF EXISTS `factura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `factura` (
  `id_factura` int NOT NULL AUTO_INCREMENT,
  `id_tutor` int NOT NULL,
  `fecha` date NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_factura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factura`
--

LOCK TABLES `factura` WRITE;
/*!40000 ALTER TABLE `factura` DISABLE KEYS */;
/*!40000 ALTER TABLE `factura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ganancias`
--

DROP TABLE IF EXISTS `ganancias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ganancias` (
  `id_ganancia` int NOT NULL AUTO_INCREMENT,
  `descripcion` text,
  `monto` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_ganancia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ganancias`
--

LOCK TABLES `ganancias` WRITE;
/*!40000 ALTER TABLE `ganancias` DISABLE KEYS */;
/*!40000 ALTER TABLE `ganancias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gastos`
--

DROP TABLE IF EXISTS `gastos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gastos` (
  `id_gasto` int NOT NULL AUTO_INCREMENT,
  `concepto` varchar(100) NOT NULL,
  `monto` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` text,
  PRIMARY KEY (`id_gasto`)
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
-- Table structure for table `inscripciones_actividades`
--

DROP TABLE IF EXISTS `inscripciones_actividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inscripciones_actividades` (
  `id_inscripcion` int NOT NULL AUTO_INCREMENT,
  `id_actividad` int NOT NULL,
  `id_nino` int NOT NULL,
  PRIMARY KEY (`id_inscripcion`),
  KEY `id_actividad` (`id_actividad`),
  KEY `id_nino` (`id_nino`),
  CONSTRAINT `inscripciones_actividades_ibfk_1` FOREIGN KEY (`id_actividad`) REFERENCES `actividades_adicionales` (`id_actividad`),
  CONSTRAINT `inscripciones_actividades_ibfk_2` FOREIGN KEY (`id_nino`) REFERENCES `nino` (`id_nino`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscripciones_actividades`
--

LOCK TABLES `inscripciones_actividades` WRITE;
/*!40000 ALTER TABLE `inscripciones_actividades` DISABLE KEYS */;
/*!40000 ALTER TABLE `inscripciones_actividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nino`
--

DROP TABLE IF EXISTS `nino`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nino` (
  `id_nino` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_nac` date NOT NULL,
  `edad` int NOT NULL,
  `genero` enum('Masculino','Femenino') NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `modo_nacer` enum('Natural','Cesarea') NOT NULL,
  `cant_hermanos` int NOT NULL,
  `niv_educativo` varchar(50) NOT NULL,
  `alergia` enum('Si','No') DEFAULT NULL,
  `desc_alergia` text,
  `discapacidad` enum('Si','No') DEFAULT NULL,
  `desc_discapacidad` text,
  PRIMARY KEY (`id_nino`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nino`
--

LOCK TABLES `nino` WRITE;
/*!40000 ALTER TABLE `nino` DISABLE KEYS */;
INSERT INTO `nino` VALUES (1,'Marcos','Peralta','2020-03-03',4,'Masculino','Dominicano','Natural',1,'Pre-kinder','No','','Si','Cojo'),(2,'Noriely','Blanco','2006-10-17',17,'Femenino','Dominicana','Cesarea',2,'Maternal','Si','Camarones','Si','Muda'),(4,'Cristal','Peralta','2010-05-12',14,'Femenino','Dominicana','Natural',3,'Básico','No','','No',''),(5,'Najavy','Ureña','2006-12-03',17,'Femenino','Dominicana','Cesarea',4,'Básico','Si','A las almendras','No',''),(6,'Tomas','Hernandez','2010-09-14',13,'Masculino','Dominicano','Cesarea',3,'Básico','Si','A las almendras','No',''),(7,'Fernando','Perez','2011-08-21',12,'Masculino','Dominicano','Cesarea',5,'Básico','Si','A las uvas','No',''),(8,'María','Trejo','1979-06-23',17,'Femenino','Dominicana','Natural',6,'Basico','Si','almendras','No',''),(9,'Oscar','Lluberes','2006-11-11',17,'Masculino','Dominicana','Cesarea',2,'Básico','Si','Gatos','Si','Olfato');
/*!40000 ALTER TABLE `nino` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nino_curso`
--

DROP TABLE IF EXISTS `nino_curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nino_curso` (
  `id_nino` int NOT NULL,
  `id_curso` int NOT NULL,
  KEY `id_nino` (`id_nino`),
  KEY `id_curso` (`id_curso`),
  CONSTRAINT `nino_curso_ibfk_1` FOREIGN KEY (`id_nino`) REFERENCES `nino` (`id_nino`),
  CONSTRAINT `nino_curso_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nino_curso`
--

LOCK TABLES `nino_curso` WRITE;
/*!40000 ALTER TABLE `nino_curso` DISABLE KEYS */;
/*!40000 ALTER TABLE `nino_curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pago`
--

DROP TABLE IF EXISTS `pago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pago` (
  `id_pago` int NOT NULL AUTO_INCREMENT,
  `id_tutor` int NOT NULL,
  `id_servicio` int NOT NULL,
  `fecha` date NOT NULL,
  `monto` decimal(10,2) NOT NULL,
  `metodo_pago` varchar(50) NOT NULL,
  `descripcion` text,
  `id_empleados` int unsigned NOT NULL,
  PRIMARY KEY (`id_pago`),
  KEY `id_tutor` (`id_tutor`),
  KEY `id_servicio` (`id_servicio`),
  KEY `id_empleados` (`id_empleados`),
  CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`id_tutor`) REFERENCES `tutores` (`id_tutor`),
  CONSTRAINT `pago_ibfk_2` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicio`),
  CONSTRAINT `pago_ibfk_3` FOREIGN KEY (`id_empleados`) REFERENCES `empleados` (`id_empleados`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pago`
--

LOCK TABLES `pago` WRITE;
/*!40000 ALTER TABLE `pago` DISABLE KEYS */;
/*!40000 ALTER TABLE `pago` ENABLE KEYS */;
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
  `parentesco` varchar(50) NOT NULL,
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
-- Table structure for table `puestos`
--

DROP TABLE IF EXISTS `puestos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `puestos` (
  `id_puesto` int unsigned NOT NULL AUTO_INCREMENT,
  `puesto` enum('Asistente','Docente','Mantenimiento','Cuidador') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descpuesto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_puesto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puestos`
--

LOCK TABLES `puestos` WRITE;
/*!40000 ALTER TABLE `puestos` DISABLE KEYS */;
INSERT INTO `puestos` VALUES (1,'Cuidador','Proporcionar cuidado amoroso, atención individualizada y apoyo en el desarrollo de los niños. Sus tareas incluyen alimentar, cambiar pañales, mantener un entorno seguro y limpio, estimular el juego y la socialización, y comunicarse de manera efectiva con los padres para garantizar el bienestar integral de los pequeños.',NULL,NULL),(2,'Asistente','Proporcionar cuidado antes y después de la escuela, apoyar en la implementación de actividades educativas, garantizar la seguridad y bienestar de los niños, fomentar su aprendizaje y desarrollo, colaborar estrechamente con el personal educativo y mantener una comunicación abierta con los padres.',NULL,NULL),(3,'Docente','Planificar y llevar a cabo actividades educativas, fomentar el aprendizaje y desarrollo integral de los niños, mantener un entorno seguro y estimulante, colaborar estrechamente con el personal de apoyo, mantener una comunicación efectiva con los padres y cuidadores, y brindar apoyo emocional y educativo a los niños.',NULL,NULL),(4,'Mantenimiento','Realizar tareas de limpieza, mantenimiento y reparación de las instalaciones, inspeccionar y mantener los equipos de juego y asegurarse de que el entorno sea seguro y saludable para los niños.',NULL,NULL);
/*!40000 ALTER TABLE `puestos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `relaciones`
--

DROP TABLE IF EXISTS `relaciones`;
/*!50001 DROP VIEW IF EXISTS `relaciones`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `relaciones` AS SELECT 
 1 AS `nombre`,
 1 AS `apellido`,
 1 AS `cedula`,
 1 AS `id_tutor`,
 1 AS `id_nino`,
 1 AS `relacion_parental`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `servicios`
--

DROP TABLE IF EXISTS `servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicios` (
  `id_servicio` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(75) NOT NULL,
  `costo` double NOT NULL,
  `detalle` text,
  PRIMARY KEY (`id_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicios`
--

LOCK TABLES `servicios` WRITE;
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutores`
--

DROP TABLE IF EXISTS `tutores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tutores` (
  `id_tutor` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `apellido` varchar(150) NOT NULL,
  `fechanac` date NOT NULL,
  `cedula` char(13) NOT NULL,
  `lugar_trabajo` varchar(150) NOT NULL,
  `cargo` text NOT NULL,
  `nivel_academico` varchar(150) NOT NULL,
  `profesion` text,
  `direccion` text NOT NULL,
  `telefono` char(12) NOT NULL,
  `email` text NOT NULL,
  `estado_civil` text NOT NULL,
  PRIMARY KEY (`id_tutor`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutores`
--

LOCK TABLES `tutores` WRITE;
/*!40000 ALTER TABLE `tutores` DISABLE KEYS */;
INSERT INTO `tutores` VALUES (1,'Martin','Padilla','1976-05-26','098-0989090-9','VoiceTeam','Gerente','Universitario','Ingeniero Industrial','Licey, Limonar','809-525-9669','felipepadillahal@hotmail.com','felipepadillahal@hotmail.com'),(2,'Milca ','Sánchez','1979-04-09','098-0987677-0','Semma','Psicóloga Clínica','Universitario','Psicóloga','Villa Olimpica','809-747-9669','milcaesans@hotmail.com','Casada'),(3,'María','Tavares','1979-06-23','098-0987656-0','Corripio','Gerente','Universitario','Administradora de empresas','Gurabo','809-989-9669','mariatavares@gmail.com','Soltera'),(4,'Bielka','Hernandez','1970-09-23','098-0986789-0','La Fuente','Gerente General','Universitario','Administradora de Empresas','Gurabo','809-747-5226','bielkahrndz@gmail.com','Si'),(5,'Teresa','Perez','1979-07-26','987-0987678-0','La Fuente','Gerente General','Universitario','Administradora de Empresas','Villa Olga','809-474-9669','teresaprz@gmail.com','Si'),(13,'Tomas','Perez','1978-09-24','745-9698529-9','Latino Movil','Jefe de Tecnología','Universitario','Telemático','Los Cerros de Gurabo, Calle 12','809-999-8888','tomasprz@gmail.com','tomasprz@gmail.com'),(14,'Felipe','Fernandez','1979-04-09','965-9654569-9','Semma','Chef','Universitario','Ingeniero Industrial','Licey, Limonar, 9','829-777-8888','Jqgrullon@gmail.com','Si');
/*!40000 ALTER TABLE `tutores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutores_nino`
--

DROP TABLE IF EXISTS `tutores_nino`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tutores_nino` (
  `id_reg` int NOT NULL AUTO_INCREMENT,
  `id_tutor` int NOT NULL,
  `id_nino` int NOT NULL,
  `relacion_parental` text,
  PRIMARY KEY (`id_reg`),
  KEY `id_tutor` (`id_tutor`),
  KEY `id_nino` (`id_nino`),
  CONSTRAINT `tutores_nino_ibfk_1` FOREIGN KEY (`id_tutor`) REFERENCES `tutores` (`id_tutor`),
  CONSTRAINT `tutores_nino_ibfk_2` FOREIGN KEY (`id_nino`) REFERENCES `nino` (`id_nino`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutores_nino`
--

LOCK TABLES `tutores_nino` WRITE;
/*!40000 ALTER TABLE `tutores_nino` DISABLE KEYS */;
INSERT INTO `tutores_nino` VALUES (1,1,2,'Padre'),(2,5,2,'Madre');
/*!40000 ALTER TABLE `tutores_nino` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `contrasena` varchar(25) NOT NULL,
  `tipo_usuario` varchar(25) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Admin','Administrador','admin');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `relaciones`
--

/*!50001 DROP VIEW IF EXISTS `relaciones`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `relaciones` AS select `t`.`nombre` AS `nombre`,`t`.`apellido` AS `apellido`,`t`.`cedula` AS `cedula`,`r`.`id_tutor` AS `id_tutor`,`r`.`id_nino` AS `id_nino`,`r`.`relacion_parental` AS `relacion_parental` from (`tutores` `t` join `tutores_nino` `r` on((`t`.`id_tutor` = `r`.`id_tutor`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-18  0:50:55
