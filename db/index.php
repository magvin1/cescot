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
    <h1>Il testo seguente arriva dal DB, Clienti</h1>
    <?php 
        $host= "localhost";
        $dbname="cescot";
        $username="root";
        $password="";
        
        $mysqli = mysqli_connect($host, $username, $password, $dbname);
        
        if(!$mysqli){
            die("Connessione fallita: ". mysqli_connect_error());
        }
        $sql = "SELECT * FROM clienti";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div><h2>". $row["id"]. "</h2><p>" . $row["nome"]. " " . $row["cognome"] . "</p></div>";
            }
        } else {
            echo "0 results";
        }
        $mysqli->close();
    ?>
</body>
</html>