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

insert into menu values(0, 'Ensada', 'Fresca ensalada con mix de verduras y aceite balsámico', 45, 75, 65, 1, 1, 1);
insert into menu values(0, 'Arrache', '300 Grs. de arrachera a la parrilla bañada en mantequilla clarificada', 100, 150, 0, 1, 2, 2);
insert into menu values(0, 'Crepas con helado', 'Crepa artesanal glaseada con dulce de leche y baileys con 1 bola de helado', 70, 140, 125, 1, 3, 2);
insert into menu values(0, 'Coca light', 'Coca light con más hielos que coca', 12, 30, 25, 1, 4, 2);

create table categoria(
    idcategoria int PRIMARY KEY auto_increment,
    nombrecategoria varchar(1024) not null default(0)
);

insert into categoria values(0, 'Entradas');
insert into categoria values(0, 'Platos fuertes');
insert into categoria values(0, 'Postres');
insert into categoria values(0, 'Bebidas');

create table unidadmedida(
    idunidadmedida int PRIMARY KEY auto_increment,
    nombreunidadmedida varchar(1024) not null default(0)
);

insert into unidadmedida values(0, 'Porción');
insert into unidadmedida values(0, 'Chico (1 pers.)');
insert into unidadmedida values(0, 'Mediano (2 pers.)');
insert into unidadmedida values(0, 'Grande (3 pers.)');

