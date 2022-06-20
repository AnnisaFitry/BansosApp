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
        return view('users.pengajuan',[
            "title" => "Pengajuan"
        ]);
    }

    public function profile(){
        return view('users.profile',[
            "title" => "Profile"
        ]);
    }

    public function indexadmin(){
        return view('index-admin',[
            "title" => "Index Admin"
        ]);
    }

    public function useradmin(){
        return view('user-admin',[
            "title" => "User Admin"
        ]);
    }

    public function laporanbansos(){
        return view('laporan-bansos',[
            "title" => "Laporan Bansos"
        ]);
    }

    public function cetakbansos(){
        return view('admin.cetak-bansos',[
            "title" => "Cetak Bansos"
        ]);
    }

    public function detaildata(){
        return view('detail-data',[
            "title" => "Detail Data"
        ]);
    }
}
