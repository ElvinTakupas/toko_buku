<?php

namespace App\Models;

use CodeIgniter\Model;

class PemasokStokModel extends Model
{
    protected $table = 'pemasok_stok';  // Nama tabel yang digunakan
    protected $primaryKey = 'id';  // Primary key tabel
    protected $allowedFields = ['nama_pemasok', 'alamat', 'telepon', 'email', 'stok_buku', 'buku_id'];  // Kolom yang boleh diakses
    protected $useTimestamps = false;  // Tidak menggunakan timestamps jika tidak ada field created_at atau updated_at
}
