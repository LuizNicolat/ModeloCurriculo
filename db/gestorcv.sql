-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 23-Abr-2018 às 23:09
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestorcv`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_cadastrais`
--

CREATE TABLE `dados_cadastrais` (
  `id` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `nascimento` varchar(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `cep` int(12) NOT NULL,
  `logradouro` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `localidade` varchar(255) NOT NULL,
  `uf` varchar(4) NOT NULL,
  `ibge` int(10) DEFAULT NULL,
  `numero` int(10) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel_acesso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dados_cadastrais`
--

INSERT INTO `dados_cadastrais` (`id`, `nome`, `sobrenome`, `nascimento`, `cpf`, `cep`, `logradouro`, `bairro`, `localidade`, `uf`, `ibge`, `numero`, `usuario`, `senha`, `nivel_acesso`) VALUES
(2, 'Luiz', 'Nicolat', '04/04/2018', 1234567888, 83601170, 'Rua Sete de Setembro', 'Centro', 'Campo Largo', 'PR', 4104204, 1234, 'admin', '77949c9f02621a4c85964be115a9dcc9', 0),
(3, 'Teste', 'Testeiro', '06/04/2018', 123456789, 80440220, 'Rua Bruno Filgueira', 'Batel', 'Curitiba', 'PR', 4106902, 123456, 'admin1', '77949c9f02621a4c85964be115a9dcc9', 1),
(6, 'Teste', 'Testeiro', '06/04/2018', 1234562222, 80440220, 'Rua Bruno Filgueira', 'Batel', 'Curitiba', 'PR', 4106902, 123456, 'admin2', 'asdas', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `objetivos`
--

CREATE TABLE `objetivos` (
  `id` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `objetivo` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dados_cadastrais`
--
ALTER TABLE `dados_cadastrais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Indexes for table `objetivos`
--
ALTER TABLE `objetivos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_objetivo_dados` (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dados_cadastrais`
--
ALTER TABLE `dados_cadastrais`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `objetivos`
--
ALTER TABLE `objetivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `objetivos`
--
ALTER TABLE `objetivos`
  ADD CONSTRAINT `fk_objetivo_dados` FOREIGN KEY (`idusuario`) REFERENCES `dados_cadastrais` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
