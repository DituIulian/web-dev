<?php
require_once './includes/functions.php';

$connection = dbConnect();


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['checkbox_name'])) {
    $autor = $_POST['autor'];
    $email = $_POST['email'];
    $comentariu = $_POST['comentariu'];
    $id_film = $_GET['movie_id'];


    if (!empty($autor) && !empty($comentariu)) {

        $sql_insert = "INSERT INTO reviews (id_film, autor, email, comentariu) VALUES (?, ?, ?, ?)";
        if ($stmt = mysqli_prepare($connection, $sql_insert)) {
            mysqli_stmt_bind_param($stmt, "isss", $id_film, $autor, $email, $comentariu);

            if (mysqli_stmt_execute($stmt)) {

                echo '<div class="alert alert-success" role="alert">
                        Formularul a fost transmis cu succes!
                      </div>';

                $show_form = false;
            } else {
                echo "Eroare la inserarea în baza de date: " . mysqli_error($connection);
            }

            mysqli_stmt_close($stmt);
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Te rugăm să completezi toate câmpurile obligatorii.
              </div>';
    }
}


if (!isset($show_form) || $show_form !== false) {
?>
    <div class="container d-flex">
        <form method="POST" action="">
            <input type="hidden" name="id_film" value="<?php echo $id_film; ?>">
            <input type="text" name="autor" placeholder="Numele tău" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <textarea name="comentariu" placeholder="Comentariul tău" required></textarea>
            <input type="checkbox" name="checkbox_name" required>
            <label for="checkbox_name">Sunt de acord cu procesarea datelor cu caracter personal.</label><br>
            <button type="submit">Trimite review</button>
        </form>
    </div>
<?php
}
?>