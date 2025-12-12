<?php
    include '../cescot/libreria.php';
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
    <h1>colori</h1>
    <?php
    //dichiaro variabile random
        genera_div(rand(5,30), "div generato");
        genera_colore_casuale();
    ?>
    <div id="divFinale">div finale</div>
</body>
</html>