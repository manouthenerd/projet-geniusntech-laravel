@props(['image', 'title', 'date', 'id'])


<li
    class="grid justify-between h-[400px] group hover:cursor-pointer p-2 gap-2 shadow shadow-zinc-200 rounded bg-[#00669A] blog hover:bg-white">
    <div class="space-y-4 h-full flex flex-col justify-between">
        <div class="overflow-hidden">
            <img class="overflow-hidde object-cover h-[203px] w-full rounded" src="{{ asset('storage/' . $image) }}"
                alt="{{ $title }}">
        </div>
        <div class="flex flex-col justify-evenly p-2 space-y-2">
            <a wire:navigate href="{{ route('dashboard.show-blog', ['blog' => $id]) }}"
                class="text-white hover:text-zinc-800 group-hover:text-black hover:underline transition-all">{{ $title }}</a>
            <div class="text-xs text-zinc-600 space-y-4">
                <p class="ml-1 text-white group-hover:text-black font-bold">Genius Admin • {{ $date }}</p>
                <div class="flex gap-4">
                    <flux:button wire:navigate size="sm" color="blue"
                        href="{{ route('dashboard.show-blog', ['blog' => $id]) }}">
                        Modifier
                    </flux:button>

                    <form method="POST" action="{{ route('dashboard.show-blog', ['blog' => $id]) }}">
                        @csrf
                        @method('DELETE')
                        <flux:button type="submit" size="sm">
                            Supprimer
                        </flux:button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</li>

