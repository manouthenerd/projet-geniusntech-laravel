<x-layouts.dashboard>
    <section class="border border-slate-100 rounded p-4 shadow-inner">

        <div class="p-4 w-full grid grid-cols-3 gap-2">
            <x-ui.card>
                <x-slot:head>
                    L'univers du blogging
                </x-slot:head>
                <x-slot:body>
                    Ayez un aperçu des différents blogs que vous rédiger avec la possiblité de les modifier
                    ou de les supprimer
                </x-slot:body>
            </x-ui.card>

            <x-ui.card>
                <x-slot:head>
                    Services
                </x-slot:head>
                <x-slot:body>
                    Une prise en main des différents services de l'entreprise incluant l'ajout de nouveaux services,
                    la modification ainsi que la suppression egalement.
                </x-slot:body>
            </x-ui.card>

            <x-ui.card>
                <x-slot:head>
                    L'équie Genius
                </x-slot:head>
                <x-slot:body>
                    Présentation des membres de l'équipe oeuvrant pour insuffler une vie à la mission de l'entrepris.
                    Modification, suppression et ajout de nouveaux membres.
                </x-slot:body>
            </x-ui.card>
        </div>
    </section>
</x-layouts.dashboard>
