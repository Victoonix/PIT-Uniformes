create database uniformes;
use uniformes;

create table escola (
token int primary key not null,
nome varchar(80) not null,
email varchar(80) not null,
senha varchar(80) not null
) engine=innodb;

create table fornecedor (
id_fornecedor int not null primary key auto_increment,
email varchar(80) not null,
senha varchar(80) not null
) engine=innodb;

create table uniformes (
id_uniforme int not null primary key auto_increment,
tamanho varchar(3),
sexo varchar(20),
cor varchar(80)
/* token int not null,
foreign key (token) references escola(token) */
) engine=innodb;

select * from escola;
insert into escola (token, nome, email, senha) values (999999, 'teste', 'teste@a', 'a');