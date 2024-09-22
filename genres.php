<!DOCTYPE html>
<html lang="en">

<?php
$genres =  json_decode(file_get_contents('./assets/json/movies-list-db.json'), true)['genres'];    ?>
<?php require './includes/header.php'; ?>

<body>

    <?php require './includes/nav-bar.php'; ?>

    <?php


    foreach ($genres as $genre) { ?>
        <span class="butoane-genres"><a class='badge bg-primary ' href="movies.php?movie_genre=<?php echo $genre; ?>"> <?php echo $genre; ?> </a></span>


    <?php } ?>
















    <?php require './includes/footer.php'; ?>
    </div>
</body>


</html>