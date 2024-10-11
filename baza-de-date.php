<?php
include './includes/functions.php';

$connection = dbConnect();

if (!$connection) {
    die("Connection failed" . mysqli_connect_error());
}

$adresareSql = "SELECT id, nume, email FROM Favorite WHERE id > 0";
$result = mysqli_query($connection, $adresareSql);

if (mysqli_num_rows($result) > 0) {
    // Pentru a afisa mai multe row-uri facem un while
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<pre>";
        print_r($row);
        echo "<pre>";
    }
} else {
    echo "zero rezultate";
}


// echo "Connection successfully";
// echo '<pre>';
// print_r($connection);
// echo '</pre>';


// $sql = "CREATE TABLE IF NOT EXISTS Favorite(
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// nume TEXT(45) NOT NULL,
// email TEXT(45) NOT NULL
// )";

// if (mysqli_query($connection, $sql)) {

//     $sql2 =
//         "INSERT INTO Favorite(nume, email)
//     VALUES ( 'Ditu Iulian', 'dituiulian@gmail.com');";
//     $sql2 .=
//         "INSERT INTO Favorite(nume, email)
//     VALUES ( 'Irina Momentan Grigore' , 'Iubu@gmail.com');";


//     if (mysqli_multi_query($connection, $sql2)) {
//         echo "New record created succesfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($connection);
//     }
// } else {
//     echo "erroare:" . mysqli_error($connection);
// }
