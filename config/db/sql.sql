CREATE DATABASE desafio;

USE desafio;

CREATE TABLE users (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100),
email VARCHAR(50),
senha VARCHAR(50));