<?php
    include ('../lib/libreria.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
        <div>
        <button id="first_red" onclick="cambiaColoreDiv('red')">Primo Rosso</button>
        <button id="second_red" onclick="cambiaColoreDiv('red')">Secondo Rosso</button>
        <button id="every_red" onclick="cambiaColoreDiv('red')">Tutti Rossi</button>
        <button id="first_blue" onclick="cambiaColoreDiv('blue')">Primo Blu</button>
        <button id="second_blue" onclick="cambiaColoreDiv('blue')">Secondo Blu</button>
        <button id="every_blue" onclick="cambiaColoreDiv('blue')">Tutti Blu</button>

        <h2 class='first_group'><?php crea_div(rand(5,10), 'primo_gruppo')?></h2>
        <h2 class='second_group'><?php crea_div(rand(10,15), 'secondo_gruppo')?></h2>
        </div>
    </body>
    <script src="groups.js"></script>
</html>