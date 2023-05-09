create database sistema;

use sistema;

create table tb_cliente (
cd_cliente int auto_increment primary key,
nm_cliente varchar(50),
nm_endereço varchar(50),
nr_endereço int,
nm_bairro varchar(30),
nm_cidade varchar(50),
sg_estado char(2),
cd_cep char (8),
telefone varchar (11),
cpf char (11),
rg char (9),
email varchar(50)
);

