<?php
include ('../lib/libreria.php');

// ✅ Gestione del POST PRIMA di qualsiasi output HTML
if (isset($_POST['salva'])) {
    $nome    = $_POST['nome']    ?? '';
    $cognome = $_POST['cognome'] ?? '';
    $citta   = $_POST['citta']   ?? '';

    $conn = connetti_db("prenotazioni"); // usa la tua funzione di libreria

    $stmtCitta = $conn->prepare("SELECT id_citta FROM citta WHERE citta = ?");
    $stmtCitta->bind_param("s", $citta);
    $stmtCitta->execute();
    $result = $stmtCitta->get_result();

    if ($row = $result->fetch_assoc()) {
        $idCitta = $row['id_citta'];

        $stmtInsert = $conn->prepare("INSERT INTO clienti (nome, cognome, citta) VALUES (?, ?, ?)");
        $stmtInsert->bind_param("ssi", $nome, $cognome, $idCitta);

        if ($stmtInsert->execute()) {
            // ✅ Il redirect funziona perché nessun HTML è ancora stato inviato
            header("Location: " . $_SERVER['PHP_SELF'] . "?status=ok");
            exit;
        } else {
            // Salva l'errore e lo mostriamo dopo nell'HTML
            $errore = "Errore nell'inserimento: " . $conn->error;
        }
        $stmtInsert->close();
    } else {
        $errore = "Città non trovata.";
    }

    $stmtCitta->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>

<?php
// ✅ Messaggi mostrati nell'HTML, al posto giusto
if (isset($_GET['status']) && $_GET['status'] == 'ok') {
    echo "<p style='color:green;'>Dati salvati con successo!</p>";
}
if (isset($errore)) {
    echo "<p style='color:red;'>" . htmlspecialchars($errore) . "</p>";
}
?>

<form method="post" id="mioForm">

    <div>
        <label for="nome">nome:</label>
        <input type="text" id="nome" name="nome">
    </div>

    <div>
        <label for="cognome">cognome:</label>
        <input type="text" id="cognome" name="cognome">
    </div>

    <div>
        <label for="citta">citta:</label>
        <?php
        $mysqli = connetti_db("prenotazioni");
        $queryDati = "SELECT DISTINCT citta FROM citta";
        $result = $mysqli->query($queryDati);

        echo '<select name="citta" id="citta">';
        echo "<option value=''>Tutte le citta</option>";
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . htmlspecialchars($row['citta']) . "'>"
                   . htmlspecialchars($row['citta']) . "</option>";
            }
        }
        echo "</select>";
        ?>
    </div>

    <div>
        <button type="button" onclick="resetForm()">Annulla</button>
        <button type="submit" name="salva">Salva</button>
    </div>

</form>

<script>
function resetForm() {
    document.getElementById("mioForm").reset();
}
</script>

</body>
</html>