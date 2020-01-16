-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 16-Jan-2020 às 19:56
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `NIF` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Idade` int(11) DEFAULT NULL,
  `Telefone` int(11) NOT NULL,
  `CodPostal` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`NIF`)
) ENGINE=MyISAM AUTO_INCREMENT=738219923 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`NIF`, `Nome`, `Idade`, `Telefone`, `CodPostal`) VALUES
(738219921, 'João', 248, 214245590, '8266'),
(341563005, 'Bernardo', 31, 914253210, '8360'),
(152009438, 'David', 21, 964720046, '8403'),
(158253765, 'Ricardo', 52, 962842114, '8403'),
(738219922, 'Lorio', 28, 965633541, '8500-140');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

DROP TABLE IF EXISTS `compra`;
CREATE TABLE IF NOT EXISTS `compra` (
  `CodCompra` int(11) NOT NULL,
  `Id_fornecedor` int(11) DEFAULT NULL,
  `Id_empregado` int(11) DEFAULT NULL,
  `CodProduto` int(11) DEFAULT NULL,
  PRIMARY KEY (`CodCompra`),
  KEY `Id_fornecedor` (`Id_fornecedor`),
  KEY `Id_empregado` (`Id_empregado`),
  KEY `CodProduto` (`CodProduto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`CodCompra`, `Id_fornecedor`, `Id_empregado`, `CodProduto`) VALUES
(1, 3, 4, 10),
(2, 5, 17, 45),
(3, 4, 8, 3),
(4, 1, 6, 23);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empregado`
--

DROP TABLE IF EXISTS `empregado`;
CREATE TABLE IF NOT EXISTS `empregado` (
  `Id_empregado` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Idade` int(11) DEFAULT NULL,
  `Telefone` int(11) NOT NULL,
  `CodPostal` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`Id_empregado`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empregado`
--

INSERT INTO `empregado` (`Id_empregado`, `Nome`, `Idade`, `Telefone`, `CodPostal`) VALUES
(4, 'Leonardo', 30, 962691103, '8377'),
(17, 'Ana', 25, 913849201, '7655'),
(6, 'Joana', 18, 945721998, '8358'),
(8, 'Nuno', 21, 944430320, '8472');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `Id_fornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Telefone` int(11) NOT NULL,
  `CodPostal` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`Id_fornecedor`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`Id_fornecedor`, `Nome`, `Telefone`, `CodPostal`) VALUES
(1, 'Mariana', 929411231, '7676'),
(2, 'Carlos', 933416557, '7836'),
(5, 'Paulo', 934132900, '6358'),
(4, 'Catarina', 964736800, '1277');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `CodProduto` int(11) NOT NULL AUTO_INCREMENT,
  `Designação` varchar(40) NOT NULL,
  `Preco` double NOT NULL,
  `Prazo_Validade` date NOT NULL,
  PRIMARY KEY (`CodProduto`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`CodProduto`, `Designação`, `Preco`, `Prazo_Validade`) VALUES
(23, 'Bolachas Maria', 4.99, '2020-06-15'),
(45, 'Snickers', 1.39, '2020-02-07'),
(3, 'Água', 0.79, '2020-03-25'),
(10, 'Crystal', 6.99, '2020-08-25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

DROP TABLE IF EXISTS `venda`;
CREATE TABLE IF NOT EXISTS `venda` (
  `CodVenda` int(11) NOT NULL,
  `NIF` int(11) DEFAULT NULL,
  `Id_empregado` int(11) DEFAULT NULL,
  `CodProduto` int(11) DEFAULT NULL,
  PRIMARY KEY (`CodVenda`),
  KEY `NIF` (`NIF`),
  KEY `Id_empregado` (`Id_empregado`),
  KEY `CodProduto` (`CodProduto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`CodVenda`, `NIF`, `Id_empregado`, `CodProduto`) VALUES
(3, 738219921, 6, 23),
(6, 738219921, 8, 23),
(16, 152009438, 8, 45),
(29, 341563005, 4, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
