<?php

namespace App\Controllers;

class Loggin extends BaseController
{
    public function index()
    {
        return view('pages/loggin');
    }

    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'email_address'    => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email_address]',
            'password'         => 'required|min_length[6]|max_length[200]',
            'confirm_password' => 'matches[password]'
        ];

        if($this->validate($rules)){
            $model = new UserModel();

            $data = [
                'email_address' => $this->request->getVar('email_address'),
                'password'      => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $model->save($data);
            return redirect()->to('/loggin');
        }else{
            $data['validation'] = $this->validator;
            echo view('pages/loggin', $data);
        }
    }

    public function signup()
    {
        $data = [
            'title' => 'Signup',
            'validation' => \Config\Services::validation()
        ];

        return view('pages/home', $data);
    }
}
