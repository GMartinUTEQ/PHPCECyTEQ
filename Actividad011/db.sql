create database pedidos;

create table menu
(
    idmenu int PRIMARY KEY auto_increment,
    nombre varchar(1024) not null default '',
    descripcion varchar(2048) not null default '',
    costo decimal(20,2) not null default 0,
    precio decimal(20,2) not null default 0,
    preciopromocion decimal(20,2) not null default 0,
    activo int not null default 0,
    idcategoria int not null default 0,
    idunidadmedida int not null default 0
);

create table categoria(
    idcategoria int PRIMARY KEY auto_increment,
    nombrecategoria varchar(1024) not null default(0)
);

insert into categoria(0, 'Entradas');
insert into categoria(0, 'Platos fuertes');
insert into categoria(0, 'Postres');
insert into categoria(0, 'Bebidas');

create table unidadmedida(
    idunidadmedida int PRIMARY KEY auto_increment,
    nombreunidadmedida varchar(1024) not null default(0)
);

insert into unidadmedida(0, 'Porción');
insert into unidadmedida(0, 'Chico (1 pers.)');
insert into unidadmedida(0, 'Mediano (2 pers.)');
insert into unidadmedida(0, 'Grande (3 pers.)');

