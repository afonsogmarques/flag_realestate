<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Novo Imóvel') }}
        </h2>
    </x-slot>

    <div class='flex justify-center pt-20'>
        <form action="/properties" method="POST">
            @csrf
            <div class='block'>
                <input type="text" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='title' placeholder="Título">
                <input type="text" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='description' placeholder="Descrição">
                <input type="text" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='location' placeholder="Localização">
                <input type="text" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='typology' placeholder="Tipologia">
                <input type="text" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='price' placeholder="Preço">
                <input type="text" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='area' placeholder="Área">
                <x-label :value="__('Mediador responsável')" for="agent" style='display: block;'/>
                <select name="agent">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>                        
                    @endforeach
                </select>
                <button type='submit' class='bg-green-500 block shadow-5xl mb-10 mt-5 p-2 w-80 uppercase font-bold' style='color:white; border-radius: 10px;'>Add</button>
            </div>
        </form>
    </div>
    </div>
</x-app-layout>