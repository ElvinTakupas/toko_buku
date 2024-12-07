<div class="col-md-6">
    <h4>Buku Terbaru</h4>
    <ul class="list-group">
        <?php if (!empty($latestBooks)): ?>
            <?php foreach ($latestBooks as $book): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= esc($book['judul']) ?>
                    <span class="badge bg-primary"><?= date('d M Y', strtotime($book['created_at'])) ?></span>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li class="list-group-item">Tidak ada buku terbaru.</li>
        <?php endif; ?>
    </ul>
</div>
