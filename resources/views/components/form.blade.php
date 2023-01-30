@props([
    'action',
    'method' => "POST"
])

<form action="{{ $action }}" metod="POST">
    @csrf
    @method($method)
    {{ $slot }}
</form>