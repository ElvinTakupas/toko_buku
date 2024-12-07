<div class="col-md-6">
    <h4>Buku Terlaris</h4>
    <ul class="list-group">
        <?php if (!empty($topSellingBooks)): ?>
            <?php foreach ($topSellingBooks as $book): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= esc($book['judul']) ?>
                    <span class="badge bg-success">Stok: <?= $book['stok'] ?></span>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li class="list-group-item">Tidak ada buku terlaris.</li>
        <?php endif; ?>
    </ul>
</div>
