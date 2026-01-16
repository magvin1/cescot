<?php
    include ('../lib/libreria.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Regioni</h1>

    <form method="GET" action="">
        <label for="cerca">Cerca Regione:</label>
        <input type="text" name="regione" id="cerca" placeholder="Regione">
        <button type="submit">Filtra</button>
    </form>

    <?php
    $mysqli= connetti_db("prenotazioni");
    if (!isset($_GET['regione']) || $_GET['regione'] == "") {
        $regioneScrittaDaUtente= "%";
    } else{

    $regioneScrittaDaUtente= "%".$_GET['regione']."%";
    }
    $queryDati= 
        "select r.regione, COUNT(p.ID_prenotazione) as n_prenotazioni,ROUND(SUM(p.importo),2) as importo_totale, ROUND(SUM(p.importo-p.caparra),2) as saldo_totale
        from regioni as r
        inner join citta as cit on cit.regione = r.ID_regione
        inner join clienti as c on cit.ID_citta=c.citta
        inner join prenotazioni as p on c.id_cliente = p.cliente
        Where r.regione LIKE'".$regioneScrittaDaUtente.
        "' GROUP BY r.regione";
    
    $result = $mysqli->query($queryDati);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div><h2>". $row["regione"]. "</h2><p>" . $row["n_prenotazioni"]. "</p><p>" 
                . $row["importo_totale"] ." </p>".
                " <span class='saldo'>". $row["saldo_totale"]. " " ."</span></p></div>";
            }
        } else {
            echo "0 results";
        }
        $mysqli->close();
    ?>
</body>
</html>