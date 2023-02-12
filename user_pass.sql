-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2022 a las 16:25:53
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phpavanzado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_pass`
--

CREATE TABLE `user_pass` (
  `usuario` varchar(40) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user_pass`
--

INSERT INTO `user_pass` (`usuario`, `password`) VALUES
('hola@hola.com', '$2y$04$iwwRC/ECTaF2BREPJWi1NuQZsgQGYf0iaPGLD.LQ5/DQmekLud3sC'),
('lauesquivel@gmail.com', '$2y$04$loRV/aF.Ige3NmSHbT2zJOUF3zNbG.butBI6kJVZX/f3/En6qydS.'),
('mar-del-valle@gmail.com', '$2y$04$NTgwQIJo0YoFljxidTV.luGxO6hMn6AXJsw9S9yIzuRr79vhvRZHy');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user_pass`
--
ALTER TABLE `user_pass`
  ADD PRIMARY KEY (`usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
