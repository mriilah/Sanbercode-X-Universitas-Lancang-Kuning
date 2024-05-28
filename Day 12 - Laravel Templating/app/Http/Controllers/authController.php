<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function daftar(){
        return view('page.register');
    }
    public function register(Request $requet){
        $firstname = $requet->input('namadepan');
        $lastname = $requet->input('namabelakang');
        $bangsa = $requet->input('Kebangsaan');
        return view('page.welcome', ['fistname' => $firstname, 'lastname' => $lastname, 'bangsa' => $bangsa]);
    }
}
