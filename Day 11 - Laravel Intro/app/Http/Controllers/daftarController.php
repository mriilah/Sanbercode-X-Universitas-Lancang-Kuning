<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daftarController extends Controller
{
    public function daftar(){
        return view('register');
    }
    public function register(Request $requet){
        $firstname = $requet->input('namadepan');
        $lastname = $requet->input('namabelakang');
        $bangsa = $requet->input('Kebangsaan');
        return view('welcome', ['fistname' => $firstname, 'lastname' => $lastname, 'bangsa' => $bangsa]);
    }
}
