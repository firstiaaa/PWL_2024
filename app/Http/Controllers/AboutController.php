<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        $nim = '2241720135';
        $nama = "Firstia Aulia Wida Azizah";
         return "Nim : $nim <br> Nama : $nama ";
        }   
}
