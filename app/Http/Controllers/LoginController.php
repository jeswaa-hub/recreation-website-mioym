<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController
{
    public function LoginView()
    {
        return view('loginPage');
    }

}
