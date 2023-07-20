<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LogginModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Register extends BaseController
{
    protected $logginModel;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->logginModel = new LogginModel();
    }

    public function index()
    {
        return view('pages/register');
    }

    public function save()
    {
        $hashed_password= password_hash($this->request->getVar('confirm password'),PASSWORD_BCRYPT);
        $email = $this->request->getPost('email_address');
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


        if($this->logginModel->save($data))
        {
            return json_encode(['status'=>true,'message'=>'User Registered Successfully']);
        }
        else
        {
            return json_encode(['status'=>false,'message'=>'User Registration Failed']);
        }

        // return view('pages/login');
    }

}
