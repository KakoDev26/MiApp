
CREATE DATABASE IF NOT EXISTS taller2;
USE taller2;
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    clave VARCHAR(100) NOT NULL
);

INSERT INTO usuarios (usuario, clave)
VALUES ('admin', '1234');
CREATE TABLE alumnos (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Cedula VARCHAR(10) NOT NULL UNIQUE,
    Nombres VARCHAR(100) NOT NULL,
    Apellidos VARCHAR(100) NOT NULL,
    Correo VARCHAR(100) NOT NULL UNIQUE,
    Telefono VARCHAR(15) NOT NULL,
    FechaNacimiento DATE NOT NULL
);




drop database taller2;

select*from alumnos;