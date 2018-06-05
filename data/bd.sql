create database cadastro
default character set utf8
default collate utf8_general_ci;
use cadastro;
create table clientes (
	id int not null auto_increment,
	email varchar (50) not null,
    nome varchar (30) not null,
    endereco varchar (100) not null,
    numero int (10) not null,
    complemento varchar (20),
    telefone varchar (20) not null,
    celular varchar (20) not null,
    senha varchar (10) not null,
    
    primary key (id)
)default charset = utf8;


select * from cadastro;
