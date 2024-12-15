<x-app-layout>
    @vite('resources/css/app.css')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mga Kabanata') }}
        </h2>
    </x-slot>
    <div class="shrink-0 flex items-center">
        <a href="{{ route('chapters') }}">
            <x-back-button class="block h-9 w-auto fill-current text-gray-800" />
        </a>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1>Chapter 1</h1>
                {{-- yung span is dun ka mag lalagay ng mga words na hoverable with meaning --}}
                <p>1   Sa isang madilim, gubat na <span class="hoverable"
                    data-tippy-content="Malungkot o nakakapagbigay ng lungkot.">mapanglaw</span>,
                    dawag na matinik ay walang pagitan,
                    halos naghihirap ang kay Pebong silang
                    dumalaw sa loob na lubhang masukal.

                    2   Malalaking kahoy ang inihahandog,
                    pawang dalamhati, kahapisa't lungkot;
                    huni pa ng ibon ay nakalulunos
                    sa lalong matimpi't nagsasayang loob.

                    3   Tanang mga baging na namimilipit
                    sa sanga ng kahoy ay balot ng tinik;
                    may bulo ang bunga't nagbibigay-sakit
                    sa kanino pa mang sumagi't malapit.

                    4   Ang mga bulaklak ng nagtayong kahoy,
                    pinakapamuting nag-ungos sa dahon;
                    pawang kulay-luksa at nakikiayon
                    sa nakaliliyong masangsang na amoy.</p>


            </div>
        </div>
    </div>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <script>
        // Initialize Tippy.js for hoverable terms
        tippy('.hoverable', {
            placement: 'top', // Position of the tooltip
            animation: 'fade', // Animation type
        });
    </script>
</x-app-layout>
