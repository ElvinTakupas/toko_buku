<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Promosi Diskon</title>
    <!-- Link ke CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Daftar Promosi Diskon</h2>
    <!-- Tabel Daftar Promosi Diskon -->
    <table class="table table-striped table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Kode Promosi</th>
                <th>Deskripsi</th>
                <th>Diskon</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Berakhir</th>
                <th>Aksi</th> <!-- Tambahkan kolom aksi -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($promosi_diskon as $promo): ?>
                <tr>
                    <td><?= $promo['id'] ?></td>
                    <td><?= $promo['kode_promosi'] ?></td>
                    <td><?= $promo['deskripsi'] ?></td>
                    <td><?= $promo['diskon'] ?>%</td>
                    <td><?= $promo['mulai'] ?></td>
                    <td><?= $promo['berakhir'] ?></td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="<?= base_url('dashboard/edit_promo/' . $promo['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <!-- Tombol Delete -->
                        <a href="<?= base_url('dashboard/delete_promo/' . $promo['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this promotion?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Script Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
