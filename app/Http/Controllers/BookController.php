<?php

namespace App\Http\Controllers;
 
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // buat client role3------------------------------------------
    public function index()
    {
        return view('book');
    }

    // admin + petugas --------------------------------------------------------
    public function abook()
    {
        $books = Book::all();
        return view('a-book', ['books' => $books]);
    }

    public function arating()
    {
        return view('a-rating');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|unique:buku',
        ]);
        
        if ($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->judul. '-' .now()->timestamp. '-.' .$extension;
            $request->file('image')->storeAs('cover', $newName);
        }
        $request['cover'] =$newName;
        // $book = Book::create($validated);
        $book = Book::create($request->all());
        return redirect('a-book')->with('status', 'Book Added Successfully');
    }
}
