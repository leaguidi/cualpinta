-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-03-2014 a las 19:52:26
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cualpinta`
--
DROP DATABASE `cualpinta`;
CREATE DATABASE `cualpinta` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cualpinta`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `empresaID` bigint(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `razonsocial` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `localidad` varchar(255) DEFAULT NULL,
  `pais` varchar(255) DEFAULT NULL,
  `cuit` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tipo` int(10) unsigned DEFAULT NULL,
  `fchbaja` datetime DEFAULT NULL,
  `razonsocialfiscal` varchar(255) DEFAULT NULL,
  `direccionfiscal` varchar(255) DEFAULT NULL,
  `localidadfiscal` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `fchalta` datetime DEFAULT NULL,
  `latitud` varchar(255) DEFAULT NULL,
  `longitud` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`empresaID`),
  UNIQUE KEY `razonSocial_UNIQUE` (`razonsocial`),
  UNIQUE KEY `cuit_UNIQUE` (`cuit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`empresaID`, `usuario`, `password`, `razonsocial`, `direccion`, `localidad`, `pais`, `cuit`, `email`, `tipo`, `fchbaja`, `razonsocialfiscal`, `direccionfiscal`, `localidadfiscal`, `imagen`, `fchalta`, `latitud`, `longitud`) VALUES
(1, 'leaxguidi', 'leax1234', 'Cual Pinta', 'Ortiz Basualdo 225', 'Florencio Varela', 'Argentina', '11-1111111-1', 'lg.leax@gmail.com', 1, NULL, 'Cual Pinta', 'Ortiz Basualdo 225', 'Florencio Varela', NULL, '2014-03-25 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas_tipos`
--

DROP TABLE IF EXISTS `empresas_tipos`;
CREATE TABLE IF NOT EXISTS `empresas_tipos` (
  `tipoempresaID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tipoempresaID`),
  UNIQUE KEY `tipo_UNIQUE` (`tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE IF NOT EXISTS `eventos` (
  `eventoID` bigint(10) unsigned NOT NULL AUTO_INCREMENT,
  `empresaID` bigint(10) unsigned NOT NULL,
  `promocionID` bigint(10) unsigned DEFAULT '0',
  `encabezado` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `tematicaID` bigint(20) DEFAULT NULL,
  `fchevento` datetime DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `musica` varchar(255) DEFAULT NULL,
  `observaciones` text,
  `fchbaja` datetime DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `latitud` varchar(255) DEFAULT NULL,
  `longitud` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`eventoID`,`empresaID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

DROP TABLE IF EXISTS `promociones`;
CREATE TABLE IF NOT EXISTS `promociones` (
  `promocionID` bigint(20) NOT NULL AUTO_INCREMENT,
  `empresaID` bigint(20) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `fchalta` datetime DEFAULT NULL,
  `fchvencimiento` datetime DEFAULT NULL,
  `fchbaja` datetime DEFAULT NULL,
  PRIMARY KEY (`promocionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tematicas`
--

DROP TABLE IF EXISTS `tematicas`;
CREATE TABLE IF NOT EXISTS `tematicas` (
  `tematicaID` bigint(10) unsigned NOT NULL AUTO_INCREMENT,
  `tematica` varchar(50) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tematicaID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuarioID` bigint(20) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fchnacim` date DEFAULT NULL,
  `ultimoingreso` datetime DEFAULT NULL,
  `fchalta` datetime DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `perfil` int(11) DEFAULT NULL,
  PRIMARY KEY (`usuarioID`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_eventos`
--

DROP TABLE IF EXISTS `usuarios_eventos`;
CREATE TABLE IF NOT EXISTS `usuarios_eventos` (
  `usuarioeventoID` bigint(20) NOT NULL AUTO_INCREMENT,
  `usuarioID` bigint(20) DEFAULT NULL,
  `eventoID` int(11) DEFAULT NULL,
  `CodigoPromo` varchar(10) DEFAULT NULL,
  `fchalta` datetime DEFAULT NULL,
  `utilizo` int(11) DEFAULT NULL,
  PRIMARY KEY (`usuarioeventoID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_promociones`
--

DROP TABLE IF EXISTS `usuarios_promociones`;
CREATE TABLE IF NOT EXISTS `usuarios_promociones` (
  `usuariopromocionID` bigint(20) NOT NULL AUTO_INCREMENT,
  `usuarioID` bigint(20) DEFAULT NULL,
  `promocionID` bigint(20) DEFAULT NULL,
  `codigoPromo` varchar(12) DEFAULT NULL,
  `fchalta` datetime DEFAULT NULL,
  `utilizo` int(11) DEFAULT NULL,
  PRIMARY KEY (`usuariopromocionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoraciones`
--

DROP TABLE IF EXISTS `valoraciones`;
CREATE TABLE IF NOT EXISTS `valoraciones` (
  `valoracionID` bigint(20) NOT NULL AUTO_INCREMENT,
  `eventoID` bigint(20) DEFAULT NULL,
  `usuarioID` bigint(20) DEFAULT NULL,
  `asistio` int(11) DEFAULT NULL,
  `porqueno` varchar(255) DEFAULT NULL,
  `gusto` int(11) DEFAULT NULL,
  `ambiente` int(11) DEFAULT NULL,
  `musica` int(11) DEFAULT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`valoracionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
