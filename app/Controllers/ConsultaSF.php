<?php

namespace App\Controllers;

use App\Models\SoftwareM;

class ConsultaSF extends BaseController
{
    public function index()
    {
        $softwareModel = model('SoftwareM');

        $data['software'] = $softwareModel->findAll();
        return view('head') .
                view('menu') . 
                view('front/software', $data) .
                view('footer');

    }
}
