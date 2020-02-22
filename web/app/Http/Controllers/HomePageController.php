<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{


    public function getHomePage()
    {
        // return 'my home page';
        dd(get_included_files());
        $data = ['meta_title' => 'User Registration'];

        return view('registration', $data);
    }
}
