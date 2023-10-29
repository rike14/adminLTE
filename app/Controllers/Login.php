<?php

namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    private $login_model;

    public function __construct()
    {
        $this->login_model = new LoginModel();
    }

    public function index()
    {
        return view('login/index');
    }

    public function authenticate()
    {
        $data = $this->request->getVar();

        $user = $this->login_model
                    ->where('user', $data['user'])
                    ->where('password', md5($data['password']))
                    ->first();

        $session = session();

        if(!empty($user)){
            $session->set('id_login', $user['id_login']);
            $session->set('first_name', $user['first_name']);
            $session->setFlashdata('success', 'success_login');
            return redirect()->to('/home');
        } else {
            $session->setFlashdata('error', 'error_login');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }

    public function register()
    {
        return view('login/register');
    }

    public function changePassword()
    {
        $session = session();
        $id_login = $session->get('id_login');
        $data = $this->login_model
                    ->where('id_login', $id_login)
                    ->first();

        echo View('templates/header');

        echo View('login/changePassword', $data);

        echo View('templates/footer');
    }

    public function update()
    {
        $data = $this->request->getVar();

        $session = session();
        $id_login = $session->get('id_login');

        $user = $this->login_model
                    ->where('id_login', $id_login)
                    ->first();
        

        if(md5($data['password']) == $user['password']){
           if($data['new_password'] == $data['confirm_new_password']){
                $this->login_model
                    ->set('password', md5($data['new_password']))
                    ->where('id_login', 1)
                    ->update();

                $session = session();
                $session->setFlashdata('alert', 'success_update');
                return redirect()->to('/login/changePassword');
            }
        }
        
        $session->setFlashdata('alert', 'error_update');

        return redirect()->to('/login/changePassword');
    }
}