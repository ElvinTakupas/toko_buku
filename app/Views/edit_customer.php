<!-- app/Views/edit_customer.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan</title>
    <link href="<?= base_url('public/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('public/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9; /* Latar belakang yang lembut */
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 60px; /* Jarak dari atas */
        }

        .form-label {
            font-weight: 600;
            font-size: 1.1rem;
            color: #495057;
        }

        .form-control {
            border-radius: 0.375rem;
        }

        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
        }

        .btn-primary:hover {
            background-color: #2e59d9;
            border-color: #2e59d9;
        }

        .card {
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #4e73df;
            color: white;
            font-size: 1.5rem;
            padding: 10px 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        footer {
            background-color: #fff;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }

        footer .copyright {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .scroll-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 100;
            background-color: #4e73df;
            color: white;
            border-radius: 50%;
            padding: 10px;
            font-size: 20px;
        }

        .scroll-to-top:hover {
            background-color: #2e59d9;
        }

    </style>
</head>

    <!-- Begin Page Content -->
    <div class="container">
        <div class="card shadow-lg">
            <div class="card-header">
                <h4>Edit Pelanggan</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url('pelanggan/update_customer/' . $pelanggan['id']) ?>">
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?= esc($pelanggan['nama']) ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?= esc($pelanggan['alamat']) ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="text" name="telepon" id="telepon" class="form-control" value="<?= esc($pelanggan['telepon']) ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?= esc($pelanggan['email']) ?>" required>
                    </div>

                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/pelanggan" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <div class="copyright">
                <script>document.write(new Date().getFullYear());</script> - Dikembangkan oleh <b><a href="#">Elvin Suberjun</a></b>
            </div>
        </div>
    </footer>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="<?= base_url('public/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>
