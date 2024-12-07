<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Pesanan</title>
    <link href="<?= base_url('public/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('public/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
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
                    <li class="breadcrumb-item active" aria-current="page">pesanan</li>
                </ol>
            </div>
        <!-- Tabel Pesanan -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>ID Pembeli</th>
                        <th>Total Harga</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($pesanan) && count($pesanan) > 0): ?>
                        <?php foreach ($pesanan as $order): ?>
                            <tr>
                                <td><?= esc($order['id']) ?></td>
                                <td><?= esc($order['id_pembeli']) ?></td>
                                <td>Rp <?= number_format($order['total_harga'], 0, ',', '.') ?></td>
                                <td><?= esc($order['jumlah']) ?></td>
                                <td>
                                    <span class="badge 
                                        <?= $order['status'] === 'Pending' ? 'bg-warning text-dark' : ($order['status'] === 'Dikirim' ? 'bg-info text-dark' : 'bg-success') ?>">
                                        <?= esc($order['status']) ?>
                                    </span>
                                </td>
                                <td>
                                    <a href="<?= base_url('dashboard/edit_pesanan/' . $order['id']) ?>" class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="<?= base_url('dashboard/delete_pesanan/' . $order['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirmDelete()">
                                        <i class="fas fa-trash"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <!-- Data Dummy jika $pesanan kosong -->
                        <tr>
                            <td>1</td>
                            <td>101</td>
                            <td>Rp 150.000</td>
                            <td>2</td>
                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>102</td>
                            <td>Rp 300.000</td>
                            <td>4</td>
                            <td><span class="badge bg-info text-dark">Dikirim</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>103</td>
                            <td>Rp 75.000</td>
                            <td>1</td>
                            <td><span class="badge bg-success">Selesai</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>104</td>
                            <td>Rp 200.000</td>
                            <td>3</td>
                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>105</td>
                            <td>Rp 400.000</td>
                            <td>5</td>
                            <td><span class="badge bg-info text-dark">Dikirim</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

         <!-- Tabel Pesanan -->
         <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>ID Pembeli</th>
                        <th>Total Harga</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($pesanan) && count($pesanan) > 0): ?>
                        <?php foreach ($pesanan as $order): ?>
                            <tr>
                                <td><?= esc($order['id']) ?></td>
                                <td><?= esc($order['id_pembeli']) ?></td>
                                <td>Rp <?= number_format($order['total_harga'], 0, ',', '.') ?></td>
                                <td><?= esc($order['jumlah']) ?></td>
                                <td>
                                    <span class="badge 
                                        <?= $order['status'] === 'Pending' ? 'bg-warning text-dark' : ($order['status'] === 'Dikirim' ? 'bg-info text-dark' : 'bg-success') ?>">
                                        <?= esc($order['status']) ?>
                                    </span>
                                </td>
                                <td>
                                    <a href="<?= base_url('orders/edit/' . $order['id']) ?>" class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="<?= base_url('orders/delete/' . $order['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirmDelete()">
                                        <i class="fas fa-trash"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data pesanan.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>

        <!-- Form Tambah Pesanan -->
        <h2 class="mt-5">Tambah Pesanan Baru</h2>
        <form action="<?= base_url('/orders/create') ?>" method="POST">
            <?= csrf_field() ?> <!-- Add CSRF protection -->
            <div class="mb-3">
                <label for="idPembeli" class="form-label">ID Pembeli:</label>
                <input type="text" class="form-control" id="idPembeli" name="id_pembeli" placeholder="Masukkan ID Pembeli" required>
            </div>
            <div class="mb-3">
                <label for="totalHarga" class="form-label">Total Harga:</label>
                <input type="text" class="form-control" id="totalHarga" name="total_harga" placeholder="Masukkan Total Harga" required>
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah:</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah Barang" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="Pending">Pending</option>
                    <option value="Dikirim">Dikirim</option>
                    <option value="Selesai">Selesai</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Pesanan</button>
      <!-- Footer -->
    </div>
  </div>

    <!-- Bootstrap JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
    <script>
        function confirmDelete() {
            return confirm('Apakah Anda yakin ingin menghapus pesanan ini?');
        }
    </script>
</body>
</html>
