<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{
    protected $table      = 'users';  // Nama tabel
    protected $primaryKey = 'id';     // Kolom primary key
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['username', 'first_name', 'last_name', 'email', 'password'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'username'         => 'required|alpha_numeric|min_length[3]|is_unique[users.username]',
        'first_name'       => 'required|min_length[3]',
        'last_name'        => 'required|min_length[3]',
        'email'            => 'required|valid_email|is_unique[users.email]',
        'password'         => 'required|min_length[6]',
        'password_confirm' => 'required|matches[password]',
    ];

    protected $validationMessages = [
        'username' => [
            'is_unique' => 'Username sudah terdaftar.'
        ],
        'email' => [
            'is_unique' => 'Email sudah terdaftar.'
        ]
    ];

    public function registerUser($data)
    {
        return $this->insert($data);  // Insert data pengguna baru
    }
}
