<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table      = 'orders';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id_pembeli', 'total_harga', 'jumlah', 'status'];

    // Definisi waktu pembuatan dan pembaruan
    protected $useTimestamps = true;
}

