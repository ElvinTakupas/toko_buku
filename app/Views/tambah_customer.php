<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
    <link href="<?= base_url('public/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('public/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <style>
        .badge-success {
            background-color: #28a745 !important;
        }
        .badge-warning {
            background-color: #ffc107 !important;
        }
        .badge-danger {
            background-color: #dc3545 !important;
        }
        .table td,
        .table th {
            vertical-align: middle;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fc;
        }
        .container {
            margin-top: 30px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #4e73df;
            color: white;
            border-radius: 10px 10px 0 0;
            padding: 15px;
            text-align: center;
            font-size: 1.5rem;
        }
        .form-control {
            border-radius: 5px;
            box-shadow: none;
            border: 1px solid #ccc;
        }
        .btn-primary {
            background-color: #4e73df;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
        }
        .btn-primary:hover,
        .btn-secondary:hover {
            opacity: 0.8;
        }
        footer {
            padding: 10px 0;
            text-align: center;
            font-size: 0.9rem;
            background-color: #ffffff;
            border-top: 1px solid #ddd;
        }
        .footer-link {
            color: #4e73df;
            text-decoration: none;
        }
        .footer-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h4>Tambah Pelanggan</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?= base_url('pelanggan'); ?>">
                            <?= csrf_field() ?>
                            
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" value="<?= old('nama'); ?>" required>
                                <?php if (isset($errors['nama'])): ?>
                                    <div class="text-danger"><?= esc($errors['nama']); ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" value="<?= old('alamat'); ?>" required>
                                <?php if (isset($errors['alamat'])): ?>
                                    <div class="text-danger"><?= esc($errors['alamat']); ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input type="text" name="telepon" id="telepon" class="form-control" value="<?= old('telepon'); ?>" required>
                                <?php if (isset($errors['telepon'])): ?>
                                    <div class="text-danger"><?= esc($errors['telepon']); ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="<?= old('email'); ?>" required>
                                <?php if (isset($errors['email'])): ?>
                                    <div class="text-danger"><?= esc($errors['email']); ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?= base_url('pelanggan'); ?>" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; <script>document.write(new Date().getFullYear());</script> - Dikembangkan oleh <b><a href="img/boy.pngs.jpg" class="footer-link">Elvin Suberjun</a></b></p>
    </footer>

    <script src="<?= base_url('public/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('public/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <script src="<?= base_url('public/js/ruang-admin.min.js'); ?>"></script>

</body>

</html>
