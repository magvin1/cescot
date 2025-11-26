<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1 class="iniziale">Contenuti a caso</h1>
    <?php
    $random = rand(10,30);
        for($i=1;$i<$random;$i++){
            if($i % 2 == 0){
                echo "<div class=pari> io sono pari ($i)</div>";
            }else{
                echo "<div class=dispari> io sono dispari ($i)</div>";
            }         
        }
    ?>
    <div class="finale">Fine pagina</div>
</body>
</html>