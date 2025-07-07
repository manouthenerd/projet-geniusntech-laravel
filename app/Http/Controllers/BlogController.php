<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function show(Blog $blog)
    {
        if(! $blog) {
            return abort(404);
        }
        
        $article = $blog->only(['id', 'title', 'category', 'summary', 'content', 'image']);

        return view('read-article', ['article' => $article]);
    }
}
