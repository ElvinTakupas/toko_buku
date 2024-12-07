<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class UploadController extends Controller
{
    public function photo()
    {
        $file = $this->request->getFile('photo');

        // Periksa apakah file diupload
        if ($file->isValid() && !$file->hasMoved()) {
            // Pindahkan file ke folder 'public/images/users'
            $file->move('public/images/admin.jpg', 'admin.jpg'); // Gunakan nama file 'admin.jpg'
            return redirect()->back()->with('message', 'Foto berhasil diupload!');
        }

        return redirect()->back()->with('error', 'Gagal mengupload foto.');
    }
}
