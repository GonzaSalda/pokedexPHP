<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}?>

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
        <a href='/Pokedex/index.php' class='text-6xl mb-6 lg:mb-0 lg:text-4xl font-bold text-red-300'>Pokedex</a>
        <form class="text-white text-xl" method="post">
        <?php if (isset($_SESSION['usuario'])) { ?>
                <input type="hidden" name="action" value="logout">
                <button class="rounded-full bg-red-300 text-sm p-1 hover:bg-red-400 text-white font-semibold" type="submit">Cerrar sesión</button>

        <?php } else { ?>
                    <input class=" bg-red-300 p-1 text-sm text-center rounded-2xl w-28 focus:outline-none placeholder-white" id="usuario" name="usuario" type="text" placeholder="Usuario">
                    <input class=" bg-red-300 p-1 text-sm text-center rounded-2xl w-28 focus:outline-none placeholder-white" id="password" name="password" placeholder="Password" type="password">
                    <button class="rounded-full bg-red-300 text-sm p-1 hover:bg-red-400 text-white font-semibold" type="submit">Ingresar</button>
        <?php } ?>
        </form>
    </div>
</div>
