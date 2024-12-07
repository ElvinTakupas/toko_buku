<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_kategori', 'deskripsi', 'created_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';

    protected $validationRules = [
        'nama_kategori' => 'required|min_length[3]',
        'deskripsi' => 'required|min_length[5]'
    ];

    protected $validationMessages = [
        'nama_kategori' => [
            'required' => 'Nama kategori wajib diisi.',
            'min_length' => 'Nama kategori minimal 3 karakter.',
        ],
        'deskripsi' => [
            'required' => 'Deskripsi wajib diisi.',
            'min_length' => 'Deskripsi kategori minimal 5 karakter.',
        ]
    ];
}
