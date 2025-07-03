@props(['error'])

@error($error)
    <span class="text-red-500 text-xs font-bold">{{ $message }}</span>
@enderror