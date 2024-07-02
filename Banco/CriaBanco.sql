drop database if exists IFSp;
create database if not exists IFSP;
use IFSP;
create table Cidade
(
   id      INT auto_increment,
   nome    varchar(100),
   estado  varchar(002),
   primary key (id)
);

create table CLiente
(
    id        int auto_increment,
    nome      varchar(100),
    email     varchar(100),
    senha     varchar(100),
    ativo     bool,
    id_cidade int,
    primary key(id)
    constraint fk_ClienteCidade
        foreign key (id_cidade) references cidade(id)
)
insert into Cidade(nome, estado) values
    ('Birigui', 'SP'),
    ('Xique-Xique', 'BA'),
    ('Ouro Preto', 'MG'),
    ('Santo Angelo', 'RS'),
    ('Volta Redonda', 'RJ');
select * from Cidade where estado = 'SP';
insert into Cliente (nome, id_cidade) values
    ('Mariana Moraes', 1),
    ('Ana Clara Teodoro', 2),
    ('Anthony Feitosa', 3),
    ('Murilo Vargas', 4),
    ('Cássio Estércio', 4);
select * from Cidade where id = 1;
update Cidade set nome = 'Birigui' where id = 1;
update Cidade set nome = 'Cássio' where id = 5;
delete from Cidade where id = 5;           
delete from Cliente where id = 1;