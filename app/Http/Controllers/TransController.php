<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransController extends Controller
{
    public function index()
    {
        return view('a-transaction');
    }
}
