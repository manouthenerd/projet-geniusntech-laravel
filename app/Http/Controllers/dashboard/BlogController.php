<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Blog;
use App\Models\Upload;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ArticleFormRequest;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public string $title = '';
    public string $category = '';
    public string $content = '';
    public $image = '';

    public function index()
    {
        $first_article = Blog::first()->first(['id', 'title', 'category', 'content', 'image']);

        $articles = Blog::where('id', '<>', $first_article->id)->get(['id', 'title', 'category', 'content', 'image']);

        return view('dashboard.blogs', ['articles' => $articles, 'first_article' => $first_article]);
    }

    public function create()
    {
        return view('article.create-article');
    }

    public function show(Blog $blog)
    {
        $article = $blog->only(['id', 'title', 'category', 'content', 'image']);

        return view('article.edit-article', ['article' => $article, 'id' => $article['id'], 'title' => "Aperçu de l'article"]);
    }

    public function edit(Blog $blog)
    {
        $article = $blog->only(['id', 'title', 'category', 'content', 'image']);

        return view('article.edit-article', ['article' => $article, 'id' => $article['id'], 'title' => "Modification de l'article"]);
    }

    public function update(Blog $blog, ArticleFormRequest $request)
    {
        $article = $blog;

        if ($request->image) {

            // Supprime l’ancienne image si existante
            if ($article->image && file_exists(public_path($article->image))) {
                unlink(public_path($article->image));
            }

            $imageName = time() . '_' . uniqid() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/articles'), $imageName);
            $article->image = '/images/articles/' . $imageName;
        }

        $article->title = $request->title;
        $article->content = $request->content;
        $article->category = $request->category;
        $article->save();

        return redirect()->back();
    }

    public function store(ArticleFormRequest $request)
    {
        DB::transaction(function () use ($request) {

            $imageName = time() . '_' . uniqid() . '.' . $request->image->getClientOriginalExtension();

            Blog::create([
                'title' => $request->title,
                'content' => $request->content,
                'image' => '/images/articles/' . $imageName,
                'category' => $request->category,
            ]);

            // Déplacer le fichier dans public/images
            $request->image->move(public_path('images/articles'), $imageName);
        });

        return redirect('/dashboard/blogs');
    }
}
