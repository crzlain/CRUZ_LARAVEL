<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" style="background-color: #FFFFFF; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" style="color: #000000;" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" style="border: 1px solid #89C5EB; background-color: #FFFFFF; color: #000000;" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" style="color: #000000;" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" style="color: #000000;" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" style="border: 1px solid #89C5EB; background-color: #FFFFFF; color: #000000;" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: #000000;" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" style="color: #000000;" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" style="border: 1px solid #89C5EB; background-color: #FFFFFF; color: #000000;" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: #000000;" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" style="color: #000000;" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" style="border: 1px solid #89C5EB; background-color: #FFFFFF; color: #000000;" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" style="color: #000000;" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('login') }}" class="underline text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="color: #3C8EC3; text-decoration-color: #3C8EC3;">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4" style="background-color: #6BB6E6; color: #FFFFFF; border-color: #6BB6E6;">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
