<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $first_article = Blog::first()->first(['id', 'title', 'summary', 'content', 'image']);

        $articles = Blog::where('id', '<>', $first_article->id)->get(['id', 'title', 'summary', 'content', 'image']);
        return view('blogs', ['first_article' => $first_article, 'articles' => $articles]);
    }

    public function show(Blog $blog)
    {
        if(! $blog) {
            return abort(404);
        }
        
        $article = $blog->only(['id', 'title', 'category', 'summary', 'content', 'image']);

        return view('read-article', ['article' => $article]);
    }
}
