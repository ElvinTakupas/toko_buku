<?php

namespace App\Controllers;

use App\Models\PromosiDiskonModel;

class PromosiDiskonControler extends BaseController
{
    // Menampilkan data Promosi Diskon
    public function promosiDiskon()
{
    $promosiDiskonModel = new PromosiDiskonModel();
    $promosiDiskon = $promosiDiskonModel->findAll();

    return view('promosi-diskon', ['promosi-diskon' => $promosiDiskon]);
}

}
