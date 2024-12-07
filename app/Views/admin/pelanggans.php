<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan</title>
    <link href="<?= base_url('public/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('public/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }
        .btn-sm {
            font-size: 0.85rem;
        }
        h2 {
            text-align: center;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?= view('layout/header') ?>
<?= view('layout/sidebar') ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
<?= view('layout/navbar') ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar Pelanggan</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Pelanggan</li>
    </ol>
</div>

<!-- Tabel Daftar Pelanggan -->
<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Tanggal Daftar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($pelanggan)): ?>
                <?php foreach ($pelanggan as $customer): ?>
                    <tr>
                        <td><?= esc($customer['id']) ?></td>
                        <td><?= esc($customer['nama']) ?></td>
                        <td><?= esc($customer['alamat']) ?></td>
                        <td><?= esc($customer['telepon']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['tanggal_daftar']) ?></td>
                        <td>
                            <a href="<?= base_url('/edit_customer/' . $customer['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('/delete_customer/' . $customer['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pelanggan ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" class="text-center text-muted">Belum ada pelanggan yang tersedia.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<a href="<?= base_url('pelanggan/tambah_customer') ?>" class="btn btn-success mb-3">Tambah Pelanggan</a>

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <script>document.write(new Date().getFullYear());</script> - Dikembangkan oleh <b><a href="img/boy.pngs.jpg">Elvin Suberjun</a></b>
        </div>
    </div>
</footer>
<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script src="<?= base_url('public/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('public/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
<script src="<?= base_url('public/js/ruang-admin.min.js'); ?>"></script>
</body>
</html>
