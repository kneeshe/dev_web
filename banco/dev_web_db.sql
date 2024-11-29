-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/11/2024 às 20:25
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

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
-- Estrutura para tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_filme` int(11) NOT NULL,
  `pontuacao` int(11) DEFAULT NULL CHECK (`pontuacao` between 1 and 5),
  `comentario` text DEFAULT NULL,
  `data_avaliacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `id_genero_filme` int(11) DEFAULT NULL,
  `diretor` varchar(100) DEFAULT NULL,
  `autores` text DEFAULT NULL,
  `data_lancamento` date DEFAULT NULL,
  `id_idade_indicada` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `filme`
--

INSERT INTO `filme` (`id`, `nome`, `id_genero_filme`, `diretor`, `autores`, `data_lancamento`, `id_idade_indicada`, `descricao`, `imagem`) VALUES
(5, 'Thor: Amor e Trovão', 8, 'Taika Waititi', 'Chris Hemsworth Christian Bale Tessa Thompson Jaimie Alexander Taika Waititi Russell Crowe Natalie Portman', '2022-07-07', 3, 'Thor: Amor e Trovão\" é uma abominação tão horrível que eu não consigo entender como essa merda foi parar no cinema. Eu ODEIO essa porra com todas as forças do meu ser. Esse filme é um atentado direto ao meu tempo, à minha paciência e à minha sanidade mental. Se existisse um prêmio pra pior filme de todos os tempos, esse lixo ganharia com louvor. O Gorr, que é um dos vilões mais fod da Marvel, foi transformado numa piada tão ridícula que dá até vergonha de lembrar. Se esse filme fosse uma pessoa, eu não só esculachava até não poder mais, como faria questão de publicar nas redes sociais só pra todo mundo saber o quão imunda é essa merda. Eu ODEIO, odeio, ODEIO esse filme. É uma tortura sentar pra assistir essa bosta, e se você ainda pensa em assistir, só lamento por você, porque isso é um golpe baixo até pra quem gosta de se martirizar.\r\n\r\n-- Felipe Domingos', '1732827033_thor.jpg'),
(6, 'Coringa: Delirio a Dois', 3, 'Todd Phillips', 'Joaquin Phoenix, Lady Gaga, Brendan Gleeson ', '2024-10-04', 6, '\"Coringa: Delírio a Dois\" é uma abominação que não deveria nem ter sido feita. Eu ODEIO essa merda com todas as minhas forças, e olha que eu já vi muito lixo, mas isso aqui é um novo nível de desastre. O roteiro é uma piada de tão mal feito: a trama é completamente sem sentido, previsível ao extremo, e as tentativas de humor são tão forçadas que me deram vergonha alheia. As piadas caem com um barulho tão grande de ruim que se ouvem até no espaço. As ‘reviravoltas’ são tão patéticas que a única coisa que você sente é raiva por estar perdendo tempo assistindo essa porcaria. As atuações? Caralho, parece que os atores foram escolhidos na base do \"vai lá e faz qualquer merda\". Ninguém parece se importar com o que está fazendo. É como ver gente lendo um papel sem nenhuma emoção. A direção então, meu amigo, parece que foi feita por um amador que nunca viu um filme na vida. O ritmo é completamente desregulado, os cortes são aleatórios, e a continuidade... qual continuidade? Parece que a cada cena, alguém esqueceu o que tinha acontecido antes. E o CGI? Jesus, é um dos piores que já vi! Parece que usaram o computador da escola pra fazer os efeitos, e olhe lá. A computação gráfica é tão feia que, se fosse um jogo de PS2, até o PS2 pediria desculpas. E as escolhas de música? Só posso concluir que alguém estava tentando me torturar com sons que não fazem o menor sentido no contexto da cena. Se esse filme fosse uma pessoa, eu daria uma surra e ainda obrigaria ele a assistir a sua própria criação, só pra sentir o quanto é inútil. Não assistam essa merda, nem que me paguem. Eu ODEIO, ODEIO cada segundo dessa desgraça!\r\n\r\n-- Felipe Domingos', '1732827191_coringa2.jpeg'),
(7, 'Super-Herói: O Filme', 2, 'Craig Mazin', 'Drake Bell Sara Paxton Christopher McDonald Leslie Nielsen Kevin Hart Brent Spiner Jeffrey Tambor Regina Hall', '2018-04-18', 5, '\"Super-Herói: O Filme\" é simplesmente uma obra-prima do cinema moderno! Esse filme redefine o que significa ser épico e eleva a categoria de filmes de super-herói a um nível que eu nem sabia que era possível. O CGI é sensacional, um espetáculo visual que faz os efeitos de filmes de mil milhões parecerem amadores. Cada cena de ação é mais impressionante que a anterior, com efeitos tão realistas que você vai sentir que pode quase tocar os personagens na tela. O roteiro? Meu Deus, o roteiro é uma verdadeira obra de arte literária! As reviravoltas são tão geniais que você nunca vai ver nada igual. A história é profunda, emocional, e com momentos de ação que deixam você na beira da cadeira, sem conseguir respirar. E os personagens? Não existem palavras suficientes para descrever o quão bem construídos e cativantes eles são. Cada um tem um arco que te faz sentir tudo o que eles estão passando, e as performances dos atores são simplesmente brilhantes. Eu nunca vi ninguém viver um papel de super-herói tão intensamente como nesse filme. As piadas? Impecáveis! Sabe aquele tipo de humor que te faz rir tanto que você se pergunta se está realmente assistindo a um filme? Pois é, aqui você vai rir até chorar. E o melhor de tudo é a direção, que é simplesmente visionária. Cada cena foi planejada e executada com perfeição, com um ritmo tão envolvente que você mal percebe o tempo passar. Não é só um filme, é uma experiência transformadora. Se você ainda não assistiu, está perdendo o melhor filme de todos os tempos. \"Super-Herói: O Filme\" é o que todo filme de super-herói deveria ser, e muito mais!\r\n\r\n-- Felipe Domingos', '1732827548_26e8051cdbf24331c62d27c9b58597bf.jpeg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `genero_filme`
--

CREATE TABLE `genero_filme` (
  `id` int(11) NOT NULL,
  `genero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `genero_filme`
--

INSERT INTO `genero_filme` (`id`, `genero`) VALUES
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
  `id` int(11) NOT NULL,
  `idade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `idade`
--

INSERT INTO `idade` (`id`, `idade`) VALUES
(1, 'Livre'),
(2, '10 Anos'),
(3, '12 Anos'),
(4, '14 Anos'),
(5, '16 Anos'),
(6, '18 Anos');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` enum('M','F','Outro') NOT NULL,
  `comentario` text DEFAULT NULL,
  `opcao` enum('Aprovar','Rejeitar','Em análise') DEFAULT 'Em análise'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_login`
--

CREATE TABLE `tb_login` (
  `id_usuario` int(2) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_login`
--

INSERT INTO `tb_login` (`id_usuario`, `usuario`, `senha`) VALUES
(0, 'admin', 'batataroxa123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `idade` int(11) NOT NULL,
  `sexo` enum('M','F','Outro') NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_filme` (`id_filme`);

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_genero_filme` (`id_genero_filme`),
  ADD KEY `id_idade_indicada` (`id_idade_indicada`);

--
-- Índices de tabela `genero_filme`
--
ALTER TABLE `genero_filme`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `idade`
--
ALTER TABLE `idade`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de tabela `filme`
--
ALTER TABLE `filme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `genero_filme`
--
ALTER TABLE `genero_filme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `idade`
--
ALTER TABLE `idade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD CONSTRAINT `avaliacoes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `avaliacoes_ibfk_2` FOREIGN KEY (`id_filme`) REFERENCES `filme` (`id`);

--
-- Restrições para tabelas `filme`
--
ALTER TABLE `filme`
  ADD CONSTRAINT `filme_ibfk_1` FOREIGN KEY (`id_genero_filme`) REFERENCES `genero_filme` (`id`),
  ADD CONSTRAINT `filme_ibfk_2` FOREIGN KEY (`id_idade_indicada`) REFERENCES `idade` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
