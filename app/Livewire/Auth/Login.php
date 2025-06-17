<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class Login extends Component
{
    #[Validate('required|min:10|email')]
    public $email = '';

    #[Validate('required|min:10')]
    public $password = '';

    public function login() {
        return $this->email;
    }

    #[Layout('components.layouts.login')]
    public function render()
    {
        return view('livewire.auth.login');
    }
}
