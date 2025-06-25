<x-layouts.app>

    <x-slot:title>
        Contact
    </x-slot:title>

    <section
        class="h-[224px] text-white grid place-content-center bg-[url('/public/images/background.jpg')] space-y-4 pt-8">
        <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000" class="text-center text-4xl">
            Contactez-nous
        </h3>
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1200" class="text-center">
            — Faites le premier pas, nous nous occupons du reste 😎
        </p>
    </section>

    <section class="my-4 min-[730px]:mx-18 max-[730px]:mx-4 shadow shadow-slate-300 rounded min-h-100">
        <div class="grid min-[860px]:grid-cols-2">

            <!-- Informations -->
            <div class="rounded bg-gradient-to-br from-amber-50 to-sky-50 p-4 space-y-2 text-zinc-600">
                <h3 class="font-[600] text-gray-400">
                    Vous êtes désireux d'en savoir plus sur nous ?
                </h3>
                Pour toute préoccupation quelconque:
                <ul class="list-inside list-[square] indent-2 p-2">
                    <li>une demande de devis</li>
                    <li>une prise de contact</li>
                    <li>des renseignements suppémentaires</li>
                    <li>une visite au sein de notre entreprise</li>
                    <li>un partenariat, mise en relation ou plus</li>
                </ul>

                <p>
                    N'hésitez pas à nous faire part de votre préoccupation via ce <span
                        class="text-[#0f2658] font-medium">formulaire</span>, nous serons
                    ravis de vous assister et de vous fournir les <span class="text-[#0f2658] font-medium">informations
                        nécessaires</span>.
                </p>

                {{-- Map --}}

                <div id="map" class="h-[130px]"></div>
            </div>

            <!-- Formulaire de contact -->

            <div>
                <form action="/test" method="post" class="p-2 space-y-4">
                    @csrf
                    <div class="grid grid-cols-2 gap-2" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="1200">
                        <flux:field>
                            <flux:label>Nom<span class="text-red-500">*</span></flux:label>
                            <flux:input type="text" placeholder="Entrer votre nom..." />
                        </flux:field>

                        <flux:field>
                            <flux:label>Prénoms<span class="text-red-500">*</span></flux:label>
                            <flux:input type="text" placeholder="Entrer votre prénom..." />
                        </flux:field>
                    </div>

                    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1600">
                        <flux:field>
                            <flux:label>Téléphone<span class="text-red-500">*</span></flux:label>
                            <flux:input type="tel" placeholder="+2250102030405" />
                        </flux:field>
                    </div>

                    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1600">
                        <flux:field>
                            <flux:label>Adresse email<span class="text-red-500">*</span></flux:label>
                            <flux:input type="email" placeholder="exemple@gmail.com" />
                        </flux:field>
                    </div>

                    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1600">
                        <flux:field>
                            <flux:label>Votre message<span class="text-red-500">*</span></flux:label>
                            <flux:textarea placeholder="Exprimer vos idées ici..." />
                        </flux:field>
                    </div>

                    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1600">
                        <flux:button class="w-full bg-[#0f2658]! text-white! hover:opacity-80 transition-opacity">
                            Envoyer</flux:button>
                    </div>

                </form>
            </div>
        </div>
    </section>

</x-layouts.app>
