<?php

namespace App\Http\Controllers\admin;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.articles.articles',['articles'=>Article::with('category','user')->get()]);
        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles.add_article',['categories'=>Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:articles',
            'image' => 'required|image|mimes:jpg,png,jpeg',
            'category' => 'required',
            'content' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $file = fileUpload($request->file('image'),'uploads');
        }

        Article::create([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title,'-'),
            'image'=>$file,
            'content'=>$request->content,
            'category_id'=>$request->category,
            'user_id'=>Auth::user()->id,
        ]);

        return redirect('admin/articles/create')->with('success', 'Article inserted successful');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.articles.edit_article',['categories'=>Category::all(),'article'=>Article::findOrFail($id)]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'content' => 'required',
        ]);

        $article = Article::findOrFail($id);
        if ($request->hasFile('image')) {
            fileDelete($article->image,'uploads');
            $file = fileUpload($request->file('image'),'uploads');
            $article->image = $file;
        }

        $article->title = $request->title;
        $article->slug = Str::slug($request->title,'-');
        $article->category_id = $request->category;
        $article->content = $request->content;
        $article->save();
        return redirect()->back()->with('success', 'Article updated successful');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);
        fileDelete($article->image,'uploads');
        $article->delete($id);
        return redirect()->back();
    }
}
