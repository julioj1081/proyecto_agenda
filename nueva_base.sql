-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.10-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para agenda
CREATE DATABASE IF NOT EXISTS `agenda` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `agenda`;

-- Volcando estructura para tabla agenda.archivos
CREATE TABLE IF NOT EXISTS `archivos` (
  `email` varchar(50) DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `destinatario` varchar(50) DEFAULT NULL,
  `descripcion` longtext DEFAULT NULL,
  `ruta` longtext DEFAULT NULL,
  `tipo` longtext DEFAULT NULL,
  `size` longtext DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla agenda.archivos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `archivos` DISABLE KEYS */;
REPLACE INTO `archivos` (`email`, `titulo`, `destinatario`, `descripcion`, `ruta`, `tipo`, `size`, `ID`) VALUES
	('alberto@hotmail.com ', 'para eder', 'eder@hotmail.com', 'de alberto', 'estilo.png', 'image/png', '115543', 1),
	('eder@hotmail.com ', 'para ale', 'alefg@hotmail.com', 'prueba', 'imagen.png', 'image/png', '102049', 2);
/*!40000 ALTER TABLE `archivos` ENABLE KEYS */;

-- Volcando estructura para tabla agenda.archivosproyectos
CREATE TABLE IF NOT EXISTS `archivosproyectos` (
  `email` varchar(50) DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `destinatario` longtext DEFAULT NULL,
  `descripcion` longtext DEFAULT NULL,
  `ruta` longtext DEFAULT NULL,
  `tipo` longtext DEFAULT NULL,
  `size` longtext DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla agenda.archivosproyectos: 2 rows
/*!40000 ALTER TABLE `archivosproyectos` DISABLE KEYS */;
REPLACE INTO `archivosproyectos` (`email`, `titulo`, `destinatario`, `descripcion`, `ruta`, `tipo`, `size`, `ID`) VALUES
	('eder@hotmail.com ', 'entrega a jefe', 'gabo@hotmail.com', 'de eder', 'estilo.png', 'image/png', '115543', 1),
	('alefg@hotmail.com ', 'para gabo', 'gabo@hotmail.com', 'para el jefe gabo prueba', 'bosque-de-pinos-en-la-niebla_1500x1000_xtrafondos.com.jpg', 'image/jpeg', '204866', 2),
	('alberto@hotmail.com ', 'para el jefe', 'gabo@hotmail.com', 'jefe gabo de alberto', 'imagen.png', 'image/png', '102049', 3);
/*!40000 ALTER TABLE `archivosproyectos` ENABLE KEYS */;

-- Volcando estructura para tabla agenda.eventos
CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `textColor` varchar(50) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla agenda.eventos: 0 rows
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;

-- Volcando estructura para tabla agenda.sistema
CREATE TABLE IF NOT EXISTS `sistema` (
  `idbarra` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombreProyecto` varchar(255) NOT NULL DEFAULT '',
  `percentage` int(11) NOT NULL DEFAULT 0,
  `cantidadtrabajos` int(11) DEFAULT NULL,
  `Entregados` int(11) DEFAULT NULL,
  PRIMARY KEY (`idbarra`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla agenda.sistema: 2 rows
/*!40000 ALTER TABLE `sistema` DISABLE KEYS */;
REPLACE INTO `sistema` (`idbarra`, `nombreProyecto`, `percentage`, `cantidadtrabajos`, `Entregados`) VALUES
	(7, 'proyecto 3', 25, 4, 1),
	(6, 'proyecto 2', 0, 3, 0),
	(1, 'proyecto 1', 75, 4, 3);
/*!40000 ALTER TABLE `sistema` ENABLE KEYS */;

-- Volcando estructura para tabla agenda.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contra` varchar(50) DEFAULT NULL,
  `seccion` varchar(50) DEFAULT NULL,
  `nivel` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla agenda.usuarios: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
REPLACE INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `contra`, `seccion`, `nivel`) VALUES
	(1, 'julio alberto', 'fernandez gonzalez', 'julioj1081@hotmail.com', '1081', 'Informatica', 'nivel1'),
	(2, 'alejandro ', 'fenandez gonzalez', 'alefg@hotmail.com', '1081', 'Social', 'nivel2'),
	(3, 'andres', 'viquez silva', 'avs@hotmail.com', '123', 'Administracion', 'nivel2'),
	(4, 'juan', 'Sanchez', 'juan@hotmail.com', 'juan', 'Administracion', 'nivel2'),
	(5, 'eder', 'mendez', 'eder@hotmail.com', 'eder', 'Social', 'nivel2'),
	(6, 'fernando', 'solano', 'fernando@hotmail.com', 'fernando', 'Informatica', 'nivel2'),
	(7, 'Gabriel', 'Flores Ponce', 'gabo@hotmail.com', 'gabo', 'Social', 'nivel1'),
	(8, 'alberto', 'fernandez gonzalez', 'perro7xx@hotmail.com', '123', 'Informatica', 'nivel2'),
	(9, 'alberto', 'fernandez ', 'alberto@hotmail.com', '123', 'Social', 'nivel2');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
