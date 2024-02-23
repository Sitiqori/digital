<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TransController;

class UserController extends Controller
{
    public function profile()
    {
        return view('dashpetugas');
    }
    public function index()
    {
        return view('a-user');
    }
    public function library()
    {
        return view('library');
    }

    // public function index(Request $request)
    // {
    //     $request->session()->flush();
    // }
}