<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Events</title>
    </head>
    <body>
        <h1> Eventi javascript</h1>
        <button id="btn_colora">Colora</button>
        <?php
            for($i=0;$i<20;$i++){
                echo "<div> Div numero ". $i+1 . "</div>";
            }
        ?>
    <script src="events.js"></script>
    </body>
</html>