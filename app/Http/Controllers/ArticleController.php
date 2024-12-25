<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $artikel = Article::paginate(6);
        $title = 'Article';
        $favicon = asset('images/logo-triwuri.png');
        return view('article', compact('artikel', 'title', 'favicon'));
    }
    public function detail(Request $request)
    {   
        $id = $request->id;
        $artikel = Article::find($id);
        $title = 'Article';
        $favicon = asset('images/logo-triwuri.png');
        return view('article-detail', compact('artikel', 'title', 'favicon'));
    }
}
