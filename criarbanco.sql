DROP DATABASE IF EXISTS IFSP;
CREATE DATABASE IF NOT EXISTS IFSP;
USE IFSP;
CREATE TABLE Cidade
(
        id     INT AUTO_INCREMENT,
        nome   VARCHAR(50),
        estado VARCHAR(02),
        PRIMARY KEY (id)
);
CREATE TABLE Cliente
(
        id        INT AUTO_INCREMENT,
        nome      VARCHAR(50),
        email     VARCHAR(50),
        senha     VARCHAR(10),
        ativo     BOOL,
        id_cidade INT,
        PRIMARY KEY (id),
        CONSTRAINT FK_ClienteCidade FOREIGN KEY (id_cidade) REFERENCES Cidade(id)
);