<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;
use Illuminate\Support\Str;

class ServicesList extends Component
{
    public $services = [];

    public function render()
    {
        return view('livewire.services-list')->with(['services' => $this->services]);
    }

    public function href($string)
    {
        return "/services/" . Str::lower(Str::slug($string));
    }

    public function mount()
    {
        $services = Service::all(['id', 'title', 'summary', 'description', 'image']);

        $this->services = $services;
    }
}
