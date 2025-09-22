<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;


class DashboardBlogArticles extends Component
{

    use WithFileUploads;

    public $first_article;
    public $articles;
    public $categories = [];
    public $selectedCategory = 'all';
    public $search = "";

    public $editArticleId;
    public $title;
    public $content;
    public $category;
    public $image;
    public $imagePreview;

    public function mount()
    {
        $this->categories = Blog::distinct()->pluck('category')->toArray();
        $this->loadArticles();
    }

    public function updatedSearch()
    {
        $this->loadArticles();
    }

    public function getByCategory($category)
    {
        $this->selectedCategory = $category;
        $this->loadArticles();
    }

    public function loadArticles()
    {
        $query = Blog::query();

        if ($this->selectedCategory !== 'all') {
            $query->where('category', $this->selectedCategory);
        }

        if (!empty($this->search)) {
            $query->where('title', 'like', "%{$this->search}%");
        }

        $allArticles = $query->orderBy('created_at', 'desc')->get(['id', 'title', 'content', 'image', 'category', 'created_at']);

        $this->first_article = $allArticles->first();
        $this->articles = $allArticles->count() > 1 ? $allArticles->slice(1) : collect();
    }

    public function update()
    {
        $article = Blog::findOrFail($this->editArticleId);

        $validated = $this->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'category' => 'required|string',
            'image' => 'nullable|image|max:10240', // max 10Mo
        ]);

        if ($this->image) {

            // Supprime l’ancienne image si existante
            if ($article->image && file_exists(public_path($article->image))) {
                unlink(public_path($article->image));
            }

            $imageName = time() . '_' . uniqid() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('images/blogs', $imageName, 'public');
            $article->image = '/images/blogs/' . $imageName;
        }

        $article->title = $this->title;
        $article->content = $this->content;
        $article->category = $this->category;
        $article->save();

        $this->resetInput();
        $this->loadArticles();
        session()->flash('success', 'Article mis à jour avec succès !');
    }

    public function destroy(Blog $article)
    {
        if ($article->image && file_exists(public_path($article->image))) {
            unlink(public_path($article->image));
        }
        $article->delete();
        $this->loadArticles();
        session()->flash('success', 'Article supprimé avec succès !');
    }

    private function resetInput()
    {
        $this->editArticleId = null;
        $this->title = '';
        $this->content = '';
        $this->category = '';
        $this->image = null;
        $this->imagePreview = null;
    }

  
    public function render()
    {
        return view('livewire.dashboard-blog-articles');
    }
}
