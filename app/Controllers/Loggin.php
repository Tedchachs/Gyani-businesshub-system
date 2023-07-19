<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LogginModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Loggin extends BaseController
{
    protected $logginModel;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->logginModel = new LogginModel();
    }

    public function index()
    {
        return view('pages/loggin');
    }

    public function save()
    {
        $hashed_password= password_hash($this->request->getVar('confirm password'),PASSWORD_BCRYPT);
        $email = $this->request->getPost('address');
        $userName= $this->request->getPost('user_name');
        $fname = $this->request->getPost('first_name');
        $lname = $this->request->getPost('last_name');
        $company = $this->request->getPost('current_company');
        $experience = $this->request->getPost('total_experience');
        $desig= $this->request->getPost('designation');

        $data = [
            'email' => $email,
            'password' =>$hashed_password,
            'user_name' => $userName,
            'first_name' => $fname,
            'last_name' => $lname,
            'company' => $company,
            'experience' => $experience,
            'designation' => $desig
        ];

        var_dump($data);
        exit();

        if($this->logginModel->save($data)){
            return json_encode(['status'=>true,'message'=>'User saved successfully']);
        }else{
            return var_dump($this->logginModel->errors());
        }

        // return redirect()->to('/loggin');
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
