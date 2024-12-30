<x-guest-layout>
    <main class="flex items-center justify-center min-h-screen">
        <article class="form-container p-6 shadow-md rounded-md" style="width: 400px; background-color: rgb(68, 5, 5); color: #f5e1a4; font-family: 'NewBaskervilleStd-Bold', serif;">
            <h1 id="registration-heading" class="text-xl font-bold text-center mb-4" style="color: yellow; text-shadow: 2px 2px 2px rgb(68, 5, 5);">
                WELCOME
            </h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('EMAIL')" style="color: yellow;" />
                    <x-text-input id="email" class="block mt-1 w-full border-gray-300 focus:border-yellow-500 focus:ring-yellow-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('PASSWORD')" style="color: yellow;" />
                    <x-text-input id="password" class="block mt-1 w-full border-gray-300 focus:border-yellow-500 focus:ring-yellow-500" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mb-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-yellow-600 shadow-sm focus:ring-yellow-500" name="remember">
                        <span class="ms-2 text-sm text-white-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- Submit -->
                <div class="flex items-center justify-between">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-white hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="ms-3 bg-yellow-500 hover:bg-yellow-600 text-white">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </article>
    </main>
</x-guest-layout>
