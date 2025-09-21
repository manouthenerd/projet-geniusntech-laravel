<?php

namespace App\Livewire;

use Livewire\Component;

class Alert extends Component
{
    public $show = false;
    public $message = 'Opération effectuée avec succès';

    protected $listeners = ['showAlert'];

    public function mount()
    {
        if (session()->has('success')) {
            $this->message = session('success');
            $this->show = true;
        }
    }

    public function showAlert($message = null)
    {
        $this->message = $message ?? 'Opération effectuée avec succès';
        $this->show = true;
    }


    public function render()
    {
        return view('livewire.alert');
    }
}