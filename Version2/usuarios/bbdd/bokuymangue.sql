

drop DATABASE bokuymangue;

CREATE DATABASE bokuymangue;
use bokuymangue;



CREATE Table rol(
    cod_rol int PRIMARY KEY,
    nombre VARCHAR(45) not NULL
);

insert into rol values(1,'Admin'),(2,'Vendedor'),(3,'Comprador'),(4,'Limpieza');

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

CREATE TABLE proveedores(
    od_proveedores INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(45) NOT NULL,
    direccion text NOT NULL,
    correo VARCHAR(45) NOT NULL,
    telefono VARCHAR(45) NOT NULL,
    fecha_inicio DATE,
    fecha_fin VARCHAR(45) NOT NULL
);
SELECT * FROM empleados;
