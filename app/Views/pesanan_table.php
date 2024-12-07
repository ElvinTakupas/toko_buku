<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Pesanan</title>
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
        .table td, .table th {
            vertical-align: middle;
        }
    </style>
</head>
<?= view('layout/header') ?>
<?= view('layout/sidebar') ?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
<?= view('layout/navbar') ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Buku pesanan</li>
                </ol>
            </div>
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Pesanan Buku</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>ID Pesanan</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Harga</th>
                        <th>Nama Pelanggan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#">PSN001</a></td>
                        <td>Sapiens</td>
                        <td>Yuval Noah Harari</td>
                        <td>Gramedia</td>
                        <td>Rp150.000</td>
                        <td>Ahmad</td>
                        <td><span class="badge badge-success">Terkirim</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">PSN002</a></td>
                        <td>Atomic Habits</td>
                        <td>James Clear</td>
                        <td>Erlangga</td>
                        <td>Rp120.000</td>
                        <td>Siti</td>
                        <td><span class="badge badge-warning">Sedang Dikirim</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">PSN003</a></td>
                        <td>Rich Dad Poor Dad</td>
                        <td>Robert Kiyosaki</td>
                        <td>Andi Publisher</td>
                        <td>Rp110.000</td>
                        <td>Faisal</td>
                        <td><span class="badge badge-danger">Tertunda</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                      <!-- Add more rows as needed -->
                    </tbody>
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