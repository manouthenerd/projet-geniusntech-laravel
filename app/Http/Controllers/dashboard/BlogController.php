<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Blog;
use App\Models\Upload;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ArticleFormRequest;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public string $title = '';
    public string $summary = '';
    public string $category = '';
    public string $content = '';
    public $image = '';

    public function index()
    {
        $first_article = Blog::first()->first(['id', 'title', 'summary', 'content', 'image']);

        $articles = Blog::where('id', '<>', $first_article->id)->get(['id', 'title', 'summary', 'content', 'image']);
        
        return view('dashboard.blogs', ['articles' => $articles, 'first_article' => $first_article]);
    }

    public function create()
    {
        return view('article.create-article');
    }

    public function show(Blog $blog)
    {
        $article = $blog->only(['id', 'title', 'category', 'summary', 'content', 'image']);

        return view('article.edit-article', ['article' => $article, 'id' => $article['id'], 'title' => "Aperçu de l'article"]);
    }

    public function edit(Blog $blog)
    {
        $article = $blog->only(['id', 'title', 'category', 'summary', 'content', 'image']);

        return view('article.edit-article', ['article' => $article, 'id' => $article['id'], 'title' => "Modification de l'article"]);
    }

    public function save(Blog $blog, ArticleFormRequest $request)
    {

        if ($request->file('image')) {

            // Récuperer l'image contenu dans la requête
            $image_file = $request->file('image');

            // Enregistrer l'image après traitement ou déclencher une erreur
            $image_path = Upload::store($image_file, 'articles');

            if ((bool) $image_path) {

                // Récupérer l'article et modifier les informations
                $updated_article = Blog::editArticle($blog->id, $request->title, $request->summary, $request->category, $request->content, $image_path);

                if ((bool) $updated_article) {
                    Storage::disk('public')->delete($blog->image);
                }
            }

            return redirect()->back()->with(['success_message' => "Article modifié avec succès !✅"]);

        } else {
            $updated_article = Blog::editArticle($blog->id, $request->title, $request->summary, $request->category, $request->content, $blog->image);

            return redirect()->back()->with(['success_message' => "Article modifié avec succès !✅"]);
        }

    }

    public function store(ArticleFormRequest $request)
    {
        // Récuperer l'image contenu dans la requête
        $image_file = $request->file('image');

        // Enregistrer l'image après traitement ou déclencher une erreur
        $image_path = Upload::store($image_file, 'articles');

        if ((bool) $image_path) {

            // Récupérer l'article et modifier les informations
            Blog::createArticle($request->title, $request->category, $request->content, $image_path);
        }

        return redirect('/dashboard/blogs');
    }

    public function destroy(Blog $blog) {
        
        if(! (bool) $blog) {
            return redirect()->back();
        }

        // Supprimer l'image du serveur
        Storage::disk("public")->delete($blog->image);

        // Supprimer ensuite le blog
        $blog->delete();

        return redirect()->back();
    }
}


// Mercredi: Gestion des articles => Création, Edition et Suppression; Gestion des services à 50%
// Jeudi: Création de services, suppression + édition
// Page des projets + ajout de projet, édition + suppression