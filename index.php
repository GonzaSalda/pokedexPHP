<!DOCTYPE html>
<html lang='en'>
<title>Header</title>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
<body>
<div class="bg-[url('../public/img/mario.jpg')] bg-cover overflow-hidden">
<?php
    include_once('view/header.php');
    include_once('view/body.php');
    include_once ('view/footer.php')
?>
</div>


<?php
ob_start();
include_once('Configuration.php');
$configuration = new Configuration();
$database = $configuration->getDatabase();
$router = $configuration->getRouter();




$usuarioView = $configuration->getUserController();

$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {
    case 'register':
        $usuarioView->crearUsuario();
        break;
    case 'login':
        $usuarioView->login();
        break;
    case 'logout':
        $usuarioView->logout();
        break;
    default:
        break;
}







