<?php
    //questa funzione genera un numero specificato di div con colori casuali
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

    //questa funzione restituisce un colore casuale tra rosso, verde, blu e giallo
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