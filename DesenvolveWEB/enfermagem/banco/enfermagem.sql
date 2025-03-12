-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/03/2025 às 13:40
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `enfermagem`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `idPaciente` int(10) UNSIGNED NOT NULL,
  `nomePaciente` varchar(200) NOT NULL,
  `dtNascPaciente` date NOT NULL,
  `sexoPaciente` varchar(50) NOT NULL,
  `endPaciente` varchar(200) NOT NULL,
  `nomeMaePaciente` varchar(200) NOT NULL,
  `dtInternacaoPaciente` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`idPaciente`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `idPaciente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
