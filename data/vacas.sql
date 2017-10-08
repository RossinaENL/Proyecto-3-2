-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-10-2017 a las 20:52:37
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `vacas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE IF NOT EXISTS `animales` (
  `animal_id` int(10) NOT NULL AUTO_INCREMENT,
  `no_siniiga` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `arete_camp` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `raza` varchar(35) COLLATE latin1_spanish_ci NOT NULL,
  `especificar_raza_Cruza` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `empadre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `padre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `madre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`animal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`animal_id`, `no_siniiga`, `arete_camp`, `fecha_nacimiento`, `sexo`, `raza`, `especificar_raza_Cruza`, `empadre`, `padre`, `madre`) VALUES
(1, 'MX 01-0757-9621', 'SI', '2016-09-15', 'Hembra', 'Cruza', 'Angus', 'Natural', 'MX', 'MX'),
(2, 'MX 02-0758-9622', 'SI', '2017-09-12', 'Macho', 'Cruza', 'Brangus', 'Artificial', 'MX', 'MX'),
(3, 'MX 03-0757-9621', 'SI', '1994-02-20', 'Hembra', 'Pura', 'Alemana', 'Natural', 'MX', 'MX'),
(4, 'MX 04-0757-9621', 'SI', '2017-10-20', 'Hembra', 'Pura', 'Alemana', 'Natural', 'MX', 'MX');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario_id` int(10) NOT NULL AUTO_INCREMENT,
  `clave_de_upp` varchar(35) COLLATE latin1_spanish_ci NOT NULL,
  `nombre_del_predio` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `serie_del` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `nombre_del_productor` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `nombre_identificador` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `al` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `total_paquetes_completos` int(10) NOT NULL,
  `fecha_aretado` date NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `clave_de_upp`, `nombre_del_predio`, `serie_del`, `nombre_del_productor`, `nombre_identificador`, `al`, `total_paquetes_completos`, `fecha_aretado`) VALUES
(7, '19-001-0002-001', 'Las flores', '', 'Ángel Hernández Ramos', 'Ramón Torres de la O', '', 6, '2017-09-23'),
(8, '19-001-0002-002', 'Campanas', '', 'Rodrigo Hernández Cuevas', 'Pancho', '', 45, '2017-09-22'),
(9, '19-001-0002-003', 'Rancho', '', 'María Hernández López', 'Pedro Pérez Arellano', '', 8, '2017-09-16'),
(10, '19-001-0002-004', 'Ventanas abiertas', '', 'Paulina Torres Santos', 'Carolia', '', 44, '2017-09-07'),
(11, 'rtre', 'rtre', 'tre', 'rtre', 'ret', 'retre', 54, '2017-10-28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
