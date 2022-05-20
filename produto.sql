create database produto;

use produto;

create table produto(
	codigo bigint primary key auto_increment,
	titulo varchar(100),
	descritivo varchar(500),
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
