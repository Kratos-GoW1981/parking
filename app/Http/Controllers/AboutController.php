<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function service()
    {
        return view('service');
    }

}



