<?php
include_once('helpers/MySqlDatabase.php');
include_once('model/PokemonsModel.php');

include_once('controller/PokemonsController.php');
class Configuration {
    private $configFile = 'config/config.ini';

    public function __construct() {
    }

    private function getArrayConfig() {
        return parse_ini_file($this->configFile); //Utiliza la función parse_ini_file() para leer el archivo de
        // configuración y devolver un array con las claves y valores del archivo.
    }

    public function getDatabase() {
        $config = $this->getArrayConfig();
        return new MySqlDatabase(
            $config['servername'],
            $config['username'],
            $config['password'],
            $config['database']);

    }

    public function getPokemonsController() {
        $database = $this->getDatabase();
        $pokemonsModel = new PokemonsModel($database);
        return new PokemonsController($pokemonsModel);
    }

    //la clase Configuration es una clase de utilidad que se utiliza para crear instancias de las
    // clases necesarias para configurar la aplicación. En particular, utiliza
    // una instancia de MySqlDatabase para crear instancias de los controladores y
    // modelos necesarios para manejar los datos de la aplicación.
}