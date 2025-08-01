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

        // Récupère tous les articles
        $allArticles = $query->orderBy('created_at', 'desc')->get(['id', 'title', 'content', 'image', 'created_at']);

        if ($allArticles->count() > 0) {
            // Le premier article (le plus récent) sera affiché en grand format
            $this->first_article = $allArticles->first();
            
            // Les autres articles seront affichés en grille
            if ($allArticles->count() > 1) {
                $this->articles = $allArticles->slice(1);
            } else {
                // S'il n'y a qu'un seul article, on ne l'affiche que dans la section principale
                $this->articles = collect();
            }
        } else {
            $this->first_article = null;
            $this->articles = collect();
        }
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.blogs');
    }
}
