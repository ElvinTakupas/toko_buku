<!-- app/Views/categories/add.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Pesanan</title>
    <link href="<?= base_url('public/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('public/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang lembut */
        }
        .main-container {
            margin-top: 100px; /* Mengatur jarak tabel dari navbar */
        }
        .table th, .table td {
            vertical-align: middle; /* Menjaga teks tetap di tengah */
            text-align: center;
        }
        .btn-sm {
            font-size: 0.9rem;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .container h1 {
            color: #333;
            font-weight: bold;
            text-align: center; /* Memusatkan judul */
        }
        .alert {
            margin-top: 20px; /* Jarak antara notifikasi dan konten */
        }
        .table-responsive {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
            border-radius: 8px; /* Membulatkan sudut tabel */
            overflow: hidden;
        }
        .btn {
            margin: 5px;
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
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
                </ol>
            </div>
    <!-- Tampilkan notifikasi sukses atau error -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php elseif (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <!-- Tabel Kategori -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Kategori</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($categories) && count($categories) > 0): ?>
                    <?php foreach ($categories as $category): ?>
                        <tr>
                            <td><?= $category['id'] ?></td>
                            <td><?= $category['nama_kategori'] ?></td>
                            <td><?= $category['deskripsi'] ?></td>
                            <td>
                                <a href="/categories/edit/<?= $category['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/categories/delete/<?= $category['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center text-muted">Belum ada kategori yang tersedia.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Form Tambah Kategori -->
<div class="container mt-4">
    <form action="/categories/add" method="post">
        <div class="mb-3">
            <label for="nama_kategori" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!-- Row ends -->

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
          <script>document.write(new Date().getFullYear());</script> - Dikembangkan oleh <b><a href="img/boy.pngs.jpg">Elvin Suberjun</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>