CREATE DATABASE pokedex;
USE pokedex;

DROP TABLE IF EXISTS `pokemon`;
CREATE TABLE pokemon (
                         id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                         numero_identificador INT UNSIGNED,
                         imagen VARCHAR(255),
                         nombre VARCHAR(255),
                         tipo1 VARCHAR(20),
                         imagen_tipo1 VARCHAR(255),
                         tipo2 VARCHAR(20),
                         imagen_tipo2 VARCHAR(255),
                         descripcion TEXT
);

CREATE TABLE admin (
                         id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                         usuario VARCHAR(255),
                         password VARCHAR(20)
);

INSERT INTO `pokemon` VALUES (id,1,"/Bulbasaur.jpg","Bulbasaur","Planta","/Elementos/planta.jpg","Veneno","/Elementos/veneno.jpg","Bulbasaur es un Pokémon cuadrúpedo de color verde y manchas más oscuras de formas geométricas.");
INSERT INTO `pokemon` VALUES (id,2,"/Bulbasaur.jpg","acc","Planta","/Elementos/planta.jpg","Veneno","/Elementos/veneno.jpg","Bulbasaur es un Pokémon cuadrúpedo de color verde y manchas más oscuras de formas geométricas.");


INSERT INTO `admin` VALUES (id,"admin","admin123 ");
