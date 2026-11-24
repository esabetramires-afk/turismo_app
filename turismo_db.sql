-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2026 a las 18:24:59
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turismo_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinos`
--

CREATE TABLE `destinos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `region` varchar(50) DEFAULT NULL,
  `provincia` varchar(50) DEFAULT NULL,
  `distrito` varchar(50) DEFAULT NULL,
  `descripcion` text NOT NULL,
  `latitud` varchar(50) NOT NULL,
  `longitud` varchar(50) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `destinos`
--

INSERT INTO `destinos` (`id`, `nombre`, `region`, `provincia`, `distrito`, `descripcion`, `latitud`, `longitud`, `imagen`) VALUES
(1, 'Cristo Blanco', NULL, NULL, NULL, 'El Mirador Turístico Cristo Blanco de Desaguadero es un punto de referencia religioso y paisajístico ubicado en el lado peruano de la localidad fronteriza, en la provincia de Chucuito, departamento de Puno', '-16.565889', '-69.047101', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-i4SzbE9FSFl9lkYnzzOVV1CA-UvZFBGszspTXCjpogf9Aed21Zj2Mby3&s=10'),
(11, 'Puente Perú y Bolivia', NULL, NULL, NULL, 'El Puente Internacional de Desaguadero es la principal estructura de conexión y paso fronterizo entre el Perú (en la región de Puno) y Bolivia (en el departamento de La Paz).', '-16.563549', '-69.036840', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZM2NHWKvL61CmrW5db4teLMa6w7HgY0wvSBOiacYQKQjBIC1B7MuIA8ez&s=10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `destinos`
--
ALTER TABLE `destinos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `destinos`
--
ALTER TABLE `destinos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
