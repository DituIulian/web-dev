<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ditu Iulian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand navbar-dark bg-dark ">
            <a class="navbar-brand ms-4" href="#">DI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto me-4">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="movies.php">Movies</a>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mt-5 ">
                    <h2>Contacteaza-ma</h2>
                    <form>
                        <div class="mb-3 ">
                            <label for="fullname" class="form-label">Nume complet <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="fullname" name="fullname" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Numar de telefon</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subiect <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Mesaj <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Trimite</button>
                    </form>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12" style="position: relative;">
                    <div class="detalii-nume">
                        <h2>Ditu Iulian</h2>
                        <li style="background-color: white;"><span class="fw-bold">E-mail: </span>dituiulian@gmail.com</li>
                        <li><span class="fw-bold">Tel: </span>072* 365 ***</li>
                    </div>
                    <img class="img-fluid" src="https://tse2.mm.bing.net/th?id=OIG1.25wkbecoMQkBjGG6EnAl&pid=ImgGn" alt="">
                </div>
            </div>
        </div>


        <footer class="py-3 my-4 border-top">
            <p class=" mb-0 text-muted text-center">© Copyright, all rights reserved</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>