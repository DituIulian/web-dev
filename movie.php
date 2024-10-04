<!DOCTYPE html>
<html lang="en">
<?php require './includes/header.php'; ?>

<body>
    <?php require './includes/nav-bar.php'; ?>

    <?php


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


    if (isset($_COOKIE['favorites'])) {
        $favorites = json_decode($_COOKIE['favorites'], true);
    } else {
        $favorites = [];
    }


    if (!is_array($favorites)) {
        $favorites = [];
    }

    $isFavorite = in_array($movie_id, $favorites);

    $favoritesMoviesJson = './assets/json/movie-favorites.json';


    if (!file_exists($favoritesMoviesJson)) {
        file_put_contents($favoritesMoviesJson, json_encode([]));
    }

    $jsonData = file_get_contents($favoritesMoviesJson);
    if ($jsonData !== false) {
        $favoritesData = json_decode($jsonData, true);
    } else {
        $favoritesData = [];
    }


    if (isset($favoritesData[$movie_id])) {
        $favoritesCount = $favoritesData[$movie_id];
    } else {
        $favoritesCount = 0;
    }


    if (!empty($selectedMovie)) { ?>

        <div class="row gx-2">
            <div class="col-lg-3 col-md-6 mt-3">
                <img src="<?php echo ($selectedMovie['posterUrl']); ?>" alt="poster" class="img-fluid">
            </div>
            <div class="col-lg-9 col-md-6 mt-3">
                <div class="d-flex">
                    <h1><?php echo ($selectedMovie['title']); ?></h1>

                    <form class="m-2" method="post" action="">
                        <input type="hidden" name="favorite_action" value="<?php echo $isFavorite ? 0 : 1; ?>">
                        <input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>">
                        <button class="btn btn-outline-<?php echo $isFavorite ? 'danger' : 'primary'; ?>" type="submit">
                            <?php echo $isFavorite ? 'Sterge din favorite' : 'Adauga la favorite'; ?>
                        </button>

                        <span class="badge bg-info ms-2"><?= $favoritesCount ?> adaugari</span>
                    </form>
                </div>

                <p><?php echo check_old_movie($selectedMovie['year']); ?></p>
                <p><strong>Genres:</strong>
                    <span class='badge bg-primary'><?php echo implode(", ", $selectedMovie['genres']); ?></span>
                </p>
                <p><?php echo runtimePrettier($selectedMovie['runtime']); ?></p>
                <p><strong>Director:</strong> <?php echo ($selectedMovie['director']); ?></p>
                <p><strong>Actors:</strong>
                <ul>
                    <?php foreach (explode(', ', $selectedMovie['actors']) as $actor) { ?>
                        <li><?php echo $actor; ?></li>
                    <?php } ?>
                </ul>
                </p>
                <p><strong>Description:</strong> <?php echo ($selectedMovie['plot']); ?></p>
            </div>
        </div>

    <?php } else { ?>
        <p>Filmul nu a fost găsit.</p>
        <a href="movies.php"><button class="btn btn-success">Go back</button></a>
    <?php } ?>

    <?php


    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['favorite_action'], $_POST['movie_id'])) {
        $movie_id = (int)$_POST['movie_id'];
        $action = (int)$_POST['favorite_action'];


        if ($action === 1 && !in_array($movie_id, $favorites)) {
            $favorites[] = $movie_id;

            if (isset($favoritesData[$movie_id])) {
                $favoritesData[$movie_id]++;
            } else {
                $favoritesData[$movie_id] = 1;
            }
        } elseif ($action === 0) {
            $favorites = array_diff($favorites, [$movie_id]);


            if (isset($favoritesData[$movie_id]) && $favoritesData[$movie_id] > 0) {
                $favoritesData[$movie_id]--;
            }
        }


        setcookie('favorites', json_encode($favorites), time() + (86400 * 365), "/");


        file_put_contents($favoritesMoviesJson, json_encode($favoritesData));


        header('Location: movie.php?movie_id=' . $movie_id);
        exit;
    }
    ?>

    <?php require './includes/footer.php'; ?>
</body>

</html>