<div 
    id="alert"
    x-data="{ show: @entangle('show').live }"
    x-show="show"
    x-cloak
    x-transition
    x-init="$watch('show', value => { if(value){ setTimeout(() => show = false, 3000) } })"
    class="bg-white shadow-sm rounded fixed right-2 top-2 p-4 z-[999!] transition-all"
>
    <p class="flex items-center gap-2">
        <flux:icon.check-circle variant="solid" class="text-green-500" />
        <span>{{ $message }}</span>
    </p>
</div>