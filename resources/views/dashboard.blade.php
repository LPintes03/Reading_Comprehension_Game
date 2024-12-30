<x-app-layout>
    <div style="position: relative; height: 100vh; width: 100%; overflow: hidden;">

        <!-- Faded Background Image -->
        <div style="position: absolute; width: 130%; height: 100%; background: linear-gradient(to right, rgba(78, 53, 53, 0) 10%, rgb(237, 237, 229) 50%), url('{{ asset('FrontendAssets/15.png') }}'); background-size: contain; background-position-x: -310px; background-repeat: no-repeat;">
        </div>

        <div style="position: absolute; top: -21%; left: 89%; transform: translateX(-50%); text-align: center; width: 1200px; height: auto;">
            <img src="{{ asset('FrontendAssets/2.png') }}" alt="Florante at Laura" style="width: 60%; height: auto;">
        </div>
        <div style="position: absolute; top: 10%; left: 92%; transform: translateX(-50%); text-align: center; width: 1200px; height: auto;">
            <img src="{{ asset('FrontendAssets/13.png') }}" alt="Florante at Laura" style="width: 50%; height: auto;">
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="background: transparent; box-shadow: none;">
                
                <!-- Play Button -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" style="position: absolute; bottom: 30%; left: 70%; transform: translateX(-50%);">
                    <x-nav-link :href="route('play')">
                        <img src="{{ asset('FrontendAssets/7.png') }}" alt="Play Button" style="width: 200px; height: auto;">
                    </x-nav-link>
                </div>
                <br><br><br><br>
                <!-- Settings Button -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" style="position: absolute; bottom: 20%; left: 70%; transform: translateX(-50%);">
                    <x-nav-link :href="route('settings')">
                        <img src="{{ asset('FrontendAssets/9.png') }}" alt="Settings Button" style="width: 200px; height: auto;">
                    </x-nav-link>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
