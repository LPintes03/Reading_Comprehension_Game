<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div style="position: relative; height: 100vh; width: 100%; overflow: hidden;">

        <!-- Faded Background Image -->
        <div style="position: absolute; width: 130%; height: 100%; background-color: rgb(251, 251, 240); background-size: contain; background-position-x: -310px; background-repeat: no-repeat;">
        </div>

        <div style="position: absolute; top: -21%; left: 50%; transform: translateX(-50%); text-align: center; width: 1200px; height: auto;">
            <img src="{{ asset('FrontendAssets/1.png') }}" alt="Florante at Laura" style="width: 60%; height: auto;">
        </div>
        <div style="position: absolute; top: 12%; left: 50%; transform: translateX(-50%); text-align: center; width: 1200px; height: auto;">
            <img src="{{ asset('FrontendAssets/13.png') }}" alt="Florante at Laura" style="width: 70%; height: auto;">
        </div>

        <img src="{{ asset('FrontendAssets/5.png') }}" alt="Top Left Corner" style="position: absolute; top: 1%; left: -130px; width: 40%; height: auto;">
        <img src="{{ asset('FrontendAssets/3.png') }}" alt="Top Right Corner" style="position: absolute; top: 1%; right: -95px; width: 40%; height: auto;">
        <img src="{{ asset('FrontendAssets/6.png') }}" alt="Bottom Left Corner" style="position: absolute; bottom: 2%; left: -85px; width: 30%; height: auto;">
        <img src="{{ asset('FrontendAssets/4.png') }}" alt="Bottom Right Corner" style="position: absolute; bottom: 2%; right: -85px; width: 30%; height: auto;">


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="background: transparent; box-shadow: none;">

                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" style="position: absolute; bottom: 17%; left: 50%; transform: translateX(-50%);">
                                <x-nav-link :href="route('dashboard')">
                                    <img src="{{ asset('FrontendAssets/7.png') }}" alt="Play Button" style="width: 200px; height: auto;">
                                </x-nav-link>
                            </div>
                        @else
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" style="display: inline-block; position: absolute; bottom: 25%; left: 50%; transform: translateX(-50%); cursor: pointer;">
                                <a href="{{ route('login') }}" style="font-size: 2rem; color: yellow; text-shadow: 2px 2px 2px rgb(68, 5, 5); font-family: 'NewBaskervilleStd-Bold', serif; text-decoration: none; cursor: pointer;">
                                    LOG IN</a>
                            </div>

                            @if (Route::has('register'))
                                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" style="display: inline-block; position: absolute; bottom: 17%; left: 50%; transform: translateX(-50%);">
                                    <a href="{{ route('register') }}" style="font-size: 2rem; color: yellow; text-shadow: 2px 2px 2px rgb(68, 5, 5); font-family: 'NewBaskervilleStd-Bold', serif; text-decoration: none; cursor: pointer;">
                                    REGISTER</a>
                            @endif
                        @endauth
                    </nav>
                @endif

            </div>
        </div>

        <div style="position: absolute; bottom: -18%; left: 50%; transform: translateX(-50%); text-align: center; width: 1200px; height: auto;">
            <img src="{{ asset('FrontendAssets/2.png') }}" alt="Florante at Laura" style="width: 60%; height: auto;">
        </div>
    </div>
</body>
</html>
