<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index(){
    //     echo 'Selamat Datang';
    // }
    public function home(){
        return view("home");
    }
}
