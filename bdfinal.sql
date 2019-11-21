-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2019 a las 07:39:48
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdfinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ch`
--

CREATE TABLE `ch` (
  `cedula` text NOT NULL,
  `idSolicitud` varchar(20) NOT NULL,
  `apoyoEspecial` text NOT NULL,
  `apoyo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe`
--

CREATE TABLE `informe` (
  `idInforme` int(11) NOT NULL,
  `nombreEvento` text NOT NULL,
  `fechaInicial` text NOT NULL,
  `fechaFinal` text NOT NULL,
  `participante` text NOT NULL,
  `resultados` text NOT NULL,
  `conclusiones` text NOT NULL,
  `recomendaciones` text NOT NULL,
  `imagen` text NOT NULL,
  `imagen2` text NOT NULL,
  `imagen3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `informe`
--

INSERT INTO `informe` (`idInforme`, `nombreEvento`, `fechaInicial`, `fechaFinal`, `participante`, `resultados`, `conclusiones`, `recomendaciones`, `imagen`, `imagen2`, `imagen3`) VALUES
(0, 'Torneo Regional de Baloncesto', '01-01-2020', '07-01-2020', 'Jojhan Arboleda', 'd', 'f', 'g', '1.jpg', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `idSolicitud` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `unidadAcademica` text NOT NULL,
  `nombreEvento` text NOT NULL,
  `fechaInicial` varchar(20) NOT NULL,
  `fechaFinal` varchar(20) NOT NULL,
  `comentarios` text NOT NULL,
  `tipoEve` text NOT NULL,
  `alcanceEve` text NOT NULL,
  `apoyoEspecial` text NOT NULL,
  `apoyo` text NOT NULL,
  `estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`idSolicitud`, `nombre`, `cedula`, `unidadAcademica`, `nombreEvento`, `fechaInicial`, `fechaFinal`, `comentarios`, `tipoEve`, `alcanceEve`, `apoyoEspecial`, `apoyo`, `estado`) VALUES
(21, 'Jojhan Arboleda', '8', 'FISC', '1', '1', '07-01-2020', 'e', '', '', '', '', ''),
(22, 'Jojhan Arboleda', '8-939-629', 'FISC', '122', '124', '07-01-2020', 'muchos', '', '', '', '', ''),
(23, 'pedro', '8', 'f', '1', '1', '07-01-2020', 'njn', '', '', '', '', ''),
(24, '', '', '', '', '', '', '', '', '', 'Inscripcion', '', ''),
(25, '', '', '', '', '', '', '', '', '', 'Hospedaje', '', ''),
(26, '', '', '', '', '', '', '', '', '', 'Gastos de Viaje', '', ''),
(27, '', '', '', '', '', '', '', '', '', '', 'inscripcion', ''),
(28, '', '', '', '', '', '', '', '', '', '', 'apoyoEconomico ', ''),
(29, 'pedro', '9', 'FISC', '1', '1', '07-01-2020', 'bfk', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cedula` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `contra` text NOT NULL,
  `telefono` text NOT NULL,
  `tipo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cedula`, `email`, `nombre`, `apellido`, `contra`, `telefono`, `tipo`) VALUES
('0001', 'secretaria@email.com', '', '', 'secretaria', '', 2),
('0002', 'secretario_comite@email.com', '', '', 'secretariocomite', '', 3),
('0003', 'comite_coordinador@email.com', '', '', 'comitecoordinador', '', 3),
('0004', 'comite_vicerector@email.com', '', '', 'comitevicerectoracademico', '', 3),
('0005', 'rectoria@email.com', '', '', 'rectoria', '', 4),
('8-939-629', 'jojhan77@email.com', 'Jojhan ', 'Arboleda', '12345', '60912953', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`idSolicitud`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `idSolicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
