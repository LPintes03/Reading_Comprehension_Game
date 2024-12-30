<x-chapter-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    @vite('resources\css\chapters.css')

    <div class="shrink-0 flex items-center">
        <a href="{{ route('chapters') }}">
            <x-back-button class="block h-9 w-auto fill-current text-gray-800" />
        </a>
    </div>
    {{-- FROM HERE MAG-EEDIT --}}
    {{-- JUST COPY & PASTE THE WHOLE CODE FOR TEMPLATE. --}}
    {{-- NO NEED NA GALAWIN ANG AUDIO FIILE --}}
    <h1 class="chapter">Kabanata 1</h1>
    <br>

    {{--<span class="hoverable"
                data-word="Lubhang"
                data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="Labis o sobra."
                data-definition-eng="Excessive or too much."
                data-example="Lubhang mahirap ang sitwasyon."
                data-antonyms="kaunti, konti"
                data-synonyms="sobra, labis">anaki</span>
    --}}

    <div class="words">
        </p>
            288   Hindi ko makita ang patas na wika
            sa kaguluhan ko't 
            <span class="hoverable"
            data-word="Lubhang"
            data-audio="path/to/audio/mapanglaw.mp3"
            data-definition-tag="Labis o sobra."
            data-definition-eng="Excessive or too much."
            data-example="Lubhang mahirap ang sitwasyon."
            data-antonyms="kaunti, konti"
            data-synonyms="sobra, labis">pagkawalandiwa
            </span>,
            nang makiumpok na'y ang aking salita,
            anhin mang tuwirin ay nagkakalisya.
        </p>
    </div>
    <br>
    <div class="words">
        <p>
            289   Nang malutas yaong pagsasalitaan
            ay wala na akong kamaharlikaan;
            kaluluwa'y gulo't puso'y 
            <span class="hoverable"
            data-word="Lubhang"
            data-audio="path/to/audio/mapanglaw.mp3"
            data-definition-tag="Labis o sobra."
            data-definition-eng="Excessive or too much."
            data-example="Lubhang mahirap ang sitwasyon."
            data-antonyms="kaunti, konti"
            data-synonyms="sobra, labis">nadadarang
            </span>
            sa ningas ng sintang bago kong natikman.
        </p>
    </div>
    <br>
    <div class="words">
        <p>
            290   Tatlong araw noong 
            <span class="hoverable"
            data-word="Lubhang"
            data-audio="path/to/audio/mapanglaw.mp3"
            data-definition-tag="Labis o sobra."
            data-definition-eng="Excessive or too much."
            data-example="Lubhang mahirap ang sitwasyon."
            data-antonyms="kaunti, konti"
            data-synonyms="sobra, labis">piniging
            </span> ng hari
            sa palasyo real na sa yama'y bunyi
            ay 'di nakausap ang punong pighati
            at inaasahang iluluwalhati.
        </p>
    </div>
    <br>
    <div class="words">
        <p> 
            291   Dito ko natikman ang lalong hinagpis,
            higit sa dalitang naunang tiniis;
            at hinulaan ko ang lahat ng sakit
            kung sa kahirapan mula sa pag-ibig.
        </p>
    </div>
    <br>
    <div class="words">
        <p>
            292   Salamat at noong sa kinabukasan,
            hukbo ko'y lalakad sa Krotonang Bayan,
            sandaling pinalad na nakapanayam
            ang prinsesang nihag niring katauhan.
        </p>
    </div>
    <br>
    <div class="words">
        <p> 
            293   Ipinahahayag ko nang wikang mairog,
            nang buntung-hininga, luha at himutok,
            ang matinding sintang ikinalulunod
            magpahangga ngayon ng buhay kong kapos.
        </p>
    </div>
    <br>
    <div class="words">
        <p>
            294   Ang pusong matibay ng himalang dikit,
            <span class="hoverable"
            data-word="Lubhang"
            data-audio="path/to/audio/mapanglaw.mp3"
            data-definition-tag="Labis o sobra."
            data-definition-eng="Excessive or too much."
            data-example="Lubhang mahirap ang sitwasyon."
            data-antonyms="kaunti, konti"
            data-synonyms="sobra, labis">nahambal
            </span> sa aking malumbay na hibik;
            dangan ang kanyang katutubong bait
            ay humadlang, disin sinta koy' nabihis.
        </p>
    </div>
    <br>

    <div class="words">
        <p>
            295   Nguni'y kung ang oo'y 'di man binitiwan,
            naliwanagan din sintang nadirimlan;
            at sa pagpanaw ko ay 
            <span class="hoverable"
            data-word="Lubhang"
            data-audio="path/to/audio/mapanglaw.mp3"
            data-definition-tag="Labis o sobra."
            data-definition-eng="Excessive or too much."
            data-example="Lubhang mahirap ang sitwasyon."
            data-antonyms="kaunti, konti"
            data-synonyms="sobra, labis">pinabaunan
            </span>
            ng may hiyang perlas na sa mata'y nukal.
        </p>
    </div>
    <br>


    {{-- TASS LANG EDITABLE --}}
    {{-- NO NEED NA GALAWIN. SA TAAS LANG ANG I-EDIT --}}
    <div id="sidebar" class="sidebar hidden">
        <button id="close-sidebar" class="close-button">&times;</button>

        <div id="sidebar-content" class="overflow-auto max-h-screen p-4">

            <li class="word">
                <div class="details">
                    <p id="word-name" style="display: inline;">__</p>
                    <span id="word-pronunciation" style="display: inline;">_ _</span>
                    <i class="fas fa-volume-up" id="play-audio-word" style="cursor: pointer; margin-left: 5px;"></i> <!-- Audio icon for the word -->
                    <audio id="audio-word" src="" controls hidden></audio>
                </div>
            </li>
            <div class="content">
                <li class="meaning">
                    <div class="details">
                        <p>Meaning (Tagalog)</p>
                        <span id="meaning-text">___</span>
                    </div>
                </li>
                <li class="meaning-eng">
                    <div class="details">
                        <p>Meaning (English)</p>
                        <span id="meaning-eng-text">___</span>
                    </div>
                </li>
                <li class="example">
                    <div class="details">
                        <p>Example</p>
                        <span id="example-text">___</span>
                    </div>
                </li>
                <li class="synonyms">
                    <div class="details">
                        <p>Synonyms</p>
                        <span id="synonyms-text">___</span>
                    </div>
                </li>
                <li class="antonyms">
                    <div class="details">
                        <p>Antonyms</p>
                        <span id="antonyms-text">___</span>
                    </div>
                </li>
            </div>
        </div>
    </div>

    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <x-nav-link :href="route('games.show', ['number'])">
            {{ __('Game') }}
        </x-nav-link>
    </div>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <script>
       // Function to show the sidebar with the selected word's data
