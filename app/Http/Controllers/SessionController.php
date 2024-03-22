<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionController extends Controller
{
    function index(){
        return view("sesi/index");
    }

    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'Email Wajib Diisi',
            'password.required'=>'Password Wajib Diisi',
        ]);
    
        $infologin = [
            'email' => $request->email, 
            'password' => $request->password, 
        ];
    
        if(Auth::attempt($infologin)){
            return 'sukses';
        }
        else{
            return 'Gagal';
        }
    }
    
}
