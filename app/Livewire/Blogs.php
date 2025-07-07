<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Blogs extends Component
{
    public $first_article;
    public $categories;
    public $articles;
    public $text;
    public $selectedCategory = 'all';

    public function mount()
    {
        $this->categories = Blog::distinct()->pluck('category');
        $this->loadAllArticles();
    }

    public function loadAllArticles()
    {
        $this->first_article = Blog::first(['id', 'title', 'content', 'image']);
        $this->articles = Blog::where('id', '<>', optional($this->first_article)->id)
            ->get(['id', 'title', 'content', 'image']);
    }

    public function getByCategory(string $category)
    {
        $this->selectedCategory = $category;
        $this->categories = Blog::distinct()->pluck('category');

        if ($category === 'all') {
            $this->loadAllArticles();
        } else {
            $this->first_article = Blog::where('category', $category)->first(['id', 'title', 'content', 'image']);
            if ($this->first_article) {
                $this->articles = Blog::where('category', $category)
                    ->where('id', '<>', $this->first_article->id)
                    ->get(['id', 'title', 'content', 'image']);
            } else {
                $this->articles = collect();
            }
        }
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.blogs');
    }
}
