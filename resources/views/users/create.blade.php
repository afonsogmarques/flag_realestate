<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Add new user') }}
        </h2>
    </x-slot>

    <div class='flex justify-center pt-20'>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class='block'>
                <input type="name" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='name' placeholder="Name">
                <input type="password" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='password' placeholder="Password">
                <input type="email" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='email' placeholder="Email">
                <input type="text" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='address' placeholder="Address">
                <input type="tel" class='block shadow-5xl mb-4 p-2 w-80 italic placeholder-gray-400' style='border-radius: 10px;' name='phone' placeholder="Phone">
                <select name="role">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}"> {{ $role->role }}</option>                        
                    @endforeach
                </select>
                <button type='submit' class='bg-green-500 block shadow-5xl mb-10 mt-5 p-2 w-80 uppercase font-bold' style='color:white; border-radius: 10px;'>Add</button>
            </div>
        </form>
    </div>
    </div>
</x-app-layout>