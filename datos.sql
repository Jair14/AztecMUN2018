-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2018 a las 06:20:15
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `matricula` int(10) NOT NULL,
  `grupo` int(3) NOT NULL,
  `comite` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `numero` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`Nombre`, `matricula`, `grupo`, `comite`, `correo`, `pais`, `numero`) VALUES
('Jair', 123, 5, 'CIJ', 'jairalan1406@gmail.com', '7', 234),
('Allan', 34032, 5, 'OTAN', 'ASD@ASD.COM', '8', 23423);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
