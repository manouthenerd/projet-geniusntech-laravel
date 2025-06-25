 <x-layouts.app :title="'Page d\'accueil'">

     <section id="header-section" class="bg-blue-50 w-full min-h-30 p-1">
         <div class="w-full min-h-150 overflow-hidden text-white grid min-[750px]:grid-cols-2">
             <div class="p-4 space-y-4 min-[750px]:mt-8 h-full grid justify-between">
                 <h3 data-aos="fade-up" data-aos-duration="1200"
                     class="font-bold text-4xl rounded backdrop-blur-xl bg-transparent max-[750px]:backdrop-blur-none max-[750px]:bg-[#00000045] p-1">
                     Spécialiste <span class="text-[#068fcf]">Des <br>Nouvelles</span> Technologies
                 </h3>
                 <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000"
                     class="text-[14.5px] p-2 font-medium rounded backdrop-blur-xl bg-transparent max-[750px]:backdrop-blur-none max-[750px]:bg-[#00000045]">
                     Dans un monde ultra-connecté, sécuriser vos infrastructures n’est plus une option.
                     Genius Network Technology vous propose des solutions réseau et télécom sur mesure pour
                     protéger vos biens, vos données et vos équipes, en toute fiabilité.
                 </p>

                 <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1500">
                     <button
                         class="bg-black text-white font-bold border border-black ring-1 ring-black ring-offset-2 rounded p-2 text-center">
                        <a href="{{route("contact")}}" wire:navigate>
                            Une idée de projet ? <span class="animate-pulse">📝</span>
                        </a>
                     </button>
                 </div>
             </div>
         </div>
     </section>

     <section class="p-2">

         <div class="grid min-[845px]:grid-cols-2 gap-2 p-2">
             <div data-aos="fade-right" data-aos-duration="1200" class="space-y-2 bg-black rounded">
                 <h2 class="text-xl font-semibold text-slate-400 bg-white">Qui sommes-nous ?</h2>

                 <ul class="space-y-4 p-2 text-white rounded">
                     <li>
                         GENIUS est une entreprise spécialisée dans le domaine de la télécommunication, la
                         radiocommunication, sécurité électronique, domotique, informatique, bâtiment et travaux public,
                         HTA/BTA/EP, agriculture, transit import-export, divers.
                     </li>
                     <li>
                         Ayant pour valeurs l'intégrité, le dynamisme, la disponibilité, la fiabilité et la qualité,
                         nous
                         avons pour vision de simplifier, améliorer, sécuriser le quotidien des citoyens au travers de
                         la
                         technologie de pointe
                     </li>
                 </ul>
             </div>

             <div data-aos="fade-left" data-aos-duration="1200" data-aos-delay="1000">
                 <h2 class="text-xl font-semibold  text-slate-400">💡</h2>
                 <div class="border rounded shadow shadow-slate-100">
                     <img src="/images/img.jpg" alt="fibre optique">
                 </div>
             </div>
         </div>

         <div class="space-y-4 p-2 mt-4 bg-[#8080800d]">
             <div class="flex justify-between flex-wrap items-center max-[406px]:space-y-4">
                 <h2 class="text-xl font-semibold text-slate-400">Nos domaines d'expertises🛠️</h2>
                 <a href="/services" class="text-[#068fcf] font-bold rounded text-center max-[600px]:text-[13px]">
                     Découvrir tous nos services
                 </a>
             </div>
             <div class="w-full">
                 <ul id="services" class="grid grid-cols-2 max-[830px]:grid-cols-1 w-full space-y-4 space-x-4">
                    @foreach ($services as $service)
                        
                    
                     <a href="services/{{$service['identifier']}}" data-aos="fade-up" data-aos-duration="1300" data-aos-delay="1000"
                         class="grid grid-cols-2 gap-2 p-2 rounded bg-white shadow-sm max-h-auto" wire:navigate>
                         <div>
                             <img class="object-fit max-[830px]:object-cover max-[830px]:w-full h-[136px] rounded"
                                 src="{{$service['image']}}" />
                         </div>
                         <div class="text-white flex flex-col justify-around">
                             <h3 class="text-slate-400">{{$service["title"]}}</h3>
                             <p class="text-slate-600 w-full">
                                 {{$service['summary']}}
                             </p>
                         </div>
                     </a>

                     @endforeach

                 </ul>
             </div>
         </div>

         <div class="space-y-4 p-2 mt-4">
             <h2 class="text-xl font-semibold text-slate-400">Ce qu'ils disent de nous📜</h2>
             <div class="w-full">
                 <ul
                     class="grid min-[650px]:grid-cols-2 items-baseline justify-between rounded w-full space-y-4 space-x-4 bg-[#0A103E] p-2">

                     <li data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="1000"
                         class="rounded space-y-2 shadow shadow-[#000] border border-slate-300 bg-transparent backdrop-blur-lg text-white p-2 ">
                         <div class="flex space-x-2">
                             <p>
                                 <img class="size-[45px] rounded-full" src="/images/profile.jpeg" />
                             </p>
                             <p>
                                 <span class="italic">Roland Bilé</span> <br>
                                 <span class="italic text-slate-200">Eléveur</span>
                             </p>
                         </div>
                         <p class="italic bg-transparent backdrop-blur-2xl text-neutral-300">
                             “J'ai été épaté par le professionnalisme et les compétences des agents de
                             Genius. Je recommande leurs services.”
                         </p>
                     </li>

                     <li data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="1200"
                         class="rounded space-y-2 shadow shadow-[#000] border border-slate-300 bg-transparent backdrop-blur-lg text-white p-2 ">
                         <div class="flex space-x-2">
                             <p>
                                 <img class="size-[45px] rounded-full" src="/images/girl.jpeg" />
                             </p>
                             <p>
                                 <span class="italic">Sandrine K.</span> <br>
                                 <span class="italic text-slate-200">Particulier</span>
                             </p>
                         </div>
                         <p class="italic bg-transparent backdrop-blur-2xl text-neutral-300">
                             “J'ai fait appel aux services de livraison de Genius Network Technology et j'ai été
                             satisfaite du délai de livraison
                             assez court.”
                         </p>
                     </li>

                 </ul>
             </div>
         </div>

         <div class="space-y-4 p-2 mt-4">
             <h2 class="text-xl font-semibold text-slate-400">Une intervention impéccable, une confiance
                 gagnée🫱🏾‍🫲🏾
             </h2>
             <div class="w-full">
                 <ul id="partners"
                     class="flex gap-2 max-[630px]:grid max-[630px]:grid-rows-2 max-[630px]:grid-cols-2 items-center">
                     <li data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="1000">
                         <img class="size-[150px] object-fit" src="/images/partners/22 mai 2025, 14_24_30.png" />
                     </li>
                     <li data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="1100">
                         <img class="size-[150px] object-fit" src="/images/partners/ccci-ue.png" />
                     </li>
                     <li data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="1200">
                         <img class="size-[150px] object-fit" src="/images/partners/centamin.png" />
                     </li>
                     <li data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="1300">
                         <img class="size-[150px] object-fit" src="/images/partners/envol.png" />
                     </li>
                     <li data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="1400">
                         <img class="size-[150px] object-fit" src="/images/partners/pdu.jpg" />
                     </li>
                     <li data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="1500">
                         <img class="size-[150px] object-fit" src="/images/partners/seco.png" />
                     </li>
                     <li data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="1600">
                         <img class="size-[150px] object-fit" src="/images/partners/uemoa.png" />
                     </li>

                 </ul>

             </div>
         </div>

         {{-- <div class="space-y-4 p-2 mt-4">
            <h2 class="text-xl font-semibold text-slate-400">
                Nos actualités d'ici
            </h2>

            <div class="w-full">
                <ul class="flex gap-2 items-center">
                    <li class="p-1 rounded border border-neutral-100 w-[250px] shadow shadow-neutral-200">

                        <p class="text-[#0d2555] font-medium">La 5g</p>
                        <p>
                            <img width="250" height="250" src="/images/electricity.png" class="rounded-sm" alt="électricien en action">
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, mollitia ea esse
                            eveniet
                            provident voluptatum consectetur incidunt laborum rem corporis.
                        </p>
                    </li>
                </ul>
            </div>
        </div> --}}
     </section>
 </x-layouts.app>
