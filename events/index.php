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
        <button id="red" onclick="sfondoDivRosso()">Rosso</button>
        <button id="yellow" onclick="sfondoDivGiallo()">Giallo</button>
        <button id="blue" onclick="sfondoDivBlu()">Blu</button>

        
        <?php
            for($i=0;$i<20;$i++){
                echo "<div class='cambia_colore'> Div numero ". $i+1 . "</div>";
            }
        ?>
    <script src="events.js"></script>
    </body>
</html>

