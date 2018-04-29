-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 29-Abr-2018 às 22:27
-- Versão do servidor: 5.7.21
-- PHP Version: 7.1.13

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
(2, 'Luiz', 'Nicolat', '04/04/2018', 1234567888, 83601170, 'Rua Sete de Setembro', 'Centro', 'Campo Largo', 'PR', 4104204, 1234, 'admin', '77949c9f02621a4c85964be115a9dcc9', 1),
(3, 'Edvaldo', 'Robertson', '06/04/2018', 123456789, 80440220, 'Rua Bruno Filgueira', 'Batel', 'Curitiba', 'PR', 4106902, 123456, 'user', '02d6555c507f88f822e24f2825323bb6', 2),
(6, 'Edimar', 'Silva', '06/04/2018', 1234562222, 80440220, 'Rua Bruno Filgueira', 'Batel', 'Curitiba', 'PR', 4106902, 123456, 'admin2', '0aa1ea9a5a04b78d4581dd6d17742627', 1),
(7, '123', '12333', '01/04/2018', 66655445, 83601770, 'Rua Alcides Pacheco', 'Núcleo Habitacional Doutor Abranches Guimarães', 'Campo Largo', 'PR', 4104204, 123, 'asd', '202cb962ac59075b964b07152d234b70', 2),
(8, 'Ademar', 'Astolfo', 'undefined', 123444777, 80440200, 'Rua Gabriel de Lara', 'Batel', 'Curitiba', 'PR', 4106902, 4578, 'Ademar', 'e10adc3949ba59abbe56e057f20f883e', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `objetivos`
--

CREATE TABLE `objetivos` (
  `id` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `objetivo` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissoes`
--

CREATE TABLE `permissoes` (
  `codigo` int(11) NOT NULL,
  `descricao` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `permissoes`
--

INSERT INTO `permissoes` (`codigo`, `descricao`) VALUES
(1, 'Administrador'),
(2, 'Usuário');

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
-- Indexes for table `permissoes`
--
ALTER TABLE `permissoes`
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dados_cadastrais`
--
ALTER TABLE `dados_cadastrais`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
