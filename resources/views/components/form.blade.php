@props([
    'action',
    'method' => "POST"
])

<form action="{{ $action }}" method="POST" {{ $attributes }}>
    @csrf
    {{ $slot }}
</form>