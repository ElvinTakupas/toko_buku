<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            // Tambahkan data jika diperlukan
        ];
        return view('layout/dashboard', $data);
    }
}
