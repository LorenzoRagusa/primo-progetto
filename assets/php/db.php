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
echo "Connesso al database correttamente!";
?>
