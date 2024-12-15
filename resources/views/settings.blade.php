<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Settings') }}
        </h2>
    </x-slot>
    <div class="shrink-0 flex items-center">
        <a href="{{ route('dashboard') }}">
            <x-back-button class="block h-9 w-auto fill-current text-gray-800" />
        </a>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Music') }}
                    </h2>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Voice') }}
                    </h2>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
