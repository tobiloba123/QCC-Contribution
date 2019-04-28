<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class AuthController extends Controller
{
    //



    function login(Request $request){

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
           
            return redirect('dashboard');

        }else{

            $request->session()->flash('alert-warning', 'We cant find an account with this credentials. Please make sure you entered the right information');
            return redirect('login');

        }
        
    }


    function logout(Request $request){
        
        Auth::logout();
        return redirect('login'); 
    }



}
