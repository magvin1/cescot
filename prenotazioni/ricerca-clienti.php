<?php
    include ('../lib/libreria.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   
    <?php
    $mysqli= connetti_db("prenotazioni");
    $queryDati= 
    "select DISTINCT regione
    from regioni";

    $result = $mysqli->query($queryDati);
    ?>
        <form method="GET" action="">
        <label for="regione">Cerca regione:</label>
        
    <?php
        echo'<select name=regione id=regione>';
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<option value=". $row["regione"]. ">". $row["regione"]."</option>";  
            }
            echo"<option value=''>". "Tutte le regioni" ."</select>";
        } else {
            echo "0 results";
        }
    ?>
        <label for="nomeCliente">Cliente:</label>
        <input type="text" id="nomeCliente" name="nomeCliente">
    <?php
        echo "<button type='submit'>Cerca</button>";
        echo "</form>";
        if (!isset($_GET['regione']) || $_GET['regione'] == "") {
            $check_regione=0;
        } else{
            $regioneScrittaDaUtente= "%".$_GET['regione']."%";
            $check_regione=1;
        }

        if(!isset($_GET['nomeCliente'])){
            var_dump($_GET['nomeCliente']);
            $check_nome=0;
        }
        else{
            $nome_inserito= "%".$_GET['nomeCliente']; 
            $check_nome=1;
        }
        if(!$check_nome && !$check_regione){
            $queryDati= 
                "SELECT *
                    FROM clienti cl
                    INNER JOIN citta c ON c.ID_citta = cl.citta
                    INNER JOIN regioni rg ON rg.ID_regione = c.regione
                    WHERE (cl.nome LIKE '%".$nome_inserito."%'
                    OR cl.cognome LIKE '%".$nome_inserito."%')
                    AND  rg.regione = '".$regioneScrittaDaUtente."'
                    GROUP BY rg.regione";
        }
        else if(!$check_nome) echo "Non hai inserito nessun nome/cognome da cercare";
        else if(!$check_regione) echo "Non hai inserito nessuna regione da cercare";
            $result1 = $mysqli->query($queryDati); 
            var_dump($result1);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result1)) { var_dump($row);
                echo "<div><p>" . $row["nome"]. " " 
                . $row["cognome"] ." ". $row["citta"]. " " . $row["regione"]. " " 
                . $row["dataNascita"]."</p></div>";
            }
        } else {
            echo "0 results";
        }
        $mysqli->close();
    ?>
</body>
</html>