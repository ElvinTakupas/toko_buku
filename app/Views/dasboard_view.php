<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Dashboard Toko Buku" />
    <meta name="author" content="Toko Buku" />
    <title>Dashboard - Toko Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?= base_url('css/styles.css') ?>" rel="stylesheet" />
</head>
<body>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>

        <!-- Tabel Promosi & Diskon -->
        <div class="card mb-4">
            <div class="card-header">Promosi & Diskon</div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Kode Promosi</th>
                            <th>Deskripsi</th>
                            <th>Diskon (%)</th>
                            <th>Periode</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($promosi_diskon as $promo): ?>
                            <tr>
                                <td><?= esc($promo['kode_promosi']) ?></td>
                                <td><?= esc($promo['deskripsi']) ?></td>
                                <td><?= esc($promo['diskon']) ?>%</td>
                                <td><?= esc($promo['mulai']) ?> - <?= esc($promo['berakhir']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tabel Pemasok & Stok -->
        <div class="card mb-4">
            <div class="card-header">Pemasok & Stok</div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama Pemasok</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Stok Buku</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pemasok_stok as $pemasok): ?>
                            <tr>
                                <td><?= esc($pemasok['nama_pemasok']) ?></td>
                                <td><?= esc($pemasok['alamat']) ?></td>
                                <td><?= esc($pemasok['telepon']) ?></td>
                                <td><?= esc($pemasok['email']) ?></td>
                                <td><?= esc($pemasok['stok_buku']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tabel Pelanggan -->
        <div class="card mb-4">
            <div class="card-header">Pelanggan</div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pelanggan as $customer): ?>
                            <tr>
                                <td><?= esc($customer['nama']) ?></td>
                                <td><?= esc($customer['alamat']) ?></td>
                                <td><?= esc($customer['telepon']) ?></td>
                                <td><?= esc($customer['email']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tabel Laporan Statistik -->
        <div class="card mb-4">
            <div class="card-header">Laporan Statistik</div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Periode</th>
                            <th>Total Penjualan</th>
                            <th>Total Pendapatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($laporan_statistik as $stat): ?>
                            <tr>
                                <td><?= esc($stat['periode']) ?></td>
                                <td><?= esc($stat['total_penjualan']) ?></td>
                                <td>Rp <?= number_format($stat['total_pendapatan'], 0, ',', '.') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
