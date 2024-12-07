<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use CodeIgniter\Controller;

class CategoriesController extends Controller
{
    // Method untuk menampilkan kategori
    public function index()
    {
        $categoryModel = new CategoryModel();
        // Menampilkan data kategori
        $data['categories'] = $categoryModel->findAll();
        // Menampilkan halaman index kategori
        return view('categories/index', $data);
    }

    // Method untuk menampilkan form tambah kategori
    public function add_category_view()
    {
        // Menampilkan halaman form tambah kategori
        return view('categories/add');
    }

    // Menangani penambahan kategori
    public function add()
    {
        $categoryModel = new CategoryModel();

        // Mengambil data dari form
        $data = [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        // Validasi data yang diterima
        if (!$this->validate([
            'nama_kategori' => 'required|min_length[3]',
            'deskripsi' => 'required|min_length[5]'
        ])) {
            return redirect()->back()->withInput()->with('error', 'Validasi gagal!');
        }

        // Menyimpan data kategori ke database
        if ($categoryModel->save($data)) {
            return redirect()->to('/categories')->with('success', 'Kategori berhasil ditambahkan!');
        } else {
            return redirect()->to('/categories')->with('error', 'Gagal menambahkan kategori.');
        }
    }

    // Method untuk menampilkan form edit kategori
    public function edit_category_view($id)
    {
        $categoryModel = new CategoryModel();
        // Mengambil data kategori berdasarkan ID
        $data['category'] = $categoryModel->find($id);
        return view('categories/edit', $data);
    }

    // Method untuk menangani update kategori
    public function update($id)
    {
        $categoryModel = new CategoryModel();

        $data = [
            'id' => $id,
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        // Validasi data
        if (!$this->validate([
            'nama_kategori' => 'required|min_length[3]',
            'deskripsi' => 'required|min_length[5]'
        ])) {
            return redirect()->back()->withInput()->with('error', 'Validasi gagal!');
        }

        // Menyimpan data yang sudah diupdate
        if ($categoryModel->save($data)) {
            return redirect()->to('/categories')->with('success', 'Kategori berhasil diupdate!');
        } else {
            return redirect()->to('/categories')->with('error', 'Gagal mengupdate kategori.');
        }
    }

    // Method untuk menghapus kategori
    public function delete($id)
    {
        $categoryModel = new CategoryModel();

        // Menghapus kategori berdasarkan ID
        if ($categoryModel->delete($id)) {
            return redirect()->to('categories/delete')->with('success', 'Kategori berhasil dihapus!');
        } else {
            return redirect()->to('categories/delete')->with('error', 'Gagal menghapus kategori.');
        }
    }
}
