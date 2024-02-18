create database tiendita;
use tiendita;
create table personal(
id int auto_increment primary key,
nombre varchar (50),
usuario varchar(50),
password varchar(50)
);
-- insertando datos
insert into personal(nombre, usuario, password) values('Administrador', 'admin', '1234');

create table productos(
id int auto_increment primary key,
nombre varchar(100),
precio varchar(5)
);
-- insertando datos
insert into productos(nombre, precio) values('Inca Kola 1.5 L', '6.00');

-----------------------------------------------------------------------
create table clientes(
id int auto_increment primary key,
nombre varchar(100)
);
-----------------------------------------------------------------------
create table ventas(
id int auto_increment primary key,
cliente varchar(100),
producto varchar(100),
cantidad int,
estado char (1),
fecha date
)
