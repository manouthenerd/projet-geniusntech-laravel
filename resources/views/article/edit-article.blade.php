<x-layouts.dashboard>

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="mx-auto max-w-2xl">
            <div class="text-center">
                <h2 class="text-xl text-gray-800 underline font-bold sm:text-3xl dark:text-white">
                    {{$title}}
                </h2>
            </div>

            <div
                class="mt-5 p-4 relative z-10 bg-[#FAFAFA] border border-gray-200 rounded-xl sm:mt-10 md:p-10 dark:bg-neutral-900 dark:border-neutral-700">
                <form method="post" class="p-2 space-y-4" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 sm:mb-8">
                        <label for="hs-feedback-post-comment-name-1"
                            class="block mb-2 text-zinc-400 text-sm font-medium dark:text-white">
                            Titre de l'article
                            @if (request()->is("dashboard/blogs/$id"))
                            <x-ui.label-tag text="En lecture uniquement"/>
                            @endif
                        </label>

                        <input :readonly="{{request()->is("dashboard/blogs/$id")}}" 
                            wire:model='title'
                            name="title" type="text"
                            id="hs-feedback-post-comment-name-1"
                            value="{{$article['title']}}"
                            class="border bg-white text-zinc-600 py-2.5 sm:py-3 px-4 block w-full border-slate-300 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Titre de l'article">
                        <x-partials.error error='title'/>
                    </div>

                    <div class="mb-4 sm:mb-8">
                        <label for="hs-feedback-post-comment-name-1"
                            class="block mb-2 text-zinc-400 text-sm font-medium dark:text-white">
                            Préciser la catégorie de l'article 
                            @if (request()->is("dashboard/blogs/$id"))
                                <x-ui.label-tag text="En lecture uniquement"/>
                            @endif
                       </label>
                        <input 
                            wire:model='category'
                            value="{{$article['category']}}"
                            :readonly="{{request()->is("dashboard/blogs/$id")}}" name="category"
                            placeholder="Technologie, éducation, divertissement" type="text" id="category"
                            class="border bg-white text-zinc-600 py-2.5 sm:py-3 px-4 block w-full border-slate-300 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <x-partials.error error='category'/>
                    </div>

                    @if (request()->is("dashboard/blogs/$id/edit"))
                        
                    <div id="upload-box" style="overflow: hidden; text-overflow: ellipsis">
                        <flux:input id="upload-input"
                            type="file" wire:model='image' name='image' label="Sélectionner l'image d'illustration" class="text-zinc-400" />
                    </div>
                    @endif

                    <label class="block mb-2 text-zinc-400 text-sm font-medium dark:text-white">Image associée à l'article</label>
                    <div :readonly="{{request()->is("dashboard/blogs/$id")}}"
                        class="h-[300px] bg-white overflow-hidden object-cover border border-zinc-100 rounded grid place-content-center p-2">
                        <flux:button id="close-button" class="hide-close-btn" icon="x-mark" variant="subtle" />
                        <div>
                            <img src="{{asset($article['image'])}}" @class(['hidden' => false]) id="image" class="rounded ring ring-white w-fit h-[180px] my-2">
                        </div>
                        <div id="to-hidden" class="text-slate-300 text-xs flex flex-col">
                            <x-ui.image-icon></x-ui.image-icon>
                            <p>L'image apparaitra ici...</p>
                            <p>La taille doit être inférieur 5MB</p>
                        </div>
                    </div>

                    <div>
                        <label for="editor" class="block mb-2 text-zinc-400 text-sm font-medium dark:text-white">
                            Contenu de l'article 
                            @if (request()->is("dashboard/blogs/$id"))
                            <x-ui.label-tag text="En lecture uniquement"/>
                            @endif
                        </label>
                        {{-- <input type="text" hidden id="text-editor_input" value="{{!! $article['content'] !!}}"> --}}
                        @if (request()->is("dashboard/blogs/$id/edit"))
                            <x-trix-input
                                value="{!! $article['content'] !!}"
                                class="text-zinc-600"
                                id="text-editor" name="content" 
                                placeholder="Contenu de l'article ici..." required />
                        <x-partials.error error='content'/>
                        @endif

                        @if (request()->is("dashboard/blogs/$id"))

                            <div class="w-full shadow-inner p-4 h-[350px] text-zinc-600 overflow-scroll rounded">
                                {!! $article['content'] !!}
                            </div>


                        @endif
                    </div>

                    @if (request()->is("dashboard/blogs/$id"))
                        <div class="mt-6 grid grid-cols-2 space-x-4 gap-2">
                            <flux:button href="{{route('dashboard.blogs')}}"
                                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gray-600! text-white! hover:bg-gray-700 focus:outline-hidden focus:bg-gray-700 disabled:opacity-50 disabled:pointer-events-none cursor-pointer">
                                Retour
                            </flux:button>
                            <flux:button
                                href="/dashboard/blogs/{{$id}}/edit"
                                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600! text-white! hover:bg-blue-700! focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none cursor-pointer">
                                Modifier l'article
                            </flux:button>
                        </div>
                    @endif

                    @if (request()->is("dashboard/blogs/$id/edit"))
                        <div class="mt-6 grid">
                            <button type="submit"
                                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none cursor-pointer">
                                Enregistrer les modifications
                            </button>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>

</x-layouts.dashboard>
