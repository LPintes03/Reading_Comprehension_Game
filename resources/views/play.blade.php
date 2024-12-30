<x-app-layout>
    @vite('resources/css/app.css')

    <!-- Back Button -->
    <div class="back-button shrink-0 flex items-center" style="position: absolute; top: 20px; left: 20px; z-index: 10;">
        <a href="{{ route('dashboard') }}">
            <x-back-button style="width: auto; height: auto; display: inline-block;"></x-back-button>
        </a>
    </div>

    <!-- Main Content -->
    <div style="width: 100%; height: 100%; background-color: rgb(68, 5, 5); background-image: url('{{ asset('FrontendAssets/17.png') }}'); background-position: center; background-size: contain; background-repeat: no-repeat; display: flex; flex-direction: column; align-items: center; justify-content: center; position: absolute;">

        <div class="space-y-8 text-center">
            <!-- Chapters Link -->
            <x-nav-link :href="route('chapters')" 
                style="display: inline-block; font-size: 3.0rem; color: yellow; text-shadow: 2px 2px 2px rgb(68, 5, 5); font-family: 'NewBaskervilleStd-Bold', serif; text-decoration: none; cursor: pointer;">
                {{ __('MGA KABANATA') }}
            </x-nav-link>
            
            <br><br><br><br><br>

            <!-- Characters Link -->
            <x-nav-link :href="route('characters')" 
                style="display: inline-block; font-size: 3.0rem; color: yellow; text-shadow: 2px 2px 2px rgb(68, 5, 5); font-family: 'NewBaskervilleStd-Bold', serif; text-decoration: none; cursor: pointer;">
                {{ __('MGA TAUHAN') }}
            </x-nav-link>
        </div>

        <div style="position: absolute; bottom: -50px; left: 25px;">
            <img src="{{ asset('FrontendAssets/18.png') }}" alt="book" style="width: 40%; height: auto;">
        </div>
        <div style="position: absolute; bottom: -45px; left: -230px;" >
            <img src="{{ asset('FrontendAssets/19.png') }}" alt="Feather and Ink" style="width: 50%; height: auto;">
        </div>
    </div>
</x-app-layout>
