-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 10:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pousada`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `idClient` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `document` varchar(15) NOT NULL,
  `birth` date NOT NULL,
  `city` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`idClient`, `name`, `document`, `birth`, `city`, `state`) VALUES
(6, 'Talles Pelegrine Machado de Souza', '258.963.147-89', '1999-12-16', 'PA', 'MG'),
(7, 'Judite da Silva Santos Oliveira', '202.020.202-00', '2020-09-19', 'PA', 'MG');

-- --------------------------------------------------------

--
-- Table structure for table `quartos`
--

CREATE TABLE `quartos` (
  `idBedroom` int(11) NOT NULL,
  `number` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `value` double NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quartos`
--

INSERT INTO `quartos` (`idBedroom`, `number`, `type`, `value`, `status`) VALUES
(80, 'A001', 'Simples', 45.59, 'Livre'),
(81, 'B222', 'Duplo', 92.65, 'Livre'),
(82, 'S003', 'Triplo', 290.55, 'Livre');

-- --------------------------------------------------------

--
-- Table structure for table `reservas`
--

CREATE TABLE `reservas` (
  `idReservation` int(11) NOT NULL,
  `fk_idBedroom` int(11) NOT NULL,
  `fk_idClient` int(11) NOT NULL,
  `input` date NOT NULL,
  `output` date NOT NULL,
  `valueReservation` double NOT NULL,
  `status` varchar(10) NOT NULL,
  `infStatus` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservas`
--

INSERT INTO `reservas` (`idReservation`, `fk_idBedroom`, `fk_idClient`, `input`, `output`, `valueReservation`, `status`, `infStatus`) VALUES
(2, 82, 6, '2020-09-19', '2020-09-30', 2905.05, 'Reservado', '0000-00-00 00:00:00'),
(3, 81, 7, '2020-09-19', '2020-09-20', 92.65, 'Chekin', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idClient`);

--
-- Indexes for table `quartos`
--
ALTER TABLE `quartos`
  ADD PRIMARY KEY (`idBedroom`);

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`idReservation`),
  ADD KEY `fk_idClient` (`fk_idClient`),
  ADD KEY `fk_idBedroom` (`fk_idBedroom`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `quartos`
--
ALTER TABLE `quartos`
  MODIFY `idBedroom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `idReservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`fk_idClient`) REFERENCES `clientes` (`idClient`),
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`fk_idBedroom`) REFERENCES `quartos` (`idBedroom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
