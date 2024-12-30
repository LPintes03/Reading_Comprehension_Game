<x-guest-layout>
    <main class="flex items-center justify-center min-h-screen">
        <!-- Form Container -->
        <article class="form-container p-6 shadow-md rounded-md" style="width: 400px; background-color: rgb(68, 5, 5); color: #f5e1a4; font-family: 'NewBaskervilleStd-Bold', serif;">
            <h1 id="registration-heading" class="text-xl font-bold text-center mb-4" style="color: yellow; text-shadow: 2px 2px 2px rgb(68, 5, 5);">
                CREATE ACCOUNT
            </h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="form-group mb-4">
                    <label for="name" class="block font-bold text-lg mb-1" style="color: yellow;">
                        {{ __('NAME:') }}
                    </label>
                    <x-text-input id="name" class="w-full border-gray-300 focus:border-yellow-500 focus:ring-yellow-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="form-group mb-4">
                    <label for="email" class="block font-bold text-lg mb-1" style="color: yellow;">
                        {{ __('EMAIL:') }}
                    </label>
                    <x-text-input id="email" class="w-full border-gray-300 focus:border-yellow-500 focus:ring-yellow-500" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="form-group mb-4">
                    <label for="password" class="block font-bold text-lg mb-1" style="color: yellow;">
                        {{ __('PASSWORD:') }}
                    </label>
                    <x-text-input id="password" class="w-full border-gray-300 focus:border-yellow-500 focus:ring-yellow-500" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="form-group mb-4">
                    <label for="password_confirmation" class="block font-bold text-lg mb-1" style="color: yellow;">
                        {{ __('CONFIRM PASSWORD:') }}
                    </label>
                    <x-text-input id="password_confirmation" class="w-full border-gray-300 focus:border-yellow-500 focus:ring-yellow-500" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Buttons -->
                <div class="form-group flex items-center justify-between mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500" href="{{ route('login') }}" style="color: white;">
                        {{ __('Already registered?') }}
                    </a>
                    <x-primary-button class="ms-4 bg-yellow-500 hover:bg-yellow-600 text-white">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </article>
    </main>
</x-guest-layout>
