<x-app-layout>
    <div style="width: 100%; height: 100%; background-color: rgb(68, 5, 5); display: flex; flex-direction: column; align-items: center; justify-content: center; position: absolute;">
        <div style="position: absolute; top: 2%; color: yellow; text-shadow: 2px 2px 2px rgb(68, 5, 5); font-family: 'NewBaskervilleStd-Bold', serif; font-size: 3.5em;">
            <h2>
                {{ __('LEADERBOARD') }}
            </h2>
        </div>
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're top1 in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
