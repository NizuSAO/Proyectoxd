-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2021 a las 18:57:54
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hardware_machine`
--
CREATE DATABASE IF NOT EXISTS `hardware_machine` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hardware_machine`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal_1`
--

CREATE TABLE `sucursal_1` (
  `Stock` varchar(50) NOT NULL,
  `Precio` int(25) NOT NULL,
  `ID_producto` int(25) NOT NULL,
  `nom_producto` varchar(50) NOT NULL,
  `ventas` int(25) NOT NULL,
  `ganancias` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal_2`
--

CREATE TABLE `sucursal_2` (
  `Stock` varchar(50) NOT NULL,
  `Precio` int(25) NOT NULL,
  `ID_producto` int(25) NOT NULL,
  `nom_producto` varchar(50) NOT NULL,
  `ventas` int(25) NOT NULL,
  `ganancias` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal_3`
--

CREATE TABLE `sucursal_3` (
  `Stock` varchar(50) NOT NULL,
  `Precio` int(25) NOT NULL,
  `ID_producto` int(25) NOT NULL,
  `nom_producto` varchar(50) NOT NULL,
  `ventas` int(25) NOT NULL,
  `ganancias` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
