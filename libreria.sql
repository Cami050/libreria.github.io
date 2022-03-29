-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2022 a las 01:48:59
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libreria`
--

CREATE TABLE `libreria` (
  `Codigo` int(11) NOT NULL,
  `Titulo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Autor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Genero` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Editorial` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Fecha_Publicacion` date NOT NULL,
  `Edicion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `libreria`
--

INSERT INTO `libreria` (`Codigo`, `Titulo`, `Autor`, `Genero`, `Editorial`, `Cantidad`, `Fecha_Publicacion`, `Edicion`) VALUES
(0, 'El retrato de Dorian Gray', 'Oscar wilde', 'Teatro', 'salamandra', 2, '2000-11-18', '5'),
(325, 'Principito', 'mento', 'Novela', 'ee', 3, '2022-02-27', '3'),
(345, 'Ulises', 'James Joyce', 'Romantico', 'malpaso', 4, '2020-11-29', '1'),
(432, 'un mundo feliz', 'Aldous Huxley', 'Novela', 'salamandra', 7, '2021-05-31', '5'),
(890, 'Don Quijote de la Mancha', ' Miguel de Cervantes', 'Novela', 'editorial', 4, '1999-01-12', '1'),
(1234, 'Orgullo y perjuicio', 'Jane Austen', 'Fantacia', 'Alianza', 3, '2021-11-28', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libreria`
--
ALTER TABLE `libreria`
  ADD PRIMARY KEY (`Codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
