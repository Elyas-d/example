@props(['name'])
@error($name)
<p class="text-red-500 text-sm" aria-live="polite">{{ $message }}</p>
@enderror