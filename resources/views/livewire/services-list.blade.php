<ul id="services" class="grid grid-cols-2 my-2 max-[830px]:grid-cols-1 w-full space-y-4 space-x-4">
    
    @foreach ($services as $service)

        <a href="{{ $this->href($service['title']) }}" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="{{($service['id'] * 1000)}}"
            class="grid grid-cols-2 gap-2 p-2 rounded bg-white shadow-sm max-h-auto">

            <div>
                <img class="object-fit max-[830px]:object-cover max-[830px]:w-full h-[136px] rounded"
                    src="{{ $service['src'] }}" />
            </div>

            <div class="text-white flex flex-col justify-around">
                <h3 class="text-slate-400">{{ $service['title'] }}</h3>
                <p class="text-slate-600 w-full">
                    {{ $service['description'] }}
                </p>
            </div>

        </a>

    @endforeach
</ul>
