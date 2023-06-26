create database uniformes;
use uniformes;

create table escola (
id_escola int primary key not null auto_increment,
nome varchar(80) not null,
email varchar(80) not null,
senha varchar(80) not null,
token int not null
) engine=innodb;

create table fornecedor (
id_fornecedor int not null primary key auto_increment,
email varchar(80) not null,
senha varchar(80) not null
) engine=innodb;

select * from escola;