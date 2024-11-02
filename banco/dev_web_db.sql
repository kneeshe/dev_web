-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 02/11/2024 às 18:52
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dev_web_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(3) NOT NULL,
  `nome` text NOT NULL,
  `email` text NOT NULL,
  `comentario` text NOT NULL,
  `genero` text NOT NULL,
  `oferta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `email`, `comentario`, `genero`, `oferta`) VALUES
(1, 'Cris Sousa', 'cris@sousa.com', 'teste', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `filme`
--

CREATE TABLE `filme` (
  `id_filme` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `diretor` varchar(100) NOT NULL,
  `autores` text NOT NULL,
  `data_lancamento` date NOT NULL,
  `id_idade` int(11) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `filme`
--

INSERT INTO `filme` (`id_filme`, `nome`, `id_genero`, `diretor`, `autores`, `data_lancamento`, `id_idade`, `descricao`) VALUES
(1, 'velozes e furiosos', 1, 'sei la', 'alguns', '2024-11-06', 4, 'filme de carros'),
(2, 'constantine', 4, 'nao sei', 'keanu reeves', '2024-11-27', 5, 'filmaço'),
(3, 'Robin Hood', 2, 'um cara ai', 'muitos', '2024-11-15', 2, 'filme bão'),
(4, 'Algum Filme', 3, 'cristian', 'cris e cris', '2024-11-22', 2, 'dededede');

-- --------------------------------------------------------

--
-- Estrutura para tabela `genero_filme`
--

CREATE TABLE `genero_filme` (
  `id_genero` int(11) NOT NULL,
  `genero` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `genero_filme`
--

INSERT INTO `genero_filme` (`id_genero`, `genero`) VALUES
(1, 'Ação'),
(2, 'Comédia'),
(3, 'Drama'),
(4, 'Terror'),
(5, 'Ficção Científica'),
(6, 'Romance'),
(7, 'Animação'),
(8, 'Aventura'),
(9, 'Documentário');

-- --------------------------------------------------------

--
-- Estrutura para tabela `idade`
--

CREATE TABLE `idade` (
  `id_idade` int(11) NOT NULL,
  `idade` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `idade`
--

INSERT INTO `idade` (`id_idade`, `idade`) VALUES
(1, 'Livre'),
(2, '10 Anos'),
(3, '12 Anos'),
(4, '14 Anos'),
(5, '16 Anos'),
(6, '18 Anos');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`id_filme`),
  ADD KEY `id_genero` (`id_genero`),
  ADD KEY `id_idade` (`id_idade`);

--
-- Índices de tabela `genero_filme`
--
ALTER TABLE `genero_filme`
  ADD PRIMARY KEY (`id_genero`);

--
-- Índices de tabela `idade`
--
ALTER TABLE `idade`
  ADD PRIMARY KEY (`id_idade`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `filme`
--
ALTER TABLE `filme`
  MODIFY `id_filme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `genero_filme`
--
ALTER TABLE `genero_filme`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `idade`
--
ALTER TABLE `idade`
  MODIFY `id_idade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `filme`
--
ALTER TABLE `filme`
  ADD CONSTRAINT `filme_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `genero_filme` (`id_genero`),
  ADD CONSTRAINT `filme_ibfk_2` FOREIGN KEY (`id_idade`) REFERENCES `idade` (`id_idade`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
