-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2023 a las 09:13:41
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users1`
--

CREATE TABLE `users1` (
  `Usuario_ID` int(11) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  `Photo` varchar(250) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Bio` varchar(255) NOT NULL,
  `Phone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users1`
--

INSERT INTO `users1` (`Usuario_ID`, `Email`, `Contrasena`, `Photo`, `Name`, `Bio`, `Phone`) VALUES
(1, 'test@test', '$2y$10$y3dmJIG0DzzuijLU1f3UNODddXzCYqeZAXdb4.2OBps1hpTWY4h52', 'https://noticias-es.laiglesiadejesucristo.org/media/380x285/oaks-bio-resized.jpg', 'Good dude', 'Dallin Harris Oaks es un abogado, jurista, autor, profesor y dirigente religioso estadounidense, quien sirvió como Primer consejero de Russell M. Nelson, 17º presidente de La Iglesia de Jesucristo de los Santos de los Últimos Días.', 9383892),
(2, 'admin@admin', '$2y$10$3So0IOIc7tpHqZxVIVvQK./m09WroLJs9gi8VKP0aXTDtPkxIbI.6', '/public/img/descarga.jpeg', 'El Admin es', 'Russell Marion Newqewqewlson ', 3441),
(3, 'nuevo@nuevo', '$2y$10$kSgbWxPk0kSQ6H8z17eFO.VZVuBnTliQUAEZA.S21B4wAL63Biknu', '/public/img/20200527_195706.jpg', 'Edwar Rejas', 'rrr', 0),
(4, 'nigga@nigga', '$2y$10$TEw9R6jl9IEbkTyXfeb1aOb62EdiGo5OtUPLAy4m/J9kxGizlc.ke', '/public/img/20200527_195706.jpg', '', '', 0),
(5, 'crear@crear', '$2y$10$xMJXJi3ZFnjswyxLNiF7.ev2hM1/oVrqh9UBBCJIvIgM9PcswZyoS', '', 'Edwar Rejas', '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`Usuario_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users1`
--
ALTER TABLE `users1`
  MODIFY `Usuario_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
