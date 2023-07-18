-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/06/2023 às 16:13
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--
CREATE DATABASE IF NOT EXISTS `cadastro` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cadastro`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_nasc` date NOT NULL,
  `adm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `data_nasc`, `adm`) VALUES
(57, 'teste', 'teste@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2004-07-21', 1),
(58, 'armandojunio', 'junior@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2004-07-21', NULL),
(59, 'armando', 'armando@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2004-07-21', NULL),
(60, 'armando', 'eu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', NULL),
(61, 'armando', 'arm@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2004-07-21', NULL),
(62, 'armando', '123@gmail.com', '0052069db1a0017f6a27f27e6dcbb919', '2004-07-21', NULL),
(63, 'arnaldopereira', 'arnaldo@gmail.com', 'fa87f7f90e58ee02504d60e3e431e039', '7200-01-21', NULL),
(64, 'armando', 't@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2004-07-21', NULL),
(65, 'teste2', 'teste2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2004-07-21', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
