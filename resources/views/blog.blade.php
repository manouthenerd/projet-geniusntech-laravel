<x-layouts.app>

    <x-slot:title>
        Blogs
    </x-slot:title>

    <section class="h-[224px] text-white grid place-content-center bg-[url('/images/background.jpg')] space-y-4 pt-8">
        <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000" class="text-center text-4xl">
            Nos articles
        </h3>
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1200" class="text-center">
            — Enrichissez votre culture avec des articles instructifs
        </p>
    </section>

    @livewire('blog-articles')

</x-layouts.app>
