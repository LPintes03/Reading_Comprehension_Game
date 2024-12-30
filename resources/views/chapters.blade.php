<x-app-layout>
    <div class="back-button shrink-0 flex items-center" style="position: absolute; top: 20px; left: 20px; z-index: 10;">
        <a href="{{ route('play') }}">
            <x-back-button style="width: auto; height: auto; display: inline-block;" />
        </a>
    </div>
    <div style="width: 100%; height: 100%; background-color: rgb(68, 5, 5); background-image: url('{{ asset('FrontendAssets/21.png') }}'); background-position: center; background-size: contain; background-repeat: no-repeat; display: flex; flex-direction: column; align-items: center; justify-content: center; position: absolute;">
        <div style="position: absolute; top: 0; color: yellow; text-shadow: 2px 2px 2px rgb(68, 5, 5); font-family: 'NewBaskervilleStd-Bold', serif; font-size: 3.5em;">
            <p>
                {{ __('MGA KABANATA') }}
            </p>
        </div>
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <ul>
                    @foreach (range(1, 30) as $chapter)
                        <li>
                            <a href="{{ route('chapters.show', ['number' => $chapter]) }}">
                                Kabanata {{ $chapter }}
                            </a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>

        <div style="position: absolute; bottom: 0; color: yellow; text-shadow: 2px 2px 2px rgb(68, 5, 5); font-family: 'NewBaskervilleStd-Bold', serif; font-size: 2.5em;">
            <p>
                {{ __('PILIIN') }}
            </p>
        </div>
    </div>
</x-app-layout>
zz

