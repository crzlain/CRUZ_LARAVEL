<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" style="color: #000000;" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" style="border: 1px solid #89C5EB; background-color: #FFFFFF; color: #000000;"  />

            <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: #000000;" />
        </div>

        <div class="flex justify-end mt-4" style="background-color: #6BB6E6; color: #FFFFFF; border-color: #6BB6E6;">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
