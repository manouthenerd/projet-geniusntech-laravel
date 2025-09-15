<x-partials.header :title="$title" />
@fluxScripts
<x-rich-text::styles theme="richtextlaravel" />


<body class="overflow-x-hidden">

    <header class="w-full z-[999] min-h-10 p-2 bg-white font-thin sticky top-0">
        <nav id="navbar" class="flex justify-around max-[960px]:justify-between max-[960px]:px-8 items-center text-[15px]">
            <a href="/">
                <img src="/images/logo-genius.png" width="170" height="55" alt="logo de Genius Network Technology" />
            </a>

            <div id="mainLinks" class="flex gap-2 text-sm space-x-2 items-center max-[960px]:hidden">
                <a @class(['text-[#068fcf] font-bold' => request()->is('/')]) href="/">Accueil</a>
                <a @class(['text-[#068fcf] font-bold' => request()->is('services')]) class="hover:text-[#068fcf]  text-[#4a6f8a]" href="/services">Services</a>
                <a @class(['text-[#068fcf] font-bold' => request()->is('blogs')]) class="hover:text-[#068fcf]  text-[#4a6f8a]" href="/blogs">Blogs</a>
                    <a @class(['text-[#068fcf] font-bold' => request()->is('a-propos')]) class="hover:text-[#068fcf] text-[#4a6f8a]" href="/a-propos">À propos</a>
                <a @class(['text-[#068fcf] font-bold' => request()->routeIs('contact')]) class="hover:text-[#068fcf] text-[#4a6f8a]" href="/contact">Contactez-nous</a>
            </div>

            <div class="max-[960px]:hidden text-sm rounded-md px-2 py-1 border-2 border-y-[#01699f] border-x-[#d2b957]">
                <a @class(['text-[#4a6f8a] font-bold text-[#4a6f8a]' => request()->is('espace')]) href="/login">Espace admin</a>
            </div>

            <livewire:menu-button />

        </nav>
    </header>

    <main @class(['bg-neutral-50' => request()->is('services/*')]) class="space-y-4">
        <div id="mobile-navbar"
            class="fixed z-[1] transition-all w-[85%] h-[230px] min-[960px]:hidden min-h-10 px-[2rem] bg-[#0086c7] font-medium rounded-sm top-[80px]">
            <div class="grid gap-2 space-x-2 p-2 items-center">
                <a class="{{ request()->routeIs('home') ? 'text-white font-bold' : 'hover:text-white ' }}" href="{{ route('home') }}">Accueil</a>
                <a class="{{ request()->routeIs('services') ? 'text-white font-bold' : 'hover:text-white ' }}" href="{{ route('services') }}">Services</a>
                <a class="{{ request()->routeIs('blogs') ? 'text-white font-bold' : 'hover:text-white' }}" href="{{ route('blogs') }}">Blogs</a>
                {{-- <a class="hover:text-white" href="{{ route('achievements') }}">Nos réalisations</a> --}}
                <a class="{{ request()->routeIs('about') ? 'text-white font-bold' : 'hover:text-white ' }}" href="{{ route('about') }}">À propos</a>
                <a class="{{ request()->routeIs('contact') ? 'text-white font-bold' : 'hover:text-white' }}" href="{{ route('contact') }}">Contactez-nous</a>
                <a class="{{ request()->routeIs('login') ? 'text-white font-bold' : 'hover:text-white' }}" href="{{ route('login') }}">Espace admin</a>
            </div>
        </div>

        {{ $slot }}

    </main>

    <footer class="grid p-2 space-y-4 bg-[#000] text-white">
        <div
            class="space-y-4 space-x-6 min-[850px]:flex justify-around max-[850px]:grid max-[850px]:grid-cols-2 max-[850px]:items-center max-[850px]:justify-items-center max-[850px]:mr-[30px] max-[520px]:mr-0 max-[520px]:grid-cols-1 bg-black p-2 ">
            <div>
                <p class="uppercase text-[#025686] font-bold">Localisation</p>
                <ul>
                    <li>Treichville Rue 17 Avenue 21</li>
                    <li>Avenue Ouezzin Coulibaly</li>
                </ul>
            </div>
            <div>
                <p class="uppercase text-[#025686] font-bold">Contacts</p>
                <ul>
                    <li>Phone: +225 07 5959 8830</li>
                    <li>Phone: +225 27 2134 8794</li>
                </ul>
            </div>
            <div class="max-[850px]:mr-[84px]">
                <p class="uppercase text-[#025686] font-bold">Réseaux sociaux</p>
                <ul class="flex items-center gap-2 min-[850px]:justify-center mt-4">
                    <li>
                        <a href="/#linkedin">
                            <x-ui.linkedin />
                        </a>
                    </li>
                    <li>
                        <a href="/#facebook">

                            <x-ui.facebook />
                        </a>
                    </li>
                    <li>
                        <a href="/#twitter">

                            <x-ui.twitter />
                        </a>
                    </li>
                </ul>
            </div>
            <div class="justify-end max-[520px]:mr-[65px]">
                <p>
                    <img class="w-[150px] h-[50px] object-contain" src="/images/logo-genius.png" alt="logo de Genius Network Technology" />
                </p>
                <p>
                    Smart Life, Best Life — ⭐
                </p>
            </div>
        </div>

        <div class="bg-black grid place-content-center">
            <pre class="text-wrap text-center">Copyright {{ date('Y') }} - Genius Network Technology </pre>
        </div>
    </footer>

</body>

</html>
