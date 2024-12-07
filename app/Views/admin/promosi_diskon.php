<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promosi Diskon</title>
    <!-- Bootstrap CSS -->
    <link href="<?= base_url('public/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('public/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="<?= base_url('public/vendor/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">
    <!-- RuangAdmin custom CSS -->
    <link href="<?= base_url('public/css/ruang-admin.min.css'); ?>" rel="stylesheet">
    <style>
        /* Custom styles */
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #4e73df;
            color: white;
            font-size: 20px;
        }

        table {
            margin-top: 20px;
        }

        th,
        td {
            text-align: center;
            vertical-align: middle;
        }

        .btn-danger {
            font-size: 14px;
            padding: 8px 15px;
            background-color: #e74a3b;
            border: none;
            border-radius: 5px;
            color: white;
            transition: background-color 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #d33a24;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .table th,
        .table td {
            padding: 1.25rem;
        }

        .scroll-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #4e73df;
            color: white;
            border-radius: 50%;
            padding: 12px;
            display: none;
            cursor: pointer;
        }

        .scroll-to-top:hover {
            background-color: #2e59d9;
        }

        /* Zebra Stripes for Table */
        tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar (optional if you want to include it) -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <!-- Sidebar content goes here -->
        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar (optional if you want to include it) -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <!-- Navbar content goes here -->
                </nav>

                <!-- Container for Content -->
                <div class="container-fluid" id="container-wrapper">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Daftar Promosi Diskon</h1>
                    </div>

                    <!-- Table for Displaying Promosi Diskon -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-white">Tabel Promosi Diskon</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode Promosi</th>
                                            <th>Deskripsi</th>
                                            <th>Diskon (%)</th>
                                            <th>Mulai</th>
                                            <th>Berakhir</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($promosi_diskon as $promosi): ?>
                                        <tr>
                                            <td><?= $promosi['kode_promosi']; ?></td>
                                            <td><?= $promosi['deskripsi']; ?></td>
                                            <td><?= $promosi['diskon']; ?>%</td>
                                            <td><?= $promosi['mulai']; ?></td>
                                            <td><?= $promosi['berakhir']; ?></td>
                                            <td>
                                                <a href="<?= base_url('/admin/promosi_diskon/delete/'.$promosi['id']); ?>" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash-alt"></i> Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Container -->
                </div>
            </div>
        </div>

        <!-- Scroll to Top -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- JS Scripts -->
        <script src="<?= base_url('public/vendor/jquery/jquery.min.js'); ?>"></script>
        <script src="<?= base_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?= base_url('public/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
        <script src="<?= base_url('public/js/ruang-admin.min.js'); ?>"></script>
        <!-- DataTables Scripts -->
        <script src="<?= base_url('public/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?= base_url('public/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

        <script>
            $(document).ready(function() {
                // Initialize DataTables
                $('#dataTable').DataTable({
                    "paging": true,
                    "searching": true,
                    "ordering": true,
                    "info": true
                });

                // Scroll to top functionality
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 100) {
                        $('.scroll-to-top').fadeIn();
                    } else {
                        $('.scroll-to-top').fadeOut();
                    }
                });

                $('.scroll-to-top').click(function() {
                    $('html, body').animate({scrollTop: 0}, 'fast');
                    return false;
                });
            });
        </script>
</body>
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
            <span>Hak Cipta &copy; <script> document.write(new Date().getFullYear()); </script> - Dikembangkan oleh
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

</html>
