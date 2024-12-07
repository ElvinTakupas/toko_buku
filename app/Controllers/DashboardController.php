<?php

namespace App\Controllers;

use App\Models\LaporanStatistikModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $laporanModel = new LaporanStatistikModel(); // Model untuk laporan statistik
        $data['laporan'] = $laporanModel->findAll(); // Mengambil semua data laporan
        return view('laporan/index', $data); // Kirim data laporan ke view
    }
}

