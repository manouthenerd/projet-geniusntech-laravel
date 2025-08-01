<x-layouts.app>

    <x-slot:title>
       {{$article['title']}}
    </x-slot:title>


    <!-- Blog Article -->
    <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-2xl">
            <!-- Content -->
            <div class="space-y-5 md:space-y-8">
                <div class="space-y-3">
                    <h2 class="text-2xl font-bold md:text-3xl dark:text-white">
                        {{ $article['title'] }}
                    </h2>

                    <div>
                        <img class="rounded" src="{{asset('storage/' . $article['image'])}}" alt="{{$article['title']}}">
                    </div>

                </div>

                
                <div>
                  {!! $article['content'] !!}
                </div>
               
            </div>
            <!-- End Content -->
        </div>
    </div>
    <!-- End Blog Article -->

    <!-- Articles suivants -->
    @if($next_articles->count() > 0)
    <section class="mx-8 p-2 rounded">
        <div class="flex justify-between mx-2 my-2">
            <p>Consulter les articles suivants</p>
            <a href="{{ route('blogs') }}"
                class="bg-slate-200 rounded hover:underline transition-all p-1 text-center text-zinc-700">Voir tous nos
                articles</a>
        </div>

        <ul id="articles" class="grid grid-cols-2 my-2 max-[830px]:grid-cols-1 w-full space-y-4 space-x-4">

            @foreach ($next_articles as $next_article)
                <a href="{{ route('blog', ['blog' => $next_article->id]) }}" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="{{ $loop->index * 1000 }}"
                    class="grid grid-cols-2 gap-2 p-2 rounded bg-white shadow-sm max-h-auto hover:shadow-lg transition-shadow duration-300">

                    <div class="overflow-hidden rounded-lg">
                        <img class="object-cover w-full h-[136px] rounded-lg hover:scale-105 transition-transform duration-300"
                            src="{{ asset('storage/' . $next_article->image) }}" alt="{{ $next_article->title }}" />
                    </div>

                    <div class="text-white flex flex-col justify-around">
                        <h3 class="text-slate-400 font-semibold text-lg">{{ $next_article->title }}</h3>
                        <p class="text-slate-600 w-full text-sm leading-relaxed">
                            {{ $next_article->summary ?? substr(strip_tags($next_article->content), 0, 100) . '...' }}
                        </p>
                    </div>

                </a>
            @endforeach
        </ul>

    </section>
    @endif

</x-layouts.app>
