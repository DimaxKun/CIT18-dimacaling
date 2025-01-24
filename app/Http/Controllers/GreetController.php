<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function index()
    {
        $name = 'Mohammad Ali Dimacaling';
        return view('greet', ['name' => $name]);
    }
}
