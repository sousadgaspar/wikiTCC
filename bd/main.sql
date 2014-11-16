create table tb_curso(
				codCurso int not null auto_increment primary key, 
				nome varchar(254) not null)ENGINE=MYISAM

create table tb_departamento(
				codDepartamento int not null auto_increment primary key, 
				nome varchar(254) not null)ENGINE=MYISAM


create table tb_tutor(
				codTutor int not null auto_increment primary key, 
				nome varchar(254) not null,
				nAcademico  varchar(254) not null
				)ENGINE=MYISAM

 create table tb_usuario(
 				codUsuario int not null auto_increment primary key, 
 				numerio int,
 				dataNascimento date,
 				sexo char(1),
 				codCategoria int not null,
 				codCurso int,
 				codDepartamento int,
 				periodo varchar(254),
     
     foreign key(codCurso) references tb_curso,
     foreign key(codDepartamento) references tb_departamento

 	)ENGINE=MYISAM


 create table tb_monografia(
 				codMonografia int not null auto_increment primary key, 
 				titulo int,
 				codTutor int,
 				codAluno int,
 				codOperador int,
     
     foreign key(codTutor) references tb_tutor,
     foreign key(codAluno) references tb_usuario,
     foreign key(codOperador) references tb_usuario

 	)ENGINE=MYISAM