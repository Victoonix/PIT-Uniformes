create database uniformes;
use uniformes;

create table escola (
id_escola int primary key not null auto_increment,
nome varchar(80) not null,
email varchar(80) not null,
senha varchar(80) not null
);

create table aluno (
matricula int primary key not null,
senha varchar(80) not null,
id_escola int not null,
foreign key (id_escola) references escola(id_escola)
);

create table fornecedor (
id_fornecedor int not null primary key auto_increment,
nome varchar(80) not null,
email varchar(80) not null,
senha varchar(80) not null,
id_escola int not null,
foreign key (id_escola) references escola(id_escola)
);
select * from aluno;
select * from escola;