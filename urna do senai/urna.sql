-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Nov-2024 às 16:07
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `urna`
--
CREATE DATABASE IF NOT EXISTS `urna` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `urna`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

DROP TABLE IF EXISTS `candidato`;
CREATE TABLE IF NOT EXISTS `candidato` (
  `can_codigo` int NOT NULL AUTO_INCREMENT,
  `can_nome` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `can_numero` int NOT NULL,
  `can_partido` varchar(80) NOT NULL,
  PRIMARY KEY (`can_codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `candidato`
--

INSERT INTO `candidato` (`can_codigo`, `can_nome`, `can_numero`, `can_partido`) VALUES
(33, 'Ana Beatriz Carpin de Sousa', 1, 'Partido Senaianos'),
(34, 'Ana Luiza Fernandes', 2, 'Partido Senaianos'),
(35, 'Daniel Furlan do Nascimento', 3, 'Partido Senaianos'),
(36, 'Davi Mosna de Jesus', 4, 'Partido Senaianos'),
(37, 'Enzo Nardo Antônio', 5, 'Partido Senaianos'),
(38, 'Felipe dos Santos do Padro', 6, 'Partido Senaianos'),
(39, 'Felipe Oliveira dos Santos', 7, 'Partido Senaianos'),
(40, 'Gabriel Baroni', 8, 'Partido Senaianos'),
(41, 'Gabrielly Caroline Gomes', 9, 'Partido Senaianos'),
(42, 'Geovana Santos de Lima', 10, 'Partido Senaianos'),
(43, 'Guilherme Henrique Domingues Brocatto', 11, 'Partido Senaianos'),
(44, 'Henrique Santarosa de Oliveira', 12, 'Partido Senaianos'),
(45, 'José Luiz Bertolato Ferreira', 13, 'Partido Senaianos'),
(46, 'Júlia Pacheco de Melo', 14, 'Partido Senaianos'),
(47, 'Julio Cesar de Oliveira', 15, 'Partido Senaianos'),
(48, 'Kamilly dos Santos Pontes', 16, 'Partido Senaianos'),
(49, 'Laura Vidal Rocha', 17, 'Partido Senaianos'),
(59, 'Miguel Caires Montalvão', 26, 'Partido Senaianos'),
(51, 'Leonardo da Silva Santos', 18, 'Partido Senaianos'),
(52, 'Marcos de Oliveira Nascimento', 19, 'Partido Senaianos'),
(53, 'Maria Clara Sartoreto Ruiz', 20, 'Partido Senaianos'),
(54, 'Maria Eduarda Rizzo Fructuoso', 21, 'Partido Senaianos'),
(55, 'Maria Fernanda Vassoler', 22, 'Partido Senaianos'),
(56, 'Mariana de Araujo dos Santos', 23, 'Partido Senaianos'),
(57, 'Mariana Jacomussi de Oliveira', 24, 'Partido Senaianos'),
(58, 'Matheus Araujo da Silva', 25, 'Partido Senaianos'),
(60, 'Nicole Cristina Rodrigues', 27, 'Partido Senaianos'),
(61, 'Otávio Monteiro de Oliveira', 28, 'Partido Senaianos'),
(62, 'Rafael Julio Garcia', 29, 'Partido Senaianos'),
(63, 'Vinícius Roberto da Silva', 30, 'Partido Senaianos'),
(64, 'Wina Hidie Souza de Moraes Nalin', 31, 'Partido Senaianos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eleitor`
--

DROP TABLE IF EXISTS `eleitor`;
CREATE TABLE IF NOT EXISTS `eleitor` (
  `ele_codigo` int NOT NULL AUTO_INCREMENT,
  `ele_nome` varchar(120) NOT NULL,
  `ele_cpf` varchar(11) NOT NULL,
  PRIMARY KEY (`ele_codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `eleitor`
--

INSERT INTO `eleitor` (`ele_codigo`, `ele_nome`, `ele_cpf`) VALUES
(9, 'Gabriel Baroni', '47808472816');

-- --------------------------------------------------------

--
-- Estrutura da tabela `voto`
--

DROP TABLE IF EXISTS `voto`;
CREATE TABLE IF NOT EXISTS `voto` (
  `vot_cod` int NOT NULL AUTO_INCREMENT,
  `vot_ele_cod` int NOT NULL,
  `vot_vot` int NOT NULL,
  PRIMARY KEY (`vot_cod`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `voto`
--

INSERT INTO `voto` (`vot_cod`, `vot_ele_cod`, `vot_vot`) VALUES
(1, 9, 31),
(2, 9, 16),
(3, 9, 31),
(4, 9, 22),
(5, 9, 7),
(6, 9, 22),
(7, 9, 31),
(8, 9, 3),
(9, 9, 11),
(10, 9, 24),
(11, 9, 27),
(12, 9, 5),
(13, 9, 17),
(14, 9, 17),
(15, 9, 17),
(16, 9, 17),
(17, 9, 17),
(18, 9, 17),
(19, 9, 17),
(20, 9, 17),
(21, 9, 17),
(22, 9, 17);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
