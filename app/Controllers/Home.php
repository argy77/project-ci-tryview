<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        return view('welcome_message');
    }

    // public function login()
    // {
    // $model = new UserModel();
    // return view('auth/login');
    // }

    // public function index1()
    // {
    //     return view('pages/index1');
    // }
}
