CREATE DATABASE telemind; 

USE telemind;

CREATE TABLE tbCadastro(
    idUsuario INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    nome VARCHAR(250) NOT NULL,
    email VARCHAR(250) NOT NULL,
    senha VARCHAR(250) NOT NULL,
    confirmacaoDeSenha VARCHAR(250) NOT NULL
);

CREATE TABLE tbPacientes(
    idUsuario INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nome VARCHAR(250) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    dataDeNasc DATE INTEGER NOT NULL,
    endereco VARCHAR(250) NOT NULL
    telefone INT NOT NULL,
    email VARCHAR(250) NOT NULL,
    cid INT NOT NULL,
    descricao VARCHAR(350) NOT NULL
);

