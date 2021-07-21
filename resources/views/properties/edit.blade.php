<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Edit Property') }}
        </h2>
    </x-slot>

    <div class='flex justify-center pt-20'>
        <form action="/properties/{{ $property->id }}" method="POST">
            @csrf @method('PUT')
            <div class='block'>
                <input type="text" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='title' placeholder="Title" value='{{ $property->title }}'>
                <input type="text" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='description' placeholder="Decsription" value='{{ $property->description }}'>
                <input type="text" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='location' placeholder="Location" value ='{{ $property->location }}'>
                <input type="text" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='typology' placeholder="Typology" value ='{{ $property->typology }}'>
                <input type="text" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='price' placeholder="Price" value ='{{ $property->price }}'>
                <input type="text" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='area' placeholder="Area" value ='{{ $property->area }}'>
                <select name="agent">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">Agent {{ $user->name }}</option>                        
                    @endforeach
                </select>
                <button type='submit' class='bg-green-500 block shadow-5xl mb-10 mt-5 p-2 w-80 uppercase font-bold' style='color:white; border-radius: 10px;'>Submit</button>
            </div>
        </form>
    </div>
    </div>
</x-app-layout>