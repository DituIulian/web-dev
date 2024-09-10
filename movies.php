<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ditu Iulian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand navbar-dark bg-dark ">
            <a class="navbar-brand ms-4" href="#">DI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto me-4">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="movies.php">Movies</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container mt-3">
            <div class="row">
                <?php
                // PHP movie list 
                $movies = array(
                    array(
                        'title' => 'Shawshank Redemption',
                        'poster' => 'https://wallpaper.forfun.com/fetch/eb/eb3f99cde304c6094e7471404f6585d1.jpeg?h=900&r=0.5',
                        'genre' => 'Epic Drama Prison Tragedy',
                        'description' => 'A Maine banker convicted of the murder of his wife and her lover in 1947 gradually forms a friendship over a quarter
                            century with a hardened convict, while maintaining his innocence and trying to remain hopeful through simple compassion.',
                        'permalink' => './movie1.php'
                    ),
                    array(
                        'title' => 'John Wick',
                        'poster' => 'https://wallpaper.forfun.com/fetch/52/5258df3d89839da339cbd339ae8514c2.jpeg?h=900&r=0.5',
                        'genre' => 'Gun Fu One-Person Army Action Crime',
                        'description' => 'An ex-hitman comes out of retirement to track down the gangsters who killed his dog and stole his car.',
                        'permalink' => './movie2.php'
                    ),
                    array(
                        'title' => 'Interstellar',
                        'poster' => 'https://wallpaper.forfun.com/fetch/8d/8dabb586f918bad6a52d3811e4f35b56.jpeg?h=900&r=0.5',
                        'genre' => 'Epic Drama Prison Tragedy',
                        'description' => 'When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a
                            spacecraft, along with a team of researchers, to find a new planet for humans.',
                        'permalink' => './movie3.php'
                    ),

                );

                // PHP movie counter
                $counter = 0;
                foreach ($movies as $movie) {
                    $counter++

                ?>
                    <!-- HTML Movie Card -->
                    <div class="col-md-4">
                        <img class="card-img-top img-thumbnail" src="<?php echo $movie['poster']; ?>" alt="<?php echo $movie['title']; ?>">
                        <div class="card-body ">
                            <h5 class="card-title"><?php echo $movie['title']; ?></h5>
                            <span class="card-subtitle text-primary"><?php echo $movie['genre']; ?></span>
                            <p class="card-text"><?php echo $movie['description'] . $counter . "..."; ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo $movie['permalink']; ?>"> <button class="btn btn-success">Read More </button></a>
                        </div>
                    </div>

                <?php }  ?>


            </div>
        </div>



        <footer class="py-3 my-4 border-top ">
            <p class=" mb-0 text-muted text-center">© Copyright, all rights reserved</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>