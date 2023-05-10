<?php
ob_start(); //Esto habilitará el buffer de salida y evitará que se
// envíen encabezados HTTP antes de la salida de tu script PHP
include_once('Configuration.php');
$configuration = new Configuration();
$database = $configuration->getDatabase();


include_once('view/header.php');
include_once ('view/search.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pokemonsView = $configuration->getPokemonsController();
    $pokemonsView->searched();
} else {
    $pokemonsView = $configuration->getPokemonsController();
    $pokemonsView->list();
}
$pokemonsView = $configuration->getLoginController();
$pokemonsView->handleLogin();

$pokemonsView->logout();



