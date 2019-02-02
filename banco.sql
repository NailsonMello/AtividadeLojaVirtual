-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Maio-2017 às 18:00
-- Versão do servidor: 5.7.10-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_vendas`
--

CREATE TABLE IF NOT EXISTS `itens_vendas` (
  `id_itens_vendas` int(11) NOT NULL AUTO_INCREMENT,
  `id_vendas` varchar(10) NOT NULL,
  `id_produto` varchar(10) NOT NULL,
  `qtd_itens_venda` varchar(10) NOT NULL,
  PRIMARY KEY (`id_itens_vendas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `itens_vendas`
--

INSERT INTO `itens_vendas` (`id_itens_vendas`, `id_vendas`, `id_produto`, `qtd_itens_venda`) VALUES
(1, '', '13', '1'),
(2, '', '37', '2'),
(3, '', '37', '2'),
(4, '', '37', '2'),
(5, '', '37', '2'),
(6, '', '5', '2'),
(7, '', '37', '2'),
(8, '6', '36', '2'),
(9, '7', '13', '1'),
(10, '7', '5', '1'),
(11, '8', '13', '1'),
(12, '8', '38', '2'),
(13, '9', '13', '1'),
(14, '9', '30', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `img_produto` varchar(60) NOT NULL,
  `descricao_produto` varchar(99) NOT NULL,
  `preco_produto` double NOT NULL,
  `marca_produto` varchar(99) NOT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `img_produto`, `descricao_produto`, `preco_produto`, `marca_produto`) VALUES
(1, 'alcatel.jpg', 'Smartphone Alcatel', 499, 'alcatel'),
(2, 'alcatel-idol.jpg', 'Smartphone Alcatel', 899, 'alcatel'),
(3, 'Alcatel2.png', 'Smartphone Alcatel', 299, 'alcatel'),
(4, 'idol4s-1.png', 'Smartphone Alcatel', 1799, 'alcatel'),
(5, 'samsungj5.png', 'Smartphone Samsung j5', 799, 'samsung'),
(6, 'galaxycore2.png', 'Smartphone Samsung j5', 499, 'samsung'),
(7, 'samsunggalaxypocketduos.png', 'Smartphone Samsung', 299, 'samsung'),
(8, 'galaxynote5s6edgeplus.png', 'Smartphone Samsung', 799, 'samsung'),
(9, 'positivo.png', 'Smartphone Positivo', 599, 'positivo'),
(10, 'positivo2.png', 'Smartphone Positivo', 799, 'positivo'),
(11, 'positivo-s440.png', 'Smartphone Positivo', 299, 'positivo'),
(12, 'positivo3.png', 'Smartphone Positivo', 999, 'positivo'),
(13, 'motog.png', 'Smartphone Motog', 399, 'motorola'),
(14, 'motorola-razr.png', 'Smartphone Motorola', 299, 'motorola'),
(15, 'Motogturbo.png', 'Smartphone Motorola', 999, 'motorola'),
(16, 'motoZ.png', 'Smartphone Motorola', 1599, 'motorola'),
(17, 'lenovo.png', 'Smartphone Lenovo', 599, 'lenovo'),
(18, 'Lenovok6plus.png', 'Smartphone Lenovo', 799, 'lenovo'),
(19, 'lenovovibek5.png', 'Smartphone Lenovo', 1299, 'lenovo'),
(20, 'iphone6s.png', 'Smartphone Iphone 6S', 2699, 'iphone'),
(21, 'iphone_5s.png', 'Smartphone Iphone 5S', 1499, 'iphone'),
(22, 'iphone4s.jpg', 'Smartphone Iphone 4S', 1299, 'iphone'),
(23, 'iPhone7.png', 'Smartphone Iphone 7', 4799, 'iphone'),
(24, 'samsung.jpg', 'Notebook Samsung', 1799, 'not_samsung'),
(25, 'samsung_ativ_book_2.png', 'Notebook Samsung', 2499, 'not_samsung'),
(26, 'notebooks-samsung-style.png', 'Notebook Samsung', 3299, 'not_samsung'),
(27, 'notebook-positivo.jpg', 'Notebook Positivo', 1499, 'not_positivo'),
(28, 'positivo.png', 'Notebook Positivo', 2499, 'not_positivo'),
(29, 'notebook-positivo-duo-zk3010.png', 'Notebook Positivo', 1299, 'not_positivo'),
(30, 'notebook-lenovo-ideapad.png', 'Notebook Lenovo', 2799, 'not_lenovo'),
(31, 'notebook-lenovo-g405.jpg', 'Notebook Lenovo', 2499, 'not_lenovo'),
(32, 'lenovo-2-p.png', 'Notebook Lenovo', 3299, 'not_lenovo'),
(33, 'notebook-hp-pavilion.png', 'Notebook HP', 4799, 'not_hp'),
(34, 'Notebook-HP-G4.png', 'Notebook HP', 1999, 'not_hp'),
(35, 'hp1.png', 'Notebook HP', 2499, 'not_hp'),
(36, 'dell1.png', 'Notebook Dell', 1799, 'not_dell'),
(37, 'notebook-touch-dell.png', 'Notebook Dell', 2499, 'not_dell'),
(38, 'dell.png', 'Notebook Dell', 2299, 'not_dell'),
(39, 'apple.png', 'Notebook Apple', 3799, 'not_apple'),
(40, 'apple2.png', 'Notebook Apple', 4499, 'not_apple'),
(41, 'apple1.png', 'Notebook Apple', 6299, 'not_apple');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `email_usuario` varchar(120) NOT NULL,
  `nome_usuario` varchar(55) NOT NULL,
  `senha_usuario` varchar(55) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email_usuario`, `nome_usuario`, `senha_usuario`) VALUES
(1, 'oi@oi.com', 'nailson', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE IF NOT EXISTS `vendas` (
  `id_venda` int(12) NOT NULL,
  `id_usuario_venda` int(12) DEFAULT NULL,
  `nome_usuario_venda` varchar(100) DEFAULT NULL,
  `id_produto_venda` int(12) DEFAULT NULL,
  `descricao_produto_venda` varchar(100) DEFAULT NULL,
  `qtd_produto_venda` int(10) DEFAULT NULL,
  `preco_produto_venda` double DEFAULT NULL,
  PRIMARY KEY (`id_venda`),
  KEY `id_venda_usuario` (`id_usuario_venda`),
  KEY `id_venda_produto` (`id_produto_venda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `id_venda_produto` FOREIGN KEY (`id_produto_venda`) REFERENCES `produtos` (`id_produto`),
  ADD CONSTRAINT `id_venda_usuario` FOREIGN KEY (`id_usuario_venda`) REFERENCES `usuarios` (`id_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
