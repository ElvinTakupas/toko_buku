<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class PasswordController extends Controller
{
    // Menampilkan halaman form untuk "forgot password"
    public function forgot()
    {
        return view('password'); // Tampilkan halaman form forgot password
    }

    // Proses reset password
    public function reset()
    {
        // Jika requestnya adalah POST (form dikirim)
        if ($this->request->getMethod() == 'post') {
            $username = $this->request->getPost('username');
            
            // Cek username di database (misalnya menggunakan model UserModel)
            // Misalnya jika username ditemukan, kirimkan email reset password
            // Pseudo code untuk email pengiriman (saran: gunakan CodeIgniter Email Library)
            
            if ($username == "admin") { // Ganti ini dengan query ke database Anda
                // Kirimkan email untuk reset password (gunakan helper email di CodeIgniter)
                session()->setFlashdata('success', 'Tautan reset password telah dikirim ke email Anda.');
                return redirect()->to('/login'); // Redirect ke halaman login
            } else {
                // Jika username tidak ditemukan
                session()->setFlashdata('error', 'Username tidak ditemukan.');
                return redirect()->back(); // Kembali ke halaman sebelumnya
            }
        }

        // Jika requestnya GET, tampilkan halaman form reset password
        return view('password');
    }
}
