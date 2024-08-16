create database livrariati18n;

use livrariati18n;

create table cadastrar(
codigo int not null primary key auto_increment,
nome varchar(120) not null,
usuario varchar(100) not null,
senha varchar (45) not null, 
telefone varchar(13) not null,
cpf varchar (11) not null 
)Engine = InnoDB;

select * from cadastrar;

create table compraLivro(
	numeroCartao varchar(20) not null,
    nomeCartao varchar(100) not null,
    validade varchar(7) not null,
    codigo varchar(4) not null,
    endereco varchar(255) not null,
    cep varchar(10) not null
    
)Engine = InnoDB;

drop table compraLivro;