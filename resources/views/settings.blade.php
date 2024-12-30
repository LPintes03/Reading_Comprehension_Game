<x-app-layout>
    <div class="shrink-0 flex items-center" style="position: absolute; bottom: 50px; right: 140px; z-index: 10; font-family: 'NewBaskervilleStd-Bold', serif; font-size: 2em;">
        <a href="{{ route('dashboard') }}" style="width: 80%; height: auto; display: inline-block;">
            {{ __('BACK') }}
        </a>
    </div>

    <div style="position: relative; height: 100vh; width: 100%; overflow: hidden;">
        <div style="position: absolute; width: 130%; height: 100%; background: linear-gradient(to right, rgba(78, 53, 53, 0) 10%, rgb(237, 237, 229) 50%), url('{{ asset('FrontendAssets/15.png') }}'); background-size: contain; background-position-x: -310px; background-repeat: no-repeat;">
        </div>

        <div style="position: absolute; top: -21%; left: 89%; transform: translateX(-50%); text-align: center; width: 1200px; height: auto;">
            <img src="{{ asset('FrontendAssets/2.png') }}" alt="Florante at Laura" style="width: 60%; height: auto;">
        </div>
        <div style="position: absolute; top: 10%; left: 92%; transform: translateX(-50%); text-align: center; width: 1200px; height: auto;">
            <img src="{{ asset('FrontendAssets/13.png') }}" alt="Florante at Laura" style="width: 50%; height: auto;">
        </div>

        <div style="position: absolute; top: 50%; left: 74%; transform: translateX(-50%); font-family: 'NewBaskervilleStd-Bold', serif; font-size: 2em;">
            <p>SETTINGS</p>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="background: transparent; box-shadow: none;">
                <div class="hidden sm:-my-px sm:ms-10 sm:flex" style="position: absolute; bottom: 30%; left: 75%; transform: translateX(-50%);">
                    <img src="{{ asset('FrontendAssets/11.png') }}" alt="Play Button" style="width: 200px; height: auto; margin-right: -70px;">
                    <img src="{{ asset('FrontendAssets/23.png') }}" alt="Play Button" style="width: 200px; height: auto;">
                </div>

                <div class="hidden sm:-my-px sm:ms-10 sm:flex" style="position: absolute; bottom: 20%; left: 75%; transform: translateX(-50%);">
                    <img src="{{ asset('FrontendAssets/12.png') }}" alt="Play Button" style="width: 200px; height: auto; margin-right: -70px;">
                    <img src="{{ asset('FrontendAssets/23.png') }}" alt="Play Button" style="width: 200px; height: auto;">
                </div>


            </div>
        </div>

        <div style="position: absolute; bottom: -15%; left: 89%; transform: translateX(-50%); text-align: center; width: 1200px; height: auto;">
            <img src="{{ asset('FrontendAssets/2.png') }}" alt="Florante at Laura" style="width: 60%; height: auto;">
        </div>
    </div>
</x-app-layout>
