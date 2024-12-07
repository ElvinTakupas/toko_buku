<?php

namespace App\Controllers;

use App\Models\BooksModel;
use CodeIgniter\Controller;

class BooksController extends Controller
{
    public function index()
    {
        $booksModel = new BooksModel();
        $data['books'] = $booksModel->findAll();
        return view('dashboard/books', $data);
    }

    public function addView()
    {
        return view('dashboard/add');
    }

    public function add()
    {
        $booksModel = new BooksModel();

        $data = [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'kategori' => $this->request->getPost('kategori'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        if ($booksModel->save($data)) {
            return redirect()->to('/books')->with('success', 'Buku berhasil ditambahkan!');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan buku.');
        }
    }

    public function edit($id)
    {
        log_message('debug', 'Masuk ke method edit dengan ID: ' . $id);

        $booksModel = new BooksModel();
        $data['book'] = $booksModel->find($id);

        if (!$data['book']) {
            return redirect()->to('/books')->with('error', 'Buku tidak ditemukan.');
        }

        log_message('debug', 'Data buku ditemukan: ' . print_r($data['book'], true));

        return view('dashboard/edit', $data);
    }

    public function update($id)
    {
        $booksModel = new BooksModel();

        $data = [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'kategori' => $this->request->getPost('kategori'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        if ($booksModel->save($data)) {
            return redirect()->to('/books')->with('success', 'Buku berhasil diupdate!');
        } else {
            return redirect()->back()->with('error', 'Gagal mengupdate buku.');
        }
    }

    public function delete($id)
    {
        $booksModel = new BooksModel();

        if ($booksModel->delete($id)) {
            return redirect()->to('/books')->with('success', 'Buku berhasil dihapus!');
        } else {
            return redirect()->to('/books')->with('error', 'Gagal menghapus buku.');
        }
    }
}
