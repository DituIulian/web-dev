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

    if (!empty($selectedMovie)) { ?>

        <div class="row gx-2">
            <div class="col-lg-3 col-md-6 mt-3 mb-3">
                <img src="<?php echo ($selectedMovie['posterUrl']); ?>" alt="poster" class="img-fluid">
            </div>
            <div class="col-lg-9 col-md-6 mt-3">
                <div class="row">
                    <div class="col-auto">
                        <h1><?php echo ($selectedMovie['title']); ?></h1>
                    </div>

                    <div class="col-auto">
                        <?php
                        $fav_movies = array();

                        $movie_fav_file_name = './assets/json/movie-favorites.json';
                        $fav_stats = json_decode(file_get_contents($movie_fav_file_name), true);

                        if (!$fav_stats) $fav_stats = array();



                        if (isset($_COOKIE['fav_movies'])) {
                            $fav_movies = json_decode($_COOKIE['fav_movies'], true);
                        } else {
                            $fav_movies = array();
                        }

                        if (isset($_POST['fav'])) {
                            if ($_POST['fav'] === "1" && !in_array($_GET['movie_id'], $fav_movies)) {
                                $fav_movies[] = $_GET['movie_id'];
                                if (array_key_exists($_GET['movie_id'], $fav_stats)) {
                                    $fav_stats[$_GET['movie_id']]++;
                                } else {
                                    $fav_stats[$_GET['movie_id']] = 1;
                                }
                            } elseif (($_POST['fav'] === "0" && in_array($_GET['movie_id'], $fav_movies))) {
                                if (($key = array_search($_GET['movie_id'], $fav_movies)) !== false) {
                                    unset($fav_movies[$key]);
                                    if ($fav_stats[$_GET['movie_id']] > 0)  $fav_stats[$_GET['movie_id']]--;
                                }
                            }
                            setcookie("fav_movies", json_encode($fav_movies), time() + (86400 * 30 * 12));
                            file_put_contents($movie_fav_file_name, json_encode($fav_stats));
                            header('Location:' . $_SERVER['REQUEST_URI']);
                        }

                        ?>

                        <form action="" method="POST">
                            <input name="fav" type="hidden" value="<?php echo (in_array($_GET['movie_id'], $fav_movies)) ? "0" : "1"; ?>">
                            <button type="submit" class="btn  <?php echo (in_array($_GET['movie_id'], $fav_movies)) ? "btn-danger" : "btn-success"; ?>">
                                <?php echo (in_array($_GET['movie_id'], $fav_movies)) ? "Sterge din favorite" : "Adauga la favorite"; ?>
                            </button>
                            <span class="badge bg-primary ">
                                <?php echo (isset($fav_stats[$_GET['movie_id']]) ? $fav_stats[$_GET['movie_id']] : 0); ?>
                            </span>
                        </form>
                    </div>
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

                <?php
                include './includes/comment-form.php';
                include './baza-de-date.php';


                // Afișăm toate review-urile pentru filmul curent
                $id_film = $_GET['movie_id'];  // ID-ul filmului din URL sau altă sursă
                $sql_select_reviews = "SELECT autor, comentariu, data FROM reviews WHERE id_film = ? ORDER BY data DESC limit 5";

                if ($stmt = mysqli_prepare($connection, $sql_select_reviews)) {
                    mysqli_stmt_bind_param($stmt, "i", $id_film);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div class='review'>";
                            echo "<strong>" . $row['autor'] . "</strong><br>";
                            echo "<p>" . $row['comentariu'] . "</p>";
                            echo "<small>Data: " . $row['data'] . "</small>";
                            echo "</div><hr>";
                        }
                    } else {
                        echo "<p>Nu exista inca review-uri pentru acest film.</p>";
                    }

                    mysqli_stmt_close($stmt);
                }
                ?>


            </div>
        </div>

        </div>

    <?php } else { ?>
        <p>Filmul nu a fost găsit.</p>
        <a href=" movies.php"><button class="btn btn-success">Go back</button></a>
    <?php } ?>






    <?php require './includes/footer.php'; ?>
</body>

</html>