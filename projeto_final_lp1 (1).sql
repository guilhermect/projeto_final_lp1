-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 18/06/2019 às 19:30
-- Versão do servidor: 10.1.13-MariaDB
-- Versão do PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_final_lp1`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carros`
--

CREATE TABLE `carros` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `ano` int(4) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `cambio` varchar(25) NOT NULL,
  `valor_diaria` varchar(10) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `carros`
--

INSERT INTO `carros` (`id`, `marca`, `modelo`, `ano`, `cor`, `cambio`, `valor_diaria`, `imagem`, `datetime`) VALUES
(3, 'Lamborghini', 'Huracan', 2018, 'gg', 'Manual', '400', 'img/carros/car2.jpg', '2019-06-05 15:23:35'),
(8, 'McLaren', '720s Coupé', 2018, 'Laranja', 'Automático', '600', 'img/carros/car3.jpg', '2019-06-05 16:27:08'),
(10, 'Ferrari', 'Enzo', 2001, 'Vermelho', 'Automático', '700', 'img/carros/car1.jpg', '2019-06-05 16:43:53'),
(12, 'Rolls Royce', 'Ghost', 2019, 'Cinza', 'Automático', '1300', 'img/carros/car10.jpg', '2019-06-05 17:48:01'),
(13, 'Audi', 'R8', 2019, 'Prata', 'Automático', '800', 'img/carros/car5.jpg', '2019-06-05 21:46:23'),
(14, 'Ferrari', 'Spyder', 2013, 'Amarelo', 'Automático', '639', 'img/carros/car6.jpg', '2019-06-12 21:18:53'),
(15, 'Lamborghini', 'Urus', 2019, 'Amarelo', 'Automático', '900', 'img/carros/car8.jpg', '2019-06-18 14:19:27');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `carros`
--
ALTER TABLE `carros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
