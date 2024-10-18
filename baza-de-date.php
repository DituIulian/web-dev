<?php
require_once './includes/functions.php';


$connection = dbConnect();

if (!$connection) {
    die("Connection failed" . mysqli_connect_error());
}


// $sql = "CREATE TABLE IF NOT EXISTS Favorite(
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// nume TEXT(45) NOT NULL,
// email TEXT(45) NOT NULL,
// comment TEXT(499) NOT NULL
// )";

$sql2 = "CREATE TABLE IF NOT EXISTS Comentarii(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nume TEXT(45) NOT NULL,
email TEXT(45) NOT NULL,
comment TEXT(499) NOT NULL
)";

if (mysqli_query($connection, $sql2)) {

    $sql2 =
        "INSERT INTO Comentarii(nume, email, comment)
    VALUES ( 'Ditu Iulian', 'dituiulian@gmail.com', 'Decent');";
    $sql2 .=
        "INSERT INTO Comentarii(nume, email, comment)
    VALUES ( 'Irina Momentan Grigore' , 'Iubu@gmail.com', 'Relevant');";


    if (mysqli_multi_query($connection, $sql2)) {
        echo "New record created succesfully";
    } else {
        echo "Error: " . $sql2 . "<br>" . mysqli_error($connection);
    }
} else {
    echo "erroare:" . mysqli_error($connection);
}

// $adresareSql = "SELECT id, nume, email FROM Favorite";
// $result = mysqli_query($connection, $adresareSql);

// if (mysqli_num_rows($result) > 0) {
//     // Pentru a afisa mai multe row-uri facem un while
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "<pre>";
//         print_r($row);
//         echo "</pre>";
//     }
// } else {
//     echo "zero rezultate";
// }
