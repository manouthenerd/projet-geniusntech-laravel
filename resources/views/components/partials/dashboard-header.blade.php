<flux:header container class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">

     @vite(['resources/js/dashboard.js', 'resources/css/dashboard.css'])

    <flux:sidebar.toggle id="open-menu-button" class="min-[700px]:hidden cursor-pointer" icon="bars-2" inset="left" />

    <flux:brand href="{{route('home')}}" logo="/images/logo-genius.png" name=""
        class="max-[700px]:hidden dark:hidden" />
    <flux:brand href="{{route('home')}}" logo="/images/logo-genius.png" name=""
        class="max-[700px]:hidden! hidden dark:flex" />

    <flux:navbar class="-mb-px max-[700px]:hidden">

        <flux:navbar.item icon="home" href="{{route('dashboard')}}" :current="request()->is('dashboard')">
            Accueil
        </flux:navbar.item>

        <flux:navbar.item icon="globe-alt" badge="12" href="{{route('dashboard.blogs')}}"
            :current="request()->is('dashboard/blogs')">
            Blogs
        </flux:navbar.item>

        <flux:navbar.item icon="newspaper" badge="08" href="{{route('dashboard.services')}}"
            :current="request()->is('dashboard/services')">
            Services
        </flux:navbar.item>

        <flux:navbar.item icon="user-group" href="{{route('dashboard.achievement')}}" :current="request()->is('dashboard/achievements')">
            Projets
        </flux:navbar.item>
        
        <flux:separator vertical variant="subtle" class="my-2" />

    </flux:navbar>
    <flux:spacer />

    <flux:dropdown position="top" align="start">
        <flux:profile avatar="/images/big-logo.png" />
        <flux:menu>
            <flux:menu.item icon="arrow-right-start-on-rectangle">Déconnexion</flux:menu.item>
        </flux:menu>
    </flux:dropdown>
</flux:header>
