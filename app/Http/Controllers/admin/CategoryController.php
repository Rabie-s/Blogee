<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.categories.categories',['categories'=>Category::latest()->paginate(8)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.add_category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:categories',
        ]);
        Category::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name,'-'),
        ]);

        return redirect('admin/categories/create')->with('success', 'Category inserted successful');
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        return view('admin.categories.edit_category',['category'=>Category::findOrFail($id)]);
    }

    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name,'-');
        $category->save();

        return redirect()->back()->with('success', 'Category updated successful');

    }

    public function destroy(string $id)
    {
        Category::destroy($id);
        return redirect()->back();
    }
}
