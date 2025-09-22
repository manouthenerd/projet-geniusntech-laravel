<div>

    <div>
        <section>
            {{-- Filtrage et recherche --}}
            <div class="flex justify-between gap-4 items-center m-[1.2em] max-[980px]:grid max-[980px]:grid-cols-1">
                <div class="flex py-4 flex-nowrap overflow-x-scroll gap-4 items-center">
                    <flux:button wire:click="getByCategory('all')">
                        <flux:badge color="{{ $selectedCategory === 'all' ? 'blue' : '' }}">Toutes catégories
                        </flux:badge>
                    </flux:button>
                    @foreach ($categories as $category)
                        <flux:button wire:click="getByCategory('{{ $category }}')">
                            <flux:badge color="{{ $selectedCategory === $category ? 'blue' : '' }}">{{ $category }}
                            </flux:badge>
                        </flux:button>
                    @endforeach
                </div>

                <div>
                    <flux:input type="search" icon="magnifying-glass" placeholder="Titre de l'article..."
                        wire:model.debounce.300ms="search" />
                </div>
            </div>

            <article class="grid p-2 rounded w-full mt-4">

                {{-- Premier article --}}
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

                            <!-- Contenu tronqué -->
                            <p class="mb-4 text-sm opacity-90 line-clamp-4">
                                {!! $first_article->content !!}
                            </p>

                            <!-- Footer -->
                            <div class="flex justify-between items-center mt-auto">
                                <span class="text-xs opacity-75">
                                    Publié le {{ $first_article->created_at->format('d-m-y') }}
                                </span>
                                <flux:button wire:navigate size="sm" color="#00669A"
                                    href="blogs/{{ $first_article->id }}">
                                    Lire la suite
                                </flux:button>
                            </div>
                        </div>
                    </div>
                @endif

                {{-- Autres articles --}}
                @if ($articles->count() > 0)
                    <ul
                        class="grid grid-cols-3 max-[850px]:grid-cols-2 max-[600px]:grid-cols-1 p-2 gap-4 bg-zinc-50 rounded-lg">
                        @foreach ($articles as $article)
                            <li
                                class="group h-[400px] flex flex-col p-3 rounded-lg shadow-md shadow-blue-200/40 bg-[#00669A] transition-all hover:shadow-xl hover:bg-white">

                                <!-- Image + badge catégorie -->
                                <div class="relative overflow-hidden rounded-lg">
                                    <img class="object-cover h-[200px] w-full transition-transform duration-300 group-hover:scale-105"
                                        src="{{ $article->image }}" alt="{{ $article->title }}" />

                                    @if (isset($article->category))
                                        <span
                                            class="absolute top-2 left-2 bg-gradient-to-r from-blue-600 to-blue-400 text-white text-xs font-semibold px-2 py-1 rounded max-w-[70%] truncate">
                                            {{ $article->category }}
                                        </span>
                                    @endif
                                </div>

                                <!-- Contenu -->
                                <div class="flex flex-col justify-between flex-1 mt-3">
                                    <h3
                                        class="text-lg font-semibold bg-gradient-to-r from-blue-700 to-blue-400 bg-clip-text text-transparent group-hover:from-blue-500 group-hover:to-blue-300 line-clamp-2">
                                        {{ $article->title }}
                                    </h3>

                                    <p class="mt-1 text-gray-100 dark:text-gray-300 text-sm line-clamp-3">
                                        {{ $article->summary ?? substr(strip_tags($article->content), 0, 100) . '...' }}
                                    </p>

                                    <div class="flex justify-between items-center mt-2">
                                        <span class="text-xs text-gray-200 dark:text-gray-400">
                                            Publié le {{ $article->created_at->format('d-m-y') }}
                                        </span>
                                        <flux:button size="sm"
                                            class="text-center transition-colors hover:text-[#025889]"
                                            href="blogs/{{ $article->id }}" wire:navigate>
                                            Lire tout l'article
                                        </flux:button>
                                    </div>
                                </div>

                            </li>
                        @endforeach
                    </ul>
                @elseif(!$first_article)
                    <div class="text-center text-zinc-400 py-8 flex flex-col justify-center w-full gap-4">
                        <p>Aucun article trouvé.</p>
                        <div class="self-center">
                            <img src="/images/empty-article.svg" alt="empty article illustration">
                        </div>
                    </div>
                @endif

            </article>


        </section>

    </div>

</div>
