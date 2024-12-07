<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class RegisterController extends Controller
{
    // Menampilkan halaman registrasi
    public function index()
    {
        return view('register');
    }

    // Proses registrasi pengguna
    public function create()
    {
        // Memuat layanan validasi
        $validation = \Config\Services::validation();

        // Aturan validasi untuk form
        $validation->setRules([
            'username'         => 'required|alpha_numeric|min_length[3]|is_unique[users.username]',
            'first_name'       => 'required|min_length[3]',
            'last_name'        => 'required|min_length[3]',
            'email'            => 'required|valid_email|is_unique[users.email]',
            'password'         => 'required|min_length[6]',
            'password_confirm' => 'required|matches[password]',
        ]);

        // Jika validasi gagal, kembali ke halaman register dengan error
        if (!$validation->withRequest($this->request)->run()) {
            return view('register', [
                'validation' => $validation
            ]);
        }

        // Ambil data dari form input
        $userData = [
            'username'   => $this->request->getPost('username'),
            'first_name' => $this->request->getPost('first_name'),
            'last_name'  => $this->request->getPost('last_name'),
            'email'      => $this->request->getPost('email'),
            'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),  // Hash password
        ];

        // Memasukkan data ke dalam tabel pengguna menggunakan save()
        $userModel = new UserModel();

        // Memasukkan data pengguna ke dalam tabel
        if ($userModel->save($userData)) {
            session()->setFlashdata('success', 'Registration successful. You can log in now.');
            return redirect()->to('/login');
        } else {
            session()->setFlashdata('error', 'Something went wrong. Please try again.');
            return redirect()->back();
        }
    }
}
