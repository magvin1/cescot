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
        <button id="first_red" onclick="cambiaColoreDiv('first_red')">Primo Rosso</button>
        <button id="second_red" onclick="cambiaColoreDiv('second_red')">Secondo Rosso</button>
        <button id="every_red" onclick="cambiaColoreDiv('every_red')">Tutti Rossi</button>
        <button id="first_blue" onclick="cambiaColoreDiv('first_blue')">Primo Blu</button>
        <button id="second_blue" onclick="cambiaColoreDiv('second_blue')">Secondo Blu</button>
        <button id="every_blue" onclick="cambiaColoreDiv('every_blue')">Tutti Blu</button>

        <button id="third_red" onclick="cambiaColoreDiv('third_red')">Terzo Rosso</button>
        <button id="third_blue" onclick="cambiaColoreDiv('third_blue')">Terzo Blu</button>
        <button id="first_yellow" onclick="cambiaColoreDiv('first_yellow')">Primo Giallo</button>
        <button id="second_yellow" onclick="cambiaColoreDiv('second_yellow')">Secondo Giallo</button>
        <button id="third_yellow" onclick="cambiaColoreDiv('third_yellow')">Terzo Giallo</button>
        <button id="every_yellow" onclick="cambiaColoreDiv('every_yellow')">Tutti Giallo</button>

        <h2 class='first_group'><?php crea_div(rand(5,10), 'primo_gruppo')?></h2>
        <h2 class='second_group'><?php crea_div(rand(10,15), 'secondo_gruppo')?></h2>
        <h2 class='third_group'><?php crea_div(rand(5,20), 'terzo_gruppo')?></h2>
        </div>
    </body>
    <script src="groups.js"></script>
</html>
