<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController
{
    public function index(){
        return view('admin.Auth.login');
    }

    public function auth(Request $req){

        // $credentials = [
        //     'username' => $req['user'],
        //     'password' => $req['pass'],
        // ];
            
        // if (auth::attempt($credentials)) {
            return redirect("admin");
        // }
        // return redirect()->back()->with('massage', 'Username atau Password salah');
    }
}
