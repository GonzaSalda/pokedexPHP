
<!DOCTYPE html>
<html lang='en'>
<title>Registro de usuario</title>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.16/dist/tailwind.min.css">
<body>
<div class="container mx-auto p-8 ">
    <div class="border-2 border-gray-400 rounded-2xl  flex justify-center items-center flex-col overflow-hidden w-64 h-auto lg:w-full">
        <h2 class="text-lg lg:text-2xl font-semibold my-4">Registro de usuario</h2>

            <form class="flex flex-col gap-2" action="../index.php" method="POST" enctype="multipart/form-data" >
                <input class="border-2 border-black rounded-xl p-2" type="text" name="nombre" id="nombre" placeholder="Nombre completo" required>

                <input class="border-2 border-black rounded-xl p-2" type="date" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Fecha de nacimiento" required>

                <div class="flex flex-col">
                    <label for="sexo">Género</label>
                    <select class="border-2 border-black rounded-xl p-2 " name="sexo" id="sexo" required>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Prefiero no cargarlo">Prefiero no cargarlo</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label for="pais">País</label>
                    <input class="border-2 border-black rounded-xl p-2 " type="text" name="pais" id="pais"  required>
                </div>

                <div class="flex flex-col">
                <label for="ciudad">Ciudad</label>
                <input class="border-2 border-black rounded-xl p-2 "  type="text" name="ciudad" id="ciudad" required>
                </div>

                <input class="border-2 border-black rounded-xl p-2 " type="text" name="username" id="username" placeholder="Nombre de usuario" required>

                <input  class="border-2 border-black rounded-xl p-2 " type="password" name="password" id="password" placeholder="Password" required>

                <input class="border-2 border-black rounded-xl p-2 " type="password" name="repetir_password" id="repetir_password" placeholder="Repetir Password" required>

                <input class="border-2 border-black rounded-xl p-2 " type="email" name="email" id="email"  placeholder="Email" required>

                <input class="border-2 border-black rounded-xl p-2 " type="file" name="img_profile" id="img_profile"><br>

                <button class="rounded-2xl border-2 border-gray-400 lg:w-96 p-2 my-4" type="submit"">Registrarse</button>
            </form>

    </div>
</div>






