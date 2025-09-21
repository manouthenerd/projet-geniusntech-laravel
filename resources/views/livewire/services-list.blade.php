<ul id="services" class="grid grid-cols-2 my-2 max-[830px]:grid-cols-1 w-full space-y-4 space-x-4">
    @foreach ($services as $service)
        <li data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000"
            class="grid grid-cols-2 gap-2 group p-2 rounded bg-white shadow-sm h-max">
            
            <a href="/services/{{ $service['identifier'] }}" class="contents">
                <div>
                    <img class="object-fit max-[830px]:object-cover max-[830px]:w-full h-[136px] rounded-[1.2rem]"
                        src="{{ str_starts_with($service['image'], '/images/') ? $service['image'] : 'storage/' . $service['image'] }}"
                        alt="{{ $service['title'] }}" />
                </div>

                <div class="text-white flex flex-col justify-around">
                    <h3 class="text-slate-400 group-hover:text-[#068fcf] transition-colors">{{ $service['title'] }}</h3>
                    <p class="text-slate-600 w-full">
                        {{ $service['summary'] }}
                    </p>
                </div>
            </a>
        </li>
    @endforeach
</ul>

