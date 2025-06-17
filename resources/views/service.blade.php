<x-layouts.app>

    <x-slot:title>
        Service {{$slug}}
    </x-slot:title>

    <section id="section"
        class="h-[224px] text-white grid place-content-center bg-[url('/public/images/background.jpg')] space-y-4 pt-8">
        <h3 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000" class="text-center text-4xl">
            Nos services en détails
        </h3>
        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1200" class="text-center">
            — Découvrez nos domaines d'expertises
        </p>
    </section>

    <section class="mx-4 flex gap-4 p-2">

        <div class="text-zinc-600 w-[80%] space-y-4 border border-slate-200 rounded p-2">
            <div class="space-y-4">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate voluptatem earum quis eveniet
                    consectetur eos, accusamus sapiente delectus reprehenderit tempore non corporis a doloremque odit
                    hic
                    magni vitae cumque laudantium pariatur nulla est vel ipsum! Alias ullam ab ea neque? Consequatur
                    iusto
                    tempora veniam fugiat! Dignissimos laborum doloribus illum asperiores.
                </p>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima architecto sint illo facere
                    consequuntur
                    rem nesciunt! Omnis beatae nulla consequuntur porro, corporis officiis itaque labore exercitationem
                    impedit vel voluptatem voluptate saepe, illo ut a voluptatibus odit rerum ratione aperiam quas
                    accusamus. Dicta quaerat assumenda eligendi expedita aspernatur repellat error cupiditate!
                </p>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima architecto sint illo facere
                    consequuntur
                    rem nesciunt! Omnis beatae nulla consequuntur porro, corporis officiis itaque labore exercitationem
                    impedit vel voluptatem voluptate saepe, illo ut a voluptatibus odit rerum ratione aperiam quas
                    accusamus. Dicta quaerat assumenda eligendi expedita aspernatur repellat error cupiditate!
                </p>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima architecto sint illo facere
                    consequuntur
                    rem nesciunt! Omnis beatae nulla consequuntur porro, corporis officiis itaque labore exercitationem
                    impedit vel voluptatem voluptate saepe, illo ut a voluptatibus odit rerum ratione aperiam quas
                    accusamus. Dicta quaerat assumenda eligendi expedita aspernatur repellat error cupiditate!
                </p>
            </div>

            <div class="space-y-4">
                <div>
                    <h3 class="underline">Informations relative au post</h3>
                </div>

                <div>
                    <div class="text-zinc-500 text-xs flex gap-8 items-center">
                        <p class="flex items-center gap-1 space-x-1">
                            <flux:icon.eye color="#0d2456" />
                            <span>20</span>
                        </p>

                        <p class="flex items-center gap-1 space-x-1">
                            <flux:icon.calendar color="#0d2456" />
                            <span>20 Avril 2025</span>
                        </p>

                        <p class="flex items-center gap-1 space-x-1">
                            <flux:icon.pencil color="#0d2456" class=" rotate-360" />
                            <span>Ecrit par Genius Admin</span>
                        </p>
                    </div>
                    <div>

                    </div>
                </div>
            </div>
        </div>

        <div class="w-[210px] border border-slate-200 rounded p-2 h-fit">
            <h3 class="text-[#0d2555] font-medium">Service d'électricité</h3>
            <div>
                <div>
                    <ul>
                        <li>
                            <img src="/images/electricity.png" class="rounded-sm" alt="électricien en action">
                        </li>
                        <li class="text-zinc-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, mollitia ea esse eveniet
                            provident voluptatum consectetur incidunt laborum rem corporis.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <section class="mx-8 p-2 rounded">
        <div class="flex justify-between mx-2 my-2">
            <p>Consulter les services suivant</p>
            <a href="{{route('services')}}" class="bg-slate-200 rounded hover:underline transition-all p-1 text-center text-zinc-700">Voir tous nos services</a>
        </div>
        <livewire:next-services/>
    </section>

</x-layouts.app>
