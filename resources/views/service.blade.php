<x-layouts.app>

    <x-slot:title>
        {{ $service['title'] }}
    </x-slot:title>

    <section id="section"
        class="h-[224px] text-white grid place-content-center bg-[url('/public/images/background.jpg')] space-y-4 pt-8">
        <h3 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000" class="text-center text-4xl">
            {{ Str::upper($service['title']) }}
        </h3>
        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1200" class="text-center">
            — {{ $service['summary'] }}
        </p>
    </section>

    <section class="mx-4 gap-4 p-2">

        <div class="text-zinc-600 min-[750px]:w-[80%] space-y-4 border border-slate-200 rounded p-2">
            <div>
                <img class="rounded" src="{{ $service['image'] }}" alt="image d'illustration">
            </div>
            <div class="space-y-4">
                {!! $service['description'] !!}
            </div>
        </div>

    </section>

    <section class="mx-8 p-2 rounded">
        <div class="flex justify-between mx-2 my-2">
            <p>Consulter les services suivant</p>
            <a href="{{ route('services') }}"
                class="bg-slate-200 rounded hover:underline transition-all p-1 text-center text-zinc-700">Voir tous nos
                services</a>
        </div>

        <ul id="services" class="grid grid-cols-2 my-2 max-[830px]:grid-cols-1 w-full space-y-4 space-x-4">

            @foreach ($next_services as $service)
                <a href="/services/{{ $service->identifier }}" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="{{ $service->id * 1000 }}"
                    class="grid grid-cols-2 gap-2 p-2 rounded bg-white shadow-sm max-h-auto">

                    <div>
                        <img class="object-fit max-[830px]:object-cover max-[830px]:w-full h-[136px] rounded"
                            src="{{ $service->image }}" />
                    </div>

                    <div class="text-white flex flex-col justify-around">
                        <h3 class="text-slate-400">{{ $service->title }}</h3>
                        <p class="text-slate-600 w-full">
                            {{ $service->summary }}
                        </p>
                    </div>

                </a>
            @endforeach
        </ul>

    </section>

</x-layouts.app>
