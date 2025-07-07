<?php

namespace App\Livewire;

// use Livewire\Component;

class DashboardArticles extends Blogs
{   
    #[\Override]
    public function render()
    {
        return view('livewire.dashboard-articles');
    }
}
