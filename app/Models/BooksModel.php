<?php

namespace App\Models;

use CodeIgniter\Model;

class BooksModel extends Model
{
    // Nama tabel di database
    protected $table = 'books';

    // Primary key tabel
    protected $primaryKey = 'id';

    // Tipe data primary key (bigint unsigned)
    protected $returnType = 'array';

    // Kolom yang diizinkan untuk diisi
    protected $allowedFields = [
        'judul', 
        'penulis', 
        'penerbit', 
        'tahun_terbit', 
        'harga', 
        'stok', 
        'kategori', 
        'deskripsi'
    ];

    // Aktifkan timestamps otomatis
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Aturan validasi (opsional)
    protected $validationRules = [
        'judul' => 'required|min_length[3]|max_length[255]',
        'penulis' => 'required|min_length[3]|max_length[255]',
        'penerbit' => 'required|min_length[3]|max_length[255]',
        'tahun_terbit' => 'required|exact_length[4]|numeric',
        'harga' => 'required|decimal',
        'stok' => 'required|is_natural',
        'kategori' => 'required|min_length[3]|max_length[255]',
        'deskripsi' => 'permit_empty|string'
    ];

    // Pesan validasi (opsional)
    protected $validationMessages = [
        'judul' => [
            'required' => 'Judul wajib diisi.',
            'min_length' => 'Judul minimal 3 karakter.',
            'max_length' => 'Judul maksimal 255 karakter.'
        ],
        'penulis' => [
            'required' => 'Penulis wajib diisi.',
            'min_length' => 'Penulis minimal 3 karakter.',
            'max_length' => 'Penulis maksimal 255 karakter.'
        ],
        'penerbit' => [
            'required' => 'Penerbit wajib diisi.',
            'min_length' => 'Penerbit minimal 3 karakter.',
            'max_length' => 'Penerbit maksimal 255 karakter.'
        ],
        'tahun_terbit' => [
            'required' => 'Tahun terbit wajib diisi.',
            'exact_length' => 'Tahun terbit harus 4 digit.',
            'numeric' => 'Tahun terbit harus berupa angka.'
        ],
        'harga' => [
            'required' => 'Harga wajib diisi.',
            'decimal' => 'Harga harus berupa angka desimal.'
        ],
        'stok' => [
            'required' => 'Stok wajib diisi.',
            'is_natural' => 'Stok harus berupa angka positif.'
        ],
        'kategori' => [
            'required' => 'Kategori wajib diisi.',
            'min_length' => 'Kategori minimal 3 karakter.',
            'max_length' => 'Kategori maksimal 255 karakter.'
        ]
    ];
}
