<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UMN Radio</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://kit.fontawesome.com/667eb529ec.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/axios/dist/axios.min.js') }}"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        footer {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        .footer-logo {
            max-width: 100%;
            margin-bottom: 20px;
        }

        .footer-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .footer-links a {
            color: #fff;
            text-decoration: none;
        }

        @media (max-width: 767px) {
            .footer-logo {
                width: 80%;
                max-width: none;
            }

            .footer-links {
                width: 100%;
            }
        }

        div::-webkit-scrollbar {
            display: none;
        }

        p::-webkit-scrollbar {
            display: none;
        }
    </style>

</head>

<body class="composer">
    <x-navigation></x-navigation>
    </div>
    {{-- BACKGROUND --}}
    <!-- <img class="w-screen z-0" src="{{ asset('images/background.webp') }}"
        alt=""> -->
    <div class="relative">
        <img class="h-screen w-auto md:h-auto md:w-screen z-0 object-cover" src="{{ asset('images/background.webp') }}"
            alt="" />
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 px-4 py-2 w-full">
            <div class="px-4 text-center w-full flex justify-center flex-col relative">
                <p class="font-poppins z-10 text-white font-bold md:text-2xl">107.7 FM</p>
                <h3 class="font-poppins z-10 text-2xl md:text-6xl text-white font-bold w-full">
                    UMN RADIO</h3>
                <div class="mt-4 z-10">
                    <button id="buttonplay"><svg xmlns="http://www.w3.org/2000/svg" height="3em"
                            viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #ffffff
                                }
                            </style>
                            <path
                                d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z" />
                        </svg></button>
                    <button id="buttonpause" class="hidden"><svg xmlns="http://www.w3.org/2000/svg" height="3em"
                            viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #ffffff
                                }
                            </style>
                            <path
                                d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm224-72V328c0 13.3-10.7 24-24 24s-24-10.7-24-24V184c0-13.3 10.7-24 24-24s24 10.7 24 24zm112 0V328c0 13.3-10.7 24-24 24s-24-10.7-24-24V184c0-13.3 10.7-24 24-24s24 10.7 24 24z" />
                        </svg></button>
                </div>
                {{-- <audio id="player">
                    <source src='http://icecast.umn.ac.id:8000/live' />
                </audio> --}}
            </div>
        </div>
    </div>

    <x-audioplayer></x-audioplayer>


    {{-- ON AIR OFF AIR --}}
    <div id="section-1"
        class="w-full bg-gradient-to-b from-transparent from-30% via-[#fdf8e1] via-80% to-transparent to-90% relative">
        <img src="{{ asset('images/simb/bgstar.png') }}" alt=""
            class="absolute top-0 -z-10 h-[70%] md:h-auto object-cover">

        <div class="w-full relative h-fit z-30">
            <img src="{{ asset('assets/paper/1.webp') }}"
                class="absolute object-cover object-top w-full h-24 md:h-36 rotate-180 -z-20" alt="">
            <div
                class="absolute w-full top-0 bg-gradient-to-b from-white via-transparent to-transparent h-12 md:h-36 -z-10">
            </div>
        </div>

        <div class="w-full flex justify-center pt-24 md:pt-36 z-30">
            <div class="opacity-0 duration-500 animate-wiggleInLeft">
                <img src="{{ asset('images/simb/balon1.png') }}" alt="" class="h-40 aspect-auto">
            </div>
            <img src="{{ asset('images/simb/LOGO SIMB 2024.png') }}" alt="" class="w-80 aspect-auto">
            <div class="opacity-0 duration-500 animate-wiggleInRight">
                <img src="{{ asset('images/simb/balon1.png') }}" alt="" class="h-40 aspect-auto">
            </div>
        </div>

        <h1 class="font-poppins text-[#021f3a] text-2xl font-bold w-full text-center hidden">Live
            Broadcast</h1>
        <div class="flex flex-wrap justify-center align-middle bg-gradient-to-b  z-30">
            <div id="sign" class="m-3 md:m-6 text-center md:max-w-[40%]">

                {{-- SCHEDULE SYSTEM PHP --}}

                <?php
                use Carbon\Carbon;
                
                $day = Carbon::now()->dayOfWeek;
                $hour = Carbon::now()->hour + 7;
                // var_dump($day, $hour);
                // $day = 4;
                // $hour = 19;
                
                foreach ($programs as $program) {
                    if ($program->broadcast_day == $day && $hour < $programs->where('broadcast_day', $day)->first()->start_hour) {
                        $text = 'Upcoming Program';
                        $now = $programs->where('broadcast_day', $day)->first();
                        $onair = 'bg-[#dfdfdf]';
                    } elseif ($program->broadcast_day == $day && $hour < 19) {
                        $text = "You're Listening to";
                        if ($hour >= $program->start_hour && $hour < $program->end_hour) {
                            $now = $program;
                        }
                        $onair = 'bg-[#fc1414]';
                    } elseif ($program->broadcast_day == $day) {
                        $text = 'Upcoming Program';
                        $now = $programs->where('broadcast_day', $day + 1)->first();
                        $onair = 'bg-[#dfdfdf]';
                    } elseif ($day >= 4 || $day == 0) {
                        $text = 'Upcoming Program';
                        $now = $programs->where('broadcast_day', 1)->first();
                        $onair = 'bg-[#dfdfdf]';
                    }
                }
                
                if (($day >= 4 && $hour >= 19) || $day == 0) {
                    $text = 'Upcoming Program';
                    $now = $programs->where('broadcast_day', 1)->first();
                    $onair = 'bg-[#dfdfdf]';
                }
                
                // var_dump($text, $now, $onair)
                
                ?>

                <div id="onair" class="border rounded-md {{ $onair }} w-24 p-2 m-auto">
                    <h1 class="font-poppins text-xl text-white"> On Air </h1>
                </div>

                <div class="flex flex-col md:flex-row gap-4 md:gap-16 mt-6 justify-center items-center">
                    <img class="h-54 md:h-[400px] rounded-lg object-cover" src="{{ asset($now->img) }}"
                        alt="ON AIR" />

                    <div class="relative w-[70%] md:w-[40%]">
                        <img src="{{ asset('images/simb/blankparchment.png') }}" alt=""
                            class="absolute -z-10 object-fill w-full h-full">
                        <div class="w-full h-full flex flex-wrap justify-center items-center align-middle p-4">
                            <h3 class="font-badoney w-full text-black">{{ $text }}</h3>
                            <h3 class="font-timelessMemories w-full mt-3 font-bold text-3xl text-[#021f3a]">
                                {{ $now->name }}</h3>
                            <p class="font-badoney w-full mt-3 text-black">{{ $now->desc }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="simb" class="m-3 md:m-6 relative flex flex-wrap justify-center md:max-w-[50%]">
                <div class="w-full h-full flex flex-wrap justify-center">
                    <img src="{{ asset('images/simb/unnouncer1.png') }}" alt=""
                        class="mt-10 mb-4 h-20 object-contain">

                    <div class="w-full flex justify-center flex-wrap">
                        <div class="w-80 relative mb-5 drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] mx-2 text-center">
                            <img class="w-full h-full" src="{{ asset('images/simb/SHAKTY.jpg') }}">
                            <div
                                class="text-white flex justify-center flex-wrap gap-5 absolute bottom-8 start-0 w-full shadow-xl">
                                <a class="hover:text-[#ffe8d1] w-full justify-center text-xs font-serif font-light"
                                    href="https://www.instagram.com/shktysdrjt_" target="_blank">
                                    <p>@shktysdrjt_</p>
                                </a>
                            </div>
                        </div>
                        <div class="w-80 relative mb-5 drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] mx-2 text-center">
                            <img class="w-full h-full" src="{{ asset('images/simb/AUDREY.png') }}">
                            <div
                                class="text-white flex justify-center flex-wrap gap-5 absolute bottom-8 start-0 w-full shadow-xl">
                                <a class="hover:text-[#ffe8d1] w-full justify-center text-xs font-serif font-light"
                                    href="https://www.instagram.com/audreydavinaaa" target="_blank">
                                    <p>@audreydavinaaa</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="w-full flex flex-wrap justify-center items-center align-middle mt-10">

                <img src="{{ asset('images/simb/podcastomb.png') }}" alt=""
                    class="max-w-[90%] w-64 object-contain">
                <div class="flex flex-wrap mx-auto rounded-2xl justify-center h-auto max-w-[90%]">
                    <div class="my-4 p-4 w-[450px] md:max-w-[50%]">
                        <iframe style="border-radius:6px" class="drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)]"
                            src="https://open.spotify.com/embed/episode/3AegQ4CNGrCfXN1xs4sStY?utm_source=generator"
                            width="100%" height="352" frameBorder="0" allowfullscreen=""
                            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                            loading="lazy"></iframe>
                    </div>
                    <div class="ml-4 md:max-w-[50%] flex flex-wrap items-center">
                        <div>
                            <h2 class="text-3xl font-timelessMemories font-bold text-black">Judul Podcast</h2>
                            <p class="text-black font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus
                                est ipsum, efficitur a consectetur in, vulputate a enim. Aliquam bibendum dapibus
                                mi,
                                eget accumsan metus tempus egestas.</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mb-10 mt-10 z-10 w-full relative">
                <img src="{{ asset('images/simb/parchmentblank.png') }}" alt=""
                    class="absolute top-0 w-full h-full rotate-180 -z-10 object-cover md:object-fill">
                <div class="flex flex-wrap justify-center items-center align-middle w-full px-2 py-8 md:px-auto">
                    <h1 class="font-misterHoney text-[#021f3a] text-3xl font-bold text-left md:mx-16 md:px-4">
                        Episodes</h1>
                    <div class="block xl:hidden mx-auto justify-center p-4 w-full">
                        {{-- <iframe style="border-radius:6px" class="drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)]"
                        src="https://open.spotify.com/embed/episode/3AegQ4CNGrCfXN1xs4sStY?utm_source=generator"
                        width="100%" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe> --}}
                        <iframe style="border-radius:6px" class="drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)]"
                            src="https://open.spotify.com/embed/episode/5imzP6eW3OT1qdRKloRHjV?utm_source=generator"
                            width="100%" frameBorder="0" height="152" allowfullscreen=""
                            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                            loading="lazy"></iframe>
                        <iframe style="border-radius:6px" class="drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)]"
                            src="https://open.spotify.com/embed/episode/19BbKE5zB4GMAi6n8FvXt0?utm_source=generator"
                            width="100%" frameBorder="0" height="152" allowfullscreen=""
                            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                            loading="lazy"></iframe>
                        <iframe style="border-radius:6px" class="drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)]"
                            src="https://open.spotify.com/embed/episode/3NFFsFZecbUG8rxfUTIKV8?utm_source=generator"
                            width="100%" frameBorder="0" height="152" allowfullscreen=""
                            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                            loading="lazy"></iframe>
                    </div>

                    <div class="hidden xl:flex mx-auto justify-center px-4 w-full">
                        {{-- <div class="my-4 p-4 w-[450px] mx-auto">
                    <iframe style="border-radius:6px" class="drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)]"
                        src="https://open.spotify.com/embed/episode/3AegQ4CNGrCfXN1xs4sStY?utm_source=generator"
                        width="100%" height="352" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                </div> --}}
                        <div class="my-4 p-4 w-[450px] mx-auto">
                            <iframe style="border-radius:6px" class="drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)]"
                                src="https://open.spotify.com/embed/episode/5imzP6eW3OT1qdRKloRHjV?utm_source=generator"
                                width="100%" height="352" frameBorder="0" allowfullscreen=""
                                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                loading="lazy"></iframe>
                        </div>
                        <div class="my-4 p-4 w-[450px] mx-auto">
                            <iframe style="border-radius:6px" class="drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)]"
                                src="https://open.spotify.com/embed/episode/19BbKE5zB4GMAi6n8FvXt0?utm_source=generator"
                                width="100%" height="352" frameBorder="0" allowfullscreen=""
                                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                loading="lazy"></iframe>
                        </div>
                        <div class="my-4 p-4 w-[450px] mx-auto">
                            <iframe style="border-radius:6px" class="drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)]"
                                src="https://open.spotify.com/embed/episode/3NFFsFZecbUG8rxfUTIKV8?utm_source=generator"
                                width="100%" height="352" frameBorder="0" allowfullscreen=""
                                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div id="bottom" class="w-full flex justify-between align-baseline items-baseline relative">
            <img src="{{ asset('images/simb/parchmentfade.png') }}" alt="" class="w-full absolute bottom-0 rotate-180 -z-0">
        </div> --}}
    </div>

    <div id="schedule" class="md:mt-20 md:pt-10 text-center relative">
        <h1 class="font-poppins text-[#021f3a] text-2xl font-bold text-center mt-8 pt-4">Weekly Schedule</h1>
        <div class="border-t-2 border-[#021f3a] w-56 mx-auto mt-4"></div>
        <div class="tabs-group pb-12">
            <div class="tabs-container flex justify-center items-center">
                <div class="tabs flex justify-center max-w-[20%]">
                    <p class="font-semibold text-xs md:text-lg font-poppins text-center text-[#021f3a]">Monday</p>
                </div>
                <div class="tabs flex justify-center max-w-[20%]">
                    <p class="font-semibold text-xs md:text-lg font-poppins text-center text-[#021f3a]">Tuesday</p>
                </div>
                <div class="tabs flex justify-center max-w-[20%]">
                    <p class="font-semibold text-xs md:text-lg font-poppins text-center text-[#021f3a]">Wednesday
                    </p>
                </div>
                <div class="tabs flex justify-center max-w-[20%]">
                    <p class="font-semibold text-xs md:text-lg font-poppins text-center text-[#021f3a]">Thursday</p>
                </div>
                <div class="tabs flex justify-center max-w-[20%]">
                    <p class="font-semibold text-xs md:text-lg font-poppins text-center text-[#021f3a]">Friday</p>
                </div>

                <div class="indicator"></div>
            </div>

            <div class="tab-content">
                <div
                    class="flex justify-around tab-content-item text-center flex-wrap md:flex-nowrap p-2 gap-4 md:gap-0">
                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/NEWSFLASH.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">NEWS FLASH
                                </div>
                                <div class="md:text-xl font-poppins text-center">12.00 -
                                    13.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Takut
                                    ketinggalan berita terkini?🤔
                                    Di sini, kamu bisa dapetin berita paling up to date dengan NO BOSENIN!🤩

                                    Mulai dari berita metropolitan, olahraga, sampai entertainment yang dijamin FUN!🪅
                                    Mengudara setiap Senin, Rabu, dan Jumat hanya di 107.7 FM atau streaming di
                                    radio.umn.ac.id!✨</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/NEWSFLASH_BANNER.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/DICE.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">DICE
                                </div>
                                <div class="md:text-xl font-poppins text-center">13.00 -
                                    14.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Yakin kalo lo
                                    anak kampus banget?! Atau masih banyak yang bingung anak kampus biasanya ngapain?🤔

                                    Tenang! DICE bakal hadir buat nemenin kehidupan kampusnya Ultimafriends! Lo bakal
                                    happy deh sama obrolan yang pastinya relate banget sama anak kampus zaman
                                    sekarang😱🫵🏻

                                    Nah, penasaran nggak, sih?🤪 Makanya stay tuned terus setiap hari Senin sampai Jumat
                                    hanya di 107.7 FM atau radio.umn.ac.id bareng U-nnouncers kesayangan lo! Hayo, siapa
                                    aja ya mereka?🤭

                                    DICE, Roll the Dice, Spill the Spice!🎲 </p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/DICE_BANNER.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/SERSAN.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">SERSAN
                                </div>
                                <div class="md:text-xl font-poppins text-center">14.00 -
                                    17.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Aloha,
                                    Ultimafriends!🌆

                                    “Foolish one, stop ngerasa kalau hari Senin itu nyebelin!”

                                    Betul banget! Kalian harus stop ngerasa Senin itu nyebelin karena Pei dan Rara bakal
                                    nemenin Ultimafriends di SERSAN setiap jam 2-5 sore!🙌🏼

                                    Pokoknya, kita bakal usut tuntas kehidupan Mr. Lucky yang berbeda setiap minggunya
                                    cuma di radio.umn.ac.id atau 107.7 FM!👀

                                    Jangan lupa buat stay tuned terus di SERSAN because the good things are coming!✨
                                </p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/SERSAN_BANNER.webp') }}" />
                    </div>
                </div>

                <div
                    class="flex justify-around tab-content-item text-center flex-wrap md:flex-nowrap p-2 gap-4 md:gap-0">
                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/UH.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">UMN HIGHLIGHTS
                                </div>
                                <div class="md:text-xl font-poppins text-center">12.00 -
                                    13.00
                                </div>
                                {{-- <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit. Voluptatibus, ipsam officiis excepturi inventore distinctio deserunt
                                    voluptatem tempora minima beatae commodi maxime autem aliquam consequatur nihil
                                    blanditiis, neque facilis laboriosam suscipit!</p> --}}
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/UH.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/DICE.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">DICE
                                </div>
                                <div class="md:text-xl font-poppins text-center">13.00 -
                                    14.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Yakin kalo lo
                                    anak kampus banget?! Atau masih banyak yang bingung anak kampus biasanya ngapain?🤔

                                    Tenang! DICE bakal hadir buat nemenin kehidupan kampusnya Ultimafriends! Lo bakal
                                    happy deh sama obrolan yang pastinya relate banget sama anak kampus zaman
                                    sekarang😱🫵🏻

                                    Nah, penasaran nggak, sih?🤪 Makanya stay tuned terus setiap hari Senin sampai Jumat
                                    hanya di 107.7 FM atau radio.umn.ac.id bareng U-nnouncers kesayangan lo! Hayo, siapa
                                    aja ya mereka?🤭

                                    DICE, Roll the Dice, Spill the Spice!🎲</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/DICE_BANNER.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/BILCIN.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">BILCIN
                                </div>
                                <div class="md:text-xl font-poppins text-center">14.00 -
                                    17.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Hey,
                                    Ultimafriends! Main tebak-tebakan, yuk!🤫

                                    Kalo permen rasanya apa?👀🍬
                                    Selain manis, pasti ada juga kan rasa lainnya?✨

                                    Nah, sama kayak cinta! Selain bentuknya yang beragam, rasa yang dikasih juga
                                    bermacam-macam, tapi semua pengalamannya pasti bisa bikin hidup lo jadi lebih
                                    berwarna!🌈💫

                                    Masih bingung maksudnya gimana?🤔 Kalo gitu langsung aja dengerin Bilcin di 107.7 FM
                                    atau di radio.umn.ac.id bareng Delgo dan Abel yang bakal nemenin lo menjelajahi
                                    berbagai rasa cinta setiap hari Selasa jam 2-5 sore!😚

                                    Bilcin, giving you every bit of love’s taste💕</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/BILCIN_BANNER.webp') }}" />
                    </div>
                </div>

                <div
                    class="flex justify-around tab-content-item text-center flex-wrap md:flex-nowrap p-2 gap-4 md:gap-0">
                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/SODA.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">SODA
                                </div>
                                <div class="md:text-xl font-poppins text-center">12.00 -
                                    15.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Woy,
                                    Ultimafriends! Pada cakep-cakep amat sih, padahal baru mau pantun🤪

                                    Beli permen yang jual si Marwan, CAKEP!
                                    Si Marwan punya patung kuda!
                                    Ultimafriends yang syantik dan rupawan,
                                    Yuk, mari dengerin SODA!🔥

                                    Ahay, dari pantunnya aja udah ciamik, apalagi nanti pembahasan di dalamnya🤭👀
                                    Makanya, pantengin terus SODA tiap hari Rabu jam 12-3 siang bareng duet HARLA
                                    (Hanif-Carla) yang udah pasti asik, tapi nggak asik sendiri, dong!🤙🏻

                                    Nggak lupa, mereka juga bakal ditemenin bareng para Nona yang pastinya uhuy banget!
                                    Udah deh, langsung aja gas ke 107.7 FM atau radio.umn.ac.id, yak!😎

                                    SODA, vibe up your day with us!🍻</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/SODA_BANNER.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/NEWSFLASH.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">NEWS FLASH
                                </div>
                                <div class="md:text-xl font-poppins text-center">15.00 -
                                    16.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Takut
                                    ketinggalan berita terkini?🤔
                                    Di sini, kamu bisa dapetin berita paling up to date dengan NO BOSENIN!🤩

                                    Mulai dari berita metropolitan, olahraga, sampai entertainment yang dijamin FUN!🪅
                                    Mengudara setiap Senin, Rabu, dan Jumat hanya di 107.7 FM atau streaming di
                                    radio.umn.ac.id!✨</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/NEWSFLASH_BANNER.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/DICE.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">DICE
                                </div>
                                <div class="md:text-xl font-poppins text-center">16.00 -
                                    17.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Yakin kalo lo
                                    anak kampus banget?! Atau masih banyak yang bingung anak kampus biasanya ngapain?🤔

                                    Tenang! DICE bakal hadir buat nemenin kehidupan kampusnya Ultimafriends! Lo bakal
                                    happy deh sama obrolan yang pastinya relate banget sama anak kampus zaman
                                    sekarang😱🫵🏻

                                    Nah, penasaran nggak, sih?🤪 Makanya stay tuned terus setiap hari Senin sampai Jumat
                                    hanya di 107.7 FM atau radio.umn.ac.id bareng U-nnouncers kesayangan lo! Hayo, siapa
                                    aja ya mereka?🤭

                                    DICE, Roll the Dice, Spill the Spice!🎲</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/DICE_BANNER.webp') }}" />
                    </div>
                </div>

                <div
                    class="flex justify-around tab-content-item text-center flex-wrap md:flex-nowrap p-2 gap-4 md:gap-0">
                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/UH.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">UMN HIGHLIGHTS
                                </div>
                                <div class="md:text-xl font-poppins text-center">12.00 -
                                    13.00
                                </div>
                                {{-- <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit. Voluptatibus, ipsam officiis excepturi inventore distinctio deserunt
                                    voluptatem tempora minima beatae commodi maxime autem aliquam consequatur nihil
                                    blanditiis, neque facilis laboriosam suscipit!</p> --}}
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/UH.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/DICE.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">DICE
                                </div>
                                <div class="md:text-xl font-poppins text-center">13.00 -
                                    14.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Yakin kalo lo
                                    anak kampus banget?! Atau masih banyak yang bingung anak kampus biasanya ngapain?🤔

                                    Tenang! DICE bakal hadir buat nemenin kehidupan kampusnya Ultimafriends! Lo bakal
                                    happy deh sama obrolan yang pastinya relate banget sama anak kampus zaman
                                    sekarang😱🫵🏻

                                    Nah, penasaran nggak, sih?🤪 Makanya stay tuned terus setiap hari Senin sampai Jumat
                                    hanya di 107.7 FM atau radio.umn.ac.id bareng U-nnouncers kesayangan lo! Hayo, siapa
                                    aja ya mereka?🤭

                                    DICE, Roll the Dice, Spill the Spice!🎲</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/DICE_BANNER.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/MUSIKALITAS.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">MUSIKALITAS
                                </div>
                                <div class="md:text-xl font-poppins text-center">14.00 -
                                    17.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Yakin masih
                                    muterin lagu yang itu-itu aja? Ah, ini dia sasarannya!

                                    Penasaran nggak sih sama perkembangan musik Indonesia? Atau lo nggak tau harus cari
                                    akarnya dari mana?😅

                                    Makanya sini-sini Ultimafriends! Daripada kebingungan sendiri, mending dengerin
                                    keseruan duo cewek cantik ini yaitu Sis Bella dan Sis Nata!😚😍

                                    Mengudara di 107.7 FM atau streaming di radio.umn.ac.id setiap hari Kamis jam 2-5
                                    siang, wajib hukumnya buat dengerin Musikalitas!🎷

                                    😱Makin tau
                                    🧐Banyak tau
                                    😬Paling tau

                                    Musik Indonesia setiap minggunya, karena musik Indonesia nggak ada abisnya!🤪</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/MUSIKALITAS_BANNER.webp') }}" />
                    </div>
                </div>

                <div
                    class="flex justify-around tab-content-item text-center flex-wrap md:flex-nowrap p-2 gap-4 md:gap-0">

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/CHART.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">SUPERB CHARTTOPPERS
                                </div>
                                <div class="md:text-xl font-poppins text-center">12.00 -
                                    15.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Ay-yo what’s
                                    up, Ultimafriends‼️ Wanna know about hot songs, news, and new albums from your
                                    favorite artists?🤩 SUPERB CHARTTOPPERS is back only for Ultimafriends🫵🏻

                                    Tune in to SUPERB CHARTTOPPERS with Jocelyn every Friday from 12-3 PM only on 107.7
                                    FM or radio.umn.ac.id 📻

                                    SUPERB CHARTTOPPERS,
                                    Epic Hits Music for Your Friday!🎶🔥</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/CHART_BANNER.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/NEWSFLASH.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">NEWS FLASH
                                </div>
                                <div class="md:text-xl font-poppins text-center">15.00 -
                                    16.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Takut
                                    ketinggalan berita terkini?🤔
                                    Di sini, kamu bisa dapetin berita paling up to date dengan NO BOSENIN!🤩

                                    Mulai dari berita metropolitan, olahraga, sampai entertainment yang dijamin FUN!🪅
                                    Mengudara setiap Senin, Rabu, dan Jumat hanya di 107.7 FM atau streaming di
                                    radio.umn.ac.id!✨</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/NEWSFLASH_BANNER.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/DICE.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">DICE
                                </div>
                                <div class="md:text-xl font-poppins text-center">16.00 -
                                    17.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Yakin kalo lo
                                    anak kampus banget?! Atau masih banyak yang bingung anak kampus biasanya ngapain?🤔

                                    Tenang! DICE bakal hadir buat nemenin kehidupan kampusnya Ultimafriends! Lo bakal
                                    happy deh sama obrolan yang pastinya relate banget sama anak kampus zaman
                                    sekarang😱🫵🏻

                                    Nah, penasaran nggak, sih?🤪 Makanya stay tuned terus setiap hari Senin sampai Jumat
                                    hanya di 107.7 FM atau radio.umn.ac.id bareng U-nnouncers kesayangan lo! Hayo, siapa
                                    aja ya mereka?🤭

                                    DICE, Roll the Dice, Spill the Spice!🎲</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/DICE_BANNER.webp') }}" />
                    </div>
                </div>
            </div>
        </div>

        <img src="{{ asset('assets/paper/10.webp') }}"
            class="absolute h-[160%] md:h-[140%] object-cover bottom-0 -z-10" alt="">
    </div>

    <div class="w-full my-10 lg:px-32">
        <h1 class="font-poppins text-2xl font-bold text-center my-2 mb-6 text-[#021f3a]">U-NNOUNCERS</h1>
        <div class="swiper mySwiper my-5 flex justify-center">
            <div class="swiper-wrapper">
                <div class="swiper-slide font-poppins text-center">
                    <div
                        class="w-80 bg-[#fff6e7] relative pt-5 px-3 mb-10 h-[475px] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] mx-2">
                        <img class="w-full h-2/3 object-cover" src="{{ asset('images/announcers/helena.webp') }}">
                        <div class="pt-2 gap-6 relative h-1/3 align-top items-start">
                            <h1 class=" font-love text-3xl text-black font-semibold mb-1">Helena Haryadi</h1>
                            <h1 class="text-xl font-hellomickeys text-black ">"Aku suka semua tentang langit"</h1>
                        </div>
                        <div class="text-black flex justify-center flex-wrap gap-5 absolute bottom-2 start-0 w-full">
                            <a class="hover:text-biru" href="https://www.instagram.com/peipeihelenaa"
                                target="_blank">
                                <i class="fa-brands fa-lg fa-instagram"></i>
                            </a>
                            <a class="hover:text-biru" href="https://www.tiktok.com/@luvnalena__" target="_blank">
                                <i class="fa-brands fa-lg fa-tiktok"></i>
                            </a>
                            <a class="hover:text-biru" href="https://open.spotify.com/user/peipeihelenaa"
                                target="_blank">
                                <i class="fa-brands fa-lg fa-spotify"></i>
                            </a>
                            <a class="hover:text-biru" href="https://x.com/luvnalena__" target="_blank">
                                <i class="fa-brands fa-lg fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide font-poppins text-center">
                    <div
                        class="w-80 bg-[#fff6e7] relative pt-5 px-3 mb-10 h-[475px] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] mx-2">
                        <img class="w-full h-2/3 object-cover" src="{{ asset('images/announcers/khaira.webp') }}">
                        <div class="pt-2 gap-6 relative h-1/3 align-top items-start">
                            <h1 class="  font-love text-3xl text-black font-semibold mb-1">Khaira Khansa</h1>
                            <h1 class="text-xl font-hellomickeys text-black ">"alone or not, you gotta walk forward"
                            </h1>
                        </div>
                        <div class="text-black flex justify-center flex-wrap gap-5 absolute bottom-2 start-0 w-full">
                            <a class="hover:text-biru" href="https://www.instagram.com/khairarnld" target="_blank">
                                <i class="fa-brands fa-lg fa-instagram"></i>
                            </a>
                            <a class="hover:text-biru" href="https://www.tiktok.com/@keyyrras" target="_blank">
                                <i class="fa-brands fa-lg fa-tiktok"></i>
                            </a>
                            <a class="hover:text-biru" href="https://open.spotify.com/user/khairakhansa"
                                target="_blank">
                                <i class="fa-brands fa-lg fa-spotify"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide font-poppins text-center">
                    <div
                        class="w-80 bg-[#fff6e7] relative pt-5 px-3 mb-10 h-[475px] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] mx-2">
                        <img class="w-full h-2/3 object-cover"
                            src="{{ asset('images/announcers/christabell.webp') }}">
                        <div class="pt-2 gap-6 relative h-1/3 align-top items-start">
                            <h1 class=" font-love text-3xl text-black font-semibold mb-1">Christabell Chalin</h1>
                            <h1 class="text-xl font-hellomickeys text-black">"Never be so kind, you forget to be
                                clever"
                            </h1>

                        </div>
                        <div class="text-black flex justify-center flex-wrap gap-5 absolute bottom-2 start-0 w-full">
                            <a class="hover:text-biru" href="https://www.instagram.com/christabellchalin"
                                target="_blank">
                                <i class="fa-brands fa-lg fa-instagram"></i>
                            </a>
                            <a class="hover:text-biru"
                                href="https://open.spotify.com/user/31npp2u7iinwrhbajoyd37ofzmwi" target="_blank">
                                <i class="fa-brands fa-lg fa-spotify"></i>
                            </a>
                            <a class="hover:text-biru" href="https://medium.com/@multatulou" target="_blank">
                                <i class="fa-brands fa-lg fa-medium"></i>
                            </a>
                            <a class="hover:text-biru" href="https://pin.it/5kKQOii7A" target="_blank">
                                <i class="fa-brands fa-lg fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide font-poppins text-center">
                    <div
                        class="w-80 bg-[#fff6e7] relative pt-5 px-3 mb-10 h-[475px] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] mx-2">
                        <img class="w-full h-2/3 object-cover" src="{{ asset('images/announcers/delbert.webp') }}">
                        <div class="pt-2 gap-6 relative h-1/3 align-top items-start">
                            <h1 class=" font-love text-3xl text-black font-semibold mb-1">Delbert Go</h1>
                            <h1 class="text-xl font-hellomickeys text-black">"nikmati setiap halaman."</h1>
                        </div>
                        <div class="text-black flex justify-center flex-wrap gap-5 absolute bottom-2 start-0 w-full">
                            <a class="hover:text-biru" href="https://www.instagram.com/delbertgo" target="_blank">
                                <i class="fa-brands fa-lg fa-instagram"></i>
                            </a>
                            <a class="hover:text-biru" href="https://www.tiktok.com/@delbertgo7" target="_blank">
                                <i class="fa-brands fa-lg fa-tiktok"></i>
                            </a>
                            <a class="hover:text-biru" href="https://youtube.com/@delbertgo484" target="_blank">
                                <i class="fa-brands fa-lg fa-youtube"></i>
                            </a>
                            <a class="hover:text-biru"
                                href="https://open.spotify.com/user/313iyybteuv66cu7zhywbzkyi5je" target="_blank">
                                <i class="fa-brands fa-lg fa-spotify"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide font-poppins text-center">
                    <div
                        class="w-80 bg-[#fff6e7] relative pt-5 px-3 mb-10 h-[475px] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] mx-2">
                        <img class="w-full h-2/3 object-cover" src="{{ asset('images/announcers/carla.webp') }}">
                        <div class="pt-2 gap-6 relative h-1/3 align-top items-start">
                            <h1 class=" font-love text-3xl text-black font-semibold mb-1">Carla Kaditha</h1>
                            <h1 class="text-xl font-hellomickeys text-black ">“It is never too late, I'm halfway there”
                            </h1>
                        </div>
                        <div class="text-black flex justify-center flex-wrap gap-5 absolute bottom-2 start-0 w-full">
                            <a class="hover:text-biru" href="https://www.instagram.com/kadithacarla_"
                                target="_blank">
                                <i class="fa-brands fa-lg fa-instagram"></i>
                            </a>
                            <a class="hover:text-biru" href="https://www.linkedin.com/in/carla-kaditha-71a445255"
                                target="_blank">
                                <i class="fa-brands fa-lg fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide font-poppins text-center">
                    <div
                        class="w-80 bg-[#fff6e7] relative pt-5 px-3 mb-10 h-[475px] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] mx-2">
                        <img class="w-full h-2/3 object-cover" src="{{ asset('images/announcers/hanif.webp') }}">
                        <div class="pt-2 gap-6 relative h-1/3 align-top items-start">
                            <h1 class="font-love text-3xl text-black font-semibold mb-1">M Hanief Alif</h1>
                            <h1 class="text-lg font-hellomickeys text-black">"2 3 AYAM BERLARI, ADA HANIF JANGAN LARI "
                            </h1>
                        </div>
                        <div class="text-black flex justify-center flex-wrap gap-5 absolute bottom-2 start-0 w-full">
                            <a class="hover:text-biru" href="https://www.instagram.com/hanifffalif" target="_blank">
                                <i class="fa-brands fa-lg fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide font-poppins text-center">
                    <div
                        class="w-80 bg-[#fff6e7] relative pt-5 px-3 mb-10 h-[475px] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] mx-2">
                        <img class="w-full h-2/3 object-cover" src="{{ asset('images/announcers/bella.webp') }}">
                        <div class="pt-2 gap-6 relative h-1/3 align-top items-start">
                            <h1 class="font-love text-3xl text-black font-semibold mb-1">Bella Felisha</h1>
                            <h1 class="text-xl font-hellomickeys text-black">"Aku sebenernya dua orang."</h1>

                        </div>
                        <div class="text-black flex justify-center flex-wrap gap-5 absolute bottom-2 start-0 w-full">
                            <a class="hover:text-biru" href="https://www.instagram.com/bellafelisha" target="_blank">
                                <i class="fa-brands fa-lg fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide font-poppins text-center">
                    <div
                        class="w-80 bg-[#fff6e7] relative pt-5 px-3 mb-10 h-[475px] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] mx-2">
                        <img class="w-full h-2/3 object-cover" src="{{ asset('images/announcers/serenata.webp') }}">
                        <div class="pt-2 gap-6 relative h-1/3 align-top items-start">
                            <h1 class="font-love text-3xl text-black font-semibold mb-1">Serenata Silvestra</h1>
                            <h1 class="text-xl font-hellomickeys text-black">"BISAAAA, HARUS BISAAAA HARUS BISAAAAA
                                -Desta"</h1>

                        </div>
                        <div class="text-black flex justify-center flex-wrap gap-5 absolute bottom-2 start-0 w-full">
                            <a class="hover:text-biru" href="https://www.instagram.com/serenata_05" target="_blank">
                                <i class="fa-brands fa-lg fa-instagram"></i>
                            </a>
                            <a class="hover:text-biru" href="https://www.tiktok.com/@serenatasylvestra"
                                target="_blank">
                                <i class="fa-brands fa-lg fa-tiktok"></i>
                            </a>
                            <a class="hover:text-biru"
                                href="https://open.spotify.com/user/31vu75imzk747zzbykmpnsq7jvcy" target="_blank">
                                <i class="fa-brands fa-lg fa-spotify"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide font-poppins text-center">
                    <div
                        class="w-80 bg-[#fff6e7] relative pt-5 px-3 mb-10 h-[475px] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] mx-2">
                        <img class="w-full h-2/3 object-cover" src="{{ asset('images/announcers/joce.webp') }}">
                        <div class="pt-2 gap-6 relative h-1/3 align-top items-start">
                            <h1 class="font-love text-3xl text-black font-semibold mb-1">Jocelyn Ancylla</h1>
                            <h1 class="text-xl font-hellomickeys text-black">"blubup blubup blubup"</h1>

                        </div>
                        <div class="text-black flex justify-center flex-wrap gap-5 absolute bottom-2 start-0 w-full">
                            <a class="hover:text-biru" href="https://www.instagram.com/ancyllaas" target="_blank">
                                <i class="fa-brands fa-lg fa-instagram"></i>
                            </a>
                            <a class="hover:text-biru" href="https://www.tiktok.com/@ancyrawr" target="_blank">
                                <i class="fa-brands fa-lg fa-tiktok"></i>
                            </a>
                            <a class="hover:text-biru" href="https://open.spotify.com/user/qd51npytlhuoreaalj9svrm5r"
                                target="_blank">
                                <i class="fa-brands fa-lg fa-spotify"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide font-poppins text-center" style="width: 5px">
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>


    {{-- ARTICLE --}}
    <div class="font-poppins text-black mb-6 bg-[#103069] shadow-inner relative @if ($posts->count() > 0) block
        @else
        hidden @endif"
        style="box-shadow: inset 4px 4px 4px 0 rgb(0 0 0 / 0.05);">
        <img src="{{ asset('assets/others/papertexture.webp') }}" alt=""
            class="absolute w-full h-full opacity-20 z-0">
        <img src="{{ asset('assets/others/notebook.webp') }}" alt=""
            class="absolute top-12 w-64 md:w-auto md:h-full md:end-24 drop-shadow-[0_10px_10px_rgba(0,0,0,0.5)] rotate-12 md:-rotate-12 brightness-75">
        <img src="{{ asset('assets/others/penungu.webp') }}" alt=""
            class="absolute top-12 w-32 md:w-[20%] drop-shadow-[0_10px_10px_rgba(0,0,0,0.5)] brightness-75">
        <div class="w-full h-full p-4 md:p-8 relative">
            <h1 class="font-poppins text-white text-2xl font-bold text-center my-2 mb-6 z-40">Latest Posts</h1>
            <div class="flex flex-wrap gap-8 justify-center">

                {{-- <a class="no-underline" href="/article/kepada-yth-maba-apa-kabar-kali-ini">
                <div class="rounded overflow-hidden shadow-lg no-underline w-[300px] h-full relative pb-12">
                    <img class="w-full h-36 md:h-52 object-cover"
                        src="{{ asset('images/artikel2/FEATURED IMAGE MABA.webp') }}" alt="Featured Image">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-[#021f3a]">Kepada Yth. Maba: Apa Kabar Kali Ini?</div>
                        <p class="text-gray-700 text-base sm:text-xs">
                            “Buka lagi visimu, kau tahu mana urutan satu”<br>
                            Sepenggal lirik dari lagu “33x”. . .
                        </p>
                    </div>
                    <div class="px-3 pt-4 absolute bottom-1">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Lapor
                            OMB</span>
                    </div>
                </div>
            </a>

            <a class="no-underline" href="/article/obral-etalase-mimpi">
                <div class="rounded overflow-hidden shadow-lg no-underline w-[300px] h-full relative pb-12">
                    <img class="w-full h-36 md:h-52 object-cover"
                        src="{{ asset('images/artikel1/FEATURED IMAGE.webp') }}" alt="Featured Image">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-[#021f3a]">Obral Etalase Mimpi</div>
                        <p class="text-gray-700 text-base sm:text-xs">
                            “Dibeli! Dibeli! Diobral <i>nih</i> mimpinya!” <br>
                            Hah? Dibeli? Diobral? Mimpinya? Apa <i>sih</i> maksudnya? <i>Kinda little bit confusing,</i>
                            ya
                            Ultimafriends?. . .
                        </p>
                    </div>
                    <div class="px-3 pt-4 absolute bottom-1">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Lapor
                            OMB</span>
                    </div>
                </div>
            </a> --}}
                @php
                    $count = 0;
                @endphp

                @foreach ($posts as $post)
                    @if ($count == 0)
                        <a class="no-underline" href="/article/{{ $post->slug }}">
                            <div
                                class="rounded overflow-hidden drop-shadow-[0_10px_10px_rgba(0,0,0,0.5)] no-underline w-[300px] md:w-[600px] h-full relative pb-12 bg-white hover:scale-105 ease-in-out duration-100 md:flex md:flex-row md:p-4">
                                <img class="w-full h-36 md:h-full md:w-1/2 object-cover rounded"
                                    src="{{ asset('storage/' . $post->cover_photo) }}" alt="Featured Image">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl md:text-3xl mb-2 text-[#021f3a]">{{ $post->title }}
                                    </div>
                                    <p class="text-gray-700 text-xs md:text-base">
                                        {{ $post->excerpt }}
                                    </p>
                                </div>
                                <div class="px-3 pt-4 absolute bottom-1 md:end-2">
                                    <span
                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $post->category }}</span>
                                    <span>
                                        {{ $post->published }}
                                    </span>
                                </div>
                            </div>
                        </a>
                    @else
                        <a class="no-underline" href="/article/{{ $post->slug }}">
                            <div
                                class="rounded overflow-hidden drop-shadow-[0_10px_10px_rgba(0,0,0,0.5)] no-underline w-[300px] h-full relative pb-12 bg-white hover:scale-105 ease-in-out duration-100">
                                <img class="w-full h-36 md:h-52 object-cover"
                                    src="{{ asset('storage/' . $post->cover_photo) }}" alt="Featured Image">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2 text-[#021f3a]">{{ $post->title }}</div>
                                    <p class="text-gray-700 md:text-base text-xs">
                                        {{ $post->excerpt }}
                                    </p>
                                </div>
                                <div class="px-3 pt-4 absolute bottom-1">
                                    <span
                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $post->category }}</span>
                                    <span>
                                        {{ $post->published }}
                                    </span>
                                </div>
                            </div>
                        </a>
                    @endif
                    @php
                        $count++;
                    @endphp
                @endforeach

            </div>
            <div class="text-center flex flex-row justify-center items-center my-6 z-40">
                <a class="no-underline" href="/articles">
                    <button
                        class="bg-white hover:bg-[#021f3a] text-[#021f3a] font-semibold hover:text-white py-2 px-4 border border-[#021f3a] hover:border-transparent rounded ease-in-out duration-100">
                        Read More
                    </button>
                </a>
            </div>
        </div>
    </div>

    {{-- Charts --}}
    <div id="section-4" class="md:mt-12 w-full my-12 @if ($charts->count() < 1) hidden @endif">
        @if ($charts->count() > 0)
            <h1 class="font-poppins text-[#021f3a] text-2xl font-bold w-full text-center">Charts</h1>
        @endif
        <div class="flex justify-center align-middle w-full my-2 flex-wrap gap-5">
            @php
                $count = 1;
            @endphp

            @foreach ($charts as $chart)
                @if ($chart->status == 'PUBLISHED')
                    {{-- CHART CARD --}}
                    <div
                        class="w-[90vw] lg:w-[35vw] lg:min-w-[300px] flex flex-col justify-center align-middle items-center rounded-lg bg-white drop-shadow-lg h-fit row-start-{{ $count }} row-end-{{ $count + 1 }}">
                        @php
                            $count++;
                        @endphp
                        {{-- @if ($count++ % 2 == 0) md:mb-52
                        @else md:mt-52 @endif --}}
                        <div class="w-full h-32 relative rounded-t-lg flex justify-center align-middle">
                            <img class="absolute w-full h-full object-cover rounded-t-lg -z-0 brightness-50"
                                src="{{ asset('storage/' . $chart->cover_image) }}" alt="">
                            <div class="flex flex-row gap-2 justify-center align-middle items-center z-40 w-[75%]">
                                <p id="name_preview"
                                    class="text-2xl md:text-3xl text-white font-poppins font-bold text-center w-fit">
                                    {{ strtoupper($chart->chart_name) }}
                                </p>
                                <a href="{{ $chart->link }}" target="_blank"
                                    class="hover:cursor-pointer hover:scale-[120%]">
                                    <i class="fa-brands fa-spotify fa-2xl" style="color:#1DB954;"></i>
                                </a>
                            </div>
                        </div>
                        {{-- SONG CONTAINER --}}
                        <div
                            class="song-container flex flex-col gap-2 p-2 md:p-4 w-full overflow-scroll max-h-56 md:max-h-fit">
                            {{-- SONG CARD --}}
                            @php
                                $song_count = 1;
                            @endphp
                            @foreach ($chart->songs as $song)
                                <div
                                    class="song w-full flex flex-row items-center align-middle bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] h-10 md:h-16 rounded md:rounded-lg">
                                    <div
                                        class="bg-[#021f3a] p-3 rounded-l md:rounded-l-lg h-full aspect-square flex justify-center align-middle items-center">
                                        <p class="text-lg font-poppins text-white">
                                            #{{ $song_count++ }}</p>
                                    </div>
                                    <img class="h-full aspect-square rounded-r md:rounded-r-lg object-cover"
                                        src="{{ asset('storage/' . $song->cover_image) }}" alt="">
                                    <div
                                        class="h-full flex flex-col lg:justify-center flex-grow overflow-scroll md:overflow-auto text-ellipsis ml-5">
                                        <p class="text-base md:text-2xl text-black font-poppins font-bold">
                                            {{ strtoupper($song->title) }}
                                        </p>
                                        <p class="text-xs md:text-md text-gray-800 font-poppins">
                                            {{ $song->artists }}</p>
                                    </div>
                                </div>
                            @endforeach
                            {{-- @foreach ($junctions as $junction)
                                @foreach ($songs as $song)
                                    @if ($song->id == $junction->song_id && $chart->id == $junction->chart_id)
                                        <div
                                            class="song w-full flex flex-row items-center align-middle bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] h-24 md:h-40 p-4 rounded-lg gap-2 md:gap-6 relative">
                                            <div
                                                class="absolute top-0 start-0 bg-[#021f3a] p-3 rounded-tl-lg rounded-br-[30px] drop-shadow-[0_3px_3px_rgba(255,255,255,0.4)]">
                                                <p class="text-sm md:text-md font-poppins text-white">
                                                    #{{ $song_count++ }}</p>
                                            </div>
                                            <img class="h-full aspect-square rounded-lg object-cover"
                                                src="{{ asset('storage/' . $song->cover_image) }}" alt="">
                                            <div
                                                class="h-full flex flex-col lg:justify-center flex-grow overflow-scroll md:overflow-auto text-ellipsis">
                                                <p class="text-lg md:text-2xl text-black font-poppins font-bold">
                                                    {{ strtoupper($song->title) }}
                                                </p>
                                                <p class="text-sm md:text-md text-gray-800 font-poppins">
                                                    {{ $song->artists }}</p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach --}}
                        </div>
                    </div>
                @endif
            @endforeach
            <div class="text-center flex flex-row justify-center items-center my-6 z-40">
                <a class="no-underline" href="/charts">
                    <button
                        class="bg-white hover:bg-[#021f3a] text-[#021f3a] font-semibold hover:text-white py-2 px-4 border border-[#021f3a] hover:border-transparent rounded ease-in-out duration-100">
                        Show More
                    </button>
                </a>
            </div>
        </div>
    </div>

    {{-- Section 4 --}}
    <div id="section-5" class="md:mt-12 w-full my-12 @if ($partnerships->count() < 1) hidden @endif">
        @if ($partnerships->count() > 0)
            <h1 class="font-poppins text-[#021f3a] text-2xl font-bold w-full text-center">Partnerships</h1>
        @endif
        <div class="flex justify-center align-middle w-full my-2 flex-wrap">
            @foreach ($partnerships as $post)
                <img src="{{ $post->image }}" alt="{{ $post->image }}" class="h-36 md:h-80 my-4">
            @endforeach
        </div>
    </div>

    {{-- Segments --}}
    <div id="segments" class="md:mt-12 w-full my-12">
        @foreach ($segments as $segment)
            <h1 class="font-poppins text-[#021f3a] text-2xl font-bold text-center my-2 mb-6">{{ $segment->title }}
            </h1>
            <div class="w-full">{!! $segment->content !!}</div>
        @endforeach
    </div>

    {{-- URD section --}}
    <div class="mb-10">
        <h1 class="font-poppins text-[#021f3a] text-2xl font-bold text-center my-2 mb-6">UMN RADIO DRAMA</h1>
        <div
            class="block xl:hidden mx-auto bg-gradient-to-br from-[#87cfe8] to-[#875fd3] rounded-2xl shadow-lg justify-center p-2 max-w-[90%]">
            <div
                class="block xl:hidden mx-auto bg-gradient-to-br from-[#875fd3] to-[#87cfe8] rounded-2xl shadow-lg justify-center p-4 w-full drop-shadow-[0_5px_100px_rgba(231,220,200,0.9)]">
                <div class="mx-auto xl:gap-6 xl:h-auto sm:columns-2">
                    <iframe style="border-radius:6px" class="drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)]"
                        src="https://open.spotify.com/embed/episode/3AegQ4CNGrCfXN1xs4sStY?utm_source=generator"
                        width="100%" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    <iframe style="border-radius:6px" class="drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)]"
                        src="https://open.spotify.com/embed/episode/5imzP6eW3OT1qdRKloRHjV?utm_source=generator"
                        width="100%" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    <iframe style="border-radius:6px" class="drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)]"
                        src="https://open.spotify.com/embed/episode/19BbKE5zB4GMAi6n8FvXt0?utm_source=generator"
                        width="100%" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    <iframe style="border-radius:6px" class="drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)]"
                        src="https://open.spotify.com/embed/episode/3NFFsFZecbUG8rxfUTIKV8?utm_source=generator"
                        width="100%" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                </div>
            </div>
        </div>

        <div
            class="hidden xl:flex mx-auto bg-gradient-to-r from-[#87cfe8] to-[#875fd3] rounded-2xl shadow-lg justify-center p-2 max-w-[90%]">
            <div
                class="hidden xl:flex mx-auto bg-gradient-to-r from-[#875fd3] to-[#87cfe8] rounded-2xl shadow-lg justify-center px-4 w-full drop-shadow-[0_5px_100px_rgba(231,220,200,0.9)]">
                <div class="my-4 p-4 w-[450px] mx-auto">
                    <iframe style="border-radius:6px" class="drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)]"
                        src="https://open.spotify.com/embed/episode/3AegQ4CNGrCfXN1xs4sStY?utm_source=generator"
                        width="100%" height="352" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                </div>
                <div class="my-4 p-4 w-[450px] mx-auto">
                    <iframe style="border-radius:6px" class="drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)]"
                        src="https://open.spotify.com/embed/episode/5imzP6eW3OT1qdRKloRHjV?utm_source=generator"
                        width="100%" height="352" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                </div>
                <div class="my-4 p-4 w-[450px] mx-auto">
                    <iframe style="border-radius:6px" class="drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)]"
                        src="https://open.spotify.com/embed/episode/19BbKE5zB4GMAi6n8FvXt0?utm_source=generator"
                        width="100%" height="352" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                </div>
                <div class="my-4 p-4 w-[450px] mx-auto">
                    <iframe style="border-radius:6px" class="drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)]"
                        src="https://open.spotify.com/embed/episode/3NFFsFZecbUG8rxfUTIKV8?utm_source=generator"
                        width="100%" height="352" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 3 --}}
    <div id="section-3" class="mx-4">

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
            <div id="utube" class="mx-4 w-[400px] max-w-[90%]">
                <div id="youtube">
                    <h1 class="font-poppins text-[#021f3a] font-bold text-center my-2">Watch Now!</h1>
                    <iframe class="my-2" src="https://www.youtube.com/embed/r1VPMTU8R5M" width="100%"
                        height="216"></iframe>
                    <iframe class="my-2" src="https://www.youtube.com/embed/DofupqKP4KE" width="100%"
                        height="216"></iframe>
                </div>
            </div>

            <div id="tiktok" class="mx-4 w-[400px] max-w-[90%]">
                <h1 class="font-poppins text-[#021f3a] font-bold text-center my-2">Tiktok</h1>
                <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@umnradio" data-unique-id="umnradio"
                    data-embed-from="embed_page" data-embed-type="creator" class="">
                    <section> <a target="_blank"
                            href="https://www.tiktok.com/@umnradio?refer=creator_embed">@umnradio</a> </section>
                </blockquote>
                <script async src="https://www.tiktok.com/embed.js"></script>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
    <script>
        var button = document.getElementById("buttonplay");
        var button2 = document.getElementById("buttonpause");
        var button3 = document.getElementById("buttonplay2");
        var button4 = document.getElementById("buttonpause2");
        var audio = document.getElementById("player");

        var player = document.getElementById("player");
        const playButton = document.getElementById('buttonplay2');
        const pauseButton = document.getElementById('buttonpause2');
        const progressBar = document.getElementById('progressBar');
        const currentTimeDisplay = document.getElementById('currentTime');
        // const durationDisplay = document.getElementById('duration');

        let isDragging = false;

        button.addEventListener("click", togglePlayPause);
        button2.addEventListener("click", togglePlayPause);
        button3.addEventListener("click", togglePlayPause);
        button4.addEventListener("click", togglePlayPause);

        playButton.addEventListener('click', togglePlayPause);

        pauseButton.addEventListener('click', () => {
            player.pause();
            playButton.classList.remove('hidden');
            pauseButton.classList.add('hidden');
        });

        progressBar.addEventListener('input', () => {
            const seekTime = player.duration * (progressBar.value / 100);
            currentTimeDisplay.textContent = formatTime(seekTime);
        });

        progressBar.addEventListener('mousedown', () => {
            isDragging = true;
            // player.pause(); 
        });


        progressBar.addEventListener('mouseup', () => {
            isDragging = false;
        });

        player.addEventListener('timeupdate', () => {
            if (!isDragging) {
                updateProgressBar();
                const currentTime = player.currentTime;
                currentTimeDisplay.textContent = formatTime(currentTime);
            }
        });

        progressBar.addEventListener('mousemove', (event) => {
            if (isDragging) {
                const boundingRect = progressBar.getBoundingClientRect();
                const mouseX = event.clientX - boundingRect.left;
                const percentage = Math.min(100, Math.max(0, (mouseX / boundingRect.width) * 100));
                progressBar.value = percentage;
                const seekTime = player.duration * (percentage / 100);
                currentTimeDisplay.textContent = formatTime(seekTime);
            }
        });

        player.addEventListener('loadedmetadata', () => {
            const duration = player.duration;
            // durationDisplay.textContent = formatTime(duration);
        });

        function togglePlayPause() {
            if (audio.paused) {
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
        }

        function updateProgressBar() {
            const currentTime = player.currentTime;
            const progressPercentage = (currentTime / player.duration) * 100;
            progressBar.value = progressPercentage;
        }

        function formatTime(time) {
            const minutes = Math.floor(time / 60);
            const seconds = Math.floor(time % 60);
            return `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
        }
    </script>


    <!-- Volume control JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var volumeControl = document.getElementById('volume');
            var volumeValue = document.getElementById('volumeValue');
            var volumeIcon = document.getElementById('volumeIcon');
            var audioPlayer = document.getElementById('player');
            var volumeControls = document.getElementById('volumeControls');


            var previousVolume = 50;


            audioPlayer.volume = previousVolume / 100;
            volumeControl.value = previousVolume;

            function updateVolume() {
                var volume = volumeControl.value;
                volumeValue.textContent = volume + '%';
                audioPlayer.volume = volume / 100;


                if (volume === '0') {
                    volumeIcon.innerHTML = '<i class="fas fa-volume-mute"></i>';
                } else if (volume <= '50') {
                    volumeIcon.innerHTML = '<i class="fas fa-volume-down"></i>';
                } else {
                    volumeIcon.innerHTML = '<i class="fas fa-volume-up"></i>';
                }
            }


            function toggleVolumeControls() {
                volumeControls.classList.toggle('hidden');
            }


            volumeIcon.addEventListener('click', function() {

                // if (audioPlayer.volume > 0) {

                //     previousVolume = volumeControl.value;
                //     audioPlayer.volume = 0;
                //     volumeControl.value = 0;
                // } else {

                //     audioPlayer.volume = previousVolume / 100;
                //     volumeControl.value = previousVolume;
                // }

                updateVolume();

                toggleVolumeControls();
            });

            volumeControl.addEventListener('input', updateVolume);
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const volumeInput = document.getElementById('volume');
            const volumeValue = document.getElementById('volumeValue');

            volumeInput.addEventListener('input', function() {
                const currentVolume = volumeInput.value;
                volumeValue.textContent = `${currentVolume}%`;

                // Additional actions can be performed here, such as updating the actual volume in your application.
                // For now, we'll just log the volume value.
                // console.log(currentVolume);
            });
        });
    </script>
    <script>
        window.addEventListener('scroll', function() {
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
                    indicator.classList.add('bg-blue-500', 'h-0.5', 'absolute', 'bottom-0', 'left-0',
                        'transition-all', 'duration-200');
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
                            oldContent.classList.remove('absolute', 'opacity-0', 'transition-all',
                                'duration-200');
                            oldContent.classList.add('hidden');

                            newContent.classList.add('!opacity-100');

                            newContent.classList.remove('!left-0', '!opacity-100', 'absolute',
                                'opacity-0', 'transition-all', 'duration-200');
                            newContent.classList.remove('hidden');
                        }, 200);
                    }
                }

                tabs.forEach((tab, index) => {
                    tab.classList.add('p-2', 'text-center', 'w-full', 'cursor-pointer', 'transition-all',
                        'duration-200', 'hover:bg-gray-200');
                    tab.addEventListener('click', () => {
                        let old = (String(indicator.style.transform || 'translateX(0%)').split(
                            'translateX(')).filter(Boolean).join('').split('%)')[0];
                        indicator.style.transform = `translateX(${index * 100}%)`;
                        updateContent(old, index);
                    })
                });

            }
        });
    </script>
    <script src="{{ asset('js/flowbite/dist/flowbite.min.js') }}"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> --}}
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: "auto",
            spaceBetween: 40,
            // centeredSlides: true,
            freeMode: true,
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
        });
    </script>

    <style>
        .swiper {
            width: 90%;
            height: 70%;
        }

        /* .swiper-wrapper{
            margin-right: 50px;
            margin-left: 50px;
        } */

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            position: relative;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            margin-top: 0;
            object-fit: cover;
            max-height: 75%;
            object-position: center top;
        }
    </style>
</body>

</html>
