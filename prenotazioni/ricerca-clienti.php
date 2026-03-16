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
    <label for="nomeCliente">Cliente:</label>
    <input type="text" id="nomeCliente" name="nomeCliente">
    <?php
    $mysqli= connetti_db("prenotazioni");
    $queryDati= 
    "select DISTINCT regione
    from regioni";

    $result = $mysqli->query($queryDati);
    ?>
        <form method="GET" action="">
        <label for="regione">Cerca Cliente:</label>
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
        echo "<button type='submit'>Cerca</button>";
        echo "</form>";
        
        if (!isset($_GET['regione']) || $_GET['regione'] == "") {
            $regione_selezionata= "%";
        } else{
            $regione_selezionata= "%".$_GET['regione']."%";
        }
        $queryDati= 
        "select DISTINCT regione
        from regioni";

        $result = $mysqli->query($queryDati);
         if ($result->num_rows > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div><h2>". $row[""]. "</h2><p>" . $row["nome"]. " " 
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