<!DOCTYPE html>
<html lang="en">

<?php if (isset($_GET['FRAZA_DE_CAUTARE'])) {
    $frazaCautata = $_GET['FRAZA_DE_CAUTARE'];
} ?>
<title>Search results for: <?PHP echo $frazaCautata; ?></title>

<?php require './includes/header.php'; ?>

<body>



    <?php require './includes/nav-bar.php'; ?>


    <?php if (empty($_GET['FRAZA_DE_CAUTARE'])) {
        echo "You came here by mistake <br>";
        echo " <a href='./movies.php'> <button class='btn btn-success'>Back to <strong> Movies </strong> </button></a>";
    } else { ?>
        <h6> Search result for: </h6>
        <form class="form.php" id="form_php" action="http://ditu-iulian.local/demo-php/search-results.php" method="get">
            <input placeholder="Movie name" type="name" name="FRAZA_DE_CAUTARE" value="<?php echo $frazaCautata; ?>" />
            <input type="submit" value="Search" />
        </form>
    <?php } ?>

    <?php


    if (strlen($frazaCautata) <= 2) {
        echo "You need to insert at least 3 chars";
    } else {
        $rezultate = array_filter($movies,  function ($movie) use ($frazaCautata) {
            return stripos($movie['title'], $frazaCautata) !== false;
        });
        if (!empty($rezultate) && strlen($frazaCautata) != 0) {
            foreach ($rezultate as $rezultat) { ?>
                <div class="row mt-2 border-bottom">
                    <div class="col-lg-3 col-md-6">
                        <img src="<?php echo ($rezultat['posterUrl']); ?>" alt="poster" class="img-fluid">
                    </div>
                    <div class="col-lg-9 col-md-6">
                        <h1><?php echo ($rezultat['title']); ?></h1>
                        <p> <?php echo check_old_movie($rezultat['year']); ?> </p>
                        <p><strong>Genres:</strong> <span class='badge bg-primary'><?php echo (implode(", ", $rezultat['genres'])); ?></span></p>
                        <p><?php echo runtimePrettier($rezultat['runtime']); ?></p>
                        <p><strong>Director:</strong> <?php echo ($rezultat['director']); ?></p>
                        <p><strong>Actors:</strong>
                            <?php $actorsList = explode(', ', $rezultat['actors']);
                            foreach ($actorsList as $actor) { ?>
                                <li><?php echo $actor; ?> </li>
                            <?php }   ?>
                        </p>
                        <p><strong>Description:</strong>
                            <?php
                            $limitaCaractere = 100;
                            if (strlen($rezultat['plot']) <= $limitaCaractere && strlen($rezultat['plot']) != 0) {
                                echo ($rezultat['plot']);
                            } else {
                                $rezultatFix =  substr($rezultat['plot'], 0, $limitaCaractere);
                                echo $rezultatFix . " ...";
                            }

                            ?>

                        </p>
                    </div>
                </div>
    <?php    }
        } else {
            echo "No results found. Please try again.";
        }
    }



    ?>



    <?php require './includes/footer.php'; ?>
    </div>
</body>


</html>