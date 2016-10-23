-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2016 a las 05:18:57
-- Versión del servidor: 5.7.11
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tracking`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serials`
--

CREATE TABLE `serials` (
  `id` int(11) NOT NULL,
  `serial` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `serials`
--

INSERT INTO `serials` (`id`, `serial`, `created_date`) VALUES
(6005, 'ILG0006004', '2016-10-20 08:15:48'),
(6006, 'ILG0006005', '2016-10-20 11:34:39'),
(6007, 'ILG0006006', '2016-10-22 22:42:26'),
(6008, 'CRC0006007', '2016-10-22 23:01:35'),
(6009, 'CRC0006008', '2016-10-22 23:17:21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `serials`
--
ALTER TABLE `serials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `serial` (`serial`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `serials`
--
ALTER TABLE `serials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6010;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
