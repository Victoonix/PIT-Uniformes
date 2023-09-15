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
cor varchar(80),
token int not null,
caminho_imagem varchar(255) not null,
preco decimal(13,2) not null,
estoque int not null,
foreign key (token) references escola(token)
) engine=innodb;

delete from uniformes where id_uniforme < 100;
select * from uniformes;