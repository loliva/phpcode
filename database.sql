CREATE DATABASE personas_mascotas;

USE personas_mascotas;

CREATE TABLE personas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    mascota_preferida ENUM('Perro', 'Gato') NOT NULL
);
