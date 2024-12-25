<x-app-layout>
    @vite('resources/css/app.css')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>
    <div class="back-button ">
        <a href="{{ route('chapters') }}" class="back-button">
            <x-back-button class="pointer-events-auto"></x-back-button>
        </a>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div id class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('chapters')">
                        {{ __('Mga Kabanata') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('characters')">
                        {{ __('Mga Tauhan') }}
                    </x-nav-link>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
