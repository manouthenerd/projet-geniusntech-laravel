<div>
    <x-slot:title>Dashboard Blogs</x-slot:title>

    {{-- Filtres --}}
    <div class="flex justify-between gap-4 items-center m-[1.2em] max-[980px]:grid max-[980px]:grid-cols-1">
        <div class="flex py-4 flex-nowrap overflow-x-scroll gap-4 items-center">
            <flux:button wire:click="getByCategory('all')">
                <flux:badge color="{{ $selectedCategory === 'all' ? 'blue' : '' }}">Toutes catégories</flux:badge>
            </flux:button>
            @foreach($categories as $category)
                <flux:button wire:click="getByCategory('{{ $category }}')">
                    <flux:badge color="{{ $selectedCategory === $category ? 'blue' : '' }}">{{ $category }}</flux:badge>
                </flux:button>
            @endforeach
        </div>

        <div>
            <flux:input type="search" icon="magnifying-glass" placeholder="Titre de l'article..." wire:model.debounce.300ms="search" />
        </div>
    </div>

    {{-- Premier article highlight --}}
    @if($first_article)
    <div class="grid grid-cols-2 max-[880px]:grid-cols-1 shadow rounded p-2 bg-[#00669A] mb-4">
        <div>
            <img class="h-72 w-full object-cover rounded" src="{{ $first_article->image }}" alt="{{ $first_article->title }}">
        </div>
        <div class="flex flex-col justify-between p-2">
            <h4 class="text-white font-bold underline">{{ $first_article->title }}</h4>
            <div class="flex justify-between items-center">
                <span class="text-xs text-white">{{ $first_article->created_at->format('d-m-Y') }}</span>
                <div class="flex gap-2">
                    <flux:button wire:click="edit({{ $first_article->id }})" size="sm" color="blue">Modifier</flux:button>
                    <flux:button wire:click="destroy({{ $first_article->id }})" size="sm" color="red">Supprimer</flux:button>
                </div>
            </div>
        </div>
    </div>
    @endif

    {{-- Grille des autres articles --}}
    @if($articles->count() > 0)
    <ul class="grid grid-cols-3 max-[850px]:grid-cols-2 max-[600px]:grid-cols-1 gap-4">
        @foreach($articles as $article)
        <li class="grid gap-2 shadow rounded p-2 bg-[#00669A] hover:bg-white">
            <img class="h-48 w-full object-cover rounded" src="{{ $article->image }}" alt="{{ $article->title }}">
            <h5 class="text-white font-bold">{{ $article->title }}</h5>
            <div class="flex justify-between items-center">
                <span class="text-xs text-white">{{ $article->created_at->format('d-m-Y') }}</span>
                <div class="flex gap-2">
                    <flux:button wire:click="edit({{ $article->id }})" size="sm" color="blue">Modifier</flux:button>
                    <flux:button wire:click="destroy({{ $article->id }})" size="sm" color="red">Supprimer</flux:button>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    @endif

    {{-- Formulaire d'édition --}}
    @if($editArticleId)
    <div class="mt-6 p-4 border rounded bg-white">
        <h3 class="font-bold text-lg mb-4">Modifier l'article</h3>
        <form wire:submit.prevent="update" class="space-y-4">
            <div>
                <label>Titre</label>
                <input type="text" wire:model="title" class="border p-2 w-full rounded" required>
            </div>
            <div>
                <label>Contenu</label>
                <textarea wire:model="content" class="border p-2 w-full rounded" rows="5" required></textarea>
            </div>
            <div>
                <label>Catégorie</label>
                <input type="text" wire:model="category" class="border p-2 w-full rounded" required>
            </div>
            <div>
                <label>Image</label>
                <input type="file" wire:model="image" class="border p-2 w-full rounded">
                @if($imagePreview)
                    <img src="{{ $imagePreview }}" class="h-32 mt-2 rounded">
                @endif
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Enregistrer</button>
        </form>
    </div>
    @endif

</div>
