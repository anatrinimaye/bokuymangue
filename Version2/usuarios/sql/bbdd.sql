
drop DATABASE bokuymangue;
CREATE DATABASE bokuymangue;
USE bokuymangue;
-- ROL
CREATE TABLE rol(
    cod_rol INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(45) NOT NULL
);
insert into rol values (null,'Admin'),(null,'vendedor'),(null,'comprador');
select *from empleados;

-- EMPLEADO
CREATE TABLE empleados(
    codigo_empleado INT PRIMARY KEY AUTO_INCREMENT,
    foto VARCHAR(25) NOT NULL,
    nombre VARCHAR(45) NOT NULL,
    apellidos VARCHAR(45) NOT NULL,
    telefono VARCHAR(45) NOT NULL,
    cod_rol INT, FOREIGN KEY (cod_rol) REFERENCES rol(cod_rol),
    fecha_contratacion DATE NOT NULL  
);
insert into empleados values (null,'foto','Trini','Maye Bokuy Mangue','+240222319976','3','2023-5-8');
 
select * from empleados;

















-- CATEGORIA
CREATE TABLE categoria(
    codigo_categoria INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(45) NOT NULL,
    descripcion TEXT NOT NULL
);
insert into categoria values ('','Citrico','Frutas Agrias o agridulces'),
('','De hueso o Drupa','Son frutas que tienen una semilla grande(hueso) en su interior'),
('','Tropicale','Son frutas que crecen en lugares tropicales y subtropicales genrealmente con un sabor dulce'),
('','Pomacea','Son frutas que tienen una semilla pequeña(pepitas) en su interior');


-- PRODUCTOS
CREATE TABLE productos(
    codigo_producto INT PRIMARY KEY AUTO_INCREMENT,
    foto VARCHAR(25) NOT NULL,
    nombre VARCHAR(45) NOT NULL,
    descripcion TEXT NOT NULL,
    precio_unitario FLOAT NOT NULL,
    cod_categoria INT, 
    FOREIGN KEY (cod_categoria) REFERENCES categoria (codigo_categoria)
);
insert into productos values ('','foto','Limon','Una fruta citrica',2500,1),
('','foto','Melocoton','Una fruta De Drupa',2500,2),
('','foto','Manzana','Una Bella fruta tropical',2500,3),
('','foto','fresa','Una Bella fruta Pomacea',2500,4);


CREATE TABLE clientes(
    codigo_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(45) NOT NULL,
    correo  VARCHAR(50) NOT NULL,
    telefono VARCHAR(45) NOT NULL
    
);
insert into clientes values('','Manuel','manu@gmail.com','+240222345677'),
('','Manuelita','manuelia@gmail.com','+240222344677');

CREATE TABLE proveedores(
    codigo_proveedor INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(45) NOT NULL,
    direccion VARCHAR(25) NOT NULL,
    telefono  VARCHAR(40) NOT NULL,
    fecha_contrato DATE NOT NULL
);

CREATE TABLE pedido(
    codigo_pedido INT PRIMARY KEY AUTO_INCREMENT,
    fecha_pedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_entrega DATE NOT NULL,
    estado ENUM('Pendiente','Denegado','Entregado') DEFAULT 'Pendiente',
    cantidad_productos INT NOT NULL,
    precio_total FLOAT NOT NULL,
    cod_cliente INT, 
    FOREIGN KEY (cod_cliente) REFERENCES clientes (codigo_cliente),
    cod_producto INT, 
    FOREIGN KEY (cod_producto) REFERENCES productos (codigo_producto),
	cod_empleado INT, 
	FOREIGN KEY(cod_empleado) REFERENCES empleados(codigo_empleado)
);

CREATE TABLE detalle_pedido(
    codigo_detalle_pedido INT PRIMARY KEY AUTO_INCREMENT,
    precio_unitario FLOAT NOT NULL,
    cantidad int not null,
    cod_pedido INT, FOREIGN KEY (cod_pedido ) REFERENCES pedido(codigo_pedido),
    cod_producto INT, FOREIGN KEY (cod_producto) REFERENCES productos(codigo_producto) 
);
CREATE TABLE comentario(
    codigo_comentario INT PRIMARY KEY AUTO_INCREMENT,
    descripcion TEXT NOT NULL,
    fecha_comentario TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    estado ENUM('Leido','En espera de Lectura') DEFAULT 'En espera de Lectura'
);
CREATE TABLE stock(
    cantidad INT NOT NULL,
    stock_minimo INT DEFAULT 50 NOT NULL,
    fecha_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    cod_producto INT, FOREIGN KEY (cod_producto) REFERENCES productos (codigo_producto)
);
CREATE TABLE compras(
    codigo_compra INT PRIMARY KEY AUTO_INCREMENT,
    fecha_compra TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    cantidad_productos INT NOT NULL,
    precio_total FLOAT NOT NULL,
    cod_proveedor INT, FOREIGN KEY(cod_proveedor) REFERENCES proveedores(codigo_proveedor),
    cod_empleado INT, FOREIGN KEY(cod_empleado) REFERENCES empleados(codigo_empleado)
);
CREATE TABLE detalle_compra(
    codigo_detalle_compra INT PRIMARY KEY AUTO_INCREMENT,
    precio_unitario FLOAT NOT NULL,
    cod_compra INT, FOREIGN KEY (cod_compra) REFERENCES compras(codigo_compra),
    cod_producto INT, FOREIGN KEY (cod_producto) REFERENCES productos(codigo_producto) 
);
CREATE TABLE ventas(
    codigo_venta INT PRIMARY KEY AUTO_INCREMENT,
    fecha_venta TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    cantidad_productos INT NOT NULL,
    precio_total FLOAT NOT NULL,
    cod_cliente INT, FOREIGN KEY(cod_cliente) REFERENCES clientes(codigo_cliente),   
    cod_empleado INT, FOREIGN KEY(cod_empleado) REFERENCES empleados(codigo_empleado)
);
CREATE TABLE detalle_venta(
    codigo_detalle_venta INT PRIMARY KEY AUTO_INCREMENT,
    precio_unitario FLOAT NOT NULL,
    cod_venta INT, FOREIGN KEY (cod_venta) REFERENCES ventas(codigo_venta),
    cod_producto INT, FOREIGN KEY (cod_producto) REFERENCES productos(codigo_producto)
);