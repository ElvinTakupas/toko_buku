<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Load any models or helpers if necessary
        // e.g., $this->someModel = new \App\Models\SomeModel();

        // Render the home view\
        return view('welcome_mesagge'); // Ensure you have a view file at app/Views/home/index.php
    }
}