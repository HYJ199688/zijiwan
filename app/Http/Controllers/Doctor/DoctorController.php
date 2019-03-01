<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function getLogin(){
        return view('Doctor.login');
    }

    public function postLogin(Request $request){
        $tem = $request->only('name','password');
        if( $this->guard()->attempt($tem)){
           echo 666;
       }else{
            echo 'shift';
        };

    }
    
    

    public function guard(){
//        Auth::guard('doctor');
        return auth()->guard('doctor');
    }
}
