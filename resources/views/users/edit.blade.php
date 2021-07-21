<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Edit user') }}
        </h2>
    </x-slot>

    <div class='flex justify-center pt-20'>
        <form action="/users/{{ $user->id }}" method="POST">
            @csrf @method('PUT')
            <div class='block'>
                <input type="name" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='name' placeholder="Name" value="{{ $user->name }}">
                <input type="text" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='password' placeholder="Password" value="{{ $user->password }}">
                <input type="email" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='email' placeholder="Email" value="{{ $user->email }}">
                <input type="text" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='address' placeholder="Address" value="{{ $user->address }}">
                <input type="tel" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='phone' placeholder="Phone" value="{{ $user->phone }}">
                {{-- <select name="agent">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">Agent {{ $user->name }}</option>                        
                    @endforeach
                </select> --}}
                <button type='submit' class='bg-green-500 block shadow-5xl mb-10 mt-5 p-2 w-80 uppercase font-bold' style='color:white; border-radius: 10px;'>Add</button>
            </div>
        </form>
    </div>
    </div>
</x-app-layout>