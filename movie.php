<!DOCTYPE html>
<html lang="en">

<?php require './includes/header.php'; ?>

<body>
    <?php require './includes/nav-bar.php';  ?>

    <?php

    // Movie By ID select
    if (isset($_GET['movie_id'])) {
        $movie_id = (int)$_GET['movie_id'];
    } else {
        $movie_id = '';
    }


    $selectedMovie = [];
    foreach ($movies as $movie) {
        if ($movie['id'] === $movie_id) {
            $selectedMovie = $movie;
        }
    }
    ?>


    <?php if (!empty($selectedMovie)) { ?>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <img src="<?php echo ($selectedMovie['posterUrl']); ?>" alt="poster" class="img-fluid">
            </div>
            <div class="col-lg-9 col-md-6">
                <h1><?php echo ($selectedMovie['title']); ?></h1>
                <p> <?php echo check_old_movie($selectedMovie['year']); ?> </p>
                <p><strong>Genres:</strong>
                    <span class='badge bg-primary'> <?php echo implode(", ", $selectedMovie['genres']); ?>
                    </span>
                </p>
                <p><?php echo runtimePrettier($selectedMovie['runtime']); ?></p>
                <p><strong>Director:</strong> <?php echo ($selectedMovie['director']); ?></p>
                <p><strong>Actors:</strong>
                    <?php $actorsList = explode(', ', $selectedMovie['actors']);
                    foreach ($actorsList as $actor) { ?>
                        <li><?php echo $actor; ?> </li>
                    <?php }   ?>
                </p>
                <p><strong>Description:</strong> <?php echo ($selectedMovie['plot']); ?></p>
            </div>
        </div>

    <?php } else { ?>
        <p>Filmul nu a fost găsit.</p>
        <a href="movies.php"><button class="btn btn-success">Go back</button></a>
    <?php } ?>



    <?php require './includes/footer.php'; ?>
</body>

</html