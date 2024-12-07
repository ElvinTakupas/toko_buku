<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Nama tabel
    protected $primaryKey = 'id'; // Primary key
    protected $allowedFields = ['first_name', 'last_name', 'username', 'password']; // Kolom yang dapat diisi
    protected $useTimestamps = true; // Aktifkan timestamp
}
