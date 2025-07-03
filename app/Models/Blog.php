<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'summary', 'category', 'content', 'image'];

    public static function createArticle($title, $summary, $category, $content, $image)
    {

        self::create([
            'title' => $title,
            'summary' => $summary,
            'category' => $category,
            'content' => $content,
            'image' => $image,
        ]);

        return true;
    }

    public static function editArticle(int $id, $title, $summary, $category, $content, $image)
    {

        $article = self::find($id);

        $article->title     = $title;
        $article->summary   = $summary;
        $article->category  = $category;
        $article->content   = $content;
        $article->image     = $image;

        $article->save();

        return $article;
    }
}
