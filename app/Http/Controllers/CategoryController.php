<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('a-category', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'namakategori' => 'required|unique:kategoribuku',
        ]);


        $category = Category::create($validated);
        return redirect('a-category')->with('status', 'Category Added Successfully');
    }

    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('edit-category', ['category' => $category]);
    }

    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'namakategori' => 'required|unique:kategoribuku,namakategori,'.$slug.',slug',
        ]);

        // Generate slug from namakategori
        $newSlug = Str::slug($validated['namakategori']);

        // Update category with new slug
        $category = Category::where('slug', $slug)->first();
        $category->update([
            'namakategori' => $validated['namakategori'],
            'slug' => $newSlug,
        ]);

        return redirect('a-category')->with('status', 'Category Updated Successfully');
    }

    public function destroy($slug)
    {
        // Temukan kategori yang akan dihapus berdasarkan slug
        $category = Category::where('slug', $slug)->first();

        // Hapus kategori jika ditemukan
        if ($category) {
            $category->delete();
            return redirect('a-category')->with('message', 'Category Deleted ');
        } else {
            // Tampilkan pesan jika kategori tidak ditemukan
            return redirect('a-category')->with('error', 'Category not found');
        }
    }

    public function deleted()
    {
        $deletedCategories = Category::onlyTrashed()->get();
        return view('/deleted-category', ['deletedCategories' => $deletedCategories]);
    }

    public function restore( $slug)
    {
        $category = Category::withTrashed()->where('slug', $slug)->first();
        $category->restore();
        return redirect('a-category')->with('status', 'Category Restored Successfully');
    }
}
