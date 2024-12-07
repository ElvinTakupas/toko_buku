<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanStatistikModel extends Model
{
    protected $table = 'laporan_statistik'; // Sesuaikan dengan nama tabel Anda
    protected $primaryKey = 'id';
    protected $allowedFields = ['periode', 'total_penjualan', 'total_pendapatan', 'created_at'];
    protected $useTimestamps = true;
}

