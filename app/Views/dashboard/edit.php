<!-- app/Views/books/edit.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link href="<?= base_url('public/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('public/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <style>
        .form-group label {
            font-weight: bold;
        }

        .btn-custom {
            background-color: #28a745;
            color: white;
        }

        .btn-custom:hover {
            background-color: #218838;
            color: white;
        }

        .card {
            margin-top: 20px;
        }

        .breadcrumb {
            background-color: #f8f9fc;
            border-radius: 5px;
            padding: 10px;
        }

        .breadcrumb-item a {
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: #6c757d;
        }

        .header-title {
            font-size: 1.75rem;
            font-weight: bold;
            color: #4e73df;
        }

        .card-header {
            background-color: #f8f9fc;
            border-bottom: 2px solid #4e73df;
        }

        .form-control {
            border-radius: 0.5rem;
            box-shadow: none;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .btn-block {
            background-color: #4e73df;
            color: white;
            font-weight: bold;
            border-radius: 0.5rem;
            padding: 10px;
        }

        .btn-block:hover {
            background-color: #2e59d9;
        }

        .container {
            margin-top: 20px;
        }
    </style>
</head>

        <!-- Edit Form -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Edit Buku</h6>
            </div>
            <div class="card-body">
                <form action="<?= base_url('books/update/' . $book['id']) ?>" method="post">
                    <div class="form-group">
                        <label for="judul">Judul Buku</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= esc($book['judul']) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?= esc($book['penulis']) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= esc($book['penerbit']) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun_terbit">Tahun Terbit</label>
                        <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?= esc($book['tahun_terbit']) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="<?= esc($book['harga']) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" value="<?= esc($book['stok']) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" value="<?= esc($book['kategori']) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required><?= esc($book['deskripsi']) ?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block">Update Buku</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= base_url('public/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>
