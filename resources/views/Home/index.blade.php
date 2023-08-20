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
                    <a href="/" class="font-poppins text-base text-white underline-offset-4">Home</a>
                    <a href="#" class="font-poppins text-base text-white no-underline">About</a>
                    <a href="#" class="font-poppins text-base text-white no-underline">Programs</a>
                    <a href="#" class="font-poppins text-base text-white no-underline">Podcasts</a>
                </div>

                <div class="mobile-navbar">
                    <div class="fixed left-0 w-full h-48 p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
                        @click.away=" isOpen = false">
                        <div class="flex flex-col space-y-6">
                            <a href="#" class="font-poppins -sm text-black">Home</a>
                            <a href="#" class="font-poppins text-sm text-black">About</a>
                            <!-- <a href="#" class="text-sm text-black">Programs</a>
                            <a href="#" class="text-sm text-black">Podcasts</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    {{-- BACKGROUND --}}
    <!-- <img class="w-screen z-0" src="{{ asset('images/background.webp') }}"
        alt=""> -->
    <div class="relative">
        <img class="h-screen w-auto md:h-auto md:w-screen z-0 object-cover" src="{{ asset('images/background.webp') }}" alt="" />
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 px-4 py-2">
                <div class="px-4 text-center">
                    <p class="font-poppins text-white font-bold">107.7 FM</p>
                    <h3 class="font-poppins text-md md:text-6xl text-white font-bold">
                        UMN RADIO</h3>
                    <div class="mt-4">
                        <button id="buttonplay"><svg xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z"/></svg></button>
                        <button id="buttonpause" class="hidden"><svg xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm224-72V328c0 13.3-10.7 24-24 24s-24-10.7-24-24V184c0-13.3 10.7-24 24-24s24 10.7 24 24zm112 0V328c0 13.3-10.7 24-24 24s-24-10.7-24-24V184c0-13.3 10.7-24 24-24s24 10.7 24 24z"/></svg></button>
                    </div>
                        <audio id="player">
                        <source src='https://521dimensions.com/song/IntroSweetGlory-Jimkata.mp3'/>
                        </audio>
                </div>
            </div>
        </div>

    {{-- AUDIO --}}
    <footer id="audiosticky" class="invisible fixed bottom-0 w-full z-40 h-16 bg-[#021f3a] flex flex-row gap-16 justify-center items-center transition-all duration-500">
        <button id="buttonplay2"><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg></button>
        <button id="buttonpause2" class="hidden"><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M48 64C21.5 64 0 85.5 0 112V400c0 26.5 21.5 48 48 48H80c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H48zm192 0c-26.5 0-48 21.5-48 48V400c0 26.5 21.5 48 48 48h32c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H240z"/></svg></button>
    </footer>
    
    {{-- ON AIR OFF AIR --}}
    <div id="section-1" class="w-full my-6 md:mt-12 md:mx-4">
        <h1 class="font-poppins text-[#021f3a] font-bold w-full text-center">Live Broadcast</h1>
        <div id="sign" class="m-6 text-center">
            <div id="onair" class="border rounded-md bg-[#dfdfdf] w-24 p-2 m-auto">
                <h1 class="font-poppins text-xl text-white"> On Air </h1>
            </div>
            <div class="flex flex-col md:flex-row gap-4 md:gap-16 mt-6 justify-center items-center">
                <img id="simbPoster" class="h-80 rounded-lg" src="{{ asset('images/sim.webp') }}" alt="SIMB" />
                <img id="newsPoster" class="hidden h-80 rounded-lg" src="{{ asset('assets/NF.webp') }}" alt="NEWS" />
                
                <div>
                    <h3 id="upcomingtext" class="font-poppins mt-3 font-bold text-black">Upcoming Program</h3>
                    <h3 id="listeningtext" class="hidden font-poppins mt-3 font-bold text-black">You're Listening to</h3>
                    <h3 id="namaProgram" class="font-poppins mt-3 font-bold text-3xl text-[#021f3a]">SIMB</h3>
                    <p id="waktuTayang" class="font-poppins mt-3 text-black">Monday (17:00-19:00)</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 4 --}}
    <div id="section-4" class="md:mt-12 w-full my-4 md:mx-4">
        <h1 class="font-poppins text-[#021f3a] font-bold w-full text-center">Instagram Highlights</h1>
        <div class="flex justify-center align-middle w-full my-2">
            <div id="instagram-posts"
                class="flex justify-center flex-wrap align-middle md:w-fit max-w-[95%] md:py-2 md:px-2">
                <div class="w-[33%] md:w-[25%] md:mx-2 md:my-2">
                    <a target="_blank" href="https://www.instagram.com/p/Cv9TA3jPjGv/">
                        <img class="object-cover w-full aspect-square" src="{{ asset('images/ig_10.webp') }}"
                            alt="">
                    </a>
                </div>
                <div class="w-[33%] md:w-[25%] md:mx-2 md:my-2">
                    <a target="_blank" href="https://www.instagram.com/p/Cv_3bGurVw6/">
                        <img class="object-cover w-full aspect-square" src="{{ asset('images/ig_8.webp') }}"
                            alt="">
                    </a>
                </div>
                <div class="w-[33%] md:w-[25%] md:mx-2 md:my-2">
                    <a target="_blank" href="https://www.instagram.com/p/Cv6_iv_NG21/">
                        <img class="object-cover w-full aspect-square" src="{{ asset('images/ig_9.webp') }}"
                            alt="">
                    </a>
                </div>
                <div class="w-[33%] md:w-[25%] md:mx-2 md:my-2">
                    <a target="_blank" href="https://www.instagram.com/p/Cv35eMVOYHp/">
                        <img class="object-cover w-full aspect-square" src="{{ asset('images/ig_4.webp') }}"
                            alt="">
                    </a>
                </div>
                <div class="w-[33%] md:w-[25%] md:mx-2 md:my-2">
                    <a target="_blank" href="https://www.instagram.com/p/CvCy89wRYqb/">
                        <img class="object-cover w-full aspect-square" src="{{ asset('images/ig_5.webp') }}"
                            alt="">
                    </a>
                </div>
                <div class="w-[33%] md:w-[25%] md:mx-2 md:my-2">
                    <a target="_blank" href="https://www.instagram.com/p/Cv6zC8KOkLt/">
                        <img class="object-cover w-full aspect-square" src="{{ asset('images/ig_7.webp') }}"
                            alt="">
                    </a>
                </div>
                <div class="w-[33%] md:w-[25%] md:mx-2 md:my-2">
                    <a target="_blank" href="https://www.instagram.com/p/Cu1GO8WrDni/">
                        <img class="object-cover w-full aspect-square" src="{{ asset('images/ig_1.webp') }}"
                            alt="">
                    </a>
                </div>
                <div class="w-[33%] md:w-[25%] md:mx-2 md:my-2">
                    <a target="_blank" href="https://www.instagram.com/p/Cu04lIju-Zi/">
                        <img class="object-cover w-full aspect-square" src="{{ asset('images/ig_2.webp') }}"
                            alt="">
                    </a>
                </div>
                <div class="w-[33%] md:w-[25%] md:mx-2 md:my-2">
                    <a target="_blank" href="https://www.instagram.com/p/Cu04YVdtYQx/">
                        <img class="object-cover w-full aspect-square" src="{{ asset('images/ig_3.webp') }}"
                            alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 3 --}}
    <div id="section-3" class="mx-4">
        <!-- Swiper -->
        <div class="swiper">
            <h1 class="font-poppins text-[#021f3a] font-bold text-center my-2">Playlists</h1>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/0ygBAAd7ew4LuCg2wYDxs0?utm_source=generator"
                        width="300" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    <div class="invis_layer md:hidden"></div>
                    <h3 class="swipe_here md:hidden w-full absolute bottom-0.5 text-neutral-400 text-center">Swipe Here
                    </h3>
                </div>
                <div class="swiper-slide">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/0bJX6EM2jhGoPebVBmo2WF?utm_source=generator"
                        width="300" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    <div class="invis_layer md:hidden"></div>
                    <h3 class="swipe_here md:hidden w-full absolute bottom-0.5 text-neutral-400 text-center">Swipe Here
                    </h3>
                </div>
                <div class="swiper-slide">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/3vGDg5BKGBCVMp6ZakNtdy?utm_source=generator"
                        width="300" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    <div class="invis_layer md:hidden"></div>
                    <h3 class="swipe_here md:hidden w-full absolute bottom-0.5 text-neutral-400 text-center">Swipe Here
                    </h3>
                </div>
                <div class="swiper-slide">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/6lyWx7VS8sqvQz6qVhowTq?utm_source=generator"
                        width="300" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    <div class="invis_layer md:hidden"></div>
                    <h3 class="swipe_here md:hidden w-full absolute bottom-0.5 text-neutral-400 text-center">Swipe Here
                    </h3>
                </div>
                <div class="swiper-slide">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/7vIo3BQwy24fmZ77AxFMtT?utm_source=generator"
                        width="300" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    <div class="invis_layer md:hidden"></div>
                    <h3 class="swipe_here md:hidden w-full absolute bottom-0.5 text-neutral-400 text-center">Swipe Here
                    </h3>
                </div>
                <div class="swiper-slide">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/2dmVTR6rAaXGiGCLubKY5m?utm_source=generator"
                        width="300" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    <div class="invis_layer md:hidden"></div>
                    <h3 class="swipe_here md:hidden w-full absolute bottom-0.5 text-neutral-400 text-center">Swipe Here
                    </h3>
                </div>
                <div class="swiper-slide">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/5pkN7hYqLwuUszAIQ1ErUa?utm_source=generator"
                        width="300" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    <div class="invis_layer md:hidden"></div>
                    <h3 class="swipe_here md:hidden w-full absolute bottom-0.5 text-neutral-400 text-center">Swipe Here
                    </h3>
                </div>
                <div class="swiper-slide">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/3Av5uQtPEEC3kzk0LlppEw?utm_source=generator"
                        width="300" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    <div class="invis_layer md:hidden"></div>
                    <h3 class="swipe_here md:hidden w-full absolute bottom-0.5 text-neutral-400 text-center">Swipe Here
                    </h3>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div id="additional-embeds" class="flex justify-center flex-wrap align-middle w-full my-4">
            <div id="u-podcast" class="mx-4 w-[400px] max-w-[90%]">
                <h1 class="font-poppins text-[#021f3a] font-bold text-center my-2">U-Podcast</h1>
                <iframe class="my-2" style="border-radius:15px"
                    src="https://open.spotify.com/embed/episode/5zOPyOllBf6L1XUA95qiNx?utm_source=generator&theme=0"
                    width="100%" height="80" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
                <iframe class="my-2" style="border-radius:15px"
                    src="https://open.spotify.com/embed/show/6ytg0qKpDz9ehq2fjklepU?utm_source=generator"
                    width="100%" height="352" frameBorder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>

            </div>
            <div id="twitter" class="mx-4 w-[400px] max-w-[90%]">
                <h1 class="font-poppins text-[#021f3a] font-bold text-center my-2">Tweets</h1>
                <a class="twitter-timeline" data-width="400" data-height="440"
                    href="https://twitter.com/UMNRADIO?ref_src=twsrc%5Etfw">Tweets by UMNRADIO</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div id="utube" class="mx-4 w-[400px] max-w-[90%]">
                <div id="youtube">
                    <h1 class="font-poppins text-[#021f3a] font-bold text-center my-2">Watch Now!</h1>
                    <iframe class="my-2" src="https://www.youtube.com/embed/PIkPz_cYj9k" width="100%"
                        height="216"></iframe>
                    <iframe class="my-2" src="https://www.youtube.com/embed/_dSjGpbD_D0" width="100%"
                        height="216"></iframe>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script type="module">
        var swiper = new Swiper('.swiper', {
            effect: 'coverflow',
            grabCursor: false,
            centeredSlides: true,
            slidesPerView: 'auto',
            mousewheel: true,
            // cubeEffect: {
            //     shadow: true,
            //     slideShadows: true,
            //     shadowOffset: 20,
            //     shadowScale: 0.94,
            // },
            coverflowEffect: {
                rotate: 0,
                stretch: 50,
                depth: 200,
                modifier: 1,
            },
            autoplay: {
                delay: 3000,
                pauseOnMouseEnter: true,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            // loop: true,
            lazy: true,
            lazyPreloadPrevNext: 0,
        });
    </script>

    <!-- Demo styles -->
    <style>
        .swiper {
            width: 1600px;
            max-width: 95%;
            padding-top: 5px;
            padding-bottom: 30px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            position: relative;
        }

        @media only screen and (max-width:768px) {
            .swiper-slide {
                height: 475px;
            }
        }

        .swiper-slide .invis_layer {
            background-color: rgba(202, 202, 202, 0.9);
            position: absolute;
            top: 0;
            z-index: -1;
            width: 100%;
            height: 475px;
            border-radius: 15px
        }
    </style>

{{-- <div id="chart-carousel" class="flex justify-center align-middle w-full my-4 mx-4">
            <div class="carousel carousel-center max-w-[60%] p-4 space-x-4 bg-neutral rounded-box">
                <div class="carousel-item">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/0ygBAAd7ew4LuCg2wYDxs0?utm_source=generator"
                        width="100%" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                </div>
                <div class="carousel-item">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/0bJX6EM2jhGoPebVBmo2WF?utm_source=generator"
                        width="100%" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                </div>
                <div class="carousel-item">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/3vGDg5BKGBCVMp6ZakNtdy?utm_source=generator"
                        width="100%" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                </div>
                <div class="carousel-item">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/6lyWx7VS8sqvQz6qVhowTq?utm_source=generator"
                        width="100%" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                </div>
                <div class="carousel-item">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/7vIo3BQwy24fmZ77AxFMtT?utm_source=generator"
                        width="100%" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                </div>
                <div class="carousel-item">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/2dmVTR6rAaXGiGCLubKY5m?utm_source=generator"
                        width="100%" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                </div>
                <div class="carousel-item">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/5pkN7hYqLwuUszAIQ1ErUa?utm_source=generator"
                        width="100%" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                </div>
                <div class="carousel-item">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/3Av5uQtPEEC3kzk0LlppEw?utm_source=generator"
                        width="100%" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                </div>
            </div>
        </div> --}}
            
            <div class="m-10"></div>

            <footer class="bg-[#021f3a] md:h-24 mb-16 p-4">
                <div class="flex flex-col items-center text-center space-y-3 md:flex-row md:justify-around md:items-center md:text-left md:space-y-0">
                    <div>

                    
                        <img src="{{ asset('assets/umnradio.webp') }}" alt="logo" class="w-20 mt-1">
                    </div>
                    <div class="font-poppins text-xs text-white">
                        <p>Jalan Scientia Boulevard</p>
                        <p>Universitas Multimedia Nusantara, Gedung B lt. 6</p>
                        <p>Tangerang, Banten 15811, ID</p>
                    </div>
                    <div class="font-poppins text-xs ">
                        <p class="mb-1 font-popping text-white">Contact Us</p>
                        <div class="flex-col">
                            <a href="http://line.me/ti/p/~@umnradio#~" class="text-black no-underline">
                                <div class="flex">
                                    <img src="{{ asset('assets/line.webp') }}" alt="line" class="w-4 mb-1 mr-1">
                                    <p class="font-poppins text-white no-underline">Line@</p>
                                </div>
                            </a>

                            <a href="https://twitter.com/UMNRADIO" class="text-black no-underline">
                                <div class="flex">
                                    <img src="{{ asset('assets/twitter.webp') }}" alt="line" class="w-4 mb-1 mr-1">
                                    <p class="font-poppins text-white no-underline">Twitter</p>
                                </div>
                            </a>

                            <a href="https://www.youtube.com/channel/UCeVl4fsOVkU7yVCurgoq5Lg" class="text-black no-underline">
                                <div class="flex">
                                    <img src="{{ asset('assets/youtube.webp') }}" alt="line" class="w-4 mb-1 mr-1">
                                    <p class="font-poppins text-white no-underline">Youtube</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="text-xs">
                        <p class="mb-1 font-poppins text-white">Get Our App</p>
                        <a href="https://play.google.com/store/apps/details?id=com.umnradio.umnradio&pcampaignid=web_share"><img src="{{ asset('assets/playstore.webp') }}" alt="playstore" class="w-20"></a>
                    </div>
                </div>
            </footer>
        </div>
        <script>
            var date = new Date();
            var simbdate = new Date('2023-08-22');
            var today = date.getDay();
            var time = date.getHours();

            var namaProgram = document.getElementById("namaProgram");
            var waktuTayang = document.getElementById("waktuTayang");

            var simbPoster = document.getElementById("simbPoster");
            var newsPoster = document.getElementById("newsPoster");

            var upcoming = document.getElementById("upcomingtext");
            var listening = document.getElementById("listeningtext");
            var onair = document.getElementById("onair");

            if(today == 6 && date < simbdate || today == 0 && date < simbdate){
                namaProgram.innerHTML = "SIMB";
                waktuTayang.innerHTML = "Monday (17:00-19:00)";
            } else if (today == 6 || today == 0) {
                simbPoster.classList.add('hidden');
                newsPoster.classList.remove('hidden');
                namaProgram.innerHTML = "News Flash";
                waktuTayang.innerHTML = "Monday (10:00-11:00)";
            } else if (today == 1){
                if(time >= 19){
                    waktuTayang.innerHTML = "Tuesday (17:00-19:00)";
                } else if (time >= 17 && time < 19){
                    upcoming.classList.add('hidden');
                    listening.classList.remove('hidden');
                    onair.classList.remove('bg-[#dfdfdf]');
                    onair.classList.add('bg-[#fc1414]');
                } else {
                    waktuTayang.innerHTML = "Monday (17:00-19:00)";
                }
            } else if (today == 2){
                if(time >= 19){
                    waktuTayang.innerHTML = "Wednesday (17:00-19:00)";
                } else if (time >= 17 && time < 19){
                    upcoming.classList.add('hidden');
                    listening.classList.remove('hidden');
                    onair.classList.remove('bg-[#dfdfdf]');
                    onair.classList.add('bg-[#fc1414]');
                } else {
                    waktuTayang.innerHTML = "Tuesday (17:00-19:00)";
                }
            } else if (today == 3){
                if(time >= 19){
                    waktuTayang.innerHTML = "Friday (17:00-19:00)";
                } else if (time >= 17 && time < 19){
                    upcoming.classList.add('hidden');
                    listening.classList.remove('hidden');
                    onair.classList.remove('bg-[#dfdfdf]');
                    onair.classList.add('bg-[#fc1414]');
                } else {
                    waktuTayang.innerHTML = "Wednesday (17:00-19:00)";
                }
            } else if (today == 4){
                waktuTayang.innerHTML = "Friday (17:00-19:00)";
            } else if (today == 5){
                if(time >= 19){
                    simbPoster.classList.add('hidden');
                    newsPoster.classList.remove('hidden');
                    namaProgram.innerHTML = "News Flash";
                    waktuTayang.innerHTML = "Monday (10:00-11:00)";
                } else if (time >= 17 && time < 19){
                    upcoming.classList.add('hidden');
                    listening.classList.remove('hidden');
                    onair.classList.remove('bg-[#dfdfdf]');
                    onair.classList.add('bg-[#fc1414]');
                } else {
                    waktuTayang.innerHTML = "Friday (17:00-19:00)";
                }
            };
        </script>
        <script>
            var button = document.getElementById("buttonplay");
            var button2 = document.getElementById("buttonpause");
            var button3 = document.getElementById("buttonplay2");
            var button4 = document.getElementById("buttonpause2");
            var audio = document.getElementById("player");

            button.addEventListener("click", function(){
            if(audio.paused){
                audio.play();
                button.classList.add('hidden');
                button2.classList.remove('hidden');
                button3.classList.add('hidden');
                button4.classList.remove('hidden');
            } else {
                audio.pause();
                button2.classList.add('hidden');
                button.classList.remove('hidden');
                button4.classList.add('hidden');
                button3.classList.remove('hidden');
            }
            });

            button2.addEventListener("click", function(){
            if(audio.paused){
                audio.play();
                button.classList.add('hidden');
                button2.classList.remove('hidden');
                button3.classList.add('hidden');
                button4.classList.remove('hidden');
            } else {
                audio.pause();
                button2.classList.add('hidden');
                button.classList.remove('hidden');
                button4.classList.add('hidden');
                button3.classList.remove('hidden');
            }
            });

            var button = document.getElementById("buttonplay");
            var button2 = document.getElementById("buttonpause");
            var audio = document.getElementById("player");

            button3.addEventListener("click", function(){
            if(audio.paused){
                audio.play();
                button.classList.add('hidden');
                button2.classList.remove('hidden');
            } else {
                audio.pause();
                button2.classList.add('hidden');
                button.classList.remove('hidden');
            }
            });

            button4.addEventListener("click", function(){
            if(audio.paused){
                audio.play();
                button.classList.add('hidden');
                button2.classList.remove('hidden');
            } else {
                audio.pause();
                button2.classList.add('hidden');
                button.classList.remove('hidden');
            }
            });

        </script>
        <script>window.addEventListener('scroll', function () {
            var header = document.getElementById('audiosticky');
            if (window.scrollY > 2) {
                header.classList.remove('invisible');
            } else {
                header.classList.add('invisible');
            }
        });
        </script>
        <script>
            const allTabsGroup = document.querySelectorAll(".tabs-group");
    
            allTabsGroup.forEach((tabsGroup) => {
                for (let i = 0; i < tabsGroup.children.length; i++) {
                    const tabs = tabsGroup.children[i].querySelectorAll('.tabs');
                    const tabContent = tabsGroup.children[i].querySelectorAll('.tab-content-item');
                    const indicator = tabsGroup.children[i].querySelector('.indicator');
                    const tabsContainer = tabsGroup.children[0];
                    const content = tabsGroup.children[1].querySelectorAll('.tab-content-item');
    
                    if (indicator) {
                        indicator.classList.add('bg-blue-500', 'h-0.5', 'absolute', 'bottom-0', 'left-0', 'transition-all', 'duration-200');
                        indicator.style.width = `${100 / tabs.length}%`;
                    }
    
                    if (tabsContainer) {
                        tabsContainer.classList.add('relative', 'flex', 'flex-row', 'items-center', 'justify-center');
                    }
    
                    if (content) {
                        content.forEach((item) => {
                            item.classList.add('hidden', 'relative');
                        });
                        content[0].classList.remove('hidden');
                    }
    
                    const updateContent = (old, index) => {
                        let oldContent = content[old / 100];
                        let newContent = content[index];
                        if ((old / 100) === index) return;
    
                        if (oldContent && newContent) {
                            oldContent.classList.add('absolute', 'opacity-0', 'transition-all', 'duration-200');
                            newContent.classList.add('absolute', 'opacity-0', 'transition-all', 'duration-200');
    
                            setTimeout(() => {
                                oldContent.classList.remove('absolute', 'opacity-0', 'transition-all', 'duration-200');
                                oldContent.classList.add('hidden');
    
                                newContent.classList.add('!opacity-100');
    
                                newContent.classList.remove('!left-0', '!opacity-100', 'absolute', 'opacity-0', 'transition-all', 'duration-200');
                                newContent.classList.remove('hidden');
                            }, 200);
                        }
                    }
    
                    tabs.forEach((tab, index) => {
                        tab.classList.add('p-2', 'text-center', 'w-full', 'cursor-pointer', 'transition-all', 'duration-200', 'hover:bg-gray-200');
                        tab.addEventListener('click', () => {
                            let old = (String(indicator.style.transform || 'translateX(0%)').split('translateX(')).filter(Boolean).join('').split('%)')[0];
                            indicator.style.transform = `translateX(${index * 100}%)`;
                            updateContent(old, index);
                        })
                    });
    
                }
            });
        </script>
    </body>
</html>
