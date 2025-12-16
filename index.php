<?php
$title = "Il mio sito personale";
include 'assets/php/db.php';

$sql = "SELECT id_insegnamento, nome, cfu FROM insegnamenti";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p>ID: ".$row['id_insegnamento']." - Nome: ".$row['nome']." - CFU: ".$row['cfu']."</p>";
    }
} else {
    echo "<p>Nessun utente trovato</p>";
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>Il Mio Sito <?php echo "ciao";  ?></h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Chi Sono</a></li>
                <li><a href="#">Contatti</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Benvenuto nel mio sito web!</h2>
            <p>Questa è una struttura base senza PHP.</p>
            <button id="clickMe">Cliccami!</button>
        </section>

        
    </main>

    <footer>
        <p>&copy; <span id="year"></span> &nbsp;&nbsp; Il Sito è Mio. &nbsp;&nbsp; Tutti i diritti riservati.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
