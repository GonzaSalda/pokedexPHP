<!DOCTYPE html>
<html lang='en'>
<title>Header</title>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.16/dist/tailwind.min.css">
<body>

<!--Busqueda-->
<div class="flex justify-center">
    <form method="post" class="bg-red-300 rounded-2xl px-5 mx-6 lg:mx-0 flex" action="index.php?">
        <input name="searchTerm" placeholder="Buscar pokemon" id="searchTerm" class="focus:outline-none rounded-2xl xl:w-96 p-3 m-4 flex-1">
        <button class="rounded-full p-3 text-white font-bold" type="submit">Buscar</button>
    </form>
</div>

