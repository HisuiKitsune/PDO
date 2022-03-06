CREATE DATABASE Aluno_PDO;

USE Aluno_PDO;

create table aluno (
    id int primary key auto_increment,
    nome varchar(150) not null,
    email varchar(150) not null unique,
    cpf char(11) not null unique
);

desc aluno;

insert into aluno (nome, email, cpf) 
values 
('Breno', 'bbm@senac.com.br', '47987864706'),
('William', 'will@senac.com.br', '79043906719'),
('Cristian', 'cris@senac.com.br', '84172017770'),
('Caio', 'caiog@senac.com.br', '31294409760');

select * from aluno;

create view consulta_aluno as
select
    cpf as CPF,
    nome as Nome,
    email as Email
from aluno;

SELECT * FROM consulta_aluno;