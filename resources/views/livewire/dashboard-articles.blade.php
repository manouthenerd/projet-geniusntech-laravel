  <x-slot:head_title>
      Catalogue des blogs
  </x-slot:head_title>
  <section>

      <div class="flex justify-around gap-4 items-center mt-4 max-[880px]:grid max-[880px]:grid-cols-1">
          <div class="flex flex-wrap justify-center gap-4 items-center">

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

          <div class="flex items-center gap-4 space-x-2">
              <flux:input class="hover:cursor-pointer" icon="magnifying-glass" placeholder="Titre de l'article..."
                  wire:key="search" wire:model.live.debounce.250ms="search" />

              <flux:button variant="primary" size="sm" href="blogs/create" icon="plus" />
          </div>

      </div>

      <article class="grid p-2 border border-slate-100 rounded w-full mt-4">
          <div class="grid grid-cols-1 p-2 bg-zinc-50">
              <div>
                  @if ($first_article)
                      <div
                          class="grid grid-cols-2 max-[880px]:grid-cols-1 shadow shadow-zinc-200 rounded p-2 bg-white blog">
                          <div>
                              <img style="height: 300px;width: 100%;object-fit: cover;" class="rounded"
                                  src="{{ asset($first_article->image) }}" alt="livraison">
                          </div>
                          <div class="flex flex-col justify-evenly p-2">
                              <h4 class="text-zinc-600">{{ $first_article->title }}</h4>
                              <div class="text-zinc-500">
                                  <div class="h-[150px] overflow-hidden">{!! $first_article->content !!}</div>
                                  <div class="text-xs text-zinc-600 space-y-4">
                                      <p class="ml-1">Genius Admin • {{ \Carbon\Carbon::parse($first_article->created_at)->format('d-m-y') }}</p>
                                      <div class="flex gap-4">
                                          <flux:button wire:navigate size="sm" color="blue"
                                              href="/dashboard/blogs/{{ $first_article->id }}">
                                              Modifier
                                          </flux:button>

                                          <form method="post"
                                              action="{{ route('dashboard.show-blog', ['blog' => $first_article->id]) }}">
                                              @csrf
                                              @method('DELETE')
                                              <flux:button type='submit' size="sm" color="yellow">
                                                  Supprimer
                                              </flux:button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  @endif
              </div>
              <ul class="grid grid-cols-3 max-[850px]:grid-cols-2 max-[600px]:grid-cols-1 p-2 gap-2 bg-zinc-50">
                  @if (!empty($articles))


                      @foreach ($articles as $article)
                          <x-partials.blog-card id="{{ $article->id }}" title="{{ $article->title }}"
                              image="{{ $article->image }}" date="{{ \Carbon\Carbon::parse($first_article->created_at)->format('d-m-y') }}" />
                      @endforeach
                  @endif
              </ul>

              {{-- Pagination here --}}

      </article>
  </section>

