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
    <h1>Prenotazioni</h1>
    <?php
    $mysqli= connetti_db("prenotazioni");
$queryDati= 
"select c.nome, c.cognome, cit.citta, p.importo,p.arrivo, p.caparra, p.importo- p.caparra as saldo_da_pagare
from clienti as c
inner join citta as cit on c.citta = cit.id_citta
inner join prenotazioni as p on c.id_cliente = p.cliente";

    $result = $mysqli->query($queryDati);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div><h2>". $row["arrivo"]. "</h2><p>" . $row["nome"]. " " . $row["cognome"] ." ". $row["citta"]. " " . $row["importo"]. " " . $row["caparra"]." <span class='saldo'>". $row["saldo_da_pagare"]. " " ."</span></p></div>";
            }
        } else {
            echo "0 results";
        }
        $mysqli->close();
    ?>
</body>
</html>