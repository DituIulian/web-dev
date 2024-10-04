<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ditu Iulian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<?php

if ($_SERVER['PHP_SELF'] !== '/demo-php/index.php' && $_SERVER['PHP_SELF'] !== '/demo-php/contact.php') {

    // PHP/JSON movie list
    $movies =
        json_decode(file_get_contents('./assets/json/movies-list-db.json'), true)['movies'];
}

include './includes/functions.php';


// PHP nav bar elements
$navElements = array(
    array(
        'title' => 'Home',
        'link' => '/demo-php/index.php'
    ),
    array(
        'title' => 'Contact',
        'link' => '/demo-php/contact.php'
    ),
    array(
        'title' => 'Movies',
        'link' => '/demo-php/movies.php'
    ),
    array(
        'title' => 'Genres',
        'link' => '/demo-php/genres.php'
    )
)
?>
<div class="container main-container">