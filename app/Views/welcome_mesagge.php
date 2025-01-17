<?= view('layout/header') ?>
<?= view('layout/sidebar') ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
    <?= view('layout/navbar') ?>

        <!-- Container Fluid -->
        <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </div>

            <!-- Example Content -->
            <div class="row mb-3">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">PENGHASILAN (BULANAN)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                    <div class="mt-2 mb-0 text-muted text-xs">
                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                        <span>Sejak bulan lalu</span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Container Fluid -->
    </div>
    <?= view('layout/footer') ?>
</div>
