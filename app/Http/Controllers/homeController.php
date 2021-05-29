<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        return view("home0249");
    }
    public function anggota(){
        return view("anggota0249");
    }
    public function peminjam(){
        return view("peminjam0249");
    }
}
