<?php

namespace App\Http\Controllers\blog;

use App\Models\Article;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index', ['articles' => Article::with('category')->latest()->paginate(8)]);
    }

    public function show(string $slug)
    {
        DB::table('articles')->where('slug', $slug)->increment('views');

        $article = Article::where('slug', $slug)->first();
        $mostPopularArticles = Article::orderBy('views', 'desc')->limit(3)->get();
        
        return view('blog.article', ['article' => $article, 'mostPopularArticles' => $mostPopularArticles]);
    }

    public function showArticlesInCategory(string $id)
    {
        return view('blog.index', ['articles' => Article::where('category_id', $id)->latest()->paginate(8)]);
    }
}
