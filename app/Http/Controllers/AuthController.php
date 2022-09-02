<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use ReflectionClass;
use Illuminate\Http\Request;

class AuthController
{
    public function index(){
        return view('admin.Auth.login');
    }

    public function auth(Request $req){

        // $credentials = [
        //     'username' => $req->username,
        //     'password' => bcrypt($req->password)
        // ];
        // // dd($credentials);

        // $sapi = new ReflectionClass("User");
        // $sapi = $sapi->getFileName();
        // dd($sapi);
        // if (User::attempt($credentials)) {
            return redirect("admin");
        // }
        // return redirect()->back()->with('massage', 'Username atau Password salah');
    }
}
