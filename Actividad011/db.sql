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
    idunidadmedida int not null default 0,
    
);

insert into menu values(0, 'Ensada', 'Fresca ensalada con mix de verduras y aceite balsámico', 45, 75, 65, 1, 1, 1);
insert into menu values(0, 'Arrache', '300 Grs. de arrachera a la parrilla bañada en mantequilla clarificada', 100, 150, 0, 1, 2, 2);
insert into menu values(0, 'Crepas con helado', 'Crepa artesanal glaseada con dulce de leche y baileys con 1 bola de helado', 70, 140, 125, 1, 3, 2);
insert into menu values(0, 'Coca light', 'Coca light con más hielos que coca', 12, 30, 25, 1, 4, 2);

alter table menu add column urlfoto varchar(5000) not null default '';

update menu set urlfoto = 'https://xn--ensaladasnavideas-txb.com/wp-content/uploads/2018/04/28.-Ensalada-gourmet-300x225.jpg' where idmenu = 1;
update menu set urlfoto = 'https://www.superama.com.mx/views/micrositio/recetas/images/parrillas/arracheraasada/Web_fotoreceta.jpg' where idmenu = 2;
update menu set urlfoto = 'https://www.mdzol.com/u/fotografias/m/2021/6/4/f608x342-1065649_1095372_15.jpg' where idmenu = 3;
update menu set urlfoto = 'https://www.coca-colamexico.com.mx/content/dam/journey/mx/es/private/sala-prensa/nocitas/enciende_tu_vida_con_cocacola_lighton.rendition.598.336.jpg' where idmenu = 4;

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

