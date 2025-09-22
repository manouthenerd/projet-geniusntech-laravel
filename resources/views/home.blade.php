<x-layouts.app :title="'Page d\'accueil'">

    <section id="header-section" class="bg-blue-50 w-full min-h-30 p-1">
        <div class="w-full min-h-150 overflow-hidden text-white grid min-[750px]:grid-cols-2">
            <div class="p-4 min-[750px]:mt-8 grid gap-2">

                <div id="strength" data-aos="fade-up" data-aos-duration="1200"
                    class="text-4xl space-y-1.5 font-bold rounded backdrop-blur-xl bg-transparent max-[750px]:backdrop-blur-none max-[750px]:bg-[#00000045] p-1">
                    <p>Innovation.</p>
                    <p>Connectivité.</p>
                    <p>Sécurité.</p>
                </div>
                <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000"
                    class="text-[14.5px] fit-box p-2 font-medium rounded backdrop-blur-xl bg-transparent max-[750px]:backdrop-blur-none max-[750px]:bg-[#00000045]">
                    <p class="mt-2">
                        Dans un monde en constante évolution, où la digitalisation et l’urbanisation redéfinissent nos
                        environnements, la sécurité des biens et des personnes devient une priorité stratégique.
                    </p>
                    <p class="mt-2">
                        Chez <span class="text-[#F4D55A]">Genius Network Technology</span>, nous accompagnons
                        les entreprises et les collectivités dans la
                        mise en place de
                        solutions innovantes en <span class="text-[#F4D55A] font-bold">réseau</span> et <span
                            class="text-[#F4D55A] font-bold">télécommunication</span> pour renforcer leur
                        infrastructure,
                        garantir la
                        continuité de service et <span class="text-[#F4D55A] font-bold"> assurer une protection
                            optimale</span> face aux nouveaux défis technologiques
                        et
                        sécuritaires.
                    </p>
                </div>

                <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1500" class="ml-0.5">
                    <button
                        class="bg-black text-white font-bold border border-black ring-1 ring-black ring-offset-2 rounded p-2 text-center">
                        <a href="{{ route('contact') }}">
                            Une idée, un projet ? <span class="animate-pulse">📝</span>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="p-2">

        <div class="grid min-[845px]:grid-cols-2 gap-2 p-2">
            <div data-aos="fade-right" data-aos-duration="1200"
                class="space-y-2 bg-gradient-to-tr from-gray-900 via-[#036a9c] to-[#1895C2]">
                <h2 class="text-xl font-semibold text-slate-400 bg-white">Qui sommes-nous ?</h2>

                <ul class="space-y-4 p-2 text-white">
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
                <h2 class="text-xl font-semibold bg-white  text-slate-400">Votre partenaire de confiance</h2>
                <div class="p-2">
                    <p class="mt-4 text-slate-700">
                        Depuis sa création, Genius Network Technology accompagne PME, grands comptes et collectivités
                        dans la sécurisation et la transformation de leurs infrastructures. Notre équipe
                        pluridisciplinaire met en œuvre des solutions robustes et évolutives, répondant aux standards
                        les plus exigeants.
                    </p>
                    <ul class="mt-6 space-y-3 text-slate-300">
                        <li class="flex items-start gap-3">
                            <i class="w-5 h-5 mt-0.5">
                                <x-ui.svg.shield></x-ui.svg.shield>
                            </i>
                            <div>
                                <span class="font-medium text-[#036a9c]">Sécurité renforcée</span>
                                <p class="text-sm text-slate-400">Vidéosurveillance intelligente, supervision et
                                    archivage sécurisé.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="w-5 h-5 mt-0.5">
                                <x-ui.svg.network></x-ui.svg.network>
                            </i>
                            <div>
                                <span class="font-medium text-[#036a9c]">Connectivité fiable</span>
                                <p class="text-sm text-slate-400">Réseaux filaires et Wi‑Fi, interconnexions
                                    multi‑sites.
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="w-5 h-5 mt-0.5">
                                <x-ui.svg.cpu></x-ui.svg.cpu>
                            </i>
                            <div>
                                <span class="font-medium text-[#036a9c]">Innovation utile</span>
                                <p class="text-sm text-slate-400">Intégration IT orientée métier.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div
            class="w-full grid justify-items-center space-y-4 gap-4 p-2  m-0 bg-gradient-to-tr from-gray-900 via-[#036a9c] to-[#1895C2]">
            <p id="award-container" class="rounded-full flex justify-center items-center">
                <img height="200" id="award-genius-bg" src="/images/bg-transparent-award.png" alt="award-genius-bg"
                    data-aos="fade-up" data-aos-duration="1300" />
            </p>

            <div class="grid grid-cols-4 max-[1070px]:grid-cols-2 w-full gap-2 justify-center items-center">
                <div class="reward-box flex flex-col justify-center rounded shadow p-4" data-aos="fade-left"
                    data-aos-duration="1200" data-aos-delay="1000">
                    <p class="flex items-center justify-between gap-2">
                        <span id="project-counter" class="font-bold text-integer text-blue-500"></span>
                        <span class="bg-black rounded-full p-1">
                            <x-ui.svg.cctv></x-ui.svg.cctv>
                        </span>
                    </p>
                    <p class="mt-4 text-[darkgray] font-semibold">Projets aboutis</p>
                </div>

                <div class="reward-box flex flex-col justify-center rounded shadow p-4" data-aos="fade-left"
                    data-aos-duration="1200" data-aos-delay="1200">
                    <p class="flex items-center justify-between gap-2">
                        <span id="company-counter" class="text-integer font-bold text-orange-500"></span>
                        <span class="bg-black rounded-full p-1">
                            <x-ui.svg.building></x-ui.svg.building>
                        </span>
                    </p>
                    <p class="mt-4 text-[darkgray] font-semibold">Structures accompagnées</p>
                </div>

                <div class="reward-box flex flex-col justify-center rounded shadow p-4" data-aos="fade-left"
                    data-aos-duration="1200" data-aos-delay="1300">
                    <p class="flex items-center justify-between gap-2">
                        <span id="partner-counter" class="text-integer font-bold text-red-500"></span>
                        <span class="bg-black rounded-full p-1">
                            <x-ui.svg.partner></x-ui.svg.partner>
                        </span>
                    </p>
                    <p class="mt-4 text-[darkgray] font-semibold">Partenaires de confiances</p>
                </div>

                <div class="reward-box flex flex-col justify-center rounded shadow p-4" data-aos="fade-left"
                    data-aos-duration="1200" data-aos-delay="1400">
                    <p class="flex items-center justify-between gap-2">
                        <span id="satisfaction-counter" class="text-integer font-bold text-purple-500"></span>
                        <span class="bg-black rounded-full p-1">
                            <x-ui.svg.badge-percentage></x-ui.svg.badge-percentage>
                        </span>
                    </p>
                    <p class="mt-4 text-[darkgray] font-semibold">Taux de satisfaction</p>
                </div>
            </div>
        </div>

        <div class="space-y-4 p-2 mt-4 bg-[#8080800d]">
            <div class="flex justify-between flex-wrap items-center max-[406px]:space-y-4">
                <h2 class="text-xl font-semibold text-slate-400">Nos domaines d'expertises🛠️</h2>
                <a href="/services" class=" text-[#018bcd] font-bold rounded text-center max-[600px]:text-[13px]">
                    Découvrir tous nos services
                </a>
            </div>

        </div>

        <div class="grid grid-cols-2 max-[850px]:grid-cols-1 gap-2">
            <section class="category" id="category-tech">
                <h2 class="category-title">Technologies & Communication</h2>

                <div class="slider" data-duration="5000"> <!-- durée en ms -->
                    <div class="slide active" style="background-image: url('/images/services/network.jpg');">
                        <div class="overlay"></div>
                        <div class="slide-content">
                            <h3>Réseau informatique</h3>
                            <p>Gestion et optimisation des réseaux d'entreprise.</p>
                        </div>

                        <div class="timer" aria-hidden="true">
                            <svg viewBox="0 0 100 100" class="timer-svg" xmlns="http://www.w3.org/2000/svg">
                                <circle class="timer-bg" cx="50" cy="50" r="45"></circle>
                                <circle class="timer-progress" cx="50" cy="50" r="45"
                                    stroke-linecap="round"></circle>
                            </svg>
                        </div>
                    </div>

                    <div class="slide" style="background-image: url('/images/services/camera.png');">
                        <div class="overlay"></div>
                        <div class="slide-content">
                            <h3>Vidéosurveillance</h3>
                            <p>Caméras et systèmes de sécurité intelligents.</p>
                        </div>

                        <div class="timer" aria-hidden="true">
                            <svg viewBox="0 0 100 100" class="timer-svg" xmlns="http://www.w3.org/2000/svg">
                                <circle class="timer-bg" cx="50" cy="50" r="45"></circle>
                                <circle class="timer-progress" cx="50" cy="50" r="45"
                                    stroke-linecap="round"></circle>
                            </svg>
                        </div>
                    </div>

                    <div class="slide" style="background-image: url('/images/services/radiocommunication.png');">
                        <div class="overlay"></div>
                        <div class="slide-content">
                            <h3>Radiocommunication</h3>
                            <p>Systèmes radio et liaison longue distance.</p>
                        </div>

                        <div class="timer" aria-hidden="true">
                            <svg viewBox="0 0 100 100" class="timer-svg" xmlns="http://www.w3.org/2000/svg">
                                <circle class="timer-bg" cx="50" cy="50" r="45"></circle>
                                <circle class="timer-progress" cx="50" cy="50" r="45"
                                    stroke-linecap="round"></circle>
                            </svg>
                        </div>
                    </div>
                </div>
            </section>

            <section class="category" id="category-tech">
                <h2 class="category-title">Construction & énergie</h2>

                <div class="slider" data-duration="5000"> <!-- durée en ms -->
                    <div class="slide active" style="background-image: url('/images/services/BTP.jpg');">
                        <div class="overlay"></div>
                        <div class="slide-content">
                            <h3>Bâtiments et travaux publics</h3>
                            <p>Des solutions solides et durables en construction et travaux publics, alliant qualité,
                                expertise et innovation pour bâtir l’avenir.</p>
                        </div>

                        <div class="timer" aria-hidden="true">
                            <svg viewBox="0 0 100 100" class="timer-svg" xmlns="http://www.w3.org/2000/svg">
                                <circle class="timer-bg" cx="50" cy="50" r="45"></circle>
                                <circle class="timer-progress" cx="50" cy="50" r="45"
                                    stroke-linecap="round"></circle>
                            </svg>
                        </div>
                    </div>

                    <div class="slide" style="background-image: url('/images/services/electricity.png');">
                        <div class="overlay"></div>
                        <div class="slide-content">
                            <h3>Electricité</h3>
                            <p>Caméras et systèmes de sécurité intelligents.</p>
                        </div>

                        <div class="timer" aria-hidden="true">
                            <svg viewBox="0 0 100 100" class="timer-svg" xmlns="http://www.w3.org/2000/svg">
                                <circle class="timer-bg" cx="50" cy="50" r="45"></circle>
                                <circle class="timer-progress" cx="50" cy="50" r="45"
                                    stroke-linecap="round"></circle>
                            </svg>
                        </div>
                    </div>

                </div>
            </section>

            <section class="category" id="category-tech">
                <h2 class="category-title">Transport & Agriculture</h2>

                <div class="slider" data-duration="5000"> <!-- durée en ms -->
                    <div class="slide active" style="background-image: url('/images/services/elevage.jpg');">
                        <div class="overlay"></div>
                        <div class="slide-content">
                            <h3>Agriculture</h3>
                            <p>Soutenir la production avec des solutions performantes et innovantes</p>
                        </div>

                        <div class="timer" aria-hidden="true">
                            <svg viewBox="0 0 100 100" class="timer-svg" xmlns="http://www.w3.org/2000/svg">
                                <circle class="timer-bg" cx="50" cy="50" r="45"></circle>
                                <circle class="timer-progress" cx="50" cy="50" r="45"
                                    stroke-linecap="round"></circle>
                            </svg>
                        </div>
                    </div>

                    <div class="slide" style="background-image: url('/images/services/Delivery.jpeg');">
                        <div class="overlay"></div>
                        <div class="slide-content">
                            <h3>Livraison</h3>
                            <p>Assurer une livraison rapide et sécurisée jusqu’à vos clients</p>
                        </div>

                        <div class="timer" aria-hidden="true">
                            <svg viewBox="0 0 100 100" class="timer-svg" xmlns="http://www.w3.org/2000/svg">
                                <circle class="timer-bg" cx="50" cy="50" r="45"></circle>
                                <circle class="timer-progress" cx="50" cy="50" r="45"
                                    stroke-linecap="round"></circle>
                            </svg>
                        </div>
                    </div>

                </div>
            </section>

            <section class="category" id="category-tech">
                <h2 class="category-title">Sécurité electroniqué</h2>

                <div class="slider" data-duration="5000"> <!-- durée en ms -->
                    <div class="slide active" style="background-image: url('/images/services/AC.jpg');">
                        <div class="overlay"></div>
                        <div class="slide-content">
                            <h3>Contrôle d’accès</h3>
                            <p>Gérer l’accès à vos locaux en toute sécurité.</p>
                        </div>

                        <div class="timer" aria-hidden="true">
                            <svg viewBox="0 0 100 100" class="timer-svg" xmlns="http://www.w3.org/2000/svg">
                                <circle class="timer-bg" cx="50" cy="50" r="45"></circle>
                                <circle class="timer-progress" cx="50" cy="50" r="45"
                                    stroke-linecap="round"></circle>
                            </svg>
                        </div>
                    </div>

                    <div class="slide" style="background-image: url('/images/services/Alarme.jpg');">
                        <div class="overlay"></div>
                        <div class="slide-content">
                            <h3>Alarme et détection</h3>
                            <p>Détecter et prévenir les intrusions avant qu’elles n’arrivent.</p>
                        </div>

                        <div class="timer" aria-hidden="true">
                            <svg viewBox="0 0 100 100" class="timer-svg" xmlns="http://www.w3.org/2000/svg">
                                <circle class="timer-bg" cx="50" cy="50" r="45"></circle>
                                <circle class="timer-progress" cx="50" cy="50" r="45"
                                    stroke-linecap="round"></circle>
                            </svg>
                        </div>
                    </div>

                </div>
            </section>

        </div>

        <div class="space-y-4 p-2 mt-4">
            <h2 class="text-xl font-semibold text-slate-400">Ce qu'ils disent de nous📜</h2>
            <div class="w-full">

                <div class="flex justify-center gap-4 flex-wrap">
                    <x-ui.testimonial title="Eléveur professionnel" name="Roland Bilé"
                        message="J'ai été épaté par le professionnalisme et les compétences des agents de
                            Genius. Je recommande leurs services." />

                    <x-ui.testimonial title="Gestionnaire de stocks" name="Sandrine Kouadio"
                        message="J'ai fait appel aux services de livraison de Genius Network Technology et j'ai été
                            satisfaite du délai de livraison
                            assez court." />
                </div>

            </div>
        </div>


        <div class="space-y-4 p-2 mt-4">
            <h2 class="text-xl font-semibold text-slate-400">Une intervention impéccable, une confiance
                gagnée🫱🏾‍🫲🏾
            </h2>
            <div class="partner-slider">
                <div class="slider-track">
                    <!-- Premier set -->
                    <img src="/images/partners/agromap.png" alt="logo partenaire">
                    <img src="/images/partners/ccci-ue.png" alt="logo partenaire">
                    <img src="/images/partners/centamin.png" alt="logo partenaire">
                    <img src="/images/partners/envol.png" alt="logo partenaire">
                    <img src="/images/partners/seco.png" alt="logo partenaire">
                    <img src="/images/partners/uemoa.png" alt="logo partenaire">
                    <img src="/images/partners/pdu.jpg" alt="logo partenaire">
                    <img src="/images/partners/aaci.jpg" alt="logo partenaire">
                    <img src="/images/partners/attron.webp" alt="logo partenaire">
                    <img src="/images/partners/coopewo.png" alt="logo partenaire">
                    <img src="/images/partners/git.png" alt="logo partenaire">
                    <img src="/images/partners/ocpv.jpg" alt="logo partenaire">
                    <img src="/images/partners/saph.png" alt="logo partenaire">
                    <img src="/images/partners/tgcc.png" alt="logo partenaire">


                    <!-- Deuxième set (duplication pour l'effet infini) -->
                    <img src="/images/partners/agromap.png" alt="logo partenaire">
                    <img src="/images/partners/ccci-ue.png" alt="logo partenaire">
                    <img src="/images/partners/centamin.png" alt="logo partenaire">
                    <img src="/images/partners/envol.png" alt="logo partenaire">
                    <img src="/images/partners/seco.png" alt="logo partenaire">
                    <img src="/images/partners/uemoa.png" alt="logo partenaire">
                    <img src="/images/partners/pdu.jpg" alt="logo partenaire">
                    <img src="/images/partners/aaci.jpg" alt="logo partenaire">
                    <img src="/images/partners/attron.webp" alt="logo partenaire">
                    <img src="/images/partners/coopewo.png" alt="logo partenaire">
                    <img src="/images/partners/git.png" alt="logo partenaire">
                    <img src="/images/partners/ocpv.jpg" alt="logo partenaire">
                    <img src="/images/partners/saph.png" alt="logo partenaire">
                    <img src="/images/partners/tgcc.png" alt="logo partenaire">

                    <img src="/images/partners/agromap.png" alt="logo partenaire">
                    <img src="/images/partners/ccci-ue.png" alt="logo partenaire">
                    <img src="/images/partners/centamin.png" alt="logo partenaire">
                    <img src="/images/partners/envol.png" alt="logo partenaire">
                    <img src="/images/partners/seco.png" alt="logo partenaire">
                    <img src="/images/partners/uemoa.png" alt="logo partenaire">
                    <img src="/images/partners/pdu.jpg" alt="logo partenaire">
                    <img src="/images/partners/aaci.jpg" alt="logo partenaire">
                    <img src="/images/partners/attron.webp" alt="logo partenaire">
                    <img src="/images/partners/coopewo.png" alt="logo partenaire">
                    <img src="/images/partners/git.png" alt="logo partenaire">
                    <img src="/images/partners/ocpv.jpg" alt="logo partenaire">
                    <img src="/images/partners/saph.png" alt="logo partenaire">
                    <img src="/images/partners/tgcc.png" alt="logo partenaire">
                </div>
            </div>
        </div>

    </section>
</x-layouts.app>
