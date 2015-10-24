-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Set-2015 às 20:16
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `protocolos_prepara`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `login`, `senha`) VALUES
(1, 'aline', '123'),
(2, 'alex', '123'),
(3, 'monica', '123'),
(4, 'adilson', '123'),
(5, 'daniele', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `protocolo`
--

CREATE TABLE IF NOT EXISTS `protocolo` (
  `idprotocolo` int(11) NOT NULL AUTO_INCREMENT,
  `nomealuno` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `numprotocolo` varchar(50) NOT NULL,
  `contrato` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  PRIMARY KEY (`idprotocolo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `protocolo`
--

INSERT INTO `protocolo` (`idprotocolo`, `nomealuno`, `descricao`, `numprotocolo`, `contrato`, `telefone`) VALUES
(2, 'Lucineide Lucena dos Santos', 'Aguardando a chegada da apostila de atendente farmaceutico', '16906265', '699730', '82 996723480');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
