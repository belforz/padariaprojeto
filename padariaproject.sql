-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 31-Ago-2023 às 23:36
-- Versão do servidor: 8.0.34
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `padariaproject`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

DROP TABLE IF EXISTS `pagamentos`;
CREATE TABLE IF NOT EXISTS `pagamentos` (
  `idPessoa` int NOT NULL,
  `idPagamento` int NOT NULL,
  `tipoPagamento` enum('Boleto','Débito','Crédito','Dois cartões','Pix','Dinheiro') DEFAULT NULL,
  PRIMARY KEY (`idPessoa`,`idPagamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `pagamentos`
--

INSERT INTO `pagamentos` (`idPessoa`, `idPagamento`, `tipoPagamento`) VALUES
(1, 1, 'Boleto'),
(2, 2, 'Crédito'),
(3, 3, 'Pix');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
CREATE TABLE IF NOT EXISTS `pessoa` (
  `idPessoa` int NOT NULL AUTO_INCREMENT,
  `Fnome` varchar(30) DEFAULT NULL,
  `Lnome` varchar(20) DEFAULT NULL,
  `Escola` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idPessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=569 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`idPessoa`, `Fnome`, `Lnome`, `Escola`) VALUES
(1, 'John', 'Doe', 'High School'),
(2, 'Jane', 'Smith', 'University'),
(3, 'Alice', 'Johnson', 'College'),
(4, NULL, NULL, NULL),
(5, NULL, NULL, NULL),
(567, NULL, NULL, NULL),
(568, 'leandro', 'belfor', 'etec');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `idProduto` int NOT NULL AUTO_INCREMENT,
  `Pnome` varchar(100) NOT NULL,
  `Descricao` varchar(200) DEFAULT NULL,
  `categoria` enum('Salgado','Doce','Bebida','Massa') NOT NULL,
  `quantidade` int DEFAULT NULL,
  `valor_inicial` float DEFAULT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProduto`, `Pnome`, `Descricao`, `categoria`, `quantidade`, `valor_inicial`) VALUES
(1, 'Pizza', 'Delicious pizza', 'Salgado', 10, 12.99),
(2, 'Cake', 'Yummy cake', 'Doce', 5, 25.5),
(3, 'Soda', 'Refreshing soda', 'Bebida', 50, 1.99);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int NOT NULL AUTO_INCREMENT,
  `nomeusuario` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

DROP TABLE IF EXISTS `vendas`;
CREATE TABLE IF NOT EXISTS `vendas` (
  `idVenda` int NOT NULL AUTO_INCREMENT,
  `idVendaPessoa` int DEFAULT NULL,
  `idVendaProduto` int DEFAULT NULL,
  `vendaStatus` enum('Cancelado','Confirmado','Em processamento') DEFAULT 'Em processamento',
  `vendaValor` float DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`idVenda`),
  KEY `fk_venda_Pessoa` (`idVendaPessoa`),
  KEY `fk_vendas_produtos` (`idVendaProduto`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`idVenda`, `idVendaPessoa`, `idVendaProduto`, `vendaStatus`, `vendaValor`, `data`) VALUES
(1, 1, 1, 'Confirmado', 12.99, '2023-07-19 00:00:00'),
(2, 2, 2, 'Em processamento', 25.5, '2023-07-20 00:00:00'),
(3, 3, 3, 'Cancelado', 1.99, '2023-07-21 00:00:00');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `fk_venda_Pessoa` FOREIGN KEY (`idVendaPessoa`) REFERENCES `pessoa` (`idPessoa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_vendas_produtos` FOREIGN KEY (`idVendaProduto`) REFERENCES `produto` (`idProduto`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
