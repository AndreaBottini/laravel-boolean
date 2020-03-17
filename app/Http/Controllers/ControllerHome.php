<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHome extends Controller
{
    public function home()
    {
        return view('homepage.home');
    }
    public function privacy()
    {
        return view('homepage.privacy');
    }
    public function faq()
    {
        return view('homepage.faq');
    }
}
