<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table = 'pelanggan';  // Nama tabel di database
    protected $primaryKey = 'id';    // Kunci utama tabel

    // Menentukan kolom-kolom yang dapat dimasukkan atau diperbarui
    protected $allowedFields = ['nama', 'email', 'alamat', 'telepon', 'tanggal_daftar'];

    // Menentukan apakah auto-increment digunakan pada primary key
    protected $useAutoIncrement = true;

    // Menentukan jenis data untuk setiap kolom, jika diperlukan
    protected $returnType = 'array';  // Tipe data yang dikembalikan oleh query (array atau object)

    // Menggunakan time-stamps, jika tabel memiliki kolom created_at dan updated_at
    protected $useTimestamps = false; // jika menggunakan created_at dan updated_at, set ini ke true

    // Validasi form input (opsional, tetapi bisa sangat membantu dalam beberapa kasus)
    protected $validationRules = [
        'nama'      => 'required|min_length[3]|max_length[100]',
        'alamat'    => 'required|min_length[10]|max_length[255]',
        'telepon'   => 'required|numeric|min_length[10]|max_length[15]',
        'email'     => 'required|valid_email'
    ];

    // Validasi pesan kesalahan jika input tidak valid
    protected $validationMessages = [
        'nama' => [
            'required' => 'Nama pelanggan harus diisi.',
            'min_length' => 'Nama harus memiliki minimal 3 karakter.',
            'max_length' => 'Nama tidak boleh lebih dari 100 karakter.'
        ],
        'alamat' => [
            'required' => 'Alamat pelanggan harus diisi.',
            'min_length' => 'Alamat harus memiliki minimal 10 karakter.',
            'max_length' => 'Alamat tidak boleh lebih dari 255 karakter.'
        ],
        'telepon' => [
            'required' => 'Nomor telepon pelanggan harus diisi.',
            'numeric' => 'Nomor telepon hanya boleh berisi angka.',
            'min_length' => 'Nomor telepon harus memiliki minimal 10 angka.',
            'max_length' => 'Nomor telepon tidak boleh lebih dari 15 angka.'
        ],
        'email' => [
            'required' => 'Email pelanggan harus diisi.',
            'valid_email' => 'Email tidak valid.'
        ]
    ];
}
