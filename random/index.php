<?php
    include ('../lib/libreria.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        //$random = rand(1,3); come era prima del refactoring del 12/12/2025
        echo "<link rel='stylesheet' href='style_". rand(1,3) .".css/'>";
    ?>
    <title>Document</title>
</head>
<body>
    <h1>css casuali</h1>
    <?php
        /*for($i=0;$i<10;$i++){

            if($i % 2 == 0){
                echo "<div class=pari> Questo è il div numero ". $i+1 . "</div>";
            
            }else{
                echo "<div class=dispari> Questo è il div numero ". $i+1 . "</div>";
                }
        }*///prima del refactoring precedentemente detto
        //Dopo refactoring
        crea_div_pari_dispari(10);

    ?>
    <div> questa è la fine della pagina</div>
</body>
</html>