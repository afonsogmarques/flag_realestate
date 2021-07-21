<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Favorites') }}
        </h2>
    </x-slot>

    @foreach ($favorites as $favorite)
        <h1>{{ $favorite->id }}</h1>
    @endforeach

</x-app-layout>