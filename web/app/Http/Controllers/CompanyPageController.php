<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyPageController extends Controller
{

    public function getContactUs(){
        return view('contact_us');
    }
}
