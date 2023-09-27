-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Jun-2023 às 18:23
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `coper`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `ID` int(11) NOT NULL,
  `evento` text NOT NULL,
  `dataev` date NOT NULL,
  `tipev` text NOT NULL,
  `coordev` varchar(140) NOT NULL,
  `colabev` varchar(100) NOT NULL,
  `partev` varchar(100) NOT NULL,
  `obj` varchar(100) NOT NULL,
  `loc` varchar(100) NOT NULL,
  `horasev` varchar(100) NOT NULL,
  `custo` varchar(100) NOT NULL,
  `popalvo` text NOT NULL,
  `nmpessoa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`ID`, `evento`, `dataev`, `tipev`, `coordev`, `colabev`, `partev`, `obj`, `loc`, `horasev`, `custo`, `popalvo`, `nmpessoa`) VALUES
(8, 'Teste de listagem', '2023-06-25', 'outro', 'Vitor', 'Victor, Joao', 'Vitor Martins', 'testar a listagem dos itens', 'casa', '2min', '0', '1', 1),
(9, '', '0000-00-00', 'curso', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

CREATE TABLE `projetos` (
  `ID` int(11) NOT NULL,
  `proj` text NOT NULL,
  `moda` text NOT NULL,
  `coordp` text NOT NULL,
  `colap` text NOT NULL,
  `partep` text NOT NULL,
  `obj` text NOT NULL,
  `obje` text NOT NULL,
  `dura` varchar(10) NOT NULL,
  `metod` text NOT NULL,
  `crono` text NOT NULL,
  `popalvo` text NOT NULL,
  `recne` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`ID`, `proj`, `moda`, `coordp`, `colap`, `partep`, `obj`, `obje`, `dura`, `metod`, `crono`, `popalvo`, `recne`) VALUES
(1, 'dasda', 'dasd', 'asdas', 'dasda', 'da', 'dada', 'dada', 'dada', 'dada', 'dada', 'dada', 'dada'),
(2, '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `mail` varchar(120) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nome` text NOT NULL,
  `cargo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `mail`, `senha`, `nome`, `cargo`) VALUES
(3, 'vitor_carpes@gmail.com', '32855042', 'Vitor', 'aluno'),
(4, 'gregori@fmpsc.edu.br', '123', 'Gregori', 'prof'),
(5, 'victor@fmpsc.edu', '456', 'victor', 'coord'),
(14, 'amanda@gmail.com', '123', 'Amanda', 'prof'),
(16, '', '', '', 'coord');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `projetos`
--
ALTER TABLE `projetos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
