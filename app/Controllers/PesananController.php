<?php

namespace App\Controllers;

class PesananController extends BaseController
{
    public function index()
    {
        $orders = [
            ['id_pesanan' => 'PSN001', 'judul_buku' => 'Sapiens', 'penulis' => 'Yuval Noah Harari', 'penerbit' => 'Gramedia', 'harga' => 150000, 'nama_pelanggan' => 'Ahmad', 'status' => 'Terkirim'],
            ['id_pesanan' => 'PSN002', 'judul_buku' => 'Atomic Habits', 'penulis' => 'James Clear', 'penerbit' => 'Erlangga', 'harga' => 120000, 'nama_pelanggan' => 'Siti', 'status' => 'Sedang Dikirim'],
            ['id_pesanan' => 'PSN003', 'judul_buku' => 'Rich Dad Poor Dad', 'penulis' => 'Robert Kiyosaki', 'penerbit' => 'Andi Publisher', 'harga' => 110000, 'nama_pelanggan' => 'Faisal', 'status' => 'Tertunda']
        ];

        return view('pesanan_table', ['pesanan' => $orders]);
    }
}
