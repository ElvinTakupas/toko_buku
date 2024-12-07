<?php

namespace App\Controllers;

use App\Models\PelangganModel;

class PelangganController extends BaseController
{
    // Menampilkan daftar pelanggan
    public function pelanggan()
    {
        $pelangganModel = new PelangganModel();
        $pelanggan = $pelangganModel->findAll(); // Mengambil semua data pelanggan

        return view('pelanggan', ['pelanggan' => $pelanggan]);  // Mengirimkan data pelanggan ke view
    }

    // Menampilkan form tambah pelanggan
    public function tambah_customer()
    {
        return view('tambah_customer'); // Menampilkan form untuk menambah pelanggan
    }

 // app/Controllers/PelangganController.php
public function simpan_customer()
{
    // Validasi input
    $validation = \Config\Services::validation();
    $validation->setRules([
        'nama' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',
        'email' => 'required|valid_email',
    ]);

    if ($validation->withRequest($this->request)->run() === false) {
        return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    }

    // Data yang akan disimpan
    $data = [
        'nama' => $this->request->getPost('nama'),
        'alamat' => $this->request->getPost('alamat'),
        'telepon' => $this->request->getPost('telepon'),
        'email' => $this->request->getPost('email'),
        'tanggal_daftar' => date('Y-m-d H:i:s'),
    ];

    // Menyimpan data pelanggan ke database
    $pelangganModel = new PelangganModel();
    $pelangganModel->save($data);

    // Redirect ke halaman daftar pelanggan dengan pesan sukses
    return redirect()->to('/pelanggan')->with('success', 'Pelanggan berhasil ditambahkan');
}

    // Menampilkan form edit pelanggan
    public function edit_customer($id)
{
    $pelangganModel = new PelangganModel();
    $pelanggan = $pelangganModel->find($id);

    if (!$pelanggan) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Pelanggan tidak ditemukan');
    }

    return view('edit_customer', ['pelanggan' => $pelanggan]);
}

    // Menghapus pelanggan
    public function delete_customer($id)
    {
        $pelangganModel = new PelangganModel();
        $pelanggan = $pelangganModel->find($id);

        if (!$pelanggan) {
            // Jika pelanggan tidak ditemukan, lemparkan exception atau tampilkan pesan error
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Pelanggan tidak ditemukan');
        }

        // Menghapus pelanggan berdasarkan ID
        $pelangganModel->delete($id);

        // Setelah pelanggan dihapus, kembali ke halaman daftar pelanggan dengan pesan sukses
        return redirect()->to('/pelanggan')->with('success', 'Pelanggan berhasil dihapus');
    }
}
