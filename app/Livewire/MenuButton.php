<?php

namespace App\Livewire;

use Livewire\Component;

class MenuButton extends Component
{
    public $is_active = false;

    public function toggle_menu_status(){

       $this->is_active = ! $this->is_active;

       return $this->is_active;
    }

    public function render()
    {
        return view('livewire.menu-button');
    }
}
