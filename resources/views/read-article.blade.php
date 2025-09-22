<x-layouts.app>

    <x-slot:title>
        {{ $article['title'] }}
    </x-slot:title>

    <!-- Blog Article -->
    <div style="background: #f9f9f9; padding: 13px;" class="max-w-3xl space-y-2 px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-2xl">
            <!-- Content -->
            <div class="space-y-5 md:space-y-8">
                <div class="space-y-3">
                    <h2 class="text-2xl font-bold md:text-3xl text-gray-900 dark:text-white">
                        {{ $article['title'] }}
                    </h2>

                    <div>
                        <img class="rounded-lg shadow-md" src="{{ $article['image'] }}"
                            alt="image d'illustration de {{ $article['title'] }}">
                    </div>
                </div>

                <div class="prose prose-lg dark:prose-invert max-w-none">
                    {!! $article['content'] !!}
                </div>
            </div>
            <!-- End Content -->
        </div>
    </div>
    <!-- End Blog Article -->

    <!-- Articles suivants -->
    @if ($next_articles->count() > 0)
        <section class="mx-8 p-4 rounded-lg mt-2 bg-gray-50 dark:bg-gray-800 shadow-inner">
            <div class="flex justify-between mx-2 my-2 items-center">
                <p class="text-gray-700 dark:text-gray-300 font-semibold">Consulter les articles suivants</p>
                <a href="{{ route('blogs') }}" class="text-[#00669A]! rounded px-3 py-1 transition-all">
                    Voir tous nos articles
                </a>
            </div>

            <ul id="articles" class="grid grid-cols-2 max-[830px]:grid-cols-1 gap-4 mt-4">

                @foreach ($next_articles as $next_article)
                    <a href="{{ route('blogs.show', ['blog' => $next_article->id]) }}" data-aos="fade-up"
                        data-aos-duration="1200" data-aos-delay="{{ $loop->index * 100 }}"
                        class="grid grid-cols-2 gap-3 p-3 rounded-lg bg-white dark:bg-gray-700 shadow-sm hover:shadow-lg transition-shadow duration-300">

                        <div class="overflow-hidden rounded-lg">
                            <img class="object-cover w-full h-[136px] rounded-lg hover:scale-105 transition-transform duration-300"
                                src="{{ $next_article->image }}" alt="{{ $next_article->title }}" />
                        </div>

                        <div class="flex flex-col justify-around">
                            <h3
                                class="text-[#00669A] dark:text-blue-300 font-semibold text-lg hover:text-[#00669A] dark:hover:text-blue-100 transition-colors">
                                {{ $next_article->title }}
                            </h3>
                            <p class="text-gray-700 dark:text-gray-300 w-full text-sm leading-relaxed">
                                {{ $next_article->summary ?? substr(strip_tags($next_article->content), 0, 100) . '...' }}
                            </p>
                        </div>

                    </a>
                @endforeach
            </ul>

        </section>
    @endif

</x-layouts.app>
