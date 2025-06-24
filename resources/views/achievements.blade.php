<x-layouts.app>
    <x-slot:title> Nos réalisations </x-slot:title>
    <section
        class="h-[224px] text-white grid place-content-center bg-[url('/public/images/background.jpg')] space-y-4 pt-8">
        <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000" class="text-center text-4xl">
            Projets réalisés
        </h3>
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1200" class="text-center">
            — Explorer les différents projets auxquels nous avons apportés notre expertise et savoir-faire.
        </p>
    </section>

    <section class="grid min-[800px]:grid-cols-2 gap-4 max-w-[85rem] border border-blue-500 px-2 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <x-ui.project-card 
            date="20/03/2025" 
            title="Hello Test" 
            image="/images/electricity.png" 
        />

        <x-ui.project-card 
            date="20/03/2025" 
            title="Hello Test" 
            image="/images/electricity.png" 
        />

        <x-ui.project-card 
            date="20/03/2025" 
            title="Hello Test" 
            image="/images/electricity.png" 
        />

    </section>
   
</x-layouts.app>
