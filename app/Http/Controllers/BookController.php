<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Str;
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
        // dd($request->all());
        $validated = $request->validate([
            'judul' => 'required|unique:buku',
        ]);

        // $book = Book::create($validated);
        if ($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->judul. '-' .now()->timestamp. '-.' .$extension;
            $request->file('image')->storeAs('cover', $newName);
        }
        $request['cover'] =$newName;
        $book = Book::create($request->all());

        // $book->categories()->sync($request->categories);
        $book->kategoribuku()->sync($request->kategoribuku);
        return redirect('a-book')->with('status', 'Book Added Successfully');
    }


    

    public function edit($slug)
    {
        $books = Book::where('slug', $slug)->first();
        return view('edit-abook', ['books' => $books]);
    }

    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'judul' => 'required|unique:buku,judul,'.$slug.',slug',
        ]);

        // if ($request->file('image')){
        //     $extension = $request->file('image')->getClientOriginalExtension();
        //     $newName = $request->judul. '-' .now()->timestamp. '-.' .$extension;
        //     $request->file('image')->storeAs('cover', $newName);
        // }
        
        $newName = null;
            if ($request->file('image')) {
                $extension = $request->file('image')->getClientOriginalExtension();
                $newName = $request->judul. '-' .now()->timestamp. '-.' .$extension;
                $request->file('image')->storeAs('cover', $newName);
            }
    
        $request['cover'] = $newName;
        $newSlug = Str::slug($validated['judul']);

        $books = Book::where('slug', $slug)->first();
        $books->update($request->all());
        
        if ($request->kategoribuku) {
            $books->kategoribuku()->sync($request->kategoribuku);
        }
        
        return redirect('a-book')->with('status', 'Book Updated Successfully');
    }


    // public function update(Request $request, $slug)
    // {
    //     $validated = $request->validate([
    //         'judul' => 'required|unique:buku,judul,'.$slug.',slug',
    //     ]);
    //     if ($request->file('image')){
    //         $extension = $request->file('image')->getClientOriginalExtension();
    //         $newName = $request->judul. '-' .now()->timestamp. '-.' .$extension;
    //         $request->file('image')->storeAs('cover', $newName);
    //     }
    //     $request['cover'] =$newName;
    //     $newSlug = Str::slug($validated['judul']);

        
    //     $books = Book::where('slug', $slug)->first();
    //     $books->update([$request->all()]);
        
    //     if ($request->kategoribuku) {
    //         $book->kategoribuku()->sync($request->kategoribuku);
    //     }
        
    //     return redirect('a-book')->with('status', 'Book Updated Successfully');
    // }

}
