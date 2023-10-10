-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2023 a las 01:12:04
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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Usuario_ID` int(100) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  `Photo` varchar(250) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Bio` varchar(255) NOT NULL,
  `Phone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Usuario_ID`, `Email`, `Contrasena`, `Photo`, `Name`, `Bio`, `Phone`) VALUES
(0, '', '', '', '', '', 0),
(1, 'admin@admin', 'admin', 'https://noticias-es.laiglesiadejesucristo.org/media/orig/president-nelson-2018_2.jpg', 'El admin', 'Russell Marion Nelson es un cirujano cardiovascular estadounidense y líder religioso y el decimoséptimo presidente de la Iglesia de Jesucristo de los Santos de los Últimos Días desde el 14 de enero de 2018', 932563713),
(2, 'test@test', 'test', 'https://noticias-es.laiglesiadejesucristo.org/media/380x285/oaks-bio-resized.jpg', 'Good dude', 'Dallin Harris Oaks es un abogado, jurista, autor, profesor y dirigente religioso estadounidense, quien sirvió como Primer consejero de Russell M. Nelson, 17º presidente de La Iglesia de Jesucristo de los Santos de los Últimos Días.', 9383892);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Usuario_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
