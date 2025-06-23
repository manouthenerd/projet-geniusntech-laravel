<x-layouts.dashboard>
    <section>
        <div class="flex justify-between items-center p-2">
            <h3 class="underline text-danger">Vos services actuels</h3>

            <div>
                <flux:button variant="primary" href="{{ route('dashboard.services') }}/create" icon="plus"
                    wire:navigate>
                    Ajouter un service
                </flux:button>
            </div>
        </div>

        <div>
            <article class="mx-8">

                <div>
                    
                </div>

                <div>
                    <div class="w-full">
                        <livewire:dashboard.services-list />
                    </div>
                </div>
            </article>
        </div>
    </section>
</x-layouts.dashboard>
