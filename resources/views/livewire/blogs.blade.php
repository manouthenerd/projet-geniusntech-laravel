<div>

    <x-slot:title>
        Blogs
    </x-slot:title>

    <section
        class="h-[224px] text-white grid place-content-center bg-[url('/public/images/background.jpg')] space-y-4 pt-8">
        <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000" class="text-center text-4xl">
            Nos articles
        </h3>
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1200" class="text-center">
            — Enrichissez votre culture avec des articles instructifs
        </p>
    </section>

    <section>
        <div class="flex justify-between gap-4 items-center m-[1.2em] max-[980px]:grid max-[980px]:grid-cols-1">
            <div class="flex py-4 flex-nowrap overflow-x-scroll gap-4 items-center">
                <flux:button wire:click="getByCategory('all')" class="hover:cursor-pointer">
                    <flux:badge color="{{ $selectedCategory == 'all' ? 'blue' : '' }}">Toutes catégories</flux:badge>
                </flux:button>

                @foreach ($categories as $category)
                    <flux:button wire:click="getByCategory('{{ $category }}')" class="hover:cursor-pointer">
                        <flux:badge color="{{ $selectedCategory == $category ? 'blue' : '' }}">
                            {{ $category }}
                        </flux:badge>
                    </flux:button>
                @endforeach
            </div>

            <div>
                <flux:input class="hover:cursor-pointer" type="search" icon="magnifying-glass"
                    placeholder="Titre de l'article..." wire:model.live.debounce.250ms="search"
                    wire:key="search-input" />
            </div>
        </div>

        <article class="grid p-2 border border-slate-100 rounded w-full mt-4">
            @if ($first_article)
                <div>
                    <div
                        class="grid grid-cols-2 max-[880px]:grid-cols-1 shadow shadow-zinc-200 rounded p-2 bg-[#00669A] blog">
                        <div>
                            <img style="height: 300px;width: 100%;object-fit: cover;" class="rounded"
                                src="{{ asset($first_article->image) }}" alt="{{ $first_article->title }}">
                        </div>
                        <div class="flex flex-col justify-evenly p-2">
                            <h4 class="text-white font-bold underline">{{ $first_article->title }}</h4>
                            <div class="text-zinc-500">
                                <div class="h-[150px] overflow-hidden text-[#e2e2e2e3]">{!! $first_article->content !!}</div>
                                <div class="text-xs text-white space-y-4">
                                    <p class="ml-1 text-white font-bold">Publié le 23 mars 2025</p>
                                    <div class="w-full">
                                        <flux:button wire:navigate size="sm" class="w-full" color="blue"
                                            href="blogs/{{ $first_article->id }}">
                                            Lire la suite
                                        </flux:button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <ul class="grid grid-cols-3 max-[850px]:grid-cols-2 max-[600px]:grid-cols-1 p-2 gap-2 bg-zinc-50">
                @forelse ($articles as $article)
                    <li
                        class="grid justify-between h-[400px] group hover:cursor-pointer p-2 gap-2 shadow shadow-zinc-200 rounded bg-[#00669A] blog hover:bg-white">
                        <div class="space-y-4 h-full flex flex-col justify-between">
                            <div class="overflow-hidden">
                                <img class="overflow-hidde object-cover h-[203px] w-full rounded"
                                    src="{{ asset($article->image) }}" alt="{{ $article->title }}">
                            </div>
                            <div class="flex flex-col justify-evenly p-2 space-y-2">
                                <a wire:navigate href="{{ route('blog', ['blog' => $article->id]) }}"
                                    class="text-white hover:text-zinc-800 group-hover:text-black hover:underline transition-all">{{ $article->title }}</a>
                                <div class="text-xs text-zinc-600 space-y-4">
                                    <p class="ml-1 text-white group-hover:text-black font-bold">Publié le
                                        23.03.2025</p>
                                    <div class="text-xs text-zinc-600 space-y-4">
                                        <div>
                                            <flux:button size="sm"
                                                class="w-full text-center transition-colors hover:text-[#025889]"
                                                href="blogs/{{ $article->id }}" wire:navigate>
                                                Lire tout l'article
                                            </flux:button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                @empty
                    <li class="col-span-3 text-center text-zinc-400 py-8">Aucun article trouvé.</li>
                @endforelse
            </ul>


        </article>
    </section>

</div>
