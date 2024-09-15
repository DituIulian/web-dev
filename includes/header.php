<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ditu Iulian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<?php
// PHP movie list 
$movies = array(
    array(
        'title' => 'Shawshank Redemption',
        'poster' => 'https://wallpaper.forfun.com/fetch/eb/eb3f99cde304c6094e7471404f6585d1.jpeg?h=900&r=0.5',
        'genre' => 'Epic Drama Prison Tragedy',
        'description' => 'A Maine banker convicted of the murder of his wife and her lover in 1947 gradually forms a friendship over a quarter
                            century with a hardened convict, while maintaining his innocence and trying to remain hopeful through simple compassion.',
        'permalink' => './movie1.php',
        'id' => '1',
        'runtime' => '142'
    ),
    array(
        'title' => 'John Wick',
        'poster' => 'https://wallpaper.forfun.com/fetch/52/5258df3d89839da339cbd339ae8514c2.jpeg?h=900&r=0.5',
        'genre' => 'Gun Fu One-Person Army Action Crime',
        'description' => 'An ex-hitman comes out of retirement to track down the gangsters who killed his dog and stole his car.',
        'permalink' => './movie2.php',
        'id' => '2',
        'runtime' => '101'
    ),
    array(
        'title' => 'Interstellar',
        'poster' => 'https://wallpaper.forfun.com/fetch/8d/8dabb586f918bad6a52d3811e4f35b56.jpeg?h=900&r=0.5',
        'genre' => 'Epic Drama Prison Tragedy',
        'description' => 'When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a
                            spacecraft, along with a team of researchers, to find a new planet for humans.',
        'permalink' => './movie3.php',
        'id' => '3',
        'runtime' => '169'
    ),

);

include './includes/functions.php'
?>