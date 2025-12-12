<!DOCTYPE html>
<?php
/*
Creare una pagina PHP che genera un numero casuale di div tra 10 e 30.
e connessa a style.css.
Colorare i div con lo style.css a seconda che il loro indice sia pari o dispari.
aggiungere un div finale con scritto "Fine pagina"
*/
?>
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
    //Primma di refactoring 12/12/2025
    /*$random = rand(10,30);//genera un numero casuale tra 10 e 30
        for($i=1;$i<$random+1;$i++){
            if($i % 2 == 0){
                echo "<div class=pari> io sono pari ($i)</div>";
            }else{
                echo "<div class=dispari> io sono dispari ($i)</div>";
            }  
        }*/ //genera div in base al numero casuale e li indica come pari o dispari
        /* Si poteva usare printdiv oppure una funzione che lo chiamava*/
        
        //Dopo refactoring
        
    ?>
    <div class="finale">Fine pagina</div>
</body>
</html>
