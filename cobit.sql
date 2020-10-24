-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.1.33-community - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para cobit
CREATE DATABASE IF NOT EXISTS `cobit` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cobit`;

-- Volcando estructura para tabla cobit.items
CREATE TABLE IF NOT EXISTS `items` (
  `iditem` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(200) DEFAULT NULL,
  `iddominio` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`iditem`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cobit.items: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` (`iditem`, `item`, `iddominio`) VALUES
	(1, 'Cuentan con un plan estratégico de TI para mantener un balance optimo y asegurar los futuros logros', 1),
	(2, 'Se definieron las necesidades de la organización con el fin de satisfacer los requerimientos de la organización', 1),
	(3, 'Cuentan y aprovechan la tecnología que se tiene en la organización, contemplando los cambios futuros', 1),
	(4, 'Esta estructura y bien definida la organización con el objetivo de brindar un servicio de TI de manera eficiente', 1),
	(5, 'Se cuenta con un fondo de inversión que asegure el financiamiento y crecimiento de la organización en cuanto a TI', 1),
	(6, 'Cuentan con políticas establecidas y transmisibles a los usuarios que ayuden a comprender las aspiraciones de la organización y la gerencia', 1),
	(7, 'Se involucra al recurso humano en los procesos de TI con el objetivo de lograr aportaciones significativas para la organización', 1),
	(8, 'Cumplen los procesos de TI con las regulaciones y normativas legales que se imponen externamente', 1),
	(9, 'Cuentan con controles que permitan garantizar el cumplimiento de los objetivos establecidos de TI', 1),
	(10, 'Cuentan con controles para la identificación de riesgos de TI y su impacto en la organización', 1),
	(11, 'Se establece un análisis claro de los requerimientos de los usuarios con el fin de brindar una solución mas oportuna y con un mejor enfoque al implementar una solución de TI', 2),
	(12, 'Al adquirir un software se evalúa que cumpla con los requerimientos funcionales y operacionales de la organización', 2),
	(13, 'Se establecen programas de mantenimiento al adquirir un software', 2),
	(14, 'Antes de implementar una aplicación, se evalúa el desempeño del hardware y software con el que se cuenta a fin de ofrecer una plataforma adecuada para la misma', 2),
	(15, 'Antes de implementar una aplicación, se evalúa que cumpla con el mantenimiento preventivo de hardware, seguridad y control del software del sistema', 2),
	(16, 'Se desarrollan manuales de correcto cumplimiento y funcionamiento para los usuarios con el fin de garantizar el uso apropiado de las aplicaciones', 2),
	(17, 'Se brindan las capacitaciones debidas a los usuarios al instalar cualquier tipo de aplicación', 2),
	(18, 'Al instalar un sistema se verifica que el mismo cumple con el propósito deseado de la organización', 2),
	(19, 'Cuando se realiza un cambio en la estructura de TI, se hace a través un sistema de administración que no afecte o interrumpa las operaciones que se llevan a cabo dentro de la organización', 2),
	(20, 'Se cuenta con ambiente seguro propicio para las pruebas, un ambiente que cumpla con características como control interno, calidad de los datos y requerimiento de privacidad', 2),
	(21, 'Cuenta con algún instrumento de evaluación para medir la calidad del servicio prestado', 3),
	(22, 'Se cumplen con las politicas de control internas al pie de la letra para salvaguardar la información de los clientes', 3),
	(23, 'Cuentan con los equipos necesarios y la cantidad requerida de personal para realizar las tareas', 3),
	(24, 'Poseen planes de contingencia para seguir brindando el servicio en caso de interrupciones no deseadas', 3),
	(25, 'Existen controles de acceso tanto al sistema como a la red con el fin de mantener la confiabilidad y la integridad de la información', 3),
	(26, 'Se encuentras sistematizados todos los procesos contrables de la organización', 3),
	(27, 'Existe un plan elaborado y detallado para el entrenamiento de los usuarios involucrados con el sistema', 3),
	(28, 'El equipo de soporte técnico esta disponible las 24 horas los 7 días a la semana', 3),
	(29, 'El sistema maneja alguna bitácora que permita conocer las acciones que realiza el usuario sobre él', 3),
	(30, 'Existe un cronograma de actividades para realizar mantenimiento preventivo y correctivo', 3),
	(31, 'Cuentan con supervisores de proyectos que dan fe de que se estan cumpliendo con las tareas asignadas', 4),
	(32, 'Se encuentran bien estucturados los módulos de reportería para los gerentes', 4),
	(33, 'Se tiene algún sistema de soporte implementado', 4),
	(34, 'Poseen politicas de control interno bien definidas', 4),
	(35, 'Se adecúan todos los procesos a las políticas de control interno establecidas', 4),
	(36, 'El cliente tiene la opción de acceder a su informaciòn a través de alguna plataforma ', 4),
	(37, 'Se mantiene al cliente y proveedores al tanto de su información a través de reportes', 4),
	(38, 'La organización contrata auditoría externa', 4),
	(39, 'La auditoría externa se realiza una vez al año', 4),
	(40, 'Luego de obtener los resultados de la auditoría se elabora un plan de mejoramiento', 4);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;

