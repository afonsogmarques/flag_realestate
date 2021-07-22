<x-guest-layout class='mb-10'>
    <x-auth-card >
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nome')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmar Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- Address -->
            <div class="mt-4">
                <x-label for="address" :value="__('Morada')" />

                <x-input id="address" class="block mt-1 w-full"
                                type="text"
                                name="address" required />
            </div>

            <div class="mt-4">
                <x-label for="phone" :value="__('Telemóvel')" />

                <x-input id="phone" class="block mt-1 w-full"
                                type="tel"
                                name="phone" required />
            </div>


            <!-- Role -->
            <div class='mt-4'>
                <x-label :value="__('Role')" for="role" style='display: block;'/>
                <select name="role" id="role">
                    <option value="customer">Customer</option>
                    <option value="agent">Agent</option>
                </select>
            </div>
            

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
