<?php

namespace App\Models;

use CodeIgniter\Model;

class PromosiDiskonModel extends Model
{
    protected $table = 'promosi_diskon';  // Nama tabel
    protected $primaryKey = 'id';         // Nama primary key
    protected $allowedFields = ['kode_promosi', 'deskripsi', 'diskon', 'mulai', 'berakhir'];

    public $validationRules = [
        'kode_promosi' => 'required|max_length[10]',
        'deskripsi' => 'required|max_length[255]',
        'diskon' => 'required|numeric',
        'mulai' => 'required|valid_date',
        'berakhir' => 'required|valid_date',
    ];
}
