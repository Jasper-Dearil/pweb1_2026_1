CREATE DATABASE IF NOT EXISTS biblioteca;
USE biblioteca;

-- Tabela de usuários (padrão do sistema)
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    login VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    telefone VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de gêneros
CREATE TABLE generos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(80) NOT NULL UNIQUE,
    descricao TEXT,
    origem VARCHAR(100)
);

-- Tabela de livros
CREATE TABLE livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    autor VARCHAR(100) NOT NULL,
    genero_id INT NOT NULL,
    data_publicacao DATE,
    usado BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (genero_id) REFERENCES generos(id) ON DELETE RESTRICT
);

-- Inserção de gêneros iniciais
INSERT INTO generos (nome, descricao, origem) VALUES
('Romance', 'Histórias focadas em relacionamentos e emoções', 'Europa'),
('Terror', 'Narrativas que causam medo e suspense', 'Inglaterra'),
('Comédia', 'Textos humorísticos e leves', 'EUA'),
('Poesia', 'Obras poéticas e líricas', 'Vários');

-- Inserção dos livros que você pediu
INSERT INTO livros (nome, autor, genero_id, data_publicacao, usado) VALUES
('O Pintassilgo', 'Donna Tartt', (SELECT id FROM generos WHERE nome='Romance'), '2013-10-22', 0),
('O Retrato de Dorian Gray', 'Oscar Wilde', (SELECT id FROM generos WHERE nome='Romance'), '1890-07-01', 1),
('O Hóspede de Drácula', 'Bram Stoker', (SELECT id FROM generos WHERE nome='Terror'), '1914-01-01', 0),
('Quem é Você, Alasca?', 'John Green', (SELECT id FROM generos WHERE nome='Romance'), '2005-03-03', 1),
('Diário de um Banana', 'Jeff Kinney', (SELECT id FROM generos WHERE nome='Comédia'), '2007-04-01', 1),
('Diário de um Banana 2', 'Jeff Kinney', (SELECT id FROM generos WHERE nome='Comédia'), '2008-02-01', 0),
('O Corvo', 'Edgar Allan Poe', (SELECT id FROM generos WHERE nome='Poesia'), '1845-01-29', 0),
('Os Garotos do Cemitério', 'André Vianco', (SELECT id FROM generos WHERE nome='Terror'), '2006-08-15', 1);

-- Usuário padrão para teste
INSERT INTO usuarios (nome, email, login, senha, telefone) VALUES
('Administrador', 'admin@biblioteca.com', 'admin', MD5('123'), '999999999');