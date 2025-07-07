<x-layouts.dashboard>
    <section class="border border-slate-100 rounded p-4 shadow-inner">

        <div class="p-4 w-full flex justify-center flex-wrap gap-2">
            <x-ui.card>
                <x-slot:head>
                    L'univers du blogging
                </x-slot:head>
                <x-slot:body>
                    Ayez un aperçu des différents blogs que vous rédiger avec la possiblité de les modifier
                    ou de les supprimer
                </x-slot:body>

                <a href="{{route('dashboard.blogs')}}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Découvrir
                    <x-ui.right-arrow />
                </a>
            </x-ui.card>

            <x-ui.card>
                <x-slot:head>
                    Services
                </x-slot:head>
                <x-slot:body>
                    Une prise en main des différents services de l'entreprise incluant l'ajout de nouveaux services,
                    la modification ainsi que la suppression egalement.
                </x-slot:body>
                
                <a href="{{route('dashboard.services')}}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Découvrir
                    <x-ui.right-arrow />
                </a>

            </x-ui.card>

            <x-ui.card>
                <x-slot:head>
                    Projets réalisés
                </x-slot:head>
                <x-slot:body>
                    Manager la visibilité des différents projets de l'équipe sur la plateforme
                    avec du texte et des images d'illustrations.
                </x-slot:body>

                <a href="{{route('dashboard.achievement')}}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Découvrir
                    <x-ui.right-arrow />
                </a>
            </x-ui.card>
        </div>
    </section>
</x-layouts.dashboard>
