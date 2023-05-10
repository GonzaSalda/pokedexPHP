<?php
ob_start(); //Esto habilitará el buffer de salida y evitará que se
// envíen encabezados HTTP antes de la salida de tu script PHP
include_once('Configuration.php');
$configuration = new Configuration();
$database = $configuration->getDatabase();
$router = $configuration->getRouter();


include_once('view/header.php');
include_once ('view/search.php');

//http://miweb.com/index.php?module=pokemons&method=list

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $module = $_GET['module'] ?? 'pokemons';
    $method = $_GET['action'] ?? 'searched';
    $router->route($module, $method);
} else {
    $module = $_GET['module'] ?? 'pokemons';
    $method = $_GET['action'] ?? 'list';
    $router->route($module, $method);
}
$usuarioView = $configuration->getLoginController();
$usuarioView->Login();

$usuarioView->logout();



