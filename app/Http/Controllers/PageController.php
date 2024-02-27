<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
        }     
        
        public function about() {
            $nim = '2241720135';
            $nama = "Firstia Aulia Wida Azizah";
             return "Nim : $nim <br> Nama : $nama ";
            }     
            
            public function show ($id) { 
                return 'Halaman Artikel dengan ID ' . $id;
            }
}
