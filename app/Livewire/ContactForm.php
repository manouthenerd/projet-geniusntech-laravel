<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $surname;
    public $phone;
    public $email;
    public $message;
    public $errorMessage = '';
    public $successMessage = '';

    protected $rules = [
        'name' => 'required|string|min:2',
        'surname' => 'required|string|min:2',
        'phone' => 'required|string|min:8',
        'email' => 'required|email',
        'message' => 'required|string|min:5',
    ];

    protected $messages = [
        'name.required' => 'Le nom est obligatoire.',
        'name.string' => 'Le nom doit être une chaîne de caractères.',
        'name.min' => 'Le nom doit contenir au moins 2 caractères.',
        
        'surname.required' => 'Le prénom est obligatoire.',
        'surname.string' => 'Le prénom doit être une chaîne de caractères.',
        'surname.min' => 'Le prénom doit contenir au moins 2 caractères.',
        
        'phone.required' => 'Le téléphone est obligatoire.',
        'phone.string' => 'Le téléphone doit être une chaîne de caractères.',
        'phone.min' => 'Le téléphone doit contenir au moins 8 caractères.',
        
        'email.required' => 'L\'email est obligatoire.',
        'email.email' => 'Veuillez saisir une adresse email valide.',
        
        'message.required' => 'Le message est obligatoire.',
        'message.string' => 'Le message doit être une chaîne de caractères.',
        'message.min' => 'Le message doit contenir au moins 5 caractères.',
    ];

    public function attributes(){
        return [
            'name' => 'Nom',
            'surname' => 'Prénom',
            'phone' => 'Téléphone',
            'email' => 'Email',
            'message' => 'Message',
        ];
    }

    public function submit()
    {
        $this->validate($this->rules, $this->messages, $this->attributes());
        
        // Réinitialiser les messages
        $this->errorMessage = '';
        $this->successMessage = '';

        try {
            // Envoi de l'email avec la vue Blade
            Mail::send('emails.contact-message', [
                'name' => $this->name,
                'surname' => $this->surname,
                'phone' => $this->phone,
                'email' => $this->email,
                'messageContent' => $this->message,
            ], function ($mail) {
                $mail->to(config('mail.from.address'))
                    ->subject('Nouveau message de contact');
            });

            // Réinitialiser le formulaire
            $this->reset(['name', 'surname', 'phone', 'email', 'message']);
            
            // Message de succès
            $this->successMessage = 'Message envoyé avec succès !';
            
            // Émettre l'événement de succès pour le toast
            $this->dispatch('contact-success');
            
        } catch (\Exception $e) {
            // En cas d'erreur, on garde les données du formulaire
            $this->errorMessage = "Erreur lors de l'envoi du message. Veuillez réessayer. \n " . $e->getMessage();
            
            // Log détaillé pour debug
            Log::error('Erreur SMTP détaillée', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'mail_config' => [
                    'host' => config('mail.mailers.smtp.host'),
                    'port' => config('mail.mailers.smtp.port'),
                    'username' => config('mail.mailers.smtp.username'),
                    'encryption' => config('mail.mailers.smtp.encryption'),
                ]
            ]);
        }
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}