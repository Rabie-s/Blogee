<?php

namespace App\Http\Controllers\admin;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $totalArticles = DB::table('articles')->count();
        $totalAdmins = DB::table('users')->count();
        $totalCategories = DB::table('categories')->count();
        return view('admin.dashboard',['totalArticles'=>$totalArticles,'totalAdmins'=>$totalAdmins,'totalCategories'=>$totalCategories]);
    }
}
