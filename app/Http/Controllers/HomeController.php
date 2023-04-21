<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function login()
    {
        return view('home');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required | max:15',
            'password'=>'required | min:8'

        ]);
        return $request->input();
    }
}
