<?php
$connect = db_connect();
$review_data = array(
    'show_reviews_form
' => false,

);

if (!$connect) {
    die("Connection failed" . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS reviews (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    movie_id BIGINT(20) UNSIGNED NOT NULL,
    full_name tinytext NOT NULL,
    email VARCHAR(255) NOT NULL,
    review TEXT NOT NULL,
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";


if (mysqli_query($connect, $sql)) {
    $review_data['show_reviews_form'] = true;

    $sql = "SELECT full_name, email, review, data FROM reviews WHERE movie_id = " . $_GET['movie_id'];
    $reviews_list = mysqli_query($connect, $sql);

    $review_data['count'] = mysqli_num_rows($reviews_list);
    $reviews_emails = [];
    if ($review_data['count'] > 0) {
        $review_data['list'] = mysqli_fetch_all($reviews_list, MYSQLI_ASSOC);
        $reviews_emails = array_column($review_data['list'], 'email');
    }


    if (isset($_POST['reviews_form'])) {
        if (isset($reviews_emails) && in_array($_POST['email'], $reviews_emails)) {
            $review_data['alert'] = 'danger';
            $review_data['message'] = 'Se pare ca ai lasat deja un review pentru acest film.';
        } else {
            $movie_id = mysqli_real_escape_string($connect, $_GET['movie_id']);
            $full_name = mysqli_real_escape_string($connect, $_POST['full_name']);
            $email = mysqli_real_escape_string($connect, $_POST['email']);
            $review = mysqli_real_escape_string($connect, $_POST['review']);
            $sql = "INSERT INTO reviews(movie_id, full_name , email , review)
            VALUES ('" . $movie_id . "', '" . $full_name . "' , '" . $email . "', '" . $review . "')";

            if (mysqli_query($connect, $sql)) {
                //daca review a fost adaugat in baza de date cu succes
                $review_data['show_reviews_form'] = false;
                $review_data['alert'] = 'success';
                $review_data['message'] = 'Formularul a fost trimis cu succes.';
                $review_data['list'][] = array(
                    'full_name' => $_POST['full_name'],
                    'email' => $_POST['email'],
                    'review' => $_POST['review'],
                    'data' => "Just now"
                );
                $review_data['count']++;
            } else {
                $review_data['alert'] = 'danger';
                $review_data['message'] = 'A aparut o eroare. Review-ul nu a putut fi adaugat.';
            }
        }
    }
}


if (isset($review_data['message']) && isset($review_data['alert'])) {
?>

    <div class="alert my-3 alert-<?php echo $review_data['alert']; ?>" role="alert">
        <?php
        echo $review_data['message'];
        ?>
    </div>

<?php
}
if ($review_data['show_reviews_form'] == true) { ?>
    <div class="my-3 p-3 bg-light border">
        <div class="mb-3 pb-3 border-bottom">
            <?php
            if ($review_data['count'] > 0) {
                echo "Lasa un review pentru acest film";
            } else {
                echo "Fii primul care lasa un review pentru acest film";
            }
            ?>
        </div>

        <form action="" method="POST">
            <div class="mb-3">
                <label for="full_name">Full Name</label><br>
                <input type="text" class="form-control" placeholder="Name" id="full_name" name="full_name" value="<?php if (isset($_POST['full_name'])) echo $_POST['full_name']; ?>" required>
            </div>
            <div class=" mb-3">
                <label for="email">Email</label><br>
                <input type="email" class="form-control" placeholder="E-mail" id="email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="review">Review</label><br>
                <textarea class="form-control" id="review" placeholder="Review" name="review" required><?php if (isset($_POST['review'])) echo $_POST['review']; ?></textarea>
            </div>

            <div class="mb-3">
                <input type="checkbox" id="acceptance" name="acceptance" value="acceptance" required>
                <label for="acceptance">Sunt de acord cu procesarea datelor cu caracter personal.</label>
            </div>

            <input type="submit" class="btn btn-primary" name="reviews_form" value="Trimite">

        </form>
    </div>
<?php
}
?>
<?php
if (isset($review_data['count']) && $review_data['count'] > 0) { ?>

    <div class="h4 mt-4">
        Reviews
    </div>
    <?php
    foreach (array_reverse($review_data['list']) as $review) { ?>
        <div class="my-3 p-3 border">
            <div class="fw-bold pb-3 mb-3 border-bottom">
                <?php echo   $review['full_name']; ?>
            </div>
            <?php echo $review['review'];
            echo "<br>  <br> ";
            echo $review['data'];
            ?>
        </div>

    <?php } ?>

<?php } ?>