<?php

namespace App\Livewire;

use Flux\Flux;

// use Livewire\Component;

class DashboardArticles extends Blogs
{   

    #[\Override]
    public function render()
    {
        return view('livewire.dashboard-articles');
    }
}
