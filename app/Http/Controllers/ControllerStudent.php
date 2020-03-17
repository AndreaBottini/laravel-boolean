<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerStudent extends Controller
{
    public function index()
    {
        return view('student.index');
    }

    public function show($id)
    {
        return 'student.show';
    }
}
