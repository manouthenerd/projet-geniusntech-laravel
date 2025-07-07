<x-layouts.dashboard>

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="mx-auto max-w-2xl">
            <div class="text-center">
                <h2 class="text-xl text-gray-800 font-bold sm:text-3xl dark:text-white">
                    Création d'article
                </h2>
            </div>

            <div
                class="mt-5 p-4 relative z-10 bg-white border border-gray-200 rounded-xl sm:mt-10 md:p-10 dark:bg-neutral-900 dark:border-neutral-700">
                <form method="post" action="{{ route('dashboard.blogs') }}" class="p-2 space-y-4"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 sm:mb-8">
                        <label for="hs-feedback-post-comment-name-1"
                            class="block mb-2 text-sm font-medium dark:text-white">Titre de l'article</label>
                        <input name="title" value="{{old('title')}}" type="text" id="hs-feedback-post-comment-name-1"
                            class="border py-2.5 sm:py-3 px-4 block w-full border-slate-300 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Titre de l'article" required>
                            <x-partials.error error="title"/>
                    </div>

                    <div class="mb-4 sm:mb-8">
                        <label for="hs-feedback-post-comment-name-1"
                            class="block mb-2 text-sm font-medium dark:text-white">Préciser la catégorie de
                            l'article</label>
                        <input name="category" value="{{old('category')}}" placeholder="Technologie, éducation, divertissement" type="text"
                            id="category" required
                            class="border py-2.5 sm:py-3 px-4 block w-full border-slate-300 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                        <x-partials.error error="category"/>
                        </div>

                    <div>
                        <flux:input id="upload-input" name='image' type="file"
                            label="Sélectionner l'image d'illustration" required />
                        <x-partials.error error="image"/>
                    </div>

                    <div class="h-[300px] object-cover border border-zinc-100 rounded grid place-content-center p-4">
                        <flux:button id="close-button" class="hide-close-btn" icon="x-mark" variant="subtle" />
                        <img src="" id="image" class="rounded ring ring-white h-[200px] hidden my-2">
                        <div id="to-hidden" class="text-slate-300 text-xs flex flex-col">
                            <x-ui.image-icon></x-ui.image-icon>
                            <p>L'image apparaitra ici...</p>
                            <p>La taille doit être inférieur 5MB</p>
                        </div>
                    </div>

                    <div>
                        <label for="editor" class="block mb-2 text-sm font-medium dark:text-white">
                            Rédaction de l'article
                        </label>
                        <input type="hidden" id="text-editor_input" name="content" value="{{ old('content') }}">
                        <x-trix-input
                            id="text-editor"
                            name="content"
                            value="{{ old('content') }}"
                            required
                            placeholder="Contenu de l'article ici..."
                        />
                        <x-partials.error error="content"/>
                    </div>

                    <div class="mt-6 grid">
                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Enregistrer l'article
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.dashboard>

{{-- //TODO Préserver la valeur de l'input lors de la submission du formulaire --}}