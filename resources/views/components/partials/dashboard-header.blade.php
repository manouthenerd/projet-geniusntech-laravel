<flux:header container class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">

    <link rel="stylesheet" href="/build/css/app2.css">
    <link rel="stylesheet" href="/build/css/dashboard.css">
    <script src="/build/js/dashboard2.js" defer></script>

    <flux:sidebar.toggle id="open-menu-button" class="min-[700px]:hidden cursor-pointer" icon="bars-2" inset="left" />

    <flux:brand href="{{ route('home') }}" logo="/images/logo-genius.png" name=""
        class="max-[700px]:hidden dark:hidden" />
    <flux:brand href="{{ route('home') }}" logo="/images/logo-genius.png" name=""
        class="max-[700px]:hidden! hidden dark:flex" />

    <flux:navbar class="-mb-px max-[700px]:hidden">

        <flux:navbar.item icon="home" href="{{ route('dashboard') }}" :current="request()->is('dashboard')">
            Accueil
        </flux:navbar.item>

        <flux:navbar.item icon="globe-alt" badge="{{ $global_blog_counter }}" href="{{ route('dashboard.blogs') }}"
            :current="request()->is('dashboard/blogs')">
            Blogs
        </flux:navbar.item>

        <flux:navbar.item icon="newspaper" badge="{{ $global_service_counter }}"
            href="{{ route('dashboard.services') }}" :current="request()->is('dashboard/services')">
            Services
        </flux:navbar.item>

        <flux:navbar.item icon="user-group" badge="0" href="{{ route('dashboard.achievement') }}"
            :current="request()->is('dashboard/achievements')">
            Projets
        </flux:navbar.item>

        <flux:separator vertical variant="subtle" class="my-2" />

    </flux:navbar>
    <flux:spacer />

    <flux:dropdown position="top" align="start">
        <flux:profile avatar="/images/big-logo.png" />
        <flux:menu>
            <livewire:header-logout-button></livewire:header-logout-button>
        </flux:menu>
    </flux:dropdown>
</flux:header>
