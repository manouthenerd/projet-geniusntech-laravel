<?php

namespace App\Livewire;

use Flux\Flux;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Blogs extends Component
{
    public $first_article;
    public $categories;
    public $articles;
    public $selectedCategory = 'all';
    public $search = "";

    public function mount()
    {
        $this->categories = Blog::distinct()->pluck('category');
        $this->updateArticles();
    }

    public function updatedSearch()
    {
        $this->updateArticles();
    }

    public function getByCategory(string $category)
    {
        $this->selectedCategory = $category;
        $this->updateArticles();
    }

    public function updateArticles()
    {
        $query = Blog::query();

        // Filtre par catégorie si ce n'est pas "all"
        if ($this->selectedCategory !== 'all') {
            $query->where('category', $this->selectedCategory);
        }

        // Filtre par recherche si besoin
        if (!empty($this->search)) {
            $query->where('title', 'like', '%' . $this->search . '%');
        }

        // Récupère le premier article
        $this->first_article = $query->first(['id', 'title', 'content', 'image', 'created_at']);

        // Récupère les autres articles
        if ($this->first_article) {
            $this->articles = (clone $query)
                ->where('id', '<>', $this->first_article->id)
                ->get(['id', 'title', 'content', 'image', 'created_at']);

        } else {
            $this->articles = collect();
        }
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.blogs');
    }
}
