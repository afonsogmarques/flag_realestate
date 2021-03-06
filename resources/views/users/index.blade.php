<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Utilizadores') }}
        </h2>
    </x-slot>
    
    <button class='pt-10'>
        <a href="users/create" class='border-b-2 pb-2 border-dotted italic text-gray-500'>Novo Utilizador &rarr;</a>
    </button>

    @foreach ($users as $user)
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <form action="/users/{{ $user->id }}" method='POST'>
                        @csrf @method('DELETE')
                        <div class='float-right'>
                            <button type='submit' class='border-b-2 pb-2 border-dotted italic text-red-500'>
                                    Apagar &rarr;
                            </button>
                        </div>
                    </form>
                    <div class='float-right'>
                        <a href="users/{{ $user->id }}/edit" class='border-b-2 pb-2 border-dotted italic text-yellow-500'>
                            Editar &rarr;
                        </a>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h1 style='font-weight: bold;'>Nome: {{ $user->name }} <br> Id: {{ $user->id }} <br> Password: {{ $user->password }}</h1>
                        <h2>{{ $user->email }}</h2>
                        <h3>{{ $user->address ?? 'Sem informação de morada' }}</h3>
                        <h3>{{ $user->phone ?? 'Sem informação telefónica'}}</h3>
                        <h3>{{ $user->role ?? 'Sem role'}}</h3>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>