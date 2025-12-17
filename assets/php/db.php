<?php
$servername = "localhost";  // server MySQL
$username = "root";         // default XAMPP username
$password = "";             // default XAMPP password è vuota
$dbname = "sito-uni_db";

// Crea connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controlla connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

function query_lista($query){

    $servername = "localhost";  // server MySQL
    $username = "root";         // default XAMPP username
    $password = "";             // default XAMPP password è vuota
    $dbname = "sito-uni_db";

    // Crea connessione
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Controlla connessione
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }
    
    $result = $conn->query($query);
    
    $result_array = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $result_array[] = $row;
        }
    } else {
        echo "<p>Nessun utente trovato</p>";
    }

    return $result_array;
}
?>
