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

    <?php
    $autor = 'DI';
    ?>

    <div class="container">
        <nav class="navbar navbar-expand navbar-dark bg-dark ">
            <a class="navbar-brand ms-4" href="https://youtu.be/tVj0ZTS4WF4?t=46"><?php echo $autor; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto me-4">
                    <li class="nav-item active">
                        <a class="nav-link text-success" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="movies.php">Movies</a>
                    </li>
                </ul>
            </div>
        </nav>

        <img class="img-fluid col-12 " src="https://tse2.mm.bing.net/th?id=OIG3.VY5b2QeMz6B4.yXyUJWR&pid=ImgGn" alt="background-img">

        <footer class="py-3 my-4 border-top">
            <p class=" mb-0 text-muted text-center"><?php echo $autor; ?> ©Copyright, all rights reserved</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>