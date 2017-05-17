-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.21-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para datame
CREATE DATABASE IF NOT EXISTS `datame` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `datame`;

-- Volcando estructura para tabla datame.preguntas
CREATE TABLE IF NOT EXISTS `preguntas` (
  `idPregunta` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(100) COLLATE utf8_spanish_ci DEFAULT '0',
  PRIMARY KEY (`idPregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla datame.preguntas: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
INSERT INTO `preguntas` (`idPregunta`, `pregunta`) VALUES
	(1, '¿Que color de pelo tienes?'),
	(2, '¿Que buscas?'),
	(3, '¿Orientación sexual?'),
	(4, '¿Comida favorita?'),
	(5, '¿Que estilo te gusta?'),
	(6, '¿Que edad buscas?');
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;

-- Volcando estructura para tabla datame.total
CREATE TABLE IF NOT EXISTS `total` (
  `idUsuario` int(11) NOT NULL,
  `idPregunta` int(11) NOT NULL,
  `idRespuesta` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`,`idPregunta`),
  KEY `FK__preguntas` (`idPregunta`),
  CONSTRAINT `FK__preguntas` FOREIGN KEY (`idPregunta`) REFERENCES `preguntas` (`idPregunta`),
  CONSTRAINT `FK__usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla datame.total: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `total` DISABLE KEYS */;
INSERT INTO `total` (`idUsuario`, `idPregunta`, `idRespuesta`) VALUES
	(1, 1, 3),
	(1, 2, 2),
	(1, 4, 4);
/*!40000 ALTER TABLE `total` ENABLE KEYS */;

-- Volcando estructura para tabla datame.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) COLLATE utf8_spanish_ci DEFAULT '0',
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT '0',
  `apellidos` varchar(50) COLLATE utf8_spanish_ci DEFAULT '0',
  `fecha_nac` date DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci DEFAULT '0',
  `pass` varchar(50) COLLATE utf8_spanish_ci DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla datame.usuario: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `usuario`, `nombre`, `apellidos`, `fecha_nac`, `email`, `pass`) VALUES
	(1, 'dsad', 'sda', 's', '2017-05-16', 'asd', 'asda');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
