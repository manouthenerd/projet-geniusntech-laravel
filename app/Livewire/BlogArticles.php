<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogArticles extends Component
{

    public $first_article;
    public $articles;
    public $categories = [];
    public $selectedCategory = 'all';
    public $search = '';

    public function mount()
    {
        $this->categories = Blog::distinct()->pluck('category')->toArray();
        $this->updateArticles();
    }

    public function updatedSearch()
    {
        $this->updateArticles();
    }

    public function getByCategory($category)
    {
        $this->selectedCategory = $category;
        $this->updateArticles();
    }

    private function updateArticles()
    {
        $query = Blog::query();

        if ($this->selectedCategory !== 'all') {
            $query->where('category', $this->selectedCategory);
        }

        if (!empty($this->search)) {
            $query->where('title', 'like', "%{$this->search}%");
        }

        $allArticles = $query->orderBy('created_at', 'desc')->get(['id', 'title', 'content', 'image', 'created_at']);

        if ($allArticles->count() > 0) {
            $this->first_article = $allArticles->first();
            $this->articles = $allArticles->count() > 1 ? $allArticles->slice(1) : collect();
        } else {
            $this->first_article = null;
            $this->articles = collect();
        }
    }

    public function render()
    {
        return view('livewire.blog-articles');
    }
}
