<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginRegister extends Controller
{
    public function signin(){
        return view('admin.signin');
    }
}
