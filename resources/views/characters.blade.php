<x-app-layout>
    <div class="shrink-0 flex items-center" style="position: absolute; top: 20px; left: 20px; z-index: 10;">
        <a href="{{ route('dashboard') }}">
            <x-back-button style="width: auto; height: auto; display: inline-block;"></x-back-button>
        </a>
    </div>
    <div style="width: 100%; height: 100%; background-color: rgb(68, 5, 5); display: flex; flex-direction: column; align-items: center; justify-content: center; position: absolute;">

        <div style="position: absolute; top: 2%; color: yellow; text-shadow: 2px 2px 2px rgb(68, 5, 5); font-family: 'NewBaskervilleStd-Bold', serif; font-size: 3.5em;">
            <h2>
                {{ __('MGA TAUHAN') }}
            </h2>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-12" style="margin-top: 10%;">
            <!-- Florante Section -->
            <div style="text-align: center; margin-right: 70px;">
                <div style="border: 5px solid gold; border-radius: 8px; padding: 10px; background-color: rgb(30, 4, 4);">
                    <img src="{{ asset('images/.png') }}" alt="Florante" style="width: 300px; height: auto; border-radius: 8px;">
                </div>
                <img src="{{ asset('FrontendAssets/25.png') }}" alt="Florante" style="width: 450px; height: auto; border-radius: 8px;">
            </div>
            <br><br><br>
            <!-- Laura Section -->
            <div style="text-align: center;">
                <div style="border: 5px solid gold; border-radius: 8px; padding: 10px; background-color: rgb(30, 4, 4);">
                    <img src="{{ asset('FrontendAssets/.png') }}" alt="Laura" style="width: 300px; height: auto; border-radius: 8px;">
                </div>
                <img src="{{ asset('FrontendAssets/24.png') }}" alt="Laura" style="width: 450px; height: auto; border-radius: 8px;">
            </div>
        </div>
    </div>
</x-app-layout>
