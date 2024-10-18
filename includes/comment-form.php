<div class="container">
    <h2>Lasa un comentariu</h2>
    <p><span class="text-danger">* Campuri obligatorii</span></p>

    <form method="post" action="" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="nume" class="form-label">Nume <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="nume" name="nume" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="comment" class="form-label">Comentariu</label>
            <textarea class="form-control" id="comment" name="comment" rows="5" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Sunt de acord cu procesarea datelor cu caracter personal <span class="text-danger">*</span></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gdpr" id="gdprDa" value="Da" required>
                <label class="form-check-label" for="gdprDa">Da</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gdpr" id="gdprNu" value="Nu" required>
                <label class="form-check-label" for="gdprNu">Nu</label>
            </div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Trimite</button>
    </form>

    <!-- <h3>Comentarii</h3>
    <?php if ($result->num_rows > 0): ?>
        <ul class="list-unstyled">
            <?php while ($row = $result->fetch_assoc()): ?>
                <li>
                    <strong><?php echo htmlspecialchars($row['name']); ?></strong>
                    <p><?php echo htmlspecialchars($row['comment']); ?></p>
                    <small>Comentariul a fost postat pe <?php echo htmlspecialchars($row['created_at']); ?></small>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>Nu sunt comentarii pentru acest film.</p>
    <?php endif; ?> -->

</div>