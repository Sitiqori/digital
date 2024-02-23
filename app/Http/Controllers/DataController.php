<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        return view('home');
    }
    // public function index(Request $request)
    // {
    //     $request->session()->flush();
    // }
}
