<x-guest-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    </head>

    <main class="flex items-center justify-center min-h-screen">
        <!-- Left Section: Image Background -->
        <section class="left-section" aria-label="Decorative Image Section">
            <img src="{{ asset('FrontendAssets/16.png') }}" alt="Florante at Laura" class="img-style" />
        </section>

        <!-- Right Section: Registration Form -->
        <section class="right-section p-8" aria-labelledby="registration-heading">
            <!-- Form Container -->
            <article class="form-container">
                <h1 id="registration-heading" class="text-xl font-bold text-center mb-4" style="font-family: 'NewBaskervilleStd-Bold', serif; color: rgb(245, 225, 164);">
                    CREATE ACCOUNT
                </h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="form-group">
                        <label for="name" class="block font-bold text-lg" style="font-family: 'NewBaskervilleStd-Bold', serif; color: rgb(245, 225, 164);">
                            {{ __('NAME:') }}
                        </label>
                        <x-text-input id="name" class="w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="form-group">
                        <label for="email" class="block font-bold text-lg" style="font-family: 'NewBaskervilleStd-Bold', serif; color: rgb(245, 225, 164);">
                            {{ __('EMAIL:') }}
                        </label>
                        <x-text-input id="email" class="w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password" class="block font-bold text-lg" style="font-family: 'NewBaskervilleStd-Bold', serif; color: rgb(245, 225, 164);">
                            {{ __('PASSWORD:') }}
                        </label>
                        <x-text-input id="password" class="w-full" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group">
                        <label for="password_confirmation" class="block font-bold text-lg" style="font-family: 'NewBaskervilleStd-Bold', serif; color: rgb(245, 225, 164);">
                            {{ __('CONFIRM PASSWORD:') }}
                        </label>
                        <x-text-input id="password_confirmation" class="w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <!-- Buttons -->
                    <div class="form-group flex items-center justify-between mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" style="font-family: 'NewBaskervilleStd-Bold', serif; color: rgb(245, 225, 164);">
                            {{ __('Already registered?') }}
                        </a>
                        <x-primary-button class="ms-4" style="font-family: 'NewBaskervilleStd-Bold', serif; color: rgb(245, 225, 164);">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </article>
        </section>
    </main>
</x-guest-layout>
