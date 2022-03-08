<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() //invoke es para administrar una única ruta
    {
    // return view('welcome');
    return view('home');
    }
}
