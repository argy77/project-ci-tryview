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

        $nik = $this->request->getPost('nik');
        $true = $this->request->getPost('nik');

        $user = $authModel->validateLogin($nik, $true);

        if ($user) {
            session()->set('isLoggedIn', true);
            session()->set('nik', $nik);
            session()->set('nama', $user['nama']);

            return redirect()->to('/hasil-lab/');
        } else {
            return redirect()->back()->with('error', 'Invalid Login : Periksa Id Pegawai Anda!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}
