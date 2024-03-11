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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/667eb529ec.js" crossorigin="anonymous"></script>
   <script src="https://cdn.tailwindcss.com"></script>


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
    <div id="section-1" class="w-full mb-16">
        <div class="w-full relative h-fit">
            <img src="{{ asset('assets/paper/1.webp') }}"
                class="absolute object-cover object-top w-full h-24 md:h-36 rotate-180 -z-20" alt="">
            <div
                class="absolute w-full top-0 bg-gradient-to-b from-white via-transparent to-transparent h-12 md:h-36 -z-10">
            </div>
        </div>
        <h1 class="font-poppins text-[#021f3a] text-2xl font-bold w-full text-center pt-24 md:pt-36">Live Broadcast</h1>
        <div id="sign" class="m-3 md:m-6 text-center">

            {{-- SCHEDULE SYSTEM PHP --}}

            <?php
            use Carbon\Carbon;
            
            $day = Carbon::now()->dayOfWeek;
            $hour = Carbon::now()->hour + 7;
            // var_dump($day, $hour);
            // $day = 1;
            // $hour = 12;
            
            foreach ($programs as $program) {
                if ($program->broadcast_day == $day && $hour < $programs->where('broadcast_day', $day)->first()->start_hour) {
                    $text = 'Upcoming Program';
                    $now = $programs->where('broadcast_day', $day)->first();
                    $onair = 'bg-[#dfdfdf]';
                } elseif ($program->broadcast_day == $day && $hour < 17) {
                    $text = "You're Listening to";
                    if ($hour >= $program->start_hour && $hour < $program->end_hour) {
                        $now = $program;
                    }
                    $onair = 'bg-[#fc1414]';
                } elseif ($program->broadcast_day == $day) {
                    $text = 'Upcoming Program';
                    $now = $programs->where('broadcast_day', $day + 1)->first();
                    $onair = 'bg-[#dfdfdf]';
                } elseif ($day >= 5 || $day == 0) {
                    $text = 'Upcoming Program';
                    $now = $programs->where('broadcast_day', 1)->first();
                    $onair = 'bg-[#dfdfdf]';
                }
            }
            
            if (($day >= 5 && $hour >= 17) || $day == 0) {
                $text = 'Upcoming Program';
                $now = $programs->where('broadcast_day', 1)->first();
                $onair = 'bg-[#dfdfdf]';
            }
            
            ?>

            <div id="onair" class="border rounded-md {{ $onair }} w-24 p-2 m-auto">
                <h1 class="font-poppins text-xl text-white"> On Air </h1>
            </div>

            <div class="flex flex-col md:flex-row gap-4 md:gap-16 mt-6 justify-center items-center">
                <img class="h-54 md:h-[400px] rounded-lg object-cover" src="{{ asset($now->img) }}" alt="ON AIR" />

                <div>
                    <h3 class="font-poppins mt-3 font-bold text-black">{{ $text }}</h3>
                    <h3 class="font-poppins mt-3 font-bold text-3xl text-[#021f3a]">{{ $now->name }}</h3>
                    <p class="font-poppins mt-3 text-black">{{ $now->desc }}</p>
                </div>
            </div>
        </div>
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
                                {{-- <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit. Voluptatibus, ipsam officiis excepturi inventore distinctio deserunt
                                    voluptatem tempora minima beatae commodi maxime autem aliquam consequatur nihil
                                    blanditiis, neque facilis laboriosam suscipit!</p> --}}
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
                                src="{{ asset('images/programs/placeholder.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">DICE
                                </div>
                                <div class="md:text-xl font-poppins text-center">13.00 -
                                    14.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Ultimafriends
                                    yakin kalian anak kampus
                                    banget?! atau masih bingung anak kampus biasanya ngapain sih????

                                    Tenang DICE akan hadir temani ultimafriends di UMN Radio!! DICE APASIH? DICE itu Day
                                    In Campus Life 👀. Lo bakal amaze deh sama obrolan yang ada di DICE, karena disini
                                    bakal bahas hal yang pastinya related banget sama anak kampus zaman sekarang 😱🫵🏻

                                    Nah penasaran gasih?!!! Seberapa randomnya anak kampus sekarang?. Makanya stay tuned
                                    aja terus setiap hari Senin sampai Jumat hanya di 107.7 FM atau radio.umn.ac.id
                                    bareng U-nnouncer kesayangan lo! Hayoo siapa yakk dia 🫢

                                    DICE, Roll The Dice, Spill The Spice!!! 🎲 </p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/placeholder.webp') }}" />
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
                                    Ultimafriends! 🌆

                                    “Foolish one, stop ngerasa kalau hari Senin itu nyebelin!”

                                    Bener banget! Kalian harus stop ngerasa Senin itu nyebelin karena Sersan siap
                                    nemenin Ultimafriends, barengan sama Pei 🤩 dan Rara 😍 tiap jam 2-5 sore!

                                    Bareng Sersan kita bakal usut tuntas kehidupan para lelaki di luar sana! 🫣
                                    Ultimafriends bisa dengerin Pei 🤩 dan Rara 😍 santai-santai di hari Senin lewat
                                    radio.umn.ac.id atau 107.7 FM 📻

                                    Don’t forget listen to Sersan, cuz the good things are coming ✨ </p>
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
                                src="{{ asset('images/programs/placeholder.webp') }}" />
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
                            src="{{ asset('images/programs/placeholder.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/placeholder.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">DICE
                                </div>
                                <div class="md:text-xl font-poppins text-center">13.00 -
                                    14.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Ultimafriends
                                    yakin kalian anak kampus
                                    banget?! atau masih bingung anak kampus biasanya ngapain sih????

                                    Tenang DICE akan hadir temani ultimafriends di UMN Radio!! DICE APASIH? DICE itu Day
                                    In Campus Life 👀. Lo bakal amaze deh sama obrolan yang ada di DICE, karena disini
                                    bakal bahas hal yang pastinya related banget sama anak kampus zaman sekarang 😱🫵🏻

                                    Nah penasaran gasih?!!! Seberapa randomnya anak kampus sekarang?. Makanya stay tuned
                                    aja terus setiap hari Senin sampai Jumat hanya di 107.7 FM atau radio.umn.ac.id
                                    bareng U-nnouncer kesayangan lo! Hayoo siapa yakk dia 🫢

                                    DICE, Roll The Dice, Spill The Spice!!! 🎲 </p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/placeholder.webp') }}" />
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
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Hi
                                    ultimafriends, yuk tebak-tebakan! 🤫

                                    kalo permen rasanya apa?👀
                                    selain manis pasti ada juga kan rasa lainnya? ✨
                                    Nah, sama aja cinta juga gitu, selain bentuknya yang beragam, rasa yang dikasih juga
                                    tentunya macem-macem, tapi pastinya semua pengalamannya bisa membuat hidup lo jadi
                                    lebih berwarna 🌈

                                    Masih bingung maksudnya gimana? Kalo gitu langsung aja dengerin Bilcin di 107.7 FM
                                    atau radio.umn.ac.id bareng Delgo sama Abel yang bakal nemenin lu menjelajah
                                    berbagai macam rasa cinta di sekitar kita 🤗

                                    Bilcin, Giving you every bit of love’s taste 💕</p>
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
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">WOI
                                    ULTIMAFRIENDS!! CAKEP-CAKEP AMAT SIH PADAHAL BARU MAU PANTUN🤪

                                    Beli permen yang jual si Marwan
                                    Si Marwan punya patung kuda

                                    Ultimafriends yang syantik dan rupawan
                                    Jangan lupa terus dengerin SODA!🔥

                                    Ahay, dari pantunnya aja udah ciamik apalagi nanti pembahasan di dalamnya🤭👀
                                    Makanya, jangan takut jangan khawatir! SODA bisa didengerin di 107.7 FM atau
                                    radio.umn.ac.id bareng duet HARLA (Hanif-Carla) yang udah pasti asik, tapi ngga asik
                                    sendiri!🤩

                                    SODA, VIBE UP YOUR DAY WITH US!🕺🏻</p>
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
                                {{-- <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit. Voluptatibus, ipsam officiis excepturi inventore distinctio deserunt
                                    voluptatem tempora minima beatae commodi maxime autem aliquam consequatur nihil
                                    blanditiis, neque facilis laboriosam suscipit!</p> --}}
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
                                src="{{ asset('images/programs/placeholder.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">DICE
                                </div>
                                <div class="md:text-xl font-poppins text-center">16.00 -
                                    17.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Ultimafriends
                                    yakin kalian anak kampus
                                    banget?! atau masih bingung anak kampus biasanya ngapain sih????

                                    Tenang DICE akan hadir temani ultimafriends di UMN Radio!! DICE APASIH? DICE itu Day
                                    In Campus Life 👀. Lo bakal amaze deh sama obrolan yang ada di DICE, karena disini
                                    bakal bahas hal yang pastinya related banget sama anak kampus zaman sekarang 😱🫵🏻

                                    Nah penasaran gasih?!!! Seberapa randomnya anak kampus sekarang?. Makanya stay tuned
                                    aja terus setiap hari Senin sampai Jumat hanya di 107.7 FM atau radio.umn.ac.id
                                    bareng U-nnouncer kesayangan lo! Hayoo siapa yakk dia 🫢

                                    DICE, Roll The Dice, Spill The Spice!!! 🎲 </p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/placeholder.webp') }}" />
                    </div>
                </div>

                <div
                    class="flex justify-around tab-content-item text-center flex-wrap md:flex-nowrap p-2 gap-4 md:gap-0">
                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/placeholder.webp') }}" />
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
                            src="{{ asset('images/programs/placeholder.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/placeholder.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">DICE
                                </div>
                                <div class="md:text-xl font-poppins text-center">13.00 -
                                    14.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Ultimafriends
                                    yakin kalian anak kampus
                                    banget?! atau masih bingung anak kampus biasanya ngapain sih????

                                    Tenang DICE akan hadir temani ultimafriends di UMN Radio!! DICE APASIH? DICE itu Day
                                    In Campus Life 👀. Lo bakal amaze deh sama obrolan yang ada di DICE, karena disini
                                    bakal bahas hal yang pastinya related banget sama anak kampus zaman sekarang 😱🫵🏻

                                    Nah penasaran gasih?!!! Seberapa randomnya anak kampus sekarang?. Makanya stay tuned
                                    aja terus setiap hari Senin sampai Jumat hanya di 107.7 FM atau radio.umn.ac.id
                                    bareng U-nnouncer kesayangan lo! Hayoo siapa yakk dia 🫢

                                    DICE, Roll The Dice, Spill The Spice!!! 🎲 </p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/placeholder.webp') }}" />
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
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">🎷MUSIKALITAS:
                                    Musik Anak Lokal Berkualitas🎷

                                    Yakin masih muterin lagu yang itu-itu aja? Akh, ini dia sasarannya.

                                    Penasaran ga sih sama perkembangan musik Indonesia? Atau lo ga tau harus cari
                                    akarnya darimana?😅

                                    Mengudara di 107.7 FM atau streaming di radio.umn.ac.id hari Kamis jam 14.00 - 17.00
                                    WIB, wajib hukumnya buat dengerin Musikalitas!🎷

                                    😱Makin tau
                                    🧐Banyak tau
                                    😬Paling tau

                                    Musik Indonesia setiap minggunya, karena musik Indonesia ga ada abisnya!🤪</p>
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
                                <div class="font-bold md:text-2xl font-poppins text-center">CHARTTOPPERS
                                </div>
                                <div class="md:text-xl font-poppins text-center">12.00 -
                                    15.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">What up!!!
                                    ultimafriends👋🏻, Wanna know about🤔, hot song🎶, hot news🔥 and new album💿 from
                                    your fav artist!!!

                                    YOU KNOW WHERE IT IS!!!

                                    Let’s go tune!!! on Superb Charttopers with Jocelyn only on Friday from 12.00 pm to
                                    15.00 pm on 107.7 fm or radio.umn.ac.id

                                    Don’t Forget to Listen 🎧🎶

                                    Epic Hits Music For Your Friday!!!🎶🔥</p>
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
                                {{-- <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit. Voluptatibus, ipsam officiis excepturi inventore distinctio deserunt
                                    voluptatem tempora minima beatae commodi maxime autem aliquam consequatur nihil
                                    blanditiis, neque facilis laboriosam suscipit!</p> --}}
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
                                src="{{ asset('images/programs/placeholder.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">DICE
                                </div>
                                <div class="md:text-xl font-poppins text-center">16.00 -
                                    17.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Ultimafriends
                                    yakin kalian anak kampus
                                    banget?! atau masih bingung anak kampus biasanya ngapain sih????

                                    Tenang DICE akan hadir temani ultimafriends di UMN Radio!! DICE APASIH? DICE itu Day
                                    In Campus Life 👀. Lo bakal amaze deh sama obrolan yang ada di DICE, karena disini
                                    bakal bahas hal yang pastinya related banget sama anak kampus zaman sekarang 😱🫵🏻

                                    Nah penasaran gasih?!!! Seberapa randomnya anak kampus sekarang?. Makanya stay tuned
                                    aja terus setiap hari Senin sampai Jumat hanya di 107.7 FM atau radio.umn.ac.id
                                    bareng U-nnouncer kesayangan lo! Hayoo siapa yakk dia 🫢

                                    DICE, Roll The Dice, Spill The Spice!!! 🎲 </p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/placeholder.webp') }}" />
                    </div>
                </div>
            </div>
        </div>

        <img src="{{ asset('assets/paper/10.webp') }}"
            class="absolute h-[160%] md:h-[140%] object-cover bottom-0 -z-10" alt="">
    </div>

    {{--ANNOUNCER}}
   
    <div class="flex w-full">
        <div class="w-2/12 flex items-center">
            <div class="w-full text-right">     
                <button class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                    </svg>
                </button>
            </div>
        </div>

        <div id="sliderContainer" class="w-full">
            <ul id="slider" class="flex w-full border border-red-500">
                <li class="w-96 p-5">
                    <div class="border rounded-lg p-5">
                    <img class="h-50 w-full object-cover rounded-md" src="{{ asset('images/announcers/helena.JPG') }}" alt="">
                    <h2 class="mt-2 text-2xl font-bold text-gray-700">Helena Haryadi</h2>
                    <p class="mt-2 text-gray-500">
                        "Aku suka semua tentang langit"
                    </p>
                    <button class="mt-4 px-6 py-3 rounded-md bg-green-600 text-white font-bold">Read more</button>
                </li>
                <li class="w-96 p-5">
                    <div class="border rounded-lg p-5">
                    <img class="h-50 w-full object-cover rounded-md" src="{{ asset('images/announcers/khaira.JPG') }}" alt="">
                    <h2 class="mt-2 text-2xl font-bold text-gray-700">Khaira Khansa</h2>
                    <p class="mt-2 text-gray-500">
                        "Alone or not, you gotta walk forward"
                    </p>
                    <button class="mt-4 px-6 py-3 rounded-md bg-green-600 text-white font-bold">Read more</button>
                </li>
                <li class="w-96 p-5">
                    <div class="border rounded-lg p-5">
                    <img class="h-50 w-full object-cover rounded-md" src="{{ asset('images/announcers/delbert.JPG') }}" alt="">
                    <h2 class="mt-2 text-2xl font-bold text-gray-700">Delbert Go</h2>
                    <p class="mt-2 text-gray-500">
                        "Nikmati setiap halaman"
                    </p>
                    <button class="mt-4 px-6 py-3 rounded-md bg-green-600 text-white font-bold">Read more</button>
                </li>
                <li class="w-96 p-5">
                    <div class="border rounded-lg p-5">
                    <img class="h-50 w-full object-cover rounded-md" src="{{ asset('images/announcers/christabell.JPG') }}" alt="">
                    <h2 class="mt-2 text-2xl font-bold text-gray-700">Christabell Chalin</h2>
                    <p class="mt-2 text-gray-500">
                        "Never be so kind, you forget to be clever"
                    </p>
                    <button class="mt-4 px-6 py-3 rounded-md bg-green-600 text-white font-bold">Read more</button>
                </li>
                <li class="w-96 p-5">
                    <div class="border rounded-lg p-5">
                    <img class="h-50 w-full object-cover rounded-md" src="{{ asset('images/announcers/hanif.JPG') }}" alt="">
                    <h2 class="mt-2 text-2xl font-bold text-gray-700">M Hanief Alif</h2>
                    <p class="mt-2 text-gray-500">
                        "2 3 AYAM BERLARI, ADA HANIF JANGAN LARI"
                    </p>
                    <button class="mt-4 px-6 py-3 rounded-md bg-green-600 text-white font-bold">Read more</button>
                </li>
                <li class="w-96 p-5">
                    <div class="border rounded-lg p-5">
                    <img class="h-50 w-full object-cover rounded-md" src="{{ asset('images/announcers/carla.JPG') }}" alt="">
                    <h2 class="mt-2 text-2xl font-bold text-gray-700">Carla Kaditha</h2>
                    <p class="mt-2 text-gray-500">
                        "-"
                    </p>
                    <button class="mt-4 px-6 py-3 rounded-md bg-green-600 text-white font-bold">Read more</button>
                </li>
                <li class="w-96 p-5">
                    <div class="border rounded-lg p-5">
                    <img class="h-50 w-full object-cover rounded-md" src="{{ asset('images/announcers/bella.JPG') }}" alt="">
                    <h2 class="mt-2 text-2xl font-bold text-gray-700">Bella Felisha</h2>
                    <p class="mt-2 text-gray-500">
                        "Aku sebenernya 2 orang"
                    </p>
                    <button class="mt-4 px-6 py-3 rounded-md bg-green-600 text-white font-bold">Read more</button>
                </li>
                <li class="w-96 p-5">
                    <div class="border rounded-lg p-5">
                    <img class="h-50 w-full object-cover rounded-md" src="{{ asset('images/announcers/serenata.JPG') }}" alt="">
                    <h2 class="mt-2 text-2xl font-bold text-gray-700">Serenata Silvestra Sadikin</h2>
                    <p class="mt-2 text-gray-500">
                        "BISAAAA, HARUS BISAAAA HARUS BISAAAAA -Desta"
                    </p>
                    <button class="mt-4 px-6 py-3 rounded-md bg-green-600 text-white font-bold">Read more</button>
                </li>
                <li class="w-96 p-5">
                    <div class="border rounded-lg p-5">
                    <img class="h-50 w-full object-cover rounded-md" src="{{ asset('images/announcers/joce.JPG') }}" alt="">
                    <h2 class="mt-2 text-2xl font-bold text-gray-700">Jocelyn Ancylla</h2>
                    <p class="mt-2 text-gray-500">
                        "blubup blubup blubup"
                    </p>
                    <button class="mt-4 px-6 py-3 rounded-md bg-green-600 text-white font-bold">Read more</button>
                </li>
            </ul>
        </div>

        <div class="w-2/12 flex items-center"> 
            <div class="w-full text-right">
                <button class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                 </button>
            </div>
        </div>
    </div>

                    src="{{ asset('images/announcers/5.jpg') }}"

    {{-- ARTICLE --}}
    <div class="font-poppins text-black mb-6 bg-[#103069] shadow-inner relative @if ($posts->count() > 0) block
        @else
        hidden @endif"
        style="box-shadow: inset 4px 4px 4px 0 rgb(0 0 0 / 0.05);">
        <img src="{{ asset('assets/others/papertexture.webp') }}" alt=""
            class="absolute w-full h-full opacity-20 z-0">
        <img src="{{ asset('assets/others/notebook.webp') }}" alt=""
            class="absolute top-12 w-64 md:w-[30%] md:end-24 drop-shadow-[0_10px_10px_rgba(0,0,0,0.5)] rotate-12 md:-rotate-12 brightness-[90%]">
        <img src="{{ asset('assets/others/penmerah.webp') }}" alt=""
            class="absolute top-12 w-32 md:w-[20%] drop-shadow-[0_10px_10px_rgba(0,0,0,0.5)] brightness-[90%]">
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
    <div id="section-4" class="md:mt-12 w-full my-12">
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
        </div>
    </div>

    {{-- Section 4 --}}
    <div id="section-4" class="md:mt-12 w-full my-12">
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
                    <iframe class="my-2" src="https://www.youtube.com/embed/Y_UyIZsbFG8" width="100%"
                        height="216"></iframe>
                    <iframe class="my-2" src="https://www.youtube.com/embed/C8dHg1uHcnM" width="100%"
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

    <script>
        const config = {
  type: 'carousel',
  startAt: 0,
  perView: 4,
  gap: 32,
  breakpoints: {
    1280: {
      perView: 3,
    },
    1024: {
      perView: 2,
    },
    768: {
      perView: 1,
    }
  }
}
new Glide('.glide', config).mount()
        </script>
</body>

</html>
