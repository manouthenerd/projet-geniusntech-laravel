<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class DashboardServices extends Component
{
    private $services;

    public function render()
    {
        return view('livewire.dashboard-services')->with(['services' => $this->services]);
    }

    public function mount()
    {
        $services = Service::all(['id', 'identifier', 'title', 'summary', 'image']);

        $this->services = $services;
    }

    public function destroy(Service $service)
    {
        abort_if(! $service, 403);
        abort_if(! request()->user(), 403);

        // Supprimer l'image du serveur
        Storage::disk("public")->delete($service->image);

        // Supprimer ensuite le service
        $service->delete();

        return redirect(route('dashboard.services'));

    }
}
