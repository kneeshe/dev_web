-- Criação do Banco de Dados
CREATE DATABASE FilmeDB;
USE FilmeDB;

-- Tabela de Usuários
CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    idade INT NOT NULL,
    sexo ENUM('M', 'F', 'Outro') NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(100) NOT NULL
);

-- Tabela de Gêneros de Filme
CREATE TABLE genero_filme (
    id INT PRIMARY KEY AUTO_INCREMENT,
    genero VARCHAR(50) NOT NULL
);

-- Tabela de Notícias
CREATE TABLE noticias (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    sexo ENUM('M', 'F', 'Outro') NOT NULL,
    comentario TEXT,
    opcao ENUM('Aprovar', 'Rejeitar', 'Em análise') DEFAULT 'Em análise'
);

-- Tabela de Idades Indicativas
CREATE TABLE idade (
    id INT PRIMARY KEY AUTO_INCREMENT,
    idade VARCHAR(20) NOT NULL
);

-- Tabela de Filmes
CREATE TABLE filme (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    id_genero_filme INT,
    diretor VARCHAR(100),
    autores TEXT,
    data_lancamento DATE,
    id_idade_indicada INT,
    descricao TEXT,
    FOREIGN KEY (id_genero_filme) REFERENCES genero_filme(id),
    FOREIGN KEY (id_idade_indicada) REFERENCES idade(id)
);

-- Tabela de Avaliações
CREATE TABLE avaliacoes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT NOT NULL,
    id_filme INT NOT NULL,
    pontuacao INT CHECK (pontuacao BETWEEN 1 AND 5),
    comentario TEXT,
    data_avaliacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id),
    FOREIGN KEY (id_filme) REFERENCES filme(id)
);

ALTER TABLE filme
ADD imagem VARCHAR(255);