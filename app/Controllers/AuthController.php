<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function index()
    {
        // Jika sudah login, arahkan ke dashboard
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }

        return view('login'); // Tampilkan halaman login
    }

    // Proses login
    public function login()
    {
        $username = $this->request->getPost('username'); // Ambil input username
        $password = $this->request->getPost('password'); // Ambil input password

        $userModel = new UserModel();

        // Verifikasi pengguna
        $user = $userModel->where('username', $username)->first(); // Cek pengguna berdasarkan username
        if ($user && password_verify($password, $user['password'])) {
            // Simpan data sesi pengguna
            session()->set([
                'id' => $user['id'],
                'username' => $user['username'], // Simpan username di sesi
                'isLoggedIn' => true
            ]);
            return redirect()->to('/dashboard'); // Arahkan ke dashboard
        } else {
            // Kembalikan ke halaman login dengan pesan error
            return redirect()->back()->with('error', 'Username atau password salah');
        }
    }

    // Menampilkan halaman registrasi
    public function showRegisterForm()
    {
        return view('register'); // Tampilkan halaman registrasi
    }

    // Proses registrasi
    public function register()
    {
        $userModel = new UserModel();

        // Validasi data input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username'   => 'required|is_unique[users.username]', // Username harus unik
            'password'   => 'required|min_length[6]', // Minimal 6 karakter
            'first_name' => 'required',
            'last_name'  => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Data dari form registrasi
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name'  => $this->request->getPost('last_name'),
            'username'   => $this->request->getPost('username'), // Ambil input username
            'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Hash password
        ];

        // Simpan data pengguna
        if ($userModel->save($data)) {
            return redirect()->to('/login')->with('success', 'Akun berhasil dibuat. Silakan login.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal membuat akun. Periksa kembali data yang diinput.');
        }
    }

    // Logout pengguna
    public function logout()
    {
        session()->destroy(); // Menghancurkan semua sesi
        return redirect()->to('/login'); // Arahkan ke halaman login
    }
}
