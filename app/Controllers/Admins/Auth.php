<?php

namespace App\Controllers\Admins;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
class Auth extends BaseController
{
    const EMAIL = "xinjiangcrosin@gmail.com";
    const PASSWORD = "12345678";

    public function index()
    {
        return view("admins/pages/login");
    }

    /**
     * Loging in an user
     * 
     * @return RedirectResponse
     */
    public function login(){
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if(self::EMAIL == $email && self::PASSWORD == $password){
            session()->set('email', $email);
            return redirect()->to(base_url('admin/dashboard'))->with('success','');
        } else {
            session()->setFlashdata('gagal', 'Username / Password salah');
            return redirect()->to(base_url('admin/login'));
        }
    }

    /**
     * Loging out an user
     * 
     * @return RedirectResponse
     */
    public function logout(){
        session()->remove('email');
        return redirect()->to(base_url('admin/login'))->with('success','');
    }
}

