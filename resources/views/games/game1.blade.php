<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Game1') }}
        </h2>
    </x-slot>
    <div class="shrink-0 flex items-center">
        <a href="{{ route('play') }}">
            <x-back-button class="block h-9 w-auto fill-current text-gray-800" />
        </a>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{ __('Game1') }}

            </div>
        </div>
    </div>
</x-app-layout>


