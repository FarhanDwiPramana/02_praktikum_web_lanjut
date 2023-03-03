<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo 'Selamat Datang';
    }

    public function about(){
        echo 'NAMA  : FARHAN DWI PRAMANA';
        echo 'NIM   : 2141720125';
    }

    public function articles($id){
        echo 'Halaman Artikel dengan '.$id;
    }
}
