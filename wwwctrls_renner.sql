-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 20-Out-2019 às 15:45
-- Versão do servidor: 5.6.41-84.1
-- versão do PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wwwctrls_renner`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nome` varchar(145) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `email` varchar(145) NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome`, `cpf`, `email`, `telefone`, `status`) VALUES
(1, 'Isadora Machado', '026.086.180-30', 'isadora@gmail.com', '(51) 94089-9870', 1),
(2, 'Kevin da Silva', '562.463.852-99', 'kevin@gmail.com', '(51) 94568-7445', 1),
(3, 'Douglas Silva', '005.467.195-08', 'douglasvdmsilva@gmail.com', '(51) 98549-9623', 1),
(4, 'Patrícia', '005.698.195-08', 'patricia@gmail.com', '(51) 98549-9623', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_compra`
--

CREATE TABLE `cliente_compra` (
  `idcliente_compra` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `dt_compra` date DEFAULT NULL,
  `loja` varchar(450) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente_compra`
--

INSERT INTO `cliente_compra` (`idcliente_compra`, `id_cliente`, `dt_compra`, `loja`, `valor`, `status`) VALUES
(1, 1, '2019-10-05', 'Renner', 120, 1),
(2, 1, '2019-10-04', 'Camicado', 150, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_indicacao`
--

CREATE TABLE `cliente_indicacao` (
  `id` int(11) NOT NULL,
  `idcliente_indicacao` int(11) NOT NULL,
  `dt_aceito` date DEFAULT NULL,
  `situacao` varchar(45) DEFAULT NULL,
  `bonus` float DEFAULT NULL,
  `idrecompensa` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente_indicacao`
--

INSERT INTO `cliente_indicacao` (`id`, `idcliente_indicacao`, `dt_aceito`, `situacao`, `bonus`, `idrecompensa`) VALUES
(1, 2, '2019-10-06', '2', 20, 1),
(2, 3, '2019-10-06', '1', 20, 2),
(0, 4, '2019-10-06', '1', 20, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_recompensa`
--

CREATE TABLE `cliente_recompensa` (
  `idcliente_recompensa` int(11) NOT NULL,
  `idcliente` int(11) DEFAULT NULL,
  `idrecompensa` int(11) DEFAULT NULL,
  `tipo` int(11) NOT NULL,
  `valor_recompensa` float DEFAULT NULL,
  `dt_validade` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente_recompensa`
--

INSERT INTO `cliente_recompensa` (`idcliente_recompensa`, `idcliente`, `idrecompensa`, `tipo`, `valor_recompensa`, `dt_validade`, `status`) VALUES
(1, 1, 1, 1, 20, '2020-04-06', 2),
(2, 2, 1, 1, 20, '2020-04-06', 1),
(3, 3, 1, 1, 20, '2020-05-06', 0),
(4, 1, 2, 2, 50, '2019-04-06', 0),
(6, 4, 1, 1, 20, '2020-04-06', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `recompensa`
--

CREATE TABLE `recompensa` (
  `idrecompensa` int(11) NOT NULL,
  `valor_recompensa` float DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `valor_minimo` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `recompensa`
--

INSERT INTO `recompensa` (`idrecompensa`, `valor_recompensa`, `tipo`, `status`, `valor_minimo`) VALUES
(1, 20, 1, 1, 0),
(2, 50, 2, 1, 100),
(3, 100, 3, 1, 100),
(4, 150, 4, 1, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indexes for table `cliente_compra`
--
ALTER TABLE `cliente_compra`
  ADD PRIMARY KEY (`idcliente_compra`);

--
-- Indexes for table `cliente_indicacao`
--
ALTER TABLE `cliente_indicacao`
  ADD PRIMARY KEY (`idcliente_indicacao`);

--
-- Indexes for table `cliente_recompensa`
--
ALTER TABLE `cliente_recompensa`
  ADD PRIMARY KEY (`idcliente_recompensa`);

--
-- Indexes for table `recompensa`
--
ALTER TABLE `recompensa`
  ADD PRIMARY KEY (`idrecompensa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cliente_compra`
--
ALTER TABLE `cliente_compra`
  MODIFY `idcliente_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cliente_indicacao`
--
ALTER TABLE `cliente_indicacao`
  MODIFY `idcliente_indicacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cliente_recompensa`
--
ALTER TABLE `cliente_recompensa`
  MODIFY `idcliente_recompensa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `recompensa`
--
ALTER TABLE `recompensa`
  MODIFY `idrecompensa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
