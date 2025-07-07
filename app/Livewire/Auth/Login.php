<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    #[Validate('required|email')]
    public $email = '';

    #[Validate('required|min:8')]
    public $password = '';

    public function login() {
        
        $validated_credentials = $this->validate();

        $email = $validated_credentials['email'];
        $password = $validated_credentials['password'];

        if(! User::authenticate($email, $password)) {
            return back()->withErros(['credentials' => "Email ou mot de passe incorrect"]);
        }

        return redirect()->intended(route('dashboard'));
    }

    #[Layout('components.layouts.login')]
    public function render()
    {
        return view('livewire.auth.login');
    }
}
