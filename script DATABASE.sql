create database trabalhoPwII;

use trabalhoPwII;

create table Usuario (
idUsuario int primary key auto_increment,
nome varchar(100) not null,
email varchar(100) not null unique,
userName varchar(100) not null unique,
senha varchar(50) not null,
tipo varchar(20) not null,
dtNascimento date not null,
ativo bool not null default true,
CPF varchar(14) not null unique
);