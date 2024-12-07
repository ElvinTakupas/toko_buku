<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Statistik</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Menambahkan FontAwesome -->
</head>
<body>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Laporan Statistik</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/laporan-statistik">Laporan Statistik</a></li>
            <li class="breadcrumb-item active">Laporan Statistik</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-line me-1"></i>
                Laporan Statistik
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Periode</th>
                            <th>Total Penjualan</th>
                            <th>Total Pendapatan</th>
                            <th>Dibuat Pada</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($laporan) && is_array($laporan)): ?>
                            <?php foreach ($laporan as $statistik): ?>
                                <tr>
                                    <td><?= esc($statistik['periode']) ?></td>
                                    <td><?= esc($statistik['total_penjualan']) ?></td>
                                    <td>Rp <?= number_format($statistik['total_pendapatan'], 2, ',', '.') ?></td>
                                    <td><?= esc($statistik['created_at']) ?></td>
                                    <td>
                                        <!-- Tombol Edit -->
                                        <a href="/laporan-statistik/edit/<?= $statistik['id'] ?>" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <!-- Tombol Delete -->
                                        <a href="/laporan-statistik/delete/<?= $statistik['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus laporan ini?');">
                                            <i class="fas fa-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data tersedia</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <a href="/laporan-statistik/add" class="btn btn-primary">Tambah Laporan/Statistik</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
