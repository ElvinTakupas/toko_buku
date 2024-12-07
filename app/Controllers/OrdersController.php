<?php

namespace App\Controllers;

use App\Models\OrderModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class OrdersController extends BaseController
{
    protected $orderModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }

    // Menampilkan semua pesanan
    public function index()
    {
        $data['orders'] = $this->orderModel->findAll();
        return view('orders_view', $data);
    }

    // Menambahkan pesanan baru
    public function create()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'id_pembeli'  => 'required|integer',
            'total_harga' => 'required|numeric',
            'jumlah'      => 'required|integer',
            'status'      => 'required|in_list[Pending,Dikirim,Selesai]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = $this->request->getPost();
        if ($this->orderModel->save($data)) {
            return redirect()->to('/orders')->with('success', 'Pesanan berhasil ditambahkan.');
        } else {
            return redirect()->to('/orders')->with('error', 'Terjadi kesalahan saat menambahkan pesanan.');
        }
    }

    // Menghapus pesanan
    public function delete($id)
    {
        if (!$this->orderModel->find($id)) {
            throw new PageNotFoundException('Pesanan dengan ID ' . $id . ' tidak ditemukan.');
        }

        if ($this->orderModel->delete($id)) {
            return redirect()->to('/orders')->with('success', 'Pesanan berhasil dihapus.');
        } else {
            return redirect()->to('/orders')->with('error', 'Terjadi kesalahan saat menghapus pesanan.');
        }
    }

    // Menampilkan form edit pesanan
    public function edit($id)
{
    $pesanan = $this->orderModel->find($id);
    if (!$pesanan) {
        throw new PageNotFoundException('Pesanan tidak ditemukan.');
    }
    return view('edit_pesanan', ['pesanan' => $pesanan]);
}


    // Mengupdate pesanan
    public function update($id)
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'id_pembeli'  => 'required|integer',
            'total_harga' => 'required|numeric',
            'jumlah'      => 'required|integer',
            'status'      => 'required|in_list[Pending,Dikirim,Selesai]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = $this->request->getPost();
        $data['id'] = $id;

        if ($this->orderModel->save($data)) {
            return redirect()->to('/orders')->with('success', 'Pesanan berhasil diperbarui.');
        } else {
            return redirect()->to('/orders')->with('error', 'Terjadi kesalahan saat memperbarui pesanan.');
        }
    }

    // Mengupdate status pesanan
    public function updateStatus($id)
    {
        $order = $this->orderModel->find($id);
        if (!$order) {
            throw new PageNotFoundException('Pesanan dengan ID ' . $id . ' tidak ditemukan.');
        }

        $newStatus = $this->request->getPost('status');
        if (!in_array($newStatus, ['Pending', 'Dikirim', 'Selesai'])) {
            return redirect()->to('/orders')->with('error', 'Status tidak valid.');
        }

        $order['status'] = $newStatus;
        if ($this->orderModel->save($order)) {
            return redirect()->to('/orders')->with('success', 'Status pesanan berhasil diperbarui.');
        } else {
            return redirect()->to('/orders')->with('error', 'Gagal memperbarui status pesanan.');
        }
    }
}
