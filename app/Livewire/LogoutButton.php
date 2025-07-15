<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutButton extends Component
{
    public function render()
    {
        return view('livewire.logout-button');
    }

    public function logout(Request $request)
    {
        if (! $request->user()) {
            return null;
        }

        Auth::logout(); // Déconnecte l'utilisateur

        session()->invalidate(); // Invalide la session
        session()->regenerateToken(); // Régénère le token CSRF

        return redirect()->route('login');
    }
}
