<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class DashboardServices extends Component
{
    private $services; 

    public function render()
    {
        return view('livewire.dashboard-services')->with(['services' => $this->services]);
    }

    public function mount() {
        $services = Service::all(['id', 'identifier', 'title', 'summary', 'image']);

        $this->services = $services;
    }
}
