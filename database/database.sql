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

INSERT INTO `pokemon` VALUES (id,1,"/Bulbasaur.jpg","Bulbasaur","Grass","/Elementos/Type_Grass.jpg","Poison","/Elementos/Type_Poison.jpg","Bulbasaur es un Pokémon cuadrúpedo de color verde y manchas más oscuras de formas geométricas.");
INSERT INTO `pokemon` VALUES (id,2,"/Charizard.jpg","Charizard","Fire","/Elementos/Type_Fire.jpg","Flying","/Elementos/Type_flying.jpg","Los Charizards están muy ansiosos por luchar. Charizard busca enemigos más fuertes y solo lanza fuego durante las batallas con oponentes dignos.");
INSERT INTO `pokemon` VALUES (id,3,"/Butterfree.jpg","Butterfree","Bug","/Elementos/Type_Bug.jpg","Flying","/Elementos/Type_flying.jpg","Butterfree consume miel de las flores. Pueden rastrear cantidades de minutos de polen hasta los parches de flores, donde luego se dan un festín con miel y néctar.");
INSERT INTO `pokemon` VALUES (id,4,"/Pidgeot.jpg","Pidgeot","Normal","/Elementos/Type_Normal.jpg","Flying","/Elementos/Type_flying.jpg","No atacan a otros simplemente por ingresar a sus territorios; más bien, esperan y usan su aguda vista para observar desde lejos, viendo si sus intrusos tienen malas intenciones.");


INSERT INTO `admin` VALUES (id,"admin","admin123 ");
