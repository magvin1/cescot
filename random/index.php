<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>css casuali</h1>
    <?php
        for($i=0;$i<15;$i++){

            if($i % 2 == 0){
                echo "<div class=pari> Questo è il div numero ". $i+1 . "</div>";
            
            }else{
                echo "<div class=dispari> Questo è il div numero ". $i+1 . "</div>";
                }
        }
    ?>
    <div> questa è la fine della pagina</div>
</body>
</html>