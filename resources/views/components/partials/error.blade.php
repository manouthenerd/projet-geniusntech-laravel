@props(['error'])

@error($error)
    <p class="text-red-500 text-xs font-bold mt-2">{{ $message }}</p>
@enderror