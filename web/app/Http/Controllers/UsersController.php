<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function getRegistrationPage(){

        return view('user_registration');
    }
}
