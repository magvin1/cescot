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

    
    /*function cambiaColoreDiv(coloreSfondo){
        let divs = document.getElementsByClassName('cambia_colore');
        switch(coloreSfondo){
        case 'red':
        for(let i = 0; i < divs.length; i++){
                divs[i].style.backgroundColor = 'red';
            }
        break;
        case 'yellow':
        for(let i = 0; i < divs.length; i++){
                divs[i].style.backgroundColor = 'yellow';
            }
        break;
        case 'blue':
        for(let i = 0; i < divs.length; i++){
                divs[i].style.backgroundColor = 'blue';
            }
        break;
        }

    }*/

    /*function alternaSfondoDiv(){
        let divs = document.getElementsByClassName('cambia_colore');
        for(let i = 0; i < divs.length; i+= 3){
            divs[i].style.backgroundColor = 'red';
        }
        for(let i = 1; i < divs.length; i+= 3){
            divs[i].style.backgroundColor = 'yellow';
        }
        for(let i = 2; i < divs.length; i+= 3){
            divs[i].style.backgroundColor = 'blue';
        }
    }*/
    
    function crea_div($n_div,$class="numerati"){
            for($i=0;$i<$n_div;$i++){
            echo "<div class=". $class."> div ". $i+1 . "</div>";
            }
        }

    function crea_div_pari_dispari($n_div){
            for($i=0;$i<$n_div;$i++){
                if($i+1 % 2 == 0){
                    echo "<div class=pari> Questo è il div numero ". $i+1 . "</div>";
                
                }else{
                    echo "<div class=dispari> Questo è il div numero ". $i+1 . "</div>";
                    }
            }
        }

        function connetti_db($dbname="prenotazioni"){
            $host= "localhost";
            $username="root";
            $password="";
            
            $mysqli = mysqli_connect($host, $username, $password, $dbname);
            
            if(!$mysqli){
                die("Connessione fallita: ". mysqli_connect_error());
                return null;
            }
            return $mysqli;
        }
?>