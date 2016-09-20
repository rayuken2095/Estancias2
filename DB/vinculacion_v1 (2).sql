-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2016 at 09:52 PM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinculacion_v1`
--

-- --------------------------------------------------------

--
-- Table structure for table `calificaciones`
--

CREATE TABLE IF NOT EXISTS `calificaciones` (
  `ID_user` int(11) NOT NULL,
  `ID_emp` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cuentas_confirmadas`
--

CREATE TABLE IF NOT EXISTS `cuentas_confirmadas` (
  `ID` int(11) NOT NULL,
  `ID_us` int(11) NOT NULL,
  `Act` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Grade` int(11) NOT NULL DEFAULT '0',
  `Category` int(11) NOT NULL,
  `Phone` varchar(25) NOT NULL,
  `Img` varchar(50) NOT NULL,
  `WEB_page` varchar(50) NOT NULL,
  `His` varchar(150) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `ID` int(11) NOT NULL,
  `ID_emp` int(11) NOT NULL,
  `Descrip` varchar(120) NOT NULL,
  `Cost` int(11) NOT NULL,
  `Img` varchar(50) NOT NULL,
  `Grade` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productos_tags`
--

CREATE TABLE IF NOT EXISTS `productos_tags` (
  `ID` int(11) NOT NULL,
  `ID_producto` int(11) NOT NULL,
  `tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(11) NOT NULL,
  `Name` varchar(70) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `img` varchar(50) NOT NULL,
  `Preferences` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cuentas_confirmadas`
--
ALTER TABLE `cuentas_confirmadas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `productos_tags`
--
ALTER TABLE `productos_tags`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Mail` (`Mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cuentas_confirmadas`
--
ALTER TABLE `cuentas_confirmadas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `productos_tags`
--
ALTER TABLE `productos_tags`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
