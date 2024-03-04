<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
        $categories = Category::all();
        return view('a-book', ['books' => $books, 'categories' => $categories]);
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
        $book->categories()->sync($request->categories);
        return redirect('a-book')->with('status', 'Book Added Successfully');
    }

    public function kategoribuku(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'kategoribuku_relasi', 'buku_id', 'kategori_id');
    }

}
