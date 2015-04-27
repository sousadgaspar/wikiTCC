create database dbWikiTcc;
use dbWikiTcc;

create table tb_tutor(codTutor int not null primary key auto_increment, nome varchar(254) not null, nivelAcademico varchar(254) not null) engine = 'INNODB';

create table tb_curso(codCurso int not null primary key auto_increment, curso varchar(540) not null) engine = 'INNODB';

create table tb_curso(codCurso int not null primary key auto_increment, curso varchar(540) not null) engine = 'INNODB';

create table tb_periodo(codPeriodo int not null primary key auto_increment, periodo varchar(254) not null) engine = 'INNODB';

create table tb_aluno(codAluno int not null primary key auto_increment, nome varchar(540) not null, numeroDEMatricula int not null unique, dataDeNascimento datetime, sexo varchar(10), codCurso int not null, codPeriodo int not null) engine = 'INNODB';
alter table tb_aluno add constraint fkcursoaluno foreign key(codCurso) references tb_curso(codCurso);
alter table tb_aluno add constraint fkperiodoaluno foreign key(codPeriodo) references tb_periodo(codPeriodo);

create table tb_departamento(codDepartamento int not null primary key auto_increment, departamento varchar(254) not null) engine = 'INNODB';

create table tb_funcionario(codFuncionario int not null primary key auto_increment,nome varchar(254) not null, numeroMecanografico int not null,  codDepartamento int not null) engine = 'INNODB';

create table tb_monografia(codMonografia int not null primary key auto_increment, tema varchar(500) not null, anoAcademico int not null,  numeroDoAluno int not null, codTutor int not null, codFuncionario int not null, dataDeCriacao timestamp default current_timestamp) engine = 'INNODB';


