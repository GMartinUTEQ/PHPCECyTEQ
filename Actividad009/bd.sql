/*** DDL  = Data definition Languaje ***/
create database cecyteq2021;

use cecyteq2021;

create table alumno(
idalumno int primary key auto_increment,
nombrealumno varchar(1024) not null default '',
fechadenacimiento datetime not null default '1900-01-01',
promedio decimal(20,2) not null default 0,
idplantel int not null default 0
);

insert into alumno values(0, 'MAURICIO ALVAREZ', '2000-01-01', 9.5, 1);

create table plantel(
    idplantel int PRIMARY key auto_increment,
    nombreplantel varchar(1024) not null default '',
    telefonoplantel varchar(32) not null default '',
    direccionplantel varchar(1024) not null default '' 
);

/* DML = Data maninpulation languaje */

insert into plantel (idplantel, nombreplantel, telefonoplantel, direccionplantel) values(0, 'PINAL DE AMOLES', '4423254444', 'CAMINO A EPAZOTITOS S.N.');

select * from plantel;
