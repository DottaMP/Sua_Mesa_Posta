create database cliente;

use cliente;

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

delete from cliente where codigo="16";