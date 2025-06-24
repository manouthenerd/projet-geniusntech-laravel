<x-layouts.app>

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
            <div class="flex justify-around gap-4 items-center mt-4 max-[880px]:grid max-[880px]:grid-cols-1">
                <div class="flex flex-wrap justify-center gap-4 items-center">
                    <flux:button>
                        <flux:badge color="blue">Toutes catégories</flux:badge>
                    </flux:button>

                    <flux:button>
                        <flux:badge>
                            Sécurité
                        </flux:badge>
                    </flux:button>

                    <flux:button>
                        <flux:badge>Agriculture</flux:badge>
                    </flux:button>

                    <flux:button>
                        <flux:badge>Vidéo surveillance</flux:badge>
                    </flux:button>
                </div>

                <div>
                    <flux:input icon="magnifying-glass" placeholder="Titre du blog..." />
                </div>

            </div>

            <article class="grid p-2 border border-slate-100 rounded w-full mt-4">
                <div class="grid grid-cols-1 p-2 bg-zinc-50">
                    <div>
                        <div
                            class="grid grid-cols-2 max-[880px]:grid-cols-1 shadow shadow-zinc-200 rounded p-2 bg-white blog">
                            <div class="h-full">
                                <img class="rounded" src="/images/Delivery.jpeg" alt="livraison">
                            </div>
                            <div class="flex flex-col justify-evenly p-2">
                                <h4 class="text-zinc-600">Livraison à moto</h4>
                                <p class="text-zinc-500 h-[100px] overflow-hidden">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit similique totam vel
                                    ducimus natus quod recusandae autem, consequatur esse voluptate amet magni ad,
                                    expedita
                                    ipsum optio nesciunt eligendi eos asperiores tenetur voluptatem, neque hic ab?
                                    Repellendus
                                    ipsum provident nam est nobis qui laudantium inventore voluptatibus hic expedita,
                                    reiciendis pariatur odit!
                                </p>
                                <div class="text-xs text-zinc-600 space-y-4">
                                    <p class="ml-1">Author • 23 mars 2025</p>
                                    <div class="flex gap-4">

                                        <flux:button class="w-full" color="yellow" href="/dashboard/blogs/:blog">
                                            Lire tout l'article
                                        </flux:button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="grid grid-cols-3 max-[850px]:grid-cols-2 max-[600px]:grid-cols-1 p-2 gap-2 bg-zinc-50">

                    @foreach ([1, 2, 3, 4, 5, 6] as $num)
                        <li class="grid p-2 gap-2 shadow shadow-zinc-200 rounded bg-white blog">
                            <div>
                                <div>
                                    <img src="/images/Delivery.jpeg" alt="livraison">
                                </div>
                                <div class="flex flex-col justify-evenly p-2 space-y-2">
                                    <h4 class="text-zinc-800">Livraison à moto</h4>
                                    <p class="text-zinc-500 h-[100px] overflow-hidden text-ellipsis">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit similique totam
                                        vel
                                        ducimus natus quod recusandae autem, consequatur esse voluptate amet magni ad,
                                        expedita
                                        ipsum optio nesciunt eligendi eos asperiores tenetur voluptatem, neque hic ab?
                                        Repellendus
                                        ipsum provident nam est nobis qui laudantium inventore voluptatibus hic
                                        expedita,
                                        reiciendis pariatur odit!
                                    </p>
                                    <div class="text-xs text-zinc-600 space-y-4">
                                        <p class="ml-1">Author • 23 mars 2025</p>
                                        <div class="">
                                            <flux:button class="w-full" color="blue" href="/dashboard/blogs/:blog">
                                                Lire l'article
                                            </flux:button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>

                {{-- Pagination here --}}

            </article>
    </section>
</x-layouts.app>
