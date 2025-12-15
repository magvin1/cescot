<?php
    include ('../lib/libreria.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Events</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1> Eventi javascript</h1>
        <button id="red" onclick="cambiaColoreDiv('red')">Rosso</button>
        <button id="yellow" onclick="cambiaColoreDiv('yellow')">Giallo</button>
        <button id="blue" onclick="cambiaColoreDiv('blue')">Blu</button>
        <button id="green" onclick="cambiaColoreDiv('green')">Verde</button>
        <button id="orange" onclick="cambiaColoreDiv('orange')">Arancione</button>
        <button id="alterna" onclick="alternaSfondoDiv()">Alterna</button>

        
        <?php
            crea_div(20,'cambia_colore');
            /*for($i=0;$i<20;$i++){
                echo "<div class='cambia_colore'> Div numero ". $i+1 . "</div>";
            }*/
        ?>
    <script src="events.js"></script>
    </body>
</html>

