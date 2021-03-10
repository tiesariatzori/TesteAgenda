-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Mar-2021 às 22:57
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `Nome` varchar(50) NOT NULL,
  `Descri` varchar(200) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `DataFinal` date NOT NULL,
  `DataInicial` date NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`Nome`, `Descri`, `Titulo`, `DataFinal`, `DataInicial`, `Id`) VALUES
('tiesari atzori cruz alves', 'precisando', 'emprego', '2021-03-17', '2021-03-21', 4),
('amanda', 'asd', 'asd', '2021-03-18', '2021-03-24', 5),
('lucas', 'amanha', 'hoje', '2021-03-02', '2021-03-25', 6),
('joao', 'pedro', 'lucas', '2021-03-25', '2021-03-27', 7),
('maicon', 'vamos a casa da vovo hoje a tarde busca leite', 'estudar', '2021-03-16', '2021-03-30', 8),
('malim', 'vamos comer comidar', 'comer', '2021-03-16', '2021-03-31', 9),
('joel', 'qwedaswe', 'asdeeq', '2020-01-07', '2021-03-24', 10),
('joana', 'vamos comer', 'comer biscoito', '2021-03-02', '2021-03-24', 11),
('joao', 'maicon', 'lucas', '2021-03-02', '2021-03-17', 12),
('pedrinho', 'marcos', 'joao', '2021-03-01', '2021-03-23', 13),
('joaozinho', 'feijao', 'pedro', '2021-03-01', '2021-03-02', 14);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
