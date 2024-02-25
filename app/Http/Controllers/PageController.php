<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function selamat()
    {
        return 'Selamat Datang';
    }
    public function about(){
        return 'Nama : Bonifasius Ekky Kusumawardhana <br>
        Nim : 2241720173';
    }
    public function articles($id){
        return 'article ke-' .$id;
    }
}
