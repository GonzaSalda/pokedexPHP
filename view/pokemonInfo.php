<?php
include_once('../Configuration.php');

$pokemonId = $_GET["id"];
$configuration = new Configuration();
$database = $configuration->getDatabase();


$sql = "SELECT * FROM pokemon WHERE id = $pokemonId";
$result = mysqli_query($database, $sql);

    $pokemon = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang='en'>
<title>Header</title>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.16/dist/tailwind.min.css">
<body>
<?php
include_once('../view/header.php');
?>
<div class="bg-red-100 h-auto rounded-2xl m-8 lg:p-24">
    <div class='flex gap-5 justify-center flex-col lg:flex-row'>
        <?php


        echo "
                        <div class='flex flex-col lg:flex-row items-center border-8 border-red-300 p-10 rounded-2xl'>
                            <div> 
                                <h1 class='text-2xl font-bold'>" . $pokemon['nombre'] . "</h1>
                                <img class='lg:w-36 lg:h-32' src='../public" . $pokemon['imagen'] . "'>
                                <div class='flex gap-2 font-bold'>
                                        <img class='max-w-full lg:w-15 lg:h-15' src='../public" . $pokemon['imagen_tipo1'] . "'>
                                        <img class='w-15 h-15' src='../public" . $pokemon['imagen_tipo2'] . "'>
                                </div>
                            </div>
                            <div class='max-w-xs  px-5 lg:px-0'>
                                 <p class='text-black font-bold text-center mt-4   '>" . $pokemon['descripcion'] . "</p>  
                            </div>      
                         </div>
                   
                  ";
        ?>
    </div>
</div>


