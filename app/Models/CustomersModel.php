<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomersModel extends Model
{
    protected $table = 'customers'; // Name of the table
    protected $primaryKey = 'id';  // Primary key column
    protected $allowedFields = ['id', 'nama', 'alamat', 'telepon', 'email', 'tanggal_daftar'];  // List of fields you want to allow for CRUD operations
}
