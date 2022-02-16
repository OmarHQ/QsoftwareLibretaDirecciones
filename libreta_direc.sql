-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.28-log - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para libreta_direc
CREATE DATABASE IF NOT EXISTS `libreta_direc` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;
USE `libreta_direc`;

-- Volcando estructura para tabla libreta_direc.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `Categoria` varchar(25) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla libreta_direc.categorias: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`Id`, `Categoria`) VALUES
	(1, 'Privado'),
	(2, 'Amigos'),
	(3, 'Parientes'),
	(4, 'Trabajo');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla libreta_direc.direcciones
CREATE TABLE IF NOT EXISTS `direcciones` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `Genero` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Nombre` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellido` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `Calle` varchar(25) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Localidad` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Movil` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Email` varchar(35) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Website` varchar(35) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Categoria` int(5) NOT NULL,
  `Notas` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Estado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'ACTIVO',
  `FechaNacimiento` date NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_direcciones_categorias` (`Categoria`),
  CONSTRAINT `FK_direcciones_categorias` FOREIGN KEY (`Categoria`) REFERENCES `categorias` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla libreta_direc.direcciones: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `direcciones` DISABLE KEYS */;
INSERT INTO `direcciones` (`Id`, `Genero`, `Nombre`, `Apellido`, `Calle`, `Localidad`, `Movil`, `Email`, `Website`, `Categoria`, `Notas`, `Estado`, `FechaNacimiento`) VALUES
	(7, 'femenino', 'Paola', 'Zaravia', 'Av. Los Tulipanes', 'Cochabamba', '', 'paola@yahoo.com', 'www.enfoques.com', 2, 'Licenciada en enfermeria', 'ACTIVO', '2021-11-21'),
	(8, 'femenino', 'Sara', 'Padilla', 'Av. Los Claveles', 'La Paz', '', '', '', 2, 'Estudiante de Post Grado', 'ACTIVO', '2021-11-21'),
	(17, 'femenino', 'Patricia', 'Torrez', '', 'Cochabamba', '', 'patricia@gmail.com', '', 2, '', 'ACTIVO', '2021-11-21'),
	(18, 'masculino', 'Pedro', 'Suarez', '', 'La Paz', '877635', '', '', 2, '', 'ACTIVO', '2021-11-21'),
	(19, 'femenino', 'Sandra', 'Holguin', 'Av. Los Lirios', 'Cochabamba', '78612837', 'sandra@gmail.ocom', 'www.loveandthunder.com', 2, 'Supervisora TÃ©cnica', 'ACTIVO', '2005-06-16'),
	(20, 'masculino', 'Andres ', 'Tapia', 'Av. Los Lirios', 'Cochabamba', '763553', 'andres@gmail.net', 'www.enfoques.com', 2, 'Supervisor de sucursal 0982', 'INHABILITADO', '2010-07-13'),
	(21, NULL, 'Adrian', 'Barrientos', 'Av. Lo Cisnes', 'La Paz', '', '', '', 1, 'Supervisor', 'ACTIVO', '2021-12-06'),
	(22, 'masculino', 'Hugo', 'Delfos', 'Av. Panoramica', 'Cochabamba', '76653221', '', 'www.delfos.net', 1, 'Marketing', 'ACTIVO', '2005-07-14');
/*!40000 ALTER TABLE `direcciones` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
