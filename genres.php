<!DOCTYPE html>
<html lang="en">

<?php
$genres =  json_decode(file_get_contents('./assets/json/movies-list-db.json'), true)['genres'];    ?>
<?php require './includes/header.php'; ?>

<body>

    <?php require './includes/nav-bar.php'; ?>



    <div class="row mt-2 ">
        <?php foreach ($genres as $genre) { ?>
            <div class="col-12 col-lg-4 col-md-6 col-sm-4 mb-3">
                <a class='btn btn-outline-primary d-block d-flex h-100 align-itmes-center justify-content-center text-center' href="movies.php?movie_genre=<?php echo $genre; ?>"> <?php echo $genre; ?> </a>
            </div>

        <?php } ?>
    </div>
















    <?php require './includes/footer.php'; ?>
    </div>
</body>


</html>