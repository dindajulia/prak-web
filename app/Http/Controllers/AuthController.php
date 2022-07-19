<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function daftar(){
        return view('form') ;
    }

    public function kirim(Request $request){
        $fnama = $request['fname'];
        $lnama = $request['lname'];

        return view('selamatDatang', compact('fnama', 'lnama')) ;
    }
}
