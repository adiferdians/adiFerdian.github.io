<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController
{
    public function index(){
        return view('admin.index');
    }

    public function about(){
        return view('admin.content.about');
    }

    public function project(){
        return view('admin.content.project');
    }
    
    public function resume(){
        return view('admin.content.resume');
    }
    
    public function service(){
        return view('admin.content.service');
    }
}
