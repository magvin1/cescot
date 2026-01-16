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
    <h1>Clienti</h1>
    <?php
        $mysqli= connetti_db("prenotazioni");
        $queryDati= 
        /*"select distinct concat(c.nome,' ',c.cognome), cit.citta, r.regione, r.area_geografica
        from clienti as c
        inner join citta as cit on c.citta = cit.id_citta
        inner join regioni as r on cit.regione = r.ID_regione";

        Possibile farlo ma devo aggiungere un riconoscitore come per esempio 'as nome_completo' così lo salvo all'interno 
        di tale variabile e posso poi utilizzarlo come variabile all'interno di row, cancellando row nome e row cognome e inserendo unicamente row nome_completo 
        */
        "select c.nome, c.cognome, cit.citta, r.regione, r.area_geografica
        from clienti as c
        inner join citta as cit on c.citta = cit.id_citta
        inner join regioni as r on cit.regione = r.ID_regione
        WHERE r.regione='".$regione_selezionata."'
        ";

        $result = $mysqli->query($queryDati);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<div><h2>". $row["nome"]. " " . $row["cognome"] ."</h2><p>"  
                    . $row["regione"]. "</p><p>" . $row["area_geografica"]. "</p><p>" 
                    . $row["citta"]."</p></div>";
                }
            } else {
                echo "0 results";
            }
        $mysqli->close();
    ?>
</body>
</html>