function showSidebar(wordData) {
    document.getElementById('word-name').innerText = wordData.word; // Display the word
    document.getElementById('word-pronunciation').innerText = wordData.pronunciation; // Display pronunciation

    // Set the audio source for the meanings and examples
    const meaningAudioSrc = wordData.audio; // Assuming the same audio for both meanings

    document.getElementById('meaning-text').innerText = wordData.definition;
    document.getElementById('meaning-eng-text').innerText = wordData.definitionEng;
    document.getElementById('example-text').innerText = wordData.example;
    document.getElementById('synonyms-text').innerText = wordData.synonyms;
    document.getElementById('antonyms-text').innerText = wordData.antonyms;

    const sidebar = document.getElementById('sidebar');
    sidebar.classList.remove('hidden'); // Show the sidebar
    sidebar.classList.add('visible'); // Add visible class

    // Add click event listeners to the audio icons
    document.getElementById('play-audio-meaning').onclick = function() {
        playAudio(meaningAudioSrc);
    };
    document.getElementById('play-audio-meaning-eng').onclick = function() {
        playAudio(meaningAudioSrc);
    };
    document.getElementById('play-audio-example').onclick = function() {
        playAudio(exampleAudioSrc);
    };
}

    // Add click event listeners to hoverable words
    document.querySelectorAll('.hoverable').forEach(function(element) {
        element.addEventListener('click', function() {
            const wordData = {
                word: this.getAttribute('data-word'), // Get the word
                pronunciation: this.getAttribute('data-pronunciation'), // Get pronunciation
                audio: this.getAttribute('data-audio'), // Get audio source
                definition: this.getAttribute('data-definition-tag'),
                definitionEng: this.getAttribute('data-definition-eng'),
                example: this.getAttribute('data-example'),
                synonyms: this.getAttribute('data-synonyms'),
                antonyms: this.getAttribute('data-antonyms')
            };
            showSidebar(wordData);
        });
    });
    // Close sidebar functionality
    document.getElementById('close-sidebar').addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.add('hidden'); // Hide the sidebar
        sidebar.classList.remove('visible'); // Remove visible class
    });
</script>
</x-chapter-layout>
