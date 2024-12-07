<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Customer</title>
    <link href="<?= base_url('public/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('public/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
</head>

<body>
    <?= view('layout/header') ?>
    <?= view('layout/sidebar') ?>
    <div class="container-fluid" id="container-wrapper">
        <?= view('layout/navbar') ?>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Customer</li>
            </ol>
        </div>

        <!-- Flash Messages -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success'); ?>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('errors'); ?>
            </div>
        <?php endif; ?>

        <!-- Form Tambah Customer -->
        <h2 class="mt-5">Tambah Customer Baru</h2>
        <form action="<?= base_url('/pelanggan/tambah_customer') ?>" method="POST">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap:</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label">Nomor Telepon:</label>
                <input type="tel" class="form-control" id="telepon" name="telepon" placeholder="Masukkan Nomor Telepon" pattern="[0-9]{10,13}" required>
                <small class="form-text text-muted">Masukkan nomor telepon tanpa spasi (10-13 digit).</small>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Lengkap" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Customer</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="<?= base_url('public/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('public/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('public/js/ruang-admin.min.js') ?>"></script>
</body>

</html>
