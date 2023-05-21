CREATE DATABASE juego;
USE juego;

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE usuario (
                         id INT AUTO_INCREMENT PRIMARY KEY,
                         nombre VARCHAR(255) NOT NULL,
                         fecha_nacimiento DATE NOT NULL,
                         sexo VARCHAR(20) NOT NULL,
                         pais VARCHAR(100) NOT NULL,
                         ciudad VARCHAR(100) NOT NULL,
                         email VARCHAR(255) NOT NULL,
                         password VARCHAR(255) NOT NULL,
                         username VARCHAR(255) NOT NULL,
                        img_profile VARCHAR(255)
);

CREATE TABLE admin (
                         id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                         usuario VARCHAR(255),
                         password VARCHAR(20)
);

INSERT INTO `admin` VALUES (id,"admin","admin123 ");
