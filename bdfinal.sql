-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 03:46 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `ch`
--

CREATE TABLE `ch` (
  `cedula` text NOT NULL,
  `idSolicitud` varchar(20) NOT NULL,
  `apoyoEspecial` text NOT NULL,
  `apoyo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `informe`
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
-- Dumping data for table `informe`
--

INSERT INTO `informe` (`idInforme`, `nombreEvento`, `fechaInicial`, `fechaFinal`, `participante`, `resultados`, `conclusiones`, `recomendaciones`, `imagen`, `imagen2`, `imagen3`) VALUES
(0, 'Torneo Regional de Baloncesto', '01-01-2020', '07-01-2020', 'Jojhan Arboleda', 'd', 'f', 'g', '1.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `solicitud`
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
  `estado` text NOT NULL,
  `rev_secretaria` varchar(10) DEFAULT NULL,
  `rev_comite` varchar(10) DEFAULT NULL,
  `rev_rector` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solicitud`
--

INSERT INTO `solicitud` (`idSolicitud`, `nombre`, `cedula`, `unidadAcademica`, `nombreEvento`, `fechaInicial`, `fechaFinal`, `comentarios`, `tipoEve`, `alcanceEve`, `apoyoEspecial`, `apoyo`, `estado`, `rev_secretaria`, `rev_comite`, `rev_rector`) VALUES
(21, 'Jojhan Arboleda', '8', 'FISC', '1', '1', '07-01-2020', 'e', '', '', '', '', '', NULL, NULL, NULL),
(22, 'Jojhan Arboleda', '8-939-629', 'FISC', '122', '124', '07-01-2020', 'muchos', '', '', '', '', '', NULL, NULL, NULL),
(23, 'pedro', '8', 'f', '1', '1', '07-01-2020', 'njn', '', '', '', '', '', NULL, NULL, NULL),
(24, '', '', '', '', '', '', '', '', '', 'Inscripcion', '', '', NULL, NULL, NULL),
(25, '', '', '', '', '', '', '', '', '', 'Hospedaje', '', '', NULL, NULL, NULL),
(26, '', '', '', '', '', '', '', '', '', 'Gastos de Viaje', '', '', NULL, NULL, NULL),
(27, '', '', '', '', '', '', '', '', '', '', 'inscripcion', '', NULL, NULL, NULL),
(28, '', '', '', '', '', '', '', '', '', '', 'apoyoEconomico ', '', NULL, NULL, NULL),
(29, 'pedro', '9', 'FISC', '1', '1', '07-01-2020', 'bfk', '', '', '', '', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
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
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`cedula`, `email`, `nombre`, `apellido`, `contra`, `telefono`, `tipo`) VALUES
('0001', 'secretaria@email.com', '', '', 'secretaria', '', 2),
('0002', 'secretario_comite@email.com', '', '', 'secretariocomite', '', 3),
('0003', 'comite_coordinador@email.com', '', '', 'comitecoordinador', '', 3),
('0004', 'comite_vicerector@email.com', '', '', 'comitevicerectoracademico', '', 3),
('0005', 'rectoria@email.com', '', '', 'rectoria', '', 4),
('8-939-629', 'jojhan77@email.com', 'Jojhan ', 'Arboleda', '12345', '60912953', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`idSolicitud`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `idSolicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
