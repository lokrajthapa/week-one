<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    Public function index(){
        return view('welcome');

    }

    Public function about()
    {
            return view('about');
        }
}
