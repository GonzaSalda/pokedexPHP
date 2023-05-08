<!DOCTYPE html>
<html lang='en'>
<title>Header</title>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.16/dist/tailwind.min.css">
<body>


<div class="bg-red-100 h-auto rounded-2xl m-8 lg:p-24">
    <div class='flex gap-5 flex-col lg:flex-row'>
        <?php
        foreach ($pokemons as $pokemon) {
            echo "
                        <div class='flex flex-col items-center border-8 border-red-300 p-10 rounded-2xl'>
                            <h1 class='text-2xl font-bold'>" . $pokemon['nombre'] . "</h1>
                            <img class=' lg:w-36 lg:h-32' src='public" . $pokemon['imagen'] . "'>
                                <div class='flex gap-2 font-bold'>
                                    <div class='flex flex-col'>
                                        <h3>" . $pokemon['tipo1'] . "</h3>
                                        <img class='w-15 h-15' src='public" . $pokemon['imagen_tipo1'] . "'>
                                    </div>
                                    <div class='flex flex-col'>
                                        <h3>" . $pokemon['tipo2'] . "</h3>
                                        <img class='w-15 h-15' src='public" . $pokemon['imagen_tipo2'] . "'>
                                    </div>
                                </div>
                             <a class='font-bold text-red-300 mt-4 hover:text-red-400' href='view/pokemonInfo.php?id=" . $pokemon['id'] . "'>Ver más información</a>
                         </div>
                   
                  ";
        }
        ?>
    </div>

</div>


