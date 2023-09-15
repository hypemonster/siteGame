CREATE DATABASE game_db;
USE game_db;

CREATE TABLE usuario(
	id_user INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    email VARCHAR(255),
    senha VARCHAR(255)
);

CREATE TABLE admin_game(
	login VARCHAR(255),
    senha VARCHAR(255)
);

CREATE TABLE personagem(
	id_character INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_personagem VARCHAR(255),
    historia VARCHAR(455),
    img LONGBLOB
);

SELECT * FROM usuario;
SELECT * FROM admin_game;
SELECT * FROM personagem;