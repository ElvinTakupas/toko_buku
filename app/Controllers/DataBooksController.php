<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DataBooksController extends Controller
{
    public function index()
    {
        // Data buku yang ingin ditampilkan
        $books = [
            ['id_buku' => 1, 'Bumi' => 'Book 1', 'penulis' => 'Tre Lie 1', 'penerbit' => 'Pt.Gramedia pustaka utama', 'tahun_terbit' => 2020, 'stok' => 10, 'harga' => 15.99],
            ['id_buku' => 2, 'judul_buku' => 'Book 2', 'penulis' => 'Author 2', 'penerbit' => 'Publisher 2', 'tahun_terbit' => 2021, 'stok' => 15, 'harga' => 20.99],
            ['id_buku' => 3, 'judul_buku' => 'Book 3', 'penulis' => 'Author 3', 'penerbit' => 'Publisher 3', 'tahun_terbit' => 2019, 'stok' => 8, 'harga' => 18.50],
            ['id_buku' => 4, 'judul_buku' => 'Book 4', 'penulis' => 'Author 4', 'penerbit' => 'Publisher 4', 'tahun_terbit' => 2022, 'stok' => 12, 'harga' => 22.75],
            ['id_buku' => 5, 'judul_buku' => 'Book 5', 'penulis' => 'Author 5', 'penerbit' => 'Publisher 5', 'tahun_terbit' => 2023, 'stok' => 5, 'harga' => 25.00],
            ['id_buku' => 6, 'judul_buku' => 'Book 6', 'penulis' => 'Author 6', 'penerbit' => 'Publisher 6', 'tahun_terbit' => 2020, 'stok' => 20, 'harga' => 17.99],
            ['id_buku' => 7, 'judul_buku' => 'Book 7', 'penulis' => 'Author 7', 'penerbit' => 'Publisher 7', 'tahun_terbit' => 2018, 'stok' => 7, 'harga' => 19.00],
            ['id_buku' => 8, 'judul_buku' => 'Book 8', 'penulis' => 'Author 8', 'penerbit' => 'Publisher 8', 'tahun_terbit' => 2021, 'stok' => 18, 'harga' => 16.75],
            ['id_buku' => 9, 'judul_buku' => 'Book 9', 'penulis' => 'Author 9', 'penerbit' => 'Publisher 9', 'tahun_terbit' => 2023, 'stok' => 30, 'harga' => 21.50],
            ['id_buku' => 10, 'judul_buku' => 'Book 10', 'penulis' => 'Author 10', 'penerbit' => 'Publisher 10', 'tahun_terbit' => 2022, 'stok' => 12, 'harga' => 12.99],
            ['id_buku' => 11, 'judul_buku' => 'Book 11', 'penulis' => 'Author 11', 'penerbit' => 'Publisher 11', 'tahun_terbit' => 2020, 'stok' => 15, 'harga' => 25.99],
            ['id_buku' => 12, 'judul_buku' => 'Book 12', 'penulis' => 'Author 12', 'penerbit' => 'Publisher 12', 'tahun_terbit' => 2021, 'stok' => 20, 'harga' => 19.99],
            ['id_buku' => 13, 'judul_buku' => 'Book 13', 'penulis' => 'Author 13', 'penerbit' => 'Publisher 13', 'tahun_terbit' => 2019, 'stok' => 8, 'harga' => 22.50],
            ['id_buku' => 14, 'judul_buku' => 'Book 14', 'penulis' => 'Author 14', 'penerbit' => 'Publisher 14', 'tahun_terbit' => 2022, 'stok' => 10, 'harga' => 18.75],
            ['id_buku' => 15, 'judul_buku' => 'Book 15', 'penulis' => 'Author 15', 'penerbit' => 'Publisher 15', 'tahun_terbit' => 2023, 'stok' => 25, 'harga' => 29.99],
            ['id_buku' => 16, 'judul_buku' => 'Book 16', 'penulis' => 'Author 16', 'penerbit' => 'Publisher 16', 'tahun_terbit' => 2020, 'stok' => 17, 'harga' => 15.99],
            ['id_buku' => 17, 'judul_buku' => 'Book 17', 'penulis' => 'Author 17', 'penerbit' => 'Publisher 17', 'tahun_terbit' => 2018, 'stok' => 12, 'harga' => 20.00],
            ['id_buku' => 18, 'judul_buku' => 'Book 18', 'penulis' => 'Author 18', 'penerbit' => 'Publisher 18', 'tahun_terbit' => 2021, 'stok' => 8, 'harga' => 17.99],
            ['id_buku' => 19, 'judul_buku' => 'Book 19', 'penulis' => 'Author 19', 'penerbit' => 'Publisher 19', 'tahun_terbit' => 2023, 'stok' => 30, 'harga' => 24.50],
            ['id_buku' => 20, 'judul_buku' => 'Book 20', 'penulis' => 'Author 20', 'penerbit' => 'Publisher 20', 'tahun_terbit' => 2022, 'stok' => 5, 'harga' => 12.99]
        ];

        // Menampilkan view dengan data buku
        return view('books_view/index', ['books_view' => $books]);
    }
}
