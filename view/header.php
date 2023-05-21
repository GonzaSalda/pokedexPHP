<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

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
<div class="mb-4 xl:mb-[30px]">
    <div class='pb-4 bg-[#1C1919CC] bg-opacity-80 h-[122px] lg:h-[92px] flex justify-center items-center'>
        <h1 class="font-[primary] not-italic text-[20px] lg:text-[35px] font-extrabold"><span class="text-[#E169E3]">KIRBY</span><span class="text-[#5990D2]">PREGUNTA</span></h1>
    </div>
</div>







<!--            <div class="flex flex-col items-center">
                <?php /*if (isset($_SESSION['username'])) { */?>
                    <form class="text-white text-sm pt-5 flex gap-1" action="index.php?action=logout"  method="post">
                        <?php
/*                        $img_profile = isset($_SESSION['img_profile']) ? $_SESSION['img_profile'] : '';

                        echo '<img src="public/img/' . $img_profile . '" alt="Foto de perfil" width="50" height="50">';

                        */?>
                        <input type="hidden" name="action" value="logout">
                        <button class="rounded-full border-2 p-2 font-semibold" type="submit">Cerrar sesión</button>
                    </form>
                <?php /*} else { */?>
                    <form class="text-white text-sm pt-5 flex gap-1" action="index.php?action=login" method="post">
                        <input class=" bg-red-300 p-2 text-center rounded-2xl w-28 focus:outline-none placeholder-white" id="username" name="username" type="text" placeholder="Usuario">
                        <input class=" bg-red-300 p-2 text-center rounded-2xl w-28 focus:outline-none placeholder-white" id="password" name="password" placeholder="Password" type="password">
                        <button class="rounded-full p-2 border-2 font-semibold" type="submit">Ingresar</button>
                    </form>
                <?php /*} */?>

                <?php /*if (!isset($_SESSION['username'])) { */?>
                    <p class="text-white text-sm pt-2">¿No tiene una cuenta? <a class="text-sm font-semibold text-blue-300" href="view/register.php">Registrarse</a></p>
                <?php /*}  */?>
            </div>-->