<x-partials.header title="Connexion"/>

<x-partials.page-loader/>

<body>

    <main class="space-y-4 overflow-hidden h-screen w-full bg-slate-50">

        <div class="ml-2 mt-2">
            <a style="transition: all .5s ease" class="no-underline hover:underline text-xs text-zinc-600" href="{{route('home')}}" wire:navigate>← Retour à la page d'accueil</a>
        </div>

        {{ $slot }}

    </main>


</body>

</html>
