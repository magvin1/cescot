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
    "select DISTINCT regione
    from regioni";

    $result = $mysqli->query($queryDati);
    ?>
        <form method="GET" action="clienti.php">
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
        echo "<button type='submit'>Filtra</button>";
        echo "</form>";
        
        if (!isset($_GET['regione']) || $_GET['regione'] == "") {
            $regione_selezionata= "%";
        } else{
            $regione_selezionata= "%".$_GET['regione']."%";
        }

        // Paginazione
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $limit = 50;
        $offset = ($page - 1) * $limit;

        // Query per contare il totale dei record
        $queryCount = "select COUNT(*) as total
        from clienti as c
        inner join citta as cit on c.citta = cit.id_citta
        inner join regioni as r on cit.regione = r.ID_regione
        WHERE r.regione LIKE '".$regione_selezionata."'";
        $resultCount = $mysqli->query($queryCount);
        $row_count = mysqli_fetch_assoc($resultCount);
        $total_records = $row_count['total'];
        $total_pages = ceil($total_records / $limit);

        // Query per i dati con LIMIT e OFFSET
        $queryDati="select c.nome, c.cognome, cit.citta, r.regione, r.area_geografica
        from clienti as c
        inner join citta as cit on c.citta = cit.id_citta
        inner join regioni as r on cit.regione = r.ID_regione
        WHERE r.regione LIKE'".$regione_selezionata."'
        LIMIT " . $limit . " OFFSET " . $offset;
        $result = $mysqli->query($queryDati);
        stampa_ricerca_clienti($result);

        // Pulsanti Indietro e Avanti
        echo '<div role="navigation" class="paginazione"><table>';
        if ($page > 1) {
            $pag_indietro = $page - 1;
            $regione_param = isset($_GET['regione']) ? '&regione=' . urlencode($_GET['regione']) : '';
            echo '<a href="?page=' . $pag_indietro . $regione_param . '" class="Indietro">« Indietro</a>';
        }
        if ($page < $total_pages) {
            $pag_avanti = $page + 1;
            $regione_param = isset($_GET['regione']) ? '&regione=' . urlencode($_GET['regione']) : '';
            echo '<a href="?page=' . $pag_avanti . $regione_param . '" class="Avanti">Avanti »</a>';
        }
        echo '</div>';
        $mysqli->close();
    ?>
    
</body>
</html>