<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function process()
    {
        $authModel = new AuthModel();

        $id_pegawai = $this->request->getPost('id_pegawai');
        $true = $this->request->getPost('id_pegawai');

        $user = $authModel->validateLogin($id_pegawai, $true);

        if ($user) {
            session()->set('isLoggedIn', true);
            session()->set('id_pegawai', $id_pegawai);

            return redirect()->to('/hasil-lab/');
        } else {
            return redirect()->back()->with('error', 'Invalid Login : Periksa Id Petugas Anda!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}
