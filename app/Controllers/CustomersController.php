<?php

namespace App\Controllers;

use App\Models\CustomersModel;

class CustomersController extends BaseController
{
    public function index()
    {
        $customerModel = new CustomersModel();
        $data['customers'] = $customerModel->findAll();  // Get all customers
        return view('customers/index', $data);  // Pass the data to the view
    }
}
