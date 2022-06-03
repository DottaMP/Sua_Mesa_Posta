create database bdsite;

use bdsite;

create table cliente(
	codigo bigint primary key auto_increment,
	nome varchar(20),
	sobrenome varchar(100),
	email varchar(100),
	senha varchar(100),
    cpfc varchar(100),
    telefone varchar(100)
);

select * from cliente;

create table produto(
	codigo bigint primary key auto_increment,
	titulo varchar(100),
	descritivo varchar(1000),
    especificacao varchar(500),
	valor decimal (18,2),
	qtd bigint
);

select * from produto;

select * from produto limit 4;

create table cesta(
	codigo bigint primary key auto_increment,
	codigoProduto bigint,
    qtd bigint,
    sessionId varchar(200)
);

select * from cesta;

