<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>pagina di prova</h1>
    <?php
        for($i=0;$i<15;$i++){
            echo "<div> Questo è il div numero ". $i+1;
            echo " </div>";
        }
    ?>
</body>
</html>