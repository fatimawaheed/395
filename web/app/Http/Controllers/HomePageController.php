<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomePageController extends Controller
{


    public function getHomePage()
    {
        $data = ['meta_title' => 'Home page'];

        return view('home', $data);
    }
}
