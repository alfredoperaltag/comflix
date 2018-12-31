-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         8.0.12 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para db_comflix
CREATE DATABASE IF NOT EXISTS `db_comflix`;
USE `db_comflix`;

-- Volcando estructura para tabla db_comflix.administrador
CREATE TABLE IF NOT EXISTS `administrador` (
  `idAdministrador` int(11) NOT NULL AUTO_INCREMENT,
  `nombreAdministrador` varchar(45) DEFAULT NULL,
  `apellidoPaterno` varchar(45) DEFAULT NULL,
  `apellidoMaterno` varchar(45) DEFAULT NULL,
  `correo` varchar(80) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idAdministrador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla db_comflix.administrador: ~0 rows (aproximadamente)
DELETE FROM `administrador`;
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;

-- Volcando estructura para tabla db_comflix.archivos
CREATE TABLE IF NOT EXISTS `archivos` (
  `idArchivos` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(120) DEFAULT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `ruta` varchar(150) DEFAULT NULL,
  `poster` varchar(150) DEFAULT NULL,
  `clicks` int(7) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`idArchivos`),
  KEY `fk_archivos_categorias_idx` (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla db_comflix.archivos: ~5 rows (aproximadamente)
DELETE FROM `archivos`;
/*!40000 ALTER TABLE `archivos` DISABLE KEYS */;
INSERT INTO `archivos` (`idArchivos`, `nombre`, `descripcion`, `ruta`, `poster`, `clicks`, `idCategoria`) VALUES
	(1, 'Heathens', 'hola', 'videos/Heathens.mp4', '/poster/HeathensPoster.jpg', NULL, 1),
	(2, 'Jumpsuit', 'la descripcion', 'videos/Jumpsuit.mp4', '/poster/JumpsuitPoster.jpg', NULL, 2),
	(3, 'Levitate', 'Levitate Levitate Levitate Levitate Levitate Levitate', 'videos/Levitate.mp4', '/poster/LevitatePoster.jpg', NULL, 3),
	(5, 'Stressed Out', 'Stressed Out Stressed Out Stressed Out Stressed Out Stressed Out', 'videos/Stressed Out.mp4', '/poster/Stressed OutPoster.jpg', NULL, 5),
	(6, 'Nico And The Niners', 'Nico And The Niners Nico And The Niners Nico And The Niners Nico And The Niners', 'videos/Nico And The Niners.mp4', '/poster/Nico And The NinersPoster.jpg', NULL, 4);
/*!40000 ALTER TABLE `archivos` ENABLE KEYS */;

-- Volcando estructura para tabla db_comflix.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCategoria` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla db_comflix.categorias: ~10 rows (aproximadamente)
DELETE FROM `categorias`;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`idCategoria`, `nombreCategoria`) VALUES
	(1, 'Accion'),
	(2, 'Terror'),
	(3, 'Ciencia ficcion'),
	(4, 'Animacion'),
	(5, 'Comedia'),
	(6, 'Drama'),
	(7, 'Documentales'),
	(8, 'Fantasia'),
	(9, 'Suspenso'),
	(10, 'Misterio');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla db_comflix.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombreUsuario` varchar(45) DEFAULT NULL,
  `apellidoPaterno` varchar(45) DEFAULT NULL,
  `apellidoMaterno` varchar(45) DEFAULT NULL,
  `correo` varchar(80) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla db_comflix.usuarios: ~4 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`idUsuario`, `nombreUsuario`, `apellidoPaterno`, `apellidoMaterno`, `correo`, `contraseña`) VALUES
	(1, 'yonathan', 'román', 'salgado', 'yonar64@gmail.com', '123'),
	(2, 'alfredo', 'peralta', 'garcia', 'alfredo@gmail.com', 'alfredo'),
	(3, 'elbebe', 'obo', 'obo', 'elbebe@gmail.com', 'elbebe'),
	(4, 'nombre', 'apellido', 'apellido', 'correo@gmail.com', 'contraseña'),
	(5, 'alert(&#34;hola&#34;)', 'alert(&#34;hola&#34;)', 'alert(&#34;hola&#34;)', 'ejemplo@gmail.com', '<script>alert("Hola")</script>');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
