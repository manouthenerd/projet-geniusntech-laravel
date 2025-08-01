<div>

    <section>
        <div class="flex justify-between items-center p-2">
            <h3 class="underline text-danger">Vos services actuels</h3>

            <div>
                <flux:button variant="primary" href="{{ route('dashboard.services') }}/create" icon="plus"
                    wire:navigate>
                    Ajouter un service
                </flux:button>
            </div>
        </div>

        <div>
            <article class="mx-8">

                <div>
                    <div class="w-full">

                        <ul id="services"
                            class="grid grid-cols-2 my-2 max-[830px]:grid-cols-1 w-full space-y-4 space-x-4">

                            @foreach ($services as $service)
                                <li href="dashboard/services/{{ $service['identifier'] }}" data-aos="fade-up"
                                    data-aos-duration="1200" data-aos-delay="1000"
                                    class="space-y-4 hover:bg-accent-foreground gap-2 p-2 rounded bg-white shadow-sm h-max">

                                    <div>
                                        <img class="object-fit max-[830px]:object-cover max-[830px]:w-full h-[136px] rounded"
                                        src="{{ str_starts_with($service['image'], '/images/') ? $service['image'] : '/storage/'. $service['image'] }}"                                        alt="{{ $service['title'] }}" />
                                    </div>

                                    <div class="text-white flex flex-col justify-around">
                                        <h3 class="text-slate-400">{{ $service['title'] }}</h3>
                                        <p class="text-slate-600 w-full">
                                            {{ $service['summary'] }}
                                        </p>
                                    </div>

                                    <div>
                                        <flux:button href="services/{{ $service['id'] }}">
                                            <flux:badge color="blue">Modifier</flux:badge>
                                        </flux:button>
                                        <flux:button type="submit" wire:click="destroy({{ $service['id'] }})">
                                            <flux:badge color="red">Supprimer</flux:badge>
                                        </flux:button>
                                    </div>

                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </section>

</div>
