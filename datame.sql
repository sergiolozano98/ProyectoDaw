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

-- Volcando datos para la tabla datame.preguntas: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
INSERT INTO `preguntas` (`idPregunta`, `pregunta`) VALUES
	(1, '¿Que color de pelo tienes?'),
	(2, '¿Que buscas?'),
	(3, '¿Orientación sexual?'),
	(4, '¿Comida favorita?'),
	(5, '¿Que estilo te gusta?'),
	(6, '¿Que edad buscas?');
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;

-- Volcando datos para la tabla datame.total: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `total` DISABLE KEYS */;
INSERT INTO `total` (`idUsuario`, `idPregunta`, `idRespuesta`) VALUES
	(1, 1, 3),
	(1, 2, 2),
	(1, 4, 4);
/*!40000 ALTER TABLE `total` ENABLE KEYS */;

-- Volcando datos para la tabla datame.usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `usuario`, `nombre`, `apellidos`, `fecha_nac`, `email`, `pass`) VALUES
	(1, 'dsad', 'sda', 's', '2017-05-16', 'asd', 'asda');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
