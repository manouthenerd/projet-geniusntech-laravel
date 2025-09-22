<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index() {
        return view('blog');
    }

    public function show(Blog $blog)
    {
        if(! $blog) {
            return abort(404);
        }
        
        $article = $blog->only(['id', 'title', 'category', 'content', 'image']);

        // Récupérer d'autres articles de la même catégorie ou d'autres catégories
        $next_articles = Blog::where('id', '!=', $blog->id)
            ->inRandomOrder()
            ->limit(2)
            ->get(['id', 'title', 'category', 'content', 'image']);

        return view('read-article', [
            'article' => $article, 
            'next_articles' => $next_articles
        ]);
    }
}
