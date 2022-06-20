<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BansosController extends Controller
{
    public function index(){
        return view('index',[
            "title" => "Main Page"
        ]);
    }

    public function login(){
        return view('auth.login',[
            "title" => "Auth"
        ]);
    }

    public function register(){
        return view('auth.register',[
            "title" => "Auth"
        ]);
    }

    public function pengajuan(){
        return view('pengajuan',[
            "title" => "Pengajuan"
        ]);
    }

    public function profile(){
        return view('profile',[
            "title" => "Profile"
        ]);
    }
}
