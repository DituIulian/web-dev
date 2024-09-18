<!DOCTYPE html>
<html lang="en">

<?php require './includes/header.php'; ?>

<body>

    <div class="container ">
        <?php require './includes/nav-bar.php'; ?>
        <div class="row">
            <!-- PHP movies loop -->
            <?php foreach ($movies as $movie) { ?>
                <div class="col-md-4 mb-3 mt-3 movie-card" id="<?php echo $movie['id']; ?>">
                    <?php require './includes/archive-movie.php'; ?>
                </div>
            <?php } ?>
        </div>


        <?php require './includes/footer.php'; ?>
    </div>
</body>

</html>