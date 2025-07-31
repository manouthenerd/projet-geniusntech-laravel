<div>
    <!-- Message d'erreur avec fade in -->
    @if ($errorMessage)
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 animate-fade-in">
            {{ $errorMessage }}
        </div>
    @endif

    <!-- Message de succès avec fade in -->
    @if ($successMessage)
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 animate-fade-in">
            {{ $successMessage }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="p-2 space-y-4">
        @csrf
        <div class="grid grid-cols-2 gap-2">
            <flux:field>
                <flux:label>Nom<span class="text-red-500">*</span></flux:label>
                <flux:input wire:model="name" type="text" placeholder="Entrer votre nom..." />
                @error("name")
                    <p class="text-red-500 text-xs font-bold mt-2">{{ $message }}</p>
                @enderror
            </flux:field>

            <flux:field>
                <flux:label>Prénoms<span class="text-red-500">*</span></flux:label>
                <flux:input wire:model="surname" type="text" placeholder="Entrer votre prénom..." />
                @error("surname")
                    <p class="text-red-500 text-xs font-bold mt-2">{{ $message }}</p>
                @enderror
            </flux:field>
        </div>

        <div>
            <flux:field>
                <flux:label>Téléphone<span class="text-red-500">*</span></flux:label>
                <flux:input wire:model="phone" type="tel" placeholder="+2250102030405" />
                @error("phone")
                    <p class="text-red-500 text-xs font-bold mt-2">{{ $message }}</p>
                @enderror
            </flux:field>
        </div>

        <div>
            <flux:field>
                <flux:label>Adresse email<span class="text-red-500">*</span></flux:label>
                <flux:input wire:model="email" type="email" placeholder="exemple@gmail.com" />
                @error("email")
                    <p class="text-red-500 text-xs font-bold mt-2">{{ $message }}</p>
                @enderror
            </flux:field>
        </div>

        <div>
            <flux:field>
                <flux:label>Votre message<span class="text-red-500">*</span></flux:label>
                <flux:textarea wire:model="message" placeholder="Exprimer vos idées ici..." />
                @error("message")
                    <p class="text-red-500 text-xs font-bold mt-2">{{ $message }}</p>
                @enderror
            </flux:field>
        </div>

        <div>
            <flux:button type="submit" class="w-full bg-[#018bcd]! text-white! hover:opacity-80 transition-opacity"
                wire:loading.attr="disabled">
                <span wire:loading.remove>Envoyer</span>
                <span wire:loading>Envoi en cours...</span>
            </flux:button>
        </div>

    </form>

    <div id="contact-toast" class="fixed top-4 right-4 bg-green-600 text-white px-4 py-2 rounded shadow-lg hidden z-50">
        Message envoyé avec succès !
    </div>

    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('contact-success', () => {
                const toast = document.getElementById('contact-toast');
                toast.classList.remove('hidden');
                setTimeout(() => toast.classList.add('hidden'), 3000);
            });
        });
    </script>
</div>
