-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.13-MariaDB - mariadb.org binary distribution
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
DELETE FROM `preguntas`;
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
INSERT INTO `preguntas` (`idPregunta`, `pregunta`) VALUES
	(1, '¿Que edad buscas?'),
	(2, '¿Que buscas?'),
	(3, '¿Orientación sexual?'),
	(4, '¿Que color de pelo prefieres?'),
	(5, '¿Que alimentacion sigues?'),
	(6, '¿Fumas?');
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;

-- Volcando estructura para tabla datame.total
CREATE TABLE IF NOT EXISTS `total` (
  `idUsuario` int(11) NOT NULL,
  `idPregunta` int(11) NOT NULL,
  `Respuesta` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idUsuario`,`idPregunta`),
  KEY `FK__preguntas` (`idPregunta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla datame.total: ~12 rows (aproximadamente)
DELETE FROM `total`;
/*!40000 ALTER TABLE `total` DISABLE KEYS */;
INSERT INTO `total` (`idUsuario`, `idPregunta`, `Respuesta`) VALUES
	(9, 1, 'Entre 18 y 25'),
	(9, 2, 'Otros'),
	(9, 3, 'Homosexual'),
	(9, 4, 'Rubio'),
	(9, 5, 'Vegetariano'),
	(9, 6, 'si'),
	(10, 1, 'Entre 18 y 25'),
	(10, 2, 'Otros'),
	(10, 3, 'Homosexual'),
	(10, 4, 'Rubio'),
	(10, 5, 'Vegetariano'),
	(10, 6, 'si');
/*!40000 ALTER TABLE `total` ENABLE KEYS */;

-- Volcando estructura para tabla datame.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edad` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `pass` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `rol` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla datame.usuarios: ~2 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `apellidos`, `edad`, `email`, `pass`, `rol`) VALUES
	(9, 'Pepe9', 'sada', 'asd', 21, 'asd', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', NULL),
	(10, 'juanito', 'sadasd', 'asdasdas', 23, 'asdasdasdsad', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
