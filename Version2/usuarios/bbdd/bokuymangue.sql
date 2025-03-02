

drop DATABASE bokuymangue;

CREATE DATABASE bokuymangue;
use bokuymangue;


CREATE Table rol(
    cod_rol int PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(45) not NULL

);

insert into rol values(null,'Admin'),(null,'Vendedor'),(null,'Comprador');

CREATE TABLE empleados(
    cod_empleado INT PRIMARY KEY AUTO_INCREMENT,
    foto VARCHAR(45) NOT NULL,
    nombre VARCHAR(45) NOT NULL,
    apellidos VARCHAR(45) NOT NULL,
    correo VARCHAR(45) NOT NULL,
    tipo VARCHAR(45) NOT NULL,
    fecha_contratacion DATE,
    estado VARCHAR(45) NOT NULL,
    salario INT NOT NULL,
    cod_rol int, FOREIGN KEY(cod_rol) REFERENCES rol(cod_rol)
    
);
SELECT * FROM empleados;