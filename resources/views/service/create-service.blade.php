<x-layouts.dashboard>

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="mx-auto max-w-2xl">
            <div class="text-center">
                <h2 class="text-xl text-gray-800 font-bold sm:text-3xl dark:text-white">
                    Ajouter un service
                </h2>
            </div>

            <div
                class="mt-5 p-4 relative z-10 bg-white border border-gray-200 rounded-xl sm:mt-10 md:p-10 dark:bg-neutral-900 dark:border-neutral-700">
                <form method="post" action="{{route('dashboard.services')}}" class="p-2 space-y-4" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-4 sm:mb-8">
                        <label for="hs-feedback-post-comment-name-1"
                            class="block mb-2 text-sm font-medium dark:text-white">Nom du service</label>
                        <input value="{{old("title")}}" name="title" type="text"
                            id="hs-feedback-post-comment-name-1"
                            class="border py-2.5 sm:py-3 px-4 block w-full border-slate-300 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Nom du service" required>
                        <x-partials.error error="title" />
                    </div>
                    <div class="mb-4 sm:mb-8">
                        <label for="hs-feedback-post-comment-name-1"
                            class="block mb-2 text-sm font-medium dark:text-white">Phrase d'accroche</label>
                        <input value="{{old('summary')}}" name="summary" type="text"
                            id="hs-feedback-post-comment-name-1"
                            class="border py-2.5 sm:py-3 px-4 block w-full border-slate-300 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Ex: Nos services sont fournis avec maintenance garantie sur une année"
                            required>
                        <x-partials.error error="summary" />
                    </div>

                        <div id="upload-box" style="overflow: hidden; text-overflow: ellipsis">
                            <flux:input id="upload-input" type="file" name="image"
                                label="Sélectionner l'image d'illustration" class="text-zinc-400" />
                        </div>

                    <div class="h-[300px] object-cover border border-zinc-100 rounded grid place-content-center p-4">
                        <flux:button id="close-button" class="hide-close-btn" icon="x-mark" variant="subtle" />
                        <img src="" id="image"
                            class="rounded ring ring-white h-[200px] my-2">
                       
                    </div>

                    <div>
                        <label for="editor" class="block mb-2 text-sm font-medium dark:text-white">
                            Plus de détails sur le service
                        </label>

                            <input type="text" name="description" hidden id="text-editor_input" value="{!! old('description') !!}">

                            <x-trix-input value="{!! old('description') !!}" class="text-zinc-600" id="text-editor"
                                name="description" placeholder="Détails du service ici..." required />
                            <x-partials.error error='description' />

                    </div>

                        <div class="mt-6 grid">
                            <button type="submit"
                                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none cursor-pointer">
                                Enregistrer
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.dashboard>
