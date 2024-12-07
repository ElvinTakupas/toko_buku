<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
    <link href="<?= base_url('public/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('public/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fa;
            font-family: 'Arial', sans-serif;
        }

        .main-container {
            margin-top: 50px;
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .form-control {
            border-radius: 0.5rem;
            box-shadow: none;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            border-radius: 0.5rem;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            border-radius: 0.5rem;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .table-responsive {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            background-color: white;
            padding: 20px;
        }

        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin-bottom: 20px;
        }

        .breadcrumb-item a {
            color: #5a5a5a;
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: #6c757d;
        }

        .sticky-footer {
            background-color: #ffffff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .scroll-to-top {
            position: fixed;
            bottom: 50px;
            right: 50px;
            font-size: 24px;
            background-color: #007bff;
            color: white;
            border-radius: 50%;
            padding: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .scroll-to-top:hover {
            background-color: #0056b3;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container main-container">
        <div class="table-responsive">
            <form action="/categories/update/<?= $category['id'] ?>" method="post">
                <h4 class="mb-4 text-primary">Edit Kategori</h4>
                <div class="mb-3">
                    <label for="nama_kategori" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="<?= esc($category['nama_kategori']) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?= esc($category['deskripsi']) ?></textarea>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="/categories" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>

    <footer class="sticky-footer bg-white">
        <div class="container text-center">
            <span> &copy; <script>document.write(new Date().getFullYear());</script> Dikembangkan oleh <a href="#">Elvin Suberjun</a></span>
        </div>
    </footer>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="<?= base_url('public/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('public/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <script src="<?= base_url('public/js/ruang-admin.min.js'); ?>"></script>

</body>

</html>