-- Volcando estructura para tabla cobit.respuestas
CREATE TABLE IF NOT EXISTS `respuestas` (
  `idrespuesta` int(11) NOT NULL AUTO_INCREMENT,
  `iditem` int(11) NOT NULL DEFAULT '0',
  `respuesta` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idrespuesta`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cobit.respuestas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `respuestas` DISABLE KEYS */;
INSERT INTO `respuestas` (`idrespuesta`, `iditem`, `respuesta`) VALUES
	(1, 1, 1),
	(2, 2, 1),
	(3, 3, 0),
	(4, 4, 0),
	(5, 5, 0),
	(6, 6, 1),
	(7, 7, 1),
	(8, 8, 1),
	(9, 9, 1),
	(10, 10, 1),
	(11, 11, 1),
	(12, 12, 1),
	(13, 13, 1),
	(14, 14, 0),
	(15, 15, 0),
	(16, 16, 0),
	(17, 17, 1),
	(18, 18, 1),
	(19, 19, 1),
	(20, 20, 1),
	(21, 21, 1),
	(22, 22, 1),
	(23, 23, 0),
	(24, 24, 1),
	(25, 25, 1),
	(26, 26, 1),
	(27, 27, 0),
	(28, 28, 1),
	(29, 29, 0),
	(30, 30, 1),
	(31, 31, 1),
	(32, 32, 0),
	(33, 33, 0),
	(34, 34, 1),
	(35, 35, 1),
	(36, 36, 1),
	(37, 37, 1),
	(38, 38, 1),
	(39, 39, 0),
	(40, 40, 0),
	(41, 1, 1),
	(42, 2, 0),
	(43, 3, 1),
	(44, 4, 1),
	(45, 5, 1),
	(46, 6, 0),
	(47, 7, 1),
	(48, 8, 1),
	(49, 9, 1),
	(50, 10, 0),
	(51, 11, 1),
	(52, 12, 1),
	(53, 13, 1),
	(54, 14, 0),
	(55, 15, 0),
	(56, 16, 1),
	(57, 17, 0),
	(58, 18, 1),
	(59, 19, 0),
	(60, 20, 1),
	(61, 21, 1),
	(62, 22, 0),
	(63, 23, 0),
	(64, 24, 1),
	(65, 25, 1),
	(66, 26, 1),
	(67, 27, 0),
	(68, 28, 1),
	(69, 29, 1),
	(70, 30, 0),
	(71, 31, 0),
	(72, 32, 1),
	(73, 33, 1),
	(74, 34, 1),
	(75, 35, 1),
	(76, 36, 1),
	(77, 37, 0),
	(78, 38, 0),
	(79, 39, 1),
	(80, 40, 0),
	(81, 1, 0),
	(82, 2, 0),
	(83, 3, 1),
	(84, 4, 1),
	(85, 5, 1),
	(86, 6, 1),
	(87, 7, 1),
	(88, 8, 1),
	(89, 9, 0),
	(90, 10, 0),
	(91, 11, 0),
	(92, 12, 0),
	(93, 13, 1),
	(94, 14, 1),
	(95, 15, 0),
	(96, 16, 1),
	(97, 17, 0),
	(98, 18, 0),
	(99, 19, 1),
	(100, 20, 1),
	(101, 21, 1),
	(102, 22, 0),
	(103, 23, 1),
	(104, 24, 1),
	(105, 25, 0),
	(106, 26, 0),
	(107, 27, 1),
	(108, 28, 1),
	(109, 29, 1),
	(110, 30, 0),
	(111, 31, 1),
	(112, 32, 0),
	(113, 33, 1),
	(114, 34, 0),
	(115, 35, 1),
	(116, 36, 0),
	(117, 37, 1),
	(118, 38, 1),
	(119, 39, 0),
	(120, 40, 0);
/*!40000 ALTER TABLE `respuestas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
