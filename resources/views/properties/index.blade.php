<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Imóveis') }}
        </h2>
    </x-slot>
    
    <button class='pt-10'>
        <a href="properties/create" class='border-b-2 pb-2 border-dotted italic text-gray-500'>Novo imóvel &rarr;</a>
    </button>

    @foreach ($properties as $property)
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <form action="/properties/{{ $property->id }}" method='POST'>
                        @csrf @method('DELETE')
                        <div class='float-right'>
                            <button type='submit' class='border-b-2 pb-2 border-dotted italic text-red-500'>
                                    Apagar &rarr;
                            </button>
                        </div>
                    </form>
                    <div class='float-right'>
                        <a href="properties/{{ $property->id }}/edit" class='border-b-2 pb-2 border-dotted italic text-yellow-500'>
                            Editar &rarr;
                        </a>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h1 style='font-weight: bold;'>{{ $property->title }}</h1>
                        <h2>{{ $property->description }}</h2>
                        <h3 style='display: inline;'>{{ $property->location }}</h3>
                        <h3 style='display: inline;'>{{ $property->typology }}</h3>
                        <h3 style='display: inline;'>{{ $property->area }}m2</h3>
                        <h1 style='font-weight: bold;'>{{ $property->price }}€</h1>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>