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
        <button id="firstRed" onclick="cambiaColoreDiv('red')">Primo Rosso</button>
        <button id="secondRed" onclick="cambiaColoreDiv('red')">Secondo Rosso</button>
        <button id="allRed" onclick="cambiaColoreDiv('red')">Tutti Rossi</button>
        <button id="firstBlue" onclick="cambiaColoreDiv('blue')">Primo Blu</button>
        <button id="secondBlue" onclick="cambiaColoreDiv('blue')">Secondo Blu</button>
        <button id="allBlue" onclick="alternaSfondoDiv('blue')">Tutti Blu</button>
        <h2><?php crea_div(rand(5,10), primo_gruppo)?></h2>
        <h2><?php crea_div(rand(10,15), secondo_gruppo)?></h2>
        </div>
    </body>
</html>