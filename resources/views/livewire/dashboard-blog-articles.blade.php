<div>
    <x-slot:title>Dashboard Blogs</x-slot:title>

    {{-- Filtres --}}
    <div class="flex justify-between gap-4 items-center m-[1.2em] max-[980px]:grid max-[980px]:grid-cols-1">
        <div class="flex py-4 flex-nowrap overflow-x-scroll gap-4 items-center">
            <flux:button wire:click="getByCategory('all')">
                <flux:badge color="{{ $selectedCategory === 'all' ? 'blue' : '' }}">Toutes catégories</flux:badge>
            </flux:button>
            @foreach ($categories as $category)
                <flux:button wire:click="getByCategory('{{ $category }}')">
                    <flux:badge color="{{ $selectedCategory === $category ? 'blue' : '' }}">{{ $category }}
                    </flux:badge>
                </flux:button>
            @endforeach
        </div>

        <div class="flex items-center gap-2">
            <flux:input type="search" icon="magnifying-glass" placeholder="Titre de l'article..."
                wire:model.debounce.300ms="search" />

            <flux:button variant="primary" :href="route('dashboard.blogs.create')">
                <flux:icon.plus />
            </flux:button>
        </div>

    </div>

    {{-- Premier article highlight --}}
    @if ($first_article)
        <div
            class="grid grid-cols-2 max-[880px]:grid-cols-1 rounded-lg overflow-hidden bg-[#00669A] mb-6 shadow-lg shadow-blue-300/40">
            <!-- Image -->
            <div>
                <img class="h-80 w-full object-cover" src="{{ $first_article->image }}"
                    alt="{{ $first_article->title }}">
            </div>

            <!-- Contenu -->
            <div class="flex flex-col justify-between p-6 text-white">
                <!-- Titre -->
                <h2 class="text-3xl font-bold mb-3 truncate">
                    {{ $first_article->title }}
                </h2>

                <!-- Contenu -->
                <p class="mb-4 text-sm opacity-90 line-clamp-4">
                    {{ $first_article->content }}
                </p>

                <!-- Footer (date + boutons) -->
                <div class="flex justify-between items-center mt-auto">
                    <span class="text-xs opacity-75">
                        {{ $first_article->created_at->format('d-m-Y') }}
                    </span>
                    <div class="flex gap-2">
                        <flux:button as="a" href="{{ route('dashboard.blogs.show', $first_article->id) }}">
                            Modifier
                        </flux:button>
                        <flux:button variant="primary" color="red" wire:click="destroy({{ $first_article->id }})">
                            Supprimer
                        </flux:button>
                    </div>
                </div>
            </div>
        </div>
    @elseif(!$first_article)
        <div class="text-center text-zinc-400 py-8 flex flex-col justify-center w-full gap-4 space-y-2">
            <p>Aucun article trouvé.</p>
            <div style="align-self: center">
                <img src="/images/empty-article.svg" alt="empty article illustration">
            </div>
        </div>
    @endif

    {{-- Grille des autres articles --}}
    @if ($articles->count() > 0)
        <ul class="grid grid-cols-3 max-[850px]:grid-cols-2 max-[600px]:grid-cols-1 gap-4">
            @foreach ($articles as $article)
                <li
                    class="h-[400px] group hover:cursor-pointer p-3 shadow-md shadow-blue-200/40 rounded-lg bg-[#00669A] transition-colors flex flex-col">

                    <!-- Image -->
                    <div class="overflow-hidden rounded">
                        <img class="object-cover h-[200px] w-full transition-transform duration-300 group-hover:scale-105"
                            src="{{ $article->image }}" alt="{{ $article->title }}">
                    </div>

                    <!-- Contenu -->
                    <div class="flex flex-col justify-between flex-1 mt-3">
                        <a wire:navigate href="blogs/{{ $article->id }}"
                            class="text-white font-semibold line-clamp-2 transition-all">
                            {{ $article->title }}
                        </a>

                        <p class="mt-2 text-xs text-white font-bold">
                            Publié le {{ $article->created_at->format('d-m-y') }}
                        </p>

                        <div class="grid gap-2 space-y-2">
                            <flux:button as="a" href="{{ route('dashboard.blogs.show', $article->id) }}">
                                Modifier
                            </flux:button>
                            <flux:button variant="primary" color="red"
                                wire:click="destroy({{ $article->id }})">
                                Supprimer
                            </flux:button>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif

</div>
