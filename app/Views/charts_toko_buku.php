<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik Penjualan Toko Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                    <li class="breadcrumb-item active" aria-current="page">Grafik</li>
                </ol>
            </div>
        <h1>Grafik Penjualan Toko Buku</h1>
        <canvas id="myBarChart"></canvas>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('myBarChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Juli', 'Agustus', 'September', 'Oktober', 'November'],
                    datasets: [{
                        label: 'Penjualan Buku',
                        data: [120, 190, 300, 500, 220],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                }
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
   
