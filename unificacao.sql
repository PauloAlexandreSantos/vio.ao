-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Mar-2019 às 02:52
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unificacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `obtidos`
--

CREATE TABLE `obtidos` (
  `ID` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `data` varchar(50) NOT NULL,
  `provincia` varchar(255) NOT NULL,
  `unidade` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `obtidos`
--

INSERT INTO `obtidos` (`ID`, `nome`, `tipo`, `data`, `provincia`, `unidade`) VALUES
(1, 'Benjamim Inácio de Joana Chipema', 'Carta de condução ', '2018-11-12', 'Luanda', 'Comando da Esquadra de Helicópteros'),
(2, 'Josefa Maria da Conceição Makiesse', 'Bilhete de identidade ', '2018-11-12', 'Huambo', 'Comando da Esquadra de Helicópteros'),
(4, 'Valodia Pedro Gomes', 'Bilhete de identidade ', '2018-11-12', 'Lunda-Norte', 'Comando da Esquadra de Helicópteros'),
(5, 'Jacinto Mendes Franscisco', 'Bilhete de identidade ', '2018-11-12', 'Benguela', 'Comando da Esquadra de Helicópteros'),
(6, 'Constantino Manuel Camões', 'Bilhete de identidade ', '2018-11-12', 'Cuando Cubango', 'Comando Geral da Polícia Nacional'),
(8, 'José Tchihamba Laurentino Muteca', 'Carta de condução ', '2018-11-12', 'Cuanza-Norte ', 'Comando da Esquadra de Helicópteros'),
(9, 'Marcelina Bartolomeu Coelho', 'Bilhete de identidade ', '2018-11-12', 'Luanda', 'Comando Geral da Polícia Nacional'),
(10, 'Marcelina da Conceição Mateus Adelino', 'Carta de condução ', '2018-11-12', 'Cuanza-Norte ', 'Comando da Esquadra de Helicópteros'),
(11, 'Nkanga Garcia Andre ', 'Carta de condução ', '2018-11-12', 'Luanda', 'Comando da Esquadra de Helicópteros'),
(12, 'N Zinga de Savula Conde', 'Carta de condução ', '2018-11-12', 'Namibe', 'Comando da Esquadra de Helicópteros'),
(14, 'Pedro Avelino Malundo', 'Carta de condução ', '2018-11-12', 'Bíe', 'Comando da Esquadra de Helicópteros'),
(15, 'Tambue Kalonga', 'Carta de condução ', '2018-11-12', 'Namibe', 'Comando da Esquadra de Helicópteros'),
(16, 'Virginia Maria Luamba Cobo', 'Carta de condução ', '2018-11-12', 'Moxico', 'Comando da Esquadra de Helicópteros'),
(26, 'Antonio do Nascimento Dias', 'Bilhete de identidade ', '2018-11-16', 'Luanda', 'Comando Geral da Polícia Nacional'),
(32, 'Lirianov Demidovic', 'Passaporte ', '2018-11-26', 'Luanda', 'Comando Geral da Polícia Nacional'),
(33, 'Salomão Mussongo', 'Bilhete de identidade ', '2018-11-26', 'Luanda', 'Comando da Esquadra de Helicópteros '),
(35, 'Karina Jandira dos Santos Miranda Carmelino', 'Bilhete de identidade ', '2018-11-29', 'Luanda', 'Esquadra da Polícia - Calemba II'),
(51, 'Igor Décio da Silva Aires', 'Bilhete de identidade ', '09-03-2019', 'Bengo', '13ª Esquadra'),
(52, 'Igor Décio da Silva Aires', 'Carta de condução ', '09-03-2019', 'Bengo', '13ª Esquadra');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perdidos`
--

CREATE TABLE `perdidos` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `morada` varchar(220) CHARACTER SET utf8 NOT NULL,
  `doc` varchar(220) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(220) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `perdidos`
--

INSERT INTO `perdidos` (`id`, `nome`, `morada`, `doc`, `email`, `phone`, `mensagem`, `data`) VALUES
(31, 'N Zinga de Savula Conde', 'Namibe', 'Carta de condução ', 'Nzinga@wordpress.com', '923432308', 'Perdi minha carta de condução por favor peço ajuda da Policia Nacional sou uma cidadã de nacionalidade portuguesa.', '2018-11-28'),
(32, 'Analtina da Conceição Celeste', 'Luanda', 'Bilhete de identidade ', 'Analtina@Gmail.com', '+244 923432309', 'Meus documentos perdi na via pública numa carteira de cor preta de marca GUCCI. obrigado!', '2018-12-02'),
(38, 'Constantino Manuel Camões', 'Cuando Cubango', 'Bilhete de identidade ', 'Constantino@Gmail.com', '+244924123524', 'Perdi meu Bilhete de Identidade na Comuna do Gado grande, e meu segundo numero é 919145528', '2018-09-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sistemalogin`
--

CREATE TABLE `sistemalogin` (
  `ID` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `sistemalogin`
--

INSERT INTO `sistemalogin` (`ID`, `nome`, `login`, `senha`) VALUES
(1, 'Paulo Alexandre', 'Admin', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Sargento', 'sargento', '952eaebdfceb9868cefd8d25bb971220');

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidades`
--

CREATE TABLE `unidades` (
  `id` int(11) NOT NULL,
  `unidade` varchar(255) CHARACTER SET utf8 NOT NULL,
  `localizacao` varchar(255) CHARACTER SET utf8 NOT NULL,
  `agente` varchar(255) CHARACTER SET utf8 NOT NULL,
  `endereco` varchar(255) CHARACTER SET utf8 NOT NULL,
  `horario` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `unidades`
--

INSERT INTO `unidades` (`id`, `unidade`, `localizacao`, `agente`, `endereco`, `horario`) VALUES
(1, 'Comando Geral da Polícia Nacional', 'Av. 4 de Fevereiro, perto a fortaleza São Miguel', 'Tenente Coronel Engº António Silva Gregório', '113', 'De Segunda-feira à Sábado - das 07h as 15h'),
(2, 'Comando da Esquadra de Helicópteros ', 'Maianga-Bairro Cassequel', 'Sargento Pedro Felipe', '(+244) 925 707 121', 'De Segunda-feira à Sábado - das 07h as 15h'),
(3, '13ª Esquadra', 'Proximo ao Comando PRovincial da Policia Nacional-SAPÚ', 'Sgt Tomás Pedro', '998254751', 'De Segunda-feira à Sábado - das 07h as 15h'),
(4, 'Esquadra da Polícia - Golfe', 'Golfe II', 'Sgt kivi Kandulalunga', '926451753', 'De Segunda-feira à Sábado - das 07h as 15h'),
(5, 'Esquadra da Polícia - Calemba II', 'Calemba II', 'Sgt: Domingos Savino', '915428465', 'De Segunda-feira à Sábado - das 07h as 15h'),
(6, 'Esquadra do Grafanil KM9', 'Estrada de Catete', 'Sgt: Bruno da silva Almeida', '925 645 749', 'De Segunda-feira à Sábado - das 07h as 15h'),
(7, 'Esquadra da Centralidade do Kilamba', 'Avenida principal do Kilamba', 'Sgt: Leonardo Kalambuca', '936 458 159', 'De Segunda-feira à Sábado - das 07h as 15h'),
(8, 'Divisão de Viana', 'Estrada de Catete', 'Sgt: Mário Onel', '925 485 126', 'De Segunda-feira à Sábado - das 07h as 15h'),
(9, '8ª Esquadra', 'Luanda-Rangel- CTT KM 7', 'Sgt: Alberto Kuis', '945125856', 'De Segunda-feira à Sábado - das 07h as 15h');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obtidos`
--
ALTER TABLE `obtidos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `perdidos`
--
ALTER TABLE `perdidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sistemalogin`
--
ALTER TABLE `sistemalogin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obtidos`
--
ALTER TABLE `obtidos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `perdidos`
--
ALTER TABLE `perdidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `sistemalogin`
--
ALTER TABLE `sistemalogin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
