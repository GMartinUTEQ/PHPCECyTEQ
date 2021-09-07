create database pedidos;

create table menu
(
    idmenu PRIMARY KEY auto_increment,
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
    idcategoria PRIMARY KEY auto_increment,
    nombrecategoria varchar(1024) not null default(0)
);

create table unidadmedida(
    idunidadmedida PRIMARY KEY auto_increment,
    nombreunidadmedida varchar(1024) not null default(0)
);
