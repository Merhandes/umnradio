<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UMN Radio</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body class="composer h-full bg-white">
    {{-- NAVBAR --}}
     <div x-data="{ isOpen: false }" class="fixed w-full flex justify-between p-3 z-40 bg-[#021f3a] lg:p-4">
            <div class="flex items-center">
            <img class="h-10 md:h-16 w-auto" src="{{ asset('images/logowhite.webp') }}"
            alt="">
            </div>

            <div class="flex items-center justify-between">
                <button @click="isOpen = !isOpen" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <div class="pr-4 hidden space-x-6 lg:inline-block">
                    <a href="/" class="font-poppins text-base text-white no-underline">Home</a>
                    <!-- <a href="#" class="font-poppins text-base text-white no-underline">About</a>
                    <a href="#" class="font-poppins text-base text-white no-underline">Programs</a> -->
                    <a href="/article" class="font-poppins text-base text-white underline-offset-4">Articles</a>
                </div>

                <div class="mobile-navbar">
                    <div class="fixed left-0 w-full h-48 p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
                        @click.away=" isOpen = false">
                        <div class="flex flex-col space-y-6">
                            <a href="/" class="font-poppins -sm text-black">Home</a>
                            <!-- <a href="#" class="font-poppins text-sm text-black">About</a> -->
                            <a href="/article" class="text-sm text-black">Articles</a>
                            <!-- <a href="#" class="text-sm text-black">Podcasts</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ARTICLE --}}
        <div class="pt-10 mx-6 md:mx-48 font-poppins text-black pb-24">
            <h1 class="pt-12 md:pt-24 text-center font-bold mb-6">Articles</h1>
            <div class="flex flex-col md:flex-row gap-16 justify-center">

            <a class="no-underline" href="/article/kepada-yth-maba-apa-kabar-kali-ini">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg no-underline">
                    <img class="w-full" src="{{ asset('images/artikel2/FEATURED IMAGE MABA.webp') }}" alt="Featured Image">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-[#021f3a]">Kepada Yth. Maba: Apa Kabar Kali Ini?</div>
                        <p class="text-gray-700 text-base">
                        “Buka lagi visimu, kau tahu mana urutan satu”<br>
            Sepenggal lirik dari lagu “33x”. . .
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Lapor OMB</span>
                    </div>
                    </div>
                </a>

                <a class="no-underline" href="/article/obral-etalase-mimpi">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg no-underline">
                    <img class="w-full" src="{{ asset('images/artikel1/FEATURED IMAGE.webp') }}" alt="Featured Image">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-[#021f3a]">Obral Etalase Mimpi</div>
                        <p class="text-gray-700 text-base">
                        “Dibeli! Dibeli! Diobral <i>nih</i> mimpinya!” <br>
                    Hah? Dibeli? Diobral? Mimpinya? Apa <i>sih</i> maksudnya? <i>Kinda little bit confusing,</i> ya
                    Ultimafriends?. . .
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Lapor OMB</span>
                    </div>
                    </div>
                </a>

            </div>
        </div>

    {{-- AUDIO --}}
    <footer id="audiosticky" class="fixed bottom-0 w-full z-40 h-16 bg-[#021f3a] flex flex-row gap-16 justify-center items-center transition-all duration-500">
        <button id="buttonplay2"><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg></button>
        <button id="buttonpause2" class="hidden"><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M48 64C21.5 64 0 85.5 0 112V400c0 26.5 21.5 48 48 48H80c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H48zm192 0c-26.5 0-48 21.5-48 48V400c0 26.5 21.5 48 48 48h32c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H240z"/></svg></button>
        <audio id="player">
                        <source src='https://shoutcast.radio.umn.ac.id/stream.mp.3'/>
                        </audio>
    </footer>
                
    <script>
            var button3 = document.getElementById("buttonplay2");
            var button4 = document.getElementById("buttonpause2");
            var audio = document.getElementById("player");

            button3.addEventListener("click", function(){
            if(audio.paused){
                audio.play();
                button3.classList.add('hidden');
                button4.classList.remove('hidden');
            } else {
                audio.pause();
                button4.classList.add('hidden');
                button3.classList.remove('hidden');
            }
            });

            button4.addEventListener("click", function(){
            if(audio.paused){
                audio.play();
                button3.classList.add('hidden');
                button4.classList.remove('hidden');
            } else {
                audio.pause();
                button4.classList.add('hidden');
                button3.classList.remove('hidden');
            }
            });
        </script>
    </body>
</html>
