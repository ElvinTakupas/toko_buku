<?php

namespace App\Controllers;

use App\Models\PromosiDiskonModel;

class AdminController extends BaseController
{
    // Method untuk menampilkan halaman promosi diskon
    public function promosiDiskon()
    {
        $promosiDiskonModel = new PromosiDiskonModel();
        $data['promosi_diskon'] = $promosiDiskonModel->findAll();  // Mengambil semua data promosi diskon

        return view('admin/promosi_diskon', $data);  // Pastikan view 'promosi_diskon' ada
    }

    // Method untuk menambah atau memperbarui data promosi diskon
    public function savePromosiDiskon($id = null)
    {
        $promosiDiskonModel = new PromosiDiskonModel();

        // Ambil data yang dikirim dari form
        $data = [
            'kode_promosi' => $this->request->getPost('kode_promosi'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'diskon' => $this->request->getPost('diskon'),
            'mulai' => $this->request->getPost('mulai'),
            'berakhir' => $this->request->getPost('berakhir'),
        ];

        // Validasi data
        if (!$this->validate($promosiDiskonModel->validationRules)) {
            return redirect()->back()->withInput()->with('error', 'Data tidak valid.');
        }

        // Jika ID ada, lakukan update, jika tidak, lakukan insert
        if ($id) {
            $promosiDiskonModel->update($id, (object)$data);
            return redirect()->to('/admin/promosi_diskon')->with('success', 'Promosi Diskon berhasil diperbarui.');
        } else {
            // Simpan data baru
            $promosiDiskonModel->save($data);  // Simpan data baru
            return redirect()->to('/admin/promosi_diskon')->with('success', 'Promosi Diskon berhasil ditambahkan.');
        }
    }

    // Menghapus promosi diskon
    public function deletePromosiDiskon($id)
    {
        $promosiDiskonModel = new PromosiDiskonModel();
        
        // Menghapus data berdasarkan ID
        if ($promosiDiskonModel->delete($id)) {
            return redirect()->to('/admin/promosi_diskon')->with('success', 'Promosi Diskon berhasil dihapus.');
        } else {
            return redirect()->to('/admin/promosi_diskon')->with('error', 'Terjadi kesalahan saat menghapus promosi.');
        }
    }
}
