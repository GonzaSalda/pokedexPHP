<?php

include_once('../Configuration.php');
$configuration = new Configuration();
$database = $configuration->getDatabase();

// Verificar si el usuario ha enviado el formulario de inicio de sesión
if (isset($_POST['usuario']) && isset($_POST['password'])) {
    $username = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE usuario='$username' LIMIT 1";
    $result = mysqli_query($database, $sql);
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])) {
            // Si la contraseña es correcta, iniciar sesión
            $_SESSION['usuario'] = $username;
            header('Location: view/logueado.php');
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }
    mysqli_close($database);
}
?>
<!-- Navbar -->
<!DOCTYPE html>
<html lang='en'>
<title>Header</title>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.16/dist/tailwind.min.css">
<body>
<div class='pb-4 m-2'>
    <div class='flex flex-col  lg:flex-row items-center lg:justify-between '>
        <img src="../public/pokeheader.jpg" class="max-w-full w-44 h-32 lg:w-56 lg:w-44" alt="">
        <a href='../index.php' class='text-6xl mb-6 lg:mb-0 lg:text-4xl font-bold text-red-300'>Pokedex</a>
        <?php
        session_start();
        if (!isset($_SESSION['logged_in'])) {
            ?>
            <div class="">
                <form class="text-white text-xl" method="post">
                    <input class=" bg-red-300 p-1 text-sm text-center rounded-2xl w-28 focus:outline-none placeholder-white" id="usuario" name="usuario" type="text" placeholder="Usuario">
                    <input class=" bg-red-300 p-1 text-sm text-center rounded-2xl w-28 focus:outline-none placeholder-white" id="password" name="password" placeholder="Password" type="password">
                    <button class="rounded-full bg-red-300 text-sm p-1 hover:bg-red-400 text-white font-semibold" type="submit">Ingresar</button>
                </form>
            </div>
            <?php
        }
        ?>
    </div>
</div>

