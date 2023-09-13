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
foreign key (token) references escola(token)
) engine=innodb;

select * from escola;

INSERT INTO uniformes (tamanho, sexo, cor, token, caminho_imagem) 
VALUES ('P', 'Masculino', 'Azul', 12345, 'uploads/minha_foto.jpg');

