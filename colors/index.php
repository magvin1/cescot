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
        $random=rand(5,30);
        genera_div($random, "div generato");
    ?>
    <div id="divFinale">div finale</div>
</body>
</html>

<?php
    function genera_div($numero_div, $testodiv){
        for($i=0; $i<$numero_div; $i++){
            $colore=genera_colore_casuale();

            switch($colore){
                case "red":
                    echo "<div class='divRosso'>". $testodiv. "</div>";
                    break;
                case "green":
                    echo "<div class='divVerde'>". $testodiv. "</div>";
                    break;
                case "blue":
                    echo "<div class='divBlu'>". $testodiv. "</div>";
                    break;
                case "yellow":
                    echo "<div class='divGiallo'>". $testodiv. "</div>";
                    break;
            }

        }
    }

    function genera_colore_casuale(){
    $random=rand(1,4);
        switch($random){
            case 1:
                return "red";
            case 2:
                return "green";
            case 3:
                return "blue";
            case 4:
                return "yellow";
        }
}
?>