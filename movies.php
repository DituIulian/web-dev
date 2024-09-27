<!DOCTYPE html>
<html lang="en">
<?php if (isset($_GET['movie_genre'])) {
    $genulCautat = $_GET['movie_genre']; ?>
    <title> <?PHP echo $genulCautat . " Movies"; ?></title>
<?php  } ?>

<?php require './includes/header.php'; ?>


<body>

    <?php require './includes/nav-bar.php'; ?>
    <?php $genres =
        json_decode(file_get_contents('./assets/json/movies-list-db.json'), true)['genres'];


    if (!empty($_GET['movie_genre'])) {
        // Movie By Genre Select select
        if (isset($_GET['movie_genre'])) {
            $movie_genre = $_GET['movie_genre'];
        } else {
            $movie_genre = '';
        }
        if (in_array($movie_genre, $genres)) {
            $filterdMovies = array_filter($movies, function ($movie) use ($movie_genre) {
                foreach ($movie['genres'] as $genDeFilm) {
                    if (stripos($genDeFilm, $movie_genre) !== false) {
                        return true;
                    }
                }
                return false;
            });
            if (!empty($filterdMovies)) {
                foreach ($filterdMovies as $filterdMovie) { ?>
                    <div class="row mt-2 border-bottom">
                        <div class="col-lg-3 col-md-6">
                            <img src="<?php echo ($filterdMovie['posterUrl']); ?>" alt="poster" class="img-fluid">
                        </div>
                        <div class="col-lg-9 col-md-6">
                            <h1><?php echo ($filterdMovie['title']); ?></h1>
                            <p> <?php echo check_old_movie($filterdMovie['year']); ?> </p>
                            <p><strong>Genres:</strong> <span class='badge bg-primary'><?php echo (implode(", ", $filterdMovie['genres'])); ?></span></p>
                            <p><?php echo runtimePrettier($filterdMovie['runtime']); ?></p>
                            <p><strong>Director:</strong> <?php echo ($filterdMovie['director']); ?></p>
                            <p><strong>Actors:</strong>
                                <?php $actorsList = explode(', ', $filterdMovie['actors']);
                                foreach ($actorsList as $actor) { ?>
                                    <li><?php echo $actor; ?> </li>
                                <?php }   ?>
                            </p>
                            <p><strong>Description:</strong>
                                <?php
                                $limitaCaractere = 100;
                                if (strlen($filterdMovie['plot']) <= $limitaCaractere && strlen($filterdMovie['plot']) != 0) {
                                    echo ($filterdMovie['plot']);
                                } else {
                                    $rezultatFix =  substr($filterdMovie['plot'], 0, $limitaCaractere);
                                    echo $rezultatFix . " ...";
                                }

                                ?>

                            </p>
                        </div>
                    </div>
            <?php   }
            }
        } else {
            echo "<h6>Genul <strong>" . $movie_genre . "</strong> nu a fost gasit. <h6>"; ?>
            <div class="row">
                <!-- PHP movies loop -->
                <?php foreach ($movies as $movie) { ?>
                    <div class="col-md-4 mb-3 mt-3 movie-card" id="<?php echo $movie['id']; ?>">
                        <?php require './includes/archive-movie.php'; ?>
                    </div>
                <?php } ?>
            </div>

        <?php    }
    } else {
        ?>
        <div class="row">
            <!-- PHP movies loop -->
            <?php foreach ($movies as $movie) { ?>
                <div class="col-md-4 mb-3 mt-3 movie-card" id="<?php echo $movie['id']; ?>">
                    <?php require './includes/archive-movie.php'; ?>
                </div>
            <?php } ?>
        </div>
    <?php } ?>


    <?php require './includes/footer.php'; ?>
    </div>
</body>

</html>