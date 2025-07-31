<div>
    <section>
        <div class="flex justify-between items-center p-2">
            <h3 class="underline text-danger">Vos articles actuels</h3>

            <div>
                <flux:button variant="primary" href="{{ route('dashboard.create-blog') }}" icon="plus"
                    wire:navigate>
                    Ajouter un article
                </flux:button>
            </div>
        </div>

        <div>
            <article class="mx-8">
                <livewire:article-selection />
            </article>
        </div>
    </section>
</div>
