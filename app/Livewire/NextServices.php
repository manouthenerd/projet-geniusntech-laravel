<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class NextServices extends Component
{
    public $services = [];
    
    public function render()
    {
        return view('livewire.next-services');
    }


    public function href($string)
    {
        return "/services/" . Str::lower(Str::slug($string));
    }

    public function mount()
    {
        $this->services = [
            [
                'id' => 1,
                'title' => 'Electricité',
                'description' => 'De l’installation à la maintenance, nos techniciens sont à votre disposition.',
                'src' => '/images/electricity.png'
            ],
            [
                'id' => 2,
                'title' => 'Vidéo surveillance',
                'description' => 'Garder un oeil sur les flux entrants et sortants de vos activités avec des
                    outils et technologies de pointe.',
                'src' => '/images/camera.png'
            ],
            
        ];
    }
}
