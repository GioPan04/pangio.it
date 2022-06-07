@php
    $type ??= 'submit';
@endphp
<button class="bg-accent px-5 py-2 rounded shadow" type="{{ $type }}">{{ $text }}</button>
