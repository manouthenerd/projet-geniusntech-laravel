    <x-partials.header title="Dashboard">
        @fluxAppearance
    </x-partials.header>
    @livewireScripts

    <x-rich-text::styles />


    <body class="h-full bg-white dark:bg-zinc-800">
        <x-partials.dashboard-header />


        <x-partials.dashboard-sidebar />

        <flux:main container>
            <x-partials.dashboard-heading />

            {{ $slot }}
        </flux:main>


        @fluxScripts
    </body>

    
