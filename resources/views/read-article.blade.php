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
                        <img class="rounded" src="{{asset($article['image'])}}" alt="{{$article['title']}}">
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

</x-layouts.app>
