<?php

namespace App\Controllers;

class Loggin extends BaseController
{
    public function index()
    {
        return view('pages/loggin');
    }

    public function loggin()
    {
        $data = [
            'title' => 'Loggin',
            'validation' => \Config\Services::validation()
        ];

        return view('pages/loggin', $data);
    }
}
