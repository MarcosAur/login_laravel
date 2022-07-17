CREATE DATABASE sistema_login;

USE sistema_login;

CREATE TABLE usuario(
	id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(50) UNIQUE,
    senha VARCHAR(20)
);

INSERT INTO usuario (email, senha)
VALUES
('email','senha');

SELECT * FROM usuario;