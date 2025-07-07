@props(['error'])

@error($error)
    <span class="text-red-500 text-xs font-bold my-2">{{ $message }}</span>
@enderror