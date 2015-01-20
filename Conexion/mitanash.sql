-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-01-2015 a las 23:25:47
-- Versión del servidor: 5.5.35-cll-lve
-- Versión de PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mitanash`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE IF NOT EXISTS `contactos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_contacto` varchar(200) NOT NULL,
  `email_contacto` varchar(200) NOT NULL,
  `dudas_contacto` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre_contacto`, `email_contacto`, `dudas_contacto`) VALUES
(1, 'Cristian camilo perez cardona', 'cperez354@gmail.com', 'Hola esto es una prueba de contacto'),
(2, 'cristianel mas lindo', 'cperez354@gmail.com', 'Te la puedo aplicar'),
(3, 'cristian camilo perez', 'cristianperez_69@hotmail.com', 'tengo una pregunta'),
(4, 'holi', 'cristianperez_69@hotmail.com', 'holi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` varchar(20) NOT NULL,
  `nombre_producto` varchar(100) DEFAULT NULL,
  `nombre_comprador` varchar(200) DEFAULT NULL,
  `email_comprador` varchar(200) DEFAULT NULL,
  `telefono_comprador` varchar(100) DEFAULT NULL,
  `direccion_comprador` varchar(100) DEFAULT NULL,
  `dudas` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `id_producto`, `nombre_producto`, `nombre_comprador`, `email_comprador`, `telefono_comprador`, `direccion_comprador`, `dudas`) VALUES
(1, '', '', 'Cristian camilo perez cardona', 'cperez354@gmail.com', '3016956032', 'cra 8 # 68 a 14', 'Me gusto mucho la tula necesito saber la informaciÃ³n de como comprarla'),
(2, '', '', 'cuco', 'cristianperez_69@hotmail.com', '3016956032', 'calle falsa', 'holi me gusto la turla'),
(3, '6', 'Reloj Dorado Calvin Klain', 'cuquito', 'cristianperez_69@hotmail.com', '30156958566', 'Cra 8 # 68 a 14', 'hola me interesa como lo puedo obtener'),
(4, '6', 'Reloj Dorado Calvin Klain', 'cuco ', 'cristianperez_69@hotmail.com', '302987367893', 'cra 76s88s7', 'me gustarÃ­a aplicartela laura melissa'),
(5, '6', 'Reloj Dorado Calvin Klain', 'asfdasf', 'cristianperez_69@hotmail.com', 'FADSFADS', 'SDFASDFA', 'ASDFASDFSDA'),
(6, '6', 'Reloj Dorado Calvin Klain', 'ADFASDFGASD', 'cristianperez_69@hotmail.com', 'SADFASDFASDF', 'SADFASDFASD', 'FSDAFASDFSADFSADF'),
(7, '6', 'Reloj Dorado Calvin Klain', 'asdasd', 'cristianperez_69@hotmail.com', 'asdasdasd', 'asdasdas', 'dasdasdasdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscritos`
--

CREATE TABLE IF NOT EXISTS `suscritos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `suscritos`
--

INSERT INTO `suscritos` (`id`, `email`, `fecha`) VALUES
(1, 'cperez354@gmail.com', '2015-01-18 22:24:10'),
(2, 'cperez354@gmail.com', '2015-01-18 22:25:39'),
(3, 'cperez354@gmail.com', '2015-01-18 22:26:22'),
(4, 'cristianperez_69@hotmail.com', '2015-01-18 22:48:34'),
(5, 'cuco@gmail.com', '2015-01-18 23:12:07'),
(6, 'cristianperez_69@hotmail.com', '2015-01-20 05:37:32'),
(7, 'cristianperez_69@hotmail.com', '2015-01-20 05:42:34'),
(8, 'cristianperez_69@hoitmail.com', '2015-01-20 06:20:15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
