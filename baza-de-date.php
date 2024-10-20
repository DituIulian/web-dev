<?php
require_once './includes/functions.php';

$connection = dbConnect();

if (!$connection) {
    die("Eroare la conectarea la baza de date: " . mysqli_connect_error());
}


$sql_reviews = "CREATE TABLE IF NOT EXISTS reviews (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_film INT(6) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    comentariu TEXT NOT NULL,
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  
)";

if (mysqli_query($connection, $sql_reviews)) {
    // Tabela ok
} else {
    die("Eroare la crearea tabelei reviews: " . mysqli_error($connection));
}
