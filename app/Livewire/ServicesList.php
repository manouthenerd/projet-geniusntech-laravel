<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServicesList extends Component
{
    public $services = [];

    public function render()
    {
        return view('livewire.services-list')->with(['services' => $this->services]);
    }

    public function mount()
    {
        $services = Service::all(['id', 'identifier', 'title', 'summary', 'description', 'image']);

        $this->services = $services;
    }

}
