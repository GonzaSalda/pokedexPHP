<!DOCTYPE html>
<html lang='en'>
<title>Registro de usuario</title>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src="https://cdn.tailwindcss.com"></script>
<body>
<div class="w-auto h-auto bg-[url('../public/img/mario.jpg')] bg-cover bg-no-repeat ">
    <?php
    include_once('header.php');
    ?>
    <div class="flex justify-center items-center flex-col overflow-hidden">
        <div class="relative rounded-2xl p-6 bg-[#1C1919] bg-opacity-80  lg:w-[1137px] lg:h-[503px] flex justify-center items-center flex-col">
           <img class="absolute top-0 -right-14 w-[130px] lg:w-[160px] h-[130px] lg:h-[160px]" src="../public/img/kirbyRegistro.png">
            <h2 class="pb-6 tracking-[0.12em] text-white font-semibold text-[20px] uppercase">Crear cuenta</h2>
            <form class="text-white font-light tracking-[0.06em] text-[15px]" action="../index.php" method="POST" enctype="multipart/form-data">
                <div class="grid lg:grid-cols-2 gap-y-6 gap-x-24">
                    <input class="w-[280px] h-[32.88px] lg:w-[430px] lg:h-[47px] rounded-xl p-2 outline-0 bg-[#252121] bg-opacity-80" type="text" name="nombre" id="nombre"
                           placeholder="Nombre" required>

                    <input class="w-[280px] h-[32.88px] lg:w-[430px] lg:h-[47px] rounded-xl p-2 outline-0 bg-[#252121] bg-opacity-80" type="date" name="fecha_nacimiento"
                           id="fecha_nacimiento" placeholder="Fecha de nacimiento" required>


                    <select class="w-[280px] h-[32.88px] lg:w-[430px] lg:h-[47px] rounded-xl p-2 outline-0 bg-[#252121] bg-opacity-80" name="sexo" id="sexo" required>
                        <option value="" disabled selected hidden>Sexo</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Prefiero no cargarlo">Prefiero no cargarlo</option>
                    </select>

                    <input class="w-[280px] h-[32.88px] lg:w-[430px] lg:h-[47px] rounded-xl p-2 outline-0 bg-[#252121] bg-opacity-80" placeholder="Pais" type="text" name="pais" id="pais" required>


                    <input class="w-[280px] h-[32.88px] lg:w-[430px] lg:h-[47px] rounded-xl p-2 outline-0 bg-[#252121] bg-opacity-80" placeholder="Ciudad" type="text" name="ciudad" id="ciudad" required>


                    <input class="w-[280px] h-[32.88px] lg:w-[430px] lg:h-[47px] rounded-xl p-2 outline-0 bg-[#252121] bg-opacity-80" type="text" name="username" id="username"
                           placeholder="Nombre de usuario" required>

                    <input class="w-[280px] h-[32.88px] lg:w-[430px] lg:h-[47px] rounded-xl p-2 outline-0 bg-[#252121] bg-opacity-80" type="password" name="password" id="password"
                           placeholder="Password" required>

                    <input class="w-[280px] h-[32.88px] lg:w-[430px] lg:h-[47px] rounded-xl p-2 outline-0 bg-[#252121] bg-opacity-80" type="password" name="repetir_password"
                           id="repetir_password" placeholder="Repetir Password" required>

                    <input class="w-[280px] h-[32.88px] lg:w-[430px] lg:h-[47px] rounded-xl p-2 outline-0 bg-[#252121] bg-opacity-80" type="email" name="email" id="email"
                           placeholder="Email" required>

                    <input class="w-[280px] h-[45px] lg:w-[430px] lg:h-[47px] rounded-xl p-2 outline-0 bg-[#252121] bg-opacity-80" type="file" name="img_profile"
                           id="img_profile"><br>
                </div>

                <div class="flex justify-center items-center">
                    <button class=" w-[159px] h-[47px] rounded-2xl bg-[#252121] bg-opacity-80 font-normal text-[12px] lg:text-[16px] uppercase" type="submit">Registrarse</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    include_once('footer.php');
    ?>
</div>





