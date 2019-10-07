<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
  
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about', ['nama' => 'Ikhbal']);
    }
}