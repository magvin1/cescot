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
        $random=rand(5,30);
        genera_div($random, "div generato");
    ?>
    <div id="divFinale">div finale</div>
</body>
</html>

<?php
    function genera_div($numero_div, $testodiv){
        for($i=0; $i<$numero_div; $i++){
            echo "<div class='div_generato'>". $testodiv. "</div>";
        }
    }
?>