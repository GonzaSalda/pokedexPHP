<?php
include_once('helpers/MySqlDatabase.php');
include_once('helpers/View.php');
include_once ('helpers/Router.php');

include_once('model/UserModel.php');

include_once('controller/UserController.php');
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
    public function getRenderer() { // Retorna una instancia de View
        return new View();
    }
    public function getUserController() {
        $database = $this->getDatabase();
        $userModel = new UserModel($database);
        $renderer = $this->getRenderer();
        return new UserController($userModel, $renderer); //los controladores podrán llamar al método render()
                                                                  // de la instancia de View para
                                                                  //  renderizar una vista con los datos necesarios.
    }

    public function getRouter() {
        return new Router($this, 'getUserController', 'register');
    }
}

//la clase Configuration es una clase de utilidad que se utiliza para crear instancias de las
// clases necesarias para configurar la aplicación. En particular, utiliza
// una instancia de MySqlDatabase para crear instancias de los controladores y
// modelos necesarios para manejar los datos de la aplicación.