<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'email'=>'required',
    //         'password'=>'required'

    //     ]);
    //     return $request->input();
    // }
    public function dashboard()
    {
        if(auth()->user()){
            if(auth()->user()->role_id==1){
                return view('admin.dashboard');    
            }
            else{
                return redirect('/home');
            }
        } 
        else{
            return redirect('/home');
        }
    }

    public function registeredvehicle()
    {
        return view('admin.registered_vehicle'); 
   
    }
    

    public function parkinglotdetailsedit($id)
    {
        $parkinglots = Parkinglot::where('id',$id)->first();
        return view('admin.parking_lot_details_edit',compact('parkinglots'));
    }

    public function search(Request $request)
    {
        $vehicle = Vehicle::where('id',$request->id)->get();
        return view('admin.registered_vehicle', compact('vehicle')); 
   
    }
}