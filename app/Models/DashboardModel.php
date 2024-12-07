<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    protected $table = 'your_table_name'; // Ganti dengan nama tabel yang benar
    protected $primaryKey = 'id';

    public function getData()
    {
        // Ambil data dari database
        return $this->findAll(); // Ganti dengan query yang sesuai
    }

    public function getStatistics()
    {
        // Mengambil data statistik
        return [
            'total_records' => $this->countAll(), // Misalnya menghitung total record
        ];
    }
}
