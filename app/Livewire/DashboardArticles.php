<?php

namespace App\Livewire;

class DashboardArticles extends Blogs
{   

    #[\Override]
    public function render()
    {
        return view('livewire.dashboard-articles');
    }
}
