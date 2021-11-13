<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function __invoke(){
        if(Auth::user()){
            return view('dashboard');
        }else{
            return view('auth.login');
        }
    }
}
