

drop DATABASE bokuymangue;

CREATE DATABASE bokuymangue;
use bokuymangue;



-- ROL
CREATE Table rol(
    cod_rol int PRIMARY KEY,
    nombre VARCHAR(45) not NULL
);

insert into rol values(1,'Admin'),(2,'Vendedor'),(3,'Comprador'),(4,'Limpieza');

-- EMPLEADOS
CREATE TABLE empleados(
    cod_empleado INT PRIMARY KEY AUTO_INCREMENT,
    foto VARCHAR(45) NOT NULL,
    nombre VARCHAR(45) NOT NULL,
    apellidos VARCHAR(45) NOT NULL,
    correo VARCHAR(45) NOT NULL,
    fecha_contratacion DATE,
    estado VARCHAR(45) NOT NULL,
    salario FLOAT NOT NULL,
    cod_rol int, FOREIGN KEY(cod_rol) REFERENCES rol(cod_rol)
);
-- PROVEEDORES

CREATE TABLE proveedores(
    od_proveedores INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(45) NOT NULL,
    direccion text NOT NULL,
    correo VARCHAR(45) NOT NULL,
    telefono VARCHAR(45) NOT NULL,
    fecha_inicio DATE,
    fecha_fin VARCHAR(45) NOT NULL
);

-- CATEGODIA DE LOS PRODUCTOS
CREATE Table categoria(
    cod_categoria int PRIMARY KEY,
    nombre VARCHAR(45) not NULL
);
insert into categoria values(1,'Citrico'),(2,'De hueso o drupa'),(3,'Pomaceas'),(4,'Tropicales');

drop table productos;
-- PRODUCTOS
CREATE TABLE productos(
    cod_producto INT PRIMARY KEY AUTO_INCREMENT,
    foto VARCHAR(45) NOT NULL,
    nombre VARCHAR(45) NOT NULL,
    precio float NOT NULL,
    estado VARCHAR(45) NOT NULL,
    cod_categoria int NOT NULL, FOREIGN KEY(cod_categoria) REFERENCES categoria(cod_categoria)
   
);


-- STOCK
CREATE TABLE stock(
    cod_stock INT PRIMARY KEY AUTO_INCREMENT,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    stock int NOT NULL,
    stock_minimo int NOT NULL,
    cod_producto int NOT NULL, FOREIGN KEY(cod_producto) REFERENCES productos(cod_producto)
);

drop TABLE noticias;

-- NOTICIAS
CREATE TABLE noticias(
    cod_noticia INT PRIMARY KEY AUTO_INCREMENT,
    foto VARCHAR(45) NOT NULL,
    titulo VARCHAR(45) NOT NULL,
    descripcion text NOT NULL,
    fecha_evento DATE
);


SELECT * FROM stock;
