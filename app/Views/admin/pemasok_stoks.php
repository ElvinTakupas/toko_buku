<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pemasok Stok</title>
    <!-- Link ke CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Daftar Pemasok Stok</h2>
    <!-- Tabel Daftar Pemasok Stok -->
    <table class="table table-striped table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama Pemasok</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Stok Buku</th>
                <th>Buku</th>
                <th>Aksi</th> <!-- Tambahkan kolom aksi -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pemasok_stok as $supplier): ?>
                <tr>
                    <td><?= $supplier['id'] ?></td>
                    <td><?= $supplier['nama_pemasok'] ?></td>
                    <td><?= $supplier['alamat'] ?></td>
                    <td><?= $supplier['telepon'] ?></td>
                    <td><?= $supplier['email'] ?></td>
                    <td><?= $supplier['stok_buku'] ?></td>
                    <td><?= $supplier['buku_id'] ?></td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="<?= base_url('dashboard/edit_supplier/' . $supplier['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <!-- Tombol Delete -->
                        <a href="<?= base_url('dashboard/delete_supplier/' . $supplier['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this supplier?')">Delete</a>
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
