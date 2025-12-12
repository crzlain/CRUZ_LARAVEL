<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" style="color: #000000;"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" style="border: 1px solid #89C5EB; background-color: #FFFFFF; color: #000000;" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: #000000;"/>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" style="color: #000000;"/>
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" style="border: 1px solid #89C5EB; background-color: #FFFFFF; color: #000000;"  />
            <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: #000000;" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" style="color: #000000;" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" style="border: 1px solid #89C5EB; background-color: #FFFFFF; color: #000000;"  />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" style="color: #000000;" />
        </div>

        <div class="flex items-center justify-end mt-4" style="background-color: #6BB6E6; color: #FFFFFF; border-color: #6BB6E6;">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
