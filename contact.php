<?php require './includes/header.php'; ?>

<body>

    <?php require './includes/nav-bar.php'; ?>


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

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="detalii-nume">
                    <h2>Ditu Iulian</h2>
                    <li style="background-color: white;"><span class="fw-bold">E-mail: </span>dituiulian@gmail.com</li>
                    <li><span class="fw-bold">Tel: </span>072* 365 ***</li>
                </div>
                <img class="img-fluid" src="https://tse2.mm.bing.net/th?id=OIG1.25wkbecoMQkBjGG6EnAl&pid=ImgGn" alt="">
            </div>
        </div>
    </div>


    <?php require './includes/footer.php'; ?>
</body>

</html>