<x-layouts.app>

    <x-slot:title>
        Nos services
    </x-slot:title>

    <section id="section" class="h-[224px] text-white grid place-content-center bg-[url('/public/images/background.jpg')] space-y-4 pt-8">
        <h3 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000" class="text-center text-4xl">
            Nos services
        </h3>
        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1200" class="text-center">
            — Découvrez nos domaines d'expertises
        </p>
    </section>

    <section class="mx-8">
        <div>
            <h3 class="text-xl font-semibold text-slate-400">Ce que nous faisons de mieux</h3>
        </div>

        <div>
            <div class="w-full">
                <livewire:services-list/>
            </div>
        </div>
    </section>
</x-layouts.app>
