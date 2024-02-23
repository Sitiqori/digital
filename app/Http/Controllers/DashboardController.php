<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Trans;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $bookCount = Book::count();
        $categoryCount = Category::count();
        $userCount = User::count();
        $transCount = Trans::count();
        return view('dashboard', [ 'book_count' =>$bookCount, 'category_count' =>$categoryCount, 'user_count' =>$userCount, 'trans_count' =>$transCount,]);
    }
    

    // peminjam -----------------------------------------------------------
    public function ind()
    {
        return view('home');
    }
}
