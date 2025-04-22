@extends('layouts.main')

@section('container')
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

        .swiper-button-next,
        .swiper-pagination,
        .swiper-button-prev {
            color: #0A1F63;
        }

        .swiper-pagination-bullet {
            background-color: #0A1F63;
            opacity: 0.5;
        }

        .swiper-pagination-bullet-active {
            background-color: #0A1F63;
            opacity: 1;
        }
    </style>

    {{-- Popup Ads --}}
    {{-- <div id="ad-banner" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black bg-opacity-50">
        <div class="relative max-w-4xl w-full bg-white rounded-lg shadow-lg flex flex-col">
            <!-- Banner content -->
            <div class="w-full bg-[#445148] p-4 flex items-center justify-center rounded-t-lg">
                <div class="text-white text-center">
                    <h3 class="text-xl font-bold">23rd IFRA Business Expo x ICE 2025</h3>
                </div>
            </div>
    
            <!-- Main content -->
            <div class="w-full p-6 flex flex-col items-center">
                <div class="mb-4">
                    <div class="rounded w-48 h-48 mx-auto flex items-center justify-center">
                        <img src="images/ads/ifra.webp" alt="IFRA Business Expo">
                    </div>
                </div>
                
                <div class="text-center">
                    <h4 class="text-lg font-bold text-gray-800">✨TICKET PROMO: <span class="text-[#F6E70F]">BUY 1 GET 1✨</span></h4>
                    <p class="text-gray-600 my-2">LIMITED STOCK!! Hanya dengan Rp 60.000, kamu bisa mendapatkan 2 tiket</p>
                    <div class="text-xs text-gray-500 mb-4">valid until 18 April 2025</div>
                    <a href="https://ifra-indonesia.com/" target="_blank" class="inline-block bg-[#445148] hover:bg-[#57714D] text-white font-bold py-3 px-8 rounded transition-colors">
                        BELI SEKARANG
                    </a>
                </div>
            </div>
            
            <!-- Close button -->
            <button id="close-ad" class="absolute top-[-12px] right-0 translate-x-1/2 md:top-[-12px] md:right-0 md:translate-x-1/2 w-8 h-8 flex items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 transition-colors drop-shadow-md" aria-label="Close advertisement">
                <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>
    </div> --}}

            <!-- JavaScript for banner functionality -->
            {{-- <script>
                $(document).ready(function() {
                    // Close button functionality
                    $("#close-ad").click(function() {
                        $("#ad-banner").fadeOut();
                        
                        // Set cookie to remember banner was closed
                        document.cookie = "adBannerClosed=true; max-age=86400"; // 24 hours
                    });
            
                    // Check if banner was previously closed
                    function getCookie(name) {
                        const value = `; ${document.cookie}`;
                        const parts = value.split(`; ${name}=`);
                        if (parts.length === 2) return parts.pop().split(';').shift();
                    }
            
                    // if (getCookie('adBannerClosed')) {
                    //     $("#ad-banner").hide();
                    // }
                });
            </script> --}}
    
    {{-- Popup Joyland --}}
    {{-- <div id="modal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 px-4 z-50">
        <div class=" bg-gray-400 rounded-lg shadow-lg p-2 max-w-sm w-full relative">
            <button id="closeModal"
                class="absolute top-0 right-0 m-4 p-2 rounded-full hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200 z-50">
                <img src="{{ asset('images/close-option.png') }}" alt="Close" class="w-6 h-6">
            </button>

            <div id="animation-carousel" class="relative w-full mt-4" data-carousel="static">
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                        <img src="{{ asset('images/JOYLAND/SLIDE 1.webp') }}" loading="eager"
                            class="absolute block w-full h-[85%] object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="Slide 1">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="{{ asset('images/JOYLAND/SLIDE 2.webp') }}" loading="eager"
                            class="absolute block w-full h-[85%] object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="Slide 2">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="{{ asset('images/JOYLAND/SLIDE 3.webp') }}" loading="eager"
                            class="absolute block w-full h-[85%] object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="Slide 3">
                    </div>
                </div>

                <button type="button"
                    class="absolute top-1/2 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none transform -translate-y-1/2"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 group-hover:bg-black/50 focus:ring-4 group-focus:ring-black focus:outline-none">
                        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-1/2 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none transform -translate-y-1/2"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 group-hover:bg-black/50 focus:ring-4 group-focus:ring-black focus:outline-none">
                        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
            <div class="flex justify-center mt-4">
                <a id="clickHere" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    href="https://docs.google.com/forms/d/e/1FAIpQLSezFKEV3caoyRnx1v_LCUgs_PyfPyNAM_RPudVH34qZHH32og/viewform"
                    target="_blank">
                    Order here
                </a>
            </div>
        </div>
    </div> --}}

    <!-- Modal toggle -->
    {{-- <button data-modal-target="default-modal" data-modal-toggle="default-modal"
        class="block w-0 h-0 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button">
    </button> --}}

    <!-- Main modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-screen max-h-full bg-gray-800 bg-opacity-60 @if ($hlPost) flex @else hidden @endif">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        @if ($hlPost)
                            {{ $hlPost->title }}
                        @else
                            No Data
                        @endif
                    </h3>
                    <button type="button" id="closeModalButton"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-1 max-h-[400px] overflow-y-scroll">
                    <p class="text-lg leading-relaxed text-gray-500 dark:text-gray-400">
                        @if ($hlPost)
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $hlPost->category }}</span>
                        @else
                            No Data
                        @endif
                    </p>
                    <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                        @if ($hlPost)
                            <p>{{ $hlPost->published }}</p>
                            <p>Author: {{ $hlPost->author }}</p>
                            <p>Editor: {{ $hlPost->editor }}</p>
                        @else
                            No Data
                        @endif
                    </p>
                    @if ($hlPost)
                        <img class="w-full h-36 md:h-52 object-cover"
                            src="{{ asset('storage/' . $hlPost->cover_photo) }}" alt="Featured Image">
                    @else
                        No Data
                    @endif
                    <div class="relative">
                        <div
                            class="text-base leading-relaxed text-gray-500 dark:text-gray-400 max-h-[400px] overflow-hidden post-content">
                            @if ($hlPost)
                                {!! $hlPost->post_content !!}
                            @else
                                No Data
                            @endif
                        </div>
                        <div class="absolute inset-x-0 bottom-0 h-12 bg-gradient-to-t from-white dark:from-gray-700">
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    @if ($hlPost)
                        <a href="/article/{{ $hlPost->slug }}" data-modal-hide="default-modal" type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full inline-flex justify-center">Read
                            More</a>
                    @else
                        No Data
                    @endif

                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('closeModalButton').addEventListener('click', function() {
            const modal = document.getElementById('default-modal');
            modal.classList.add('hidden');
        });
    </script>

    {{-- BACKGROUND --}}
     {{-- <img class="w-screen z-0" src="{{ asset('images/background.webp') }}" alt="">  --}}

    {{-- Landing --}}
    <div class="relative pt-10">
        <img class="h-[500px] w-auto md:h-auto md:w-screen z-0 object-cover object-right"
            src="{{ asset('images/bannerweb2.webp') }}" alt="" />
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
                <audio id="player">
                    {{-- <source src='https://icecast.umn.ac.id/live' /> --}}
                    <source src="{{ asset('assets/audio/tes.mp3') }}" />
                </audio>
            </div>
        </div>
    </div>

    {{-- ULTIMACREWS --}}
    {{-- <a href="/ultimacrews"
        class="w-full flex justify-center overflow-hidden items-center relative group bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
        <img src="{{ asset('assets/paper/9-crop.webp') }}"
            class="absolute w-full h-[12%] object-cover object-top top-0 z-30 rotate-180" alt="">
        <img src="{{ asset('assets/paper/4-crop.webp') }}"
            class="absolute w-full h-[12%] object-cover object-top bottom-0 z-30" alt="">
        <div
            class="absolute w-full top-0 bg-gradient-to-b from-white via-transparent to-transparent h-12 z-30">
        </div>
        <div class="absolute top-[40%] z-30 text-center">

            <h1
                class="md:text-3xl text-xl font-saira text-white group-hover:scale-[105%] transition-transform duration-500 ease-in-out transform">
                UMN Radio Gen 13's
            </h1>
            <h1
                class="font-sairaStencilOne md:text-8xl text-4xl text-white md:text-transparent md:text-stroke-white group-hover:text-white group-hover:scale-[105%] transition-all duration-500 ease-in-out transform">
                ULTIMACREWS
            </h1>
            <h1
                class="md:text-2xl text-lg font-saira font-semibold px-4 text-white group-hover:scale-[105%] transition-transform duration-500 ease-in-out transform">
                Proudly say, we've set our tune and raised our volume!
            </h1>

        </div>
        <img src="{{ asset('images/crews/crews cropped.webp') }}"
            class="w-full h-full saturate-[75%] md:saturate-0 group-hover:saturate-[75%] group-hover:scale-[101%] transition-all duration-500 ease-in-out brightness-[50%] hidden md:block"
            alt="">
        <img src="{{ asset('images/crews/crews cropped mobile.webp') }}"
            class="w-full h-full saturate-[100%] md:saturate-0 group-hover:saturate-[75%] group-hover:scale-[101%] transition-all duration-500 ease-in-out brightness-[45%] block md:hidden pt-6 pb-4"
            alt="">

    </a> --}}

    {{-- AUDIO --}}


    {{-- ON AIR OFF AIR --}}
    <div id="section-1" class="w-full mb-16">
        <div class="w-full relative h-fit">
            <img src="{{ asset('assets/paper/1.webp') }}"
                class="absolute object-cover object-top w-full h-24 md:h-36 rotate-180 -z-20" alt="">
            <div
                class="hidden absolute w-full top-0 bg-gradient-to-b from-white via-transparent to-transparent h-12 md:h-36 -z-10">
            </div>
        </div>

        <h1 class="font-poppins text-[#021f3a] text-2xl font-bold w-full text-center pt-24 md:pt-36">Live Broadcast
        </h1>
        <div id="sign" class="m-3 md:m-6 text-center">

            {{-- SCHEDULE SYSTEM PHP --}}

            <?php
            use Carbon\Carbon;
            
            $day = Carbon::now()->dayOfWeek;
            $hour = Carbon::now()->hour + 7;
            // var_dump($day, $hour);
            // $day = 4;
            // $hour = 12;
            
            foreach ($programs as $program) {
                if ($program->broadcast_day == $day && $hour < $programs->where('broadcast_day', $day)->first()->start_hour) {
                    $text = 'Upcoming Program';
                    $now = $programs->where('broadcast_day', $day)->first();
                    $onair = 'bg-[#dfdfdf]';
                } elseif ($program->broadcast_day == $day && ($hour < 17 || ($day == 4 && $hour < 20))) {
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
                <img class="h-54 md:h-[400px] rounded-lg object-cover" src="{{ asset($now->img) }}"
                    alt="ON AIR" />

                <div>
                    <h3 class="font-poppins mt-3 font-bold text-black">{{ $text }}</h3>
                    <h3 class="font-poppins mt-3 font-bold text-3xl text-[#021f3a]">{{ $now->name }}</h3>
                    <p class="font-poppins mt-3 text-black">{{ $now->desc }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- ROMAWEEK --}}
    {{-- <div id="section-1" class="w-full mb-16 flex flex-col items-center">
        <!-- Background Decoration -->
        <div class="w-full relative h-fit">
            <img src="{{ asset('assets/paper/1.webp') }}"
                 class="absolute object-cover object-top w-full h-24 md:h-36 rotate-180 -z-20"
                 alt="Background Decorative Image">
            <div class="absolute top-0 w-full h-12 md:h-36 bg-gradient-to-b from-white via-transparent to-transparent -z-10"></div>
        </div>
    
        <!-- Section Title -->
        <h1 class="font-poppins text-[#021f3a] text-2xl font-bold w-full text-center pt-24 md:pt-36">
            ROMAWEEK
        </h1>
    
        <!-- Swiper Section -->
        <div class="w-full max-w-[90%] 2xl:max-w-[45%] mt-8">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @php
                        $episodes = [
                            '4U7VAcdbe2XHS36ciZPP6H',
                            '62reQQ2dHAyZoTrCs6hzuk',
                            '1zTAEtL1VYm6uJv9lUDHoU',
                            '7eimlP5w7YF7EMhDhW2YhK',
                            '1id0xl6WaIAAUPsSqiuhVu',
                            '7BKLeg02sUZWoTOokbZj9A',
                            '4qCjynSqGY5Kz8RtUaUouc'
                        ];
                    @endphp
    
                    @foreach ($episodes as $id)
                        <div class="swiper-slide flex justify-center">
                            <iframe
                                src="https://open.spotify.com/embed/episode/{{ $id }}?utm_source=generator"
                                width="100%" height="352"
                                class="drop-shadow-[0_5px_10px_rgba(0,0,0,0.3)] max-w-[500px] w-full rounded-xl"
                                style="border: none; border-radius: 12px"
                                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                loading="lazy">
                            </iframe>
                        </div>
                    @endforeach
                </div>
    
                <!-- Swiper Controls -->
                <div class="swiper-pagination mt-4"></div>
                <div class="swiper-button-next hidden md:block #021f3a"></div>
                <div class="swiper-button-prev hidden md:block"></div>
            </div>
        </div>
    </div> --}}
    {{-- WEEKLY SCHEDULE --}}
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
                                src="{{ asset('images/programs/programs gen 14/Poster Campushere.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">CAMPUSPHERE
                                </div>
                                <div class="md:text-xl font-poppins text-center">11.00 -
                                    13.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Ready to vibe with us? Your daily dose of fun, hot topics, and killer playlists is HERE!

So, grab your headphones because we’re on air every weekday except Wednesday!📻 Catch us on 107.7 FM or stream online at radio.umn.ac.id!🎧
</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/programs gen 14/Banner Campusphere.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/programs gen 14/Poster News.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">News Flash
                                </div>
                                <div class="md:text-xl font-poppins text-center">13.00 -
                                    14.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Ultimafriends, kalian mau stay up to date biar nggak FOMO?🤔 Tenang, NEWS FLASH siap bawain berita rasa cerita yang nggak cuma informatif, tapi juga entertaining dan anti boring!🙌🏻

Dari berita A-Z, semuanya ada di sini! So, keep informed setiap Senin, Rabu, dan Jumat, only on 107.7 FM or radio.umn.ac.id!💥📇</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/programs gen 14/Banner News.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/programs gen 14/Poster Sersan.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">SERSAN
                                </div>
                                <div class="md:text-xl font-poppins text-center">14.00 -
                                    17.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Wassgood, Ultimafriends😋‼️ Let SERSAN flow through your ears and get ready to be Radiated With a Smile every Monday!🎧🎶

That’s right, Fam! Dengan dengerin SERSAN, kalian akan mendengarkan keseruan journey baru dari Dayu dan Agustina, loh!💫💞 Pastinya ditemenin bareng Mr. Lucky yang berbeda tiap minggunya!🫅🏻

Stay tuned terus buat liat keseruannya setiap Senin, jam 2–5 sore di 107.7 FM atau radio.umn.ac.id!👈🏻👀‼️ Because SERSAN is all about Setting Up Smiles on Monday! </p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/programs gen 14/Banner Sersan.webp') }}" />
                    </div>
                </div>

                <div
                    class="flex justify-around tab-content-item text-center flex-wrap md:flex-nowrap p-2 gap-4 md:gap-0">
                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/programs gen 14/Poster Campushere.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">CAMPUSPHERE
                                </div>
                                <div class="md:text-xl font-poppins text-center">12.00 -
                                    14.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Ready to vibe with us? Your daily dose of fun, hot topics, and killer playlists is HERE!

So, grab your headphones because we’re on air every weekday except Wednesday!📻 Catch us on 107.7 FM or stream online at radio.umn.ac.id!🎧
</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/programs gen 14/Banner Campusphere.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/programs gen 14/Poster Musikalitas.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">MUSIKALITAS
                                </div>
                                <div class="md:text-xl font-poppins text-center">14.00 -
                                    17.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Masih jadi poser di era sekarang, Ultimafriends?😦 Atau masih nggak tau karya musik anak bangsa yang segitu banyaknya?🫠

Lo disarankan untuk menimba ilmu mahal dengan cara dengerin MUSIKALITAS! Dari yang up rising🔝 sampe underground, semua bakal kita bahas!🤭

Nggak usah takut nyasar🫵 karena Mpok Ipeh dan Bang Apid siap nemenin kalian dengan ngobrol langsung sama para musisi untuk menanyakan perihal NOTASI🎶 Dengerin kita setiap Selasa, jam 2–5 sore di 107.7 FM atau streaming di radio.umn.ac.id!

MUSIKALITAS, dari sudut kota🌆 ke setiap telinga👂</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/programs gen 14/Banner Musikalitas.webp') }}" />
                    </div>

                    {{--<div class="relative group md:p-5 md:max-w-[33.3%]">
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
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Hey, Ultimafriends! Main tebak-tebakan, yuk!🤫

Kalo permen rasanya apa?👀🍬
Selain manis, pasti ada juga kan rasa lainnya?✨

Nah, sama kayak cinta! Selain bentuknya yang beragam, rasa yang dikasih juga bermacam-macam, tapi semua pengalamannya pasti bisa bikin hidup lo jadi lebih berwarna!🌈💫

Masih bingung maksudnya gimana?🤔 Kalo gitu langsung aja dengerin Bilcin di 107.7 FM atau di radio.umn.ac.id bareng Delgo dan Abel yang bakal nemenin lo menjelajahi berbagai rasa cinta setiap hari Selasa jam 2-5 sore!😚

Bilcin, giving you every bit of love’s taste💕</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/BILCIN_BANNER.webp') }}" />
                    </div>--}}
                </div>

                <div class="flex justify-around tab-content-item text-center flex-wrap md:flex-nowrap p-2 gap-4 md:gap-0">
                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/programs gen 14/Poster Bilcin.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">BILCIN
                                </div>
                                <div class="md:text-xl font-poppins text-center">10.00 -
                                    13.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Ultimafriends, pernah ngerasa capek sama hidup yang berlika-liku ini?🤔 Tenang, lo nggak sendiri! Ikutin aja perjalanannya karena pada akhirnya, lo pasti ketemu kunci dari treasure of love itu untuk diri sendiri!❤️🔐

Petualangan lo bakal ditemenin sama Becca si Overthinker dan Jovan yang Comforting, di Bilcin setiap Rabu, jam 10-1 siang di 107.7 FM atau di radio.umn.ac.id!😙🔍

Bilcin, where every tale sparks love and moral✨</p>
                            </div>
                        </div>
                        <img alt="" class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video" src="{{ asset('images/programs/programs gen 14/Banner Bilcin.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/programs gen 14/Poster News.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">NEWS FLASH
                                </div>
                                <div class="md:text-xl font-poppins text-center">13.00 -
                                    14.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Ultimafriends, kalian mau stay up to date biar nggak FOMO?🤔 Tenang, NEWS FLASH siap bawain berita rasa cerita yang nggak cuma informatif, tapi juga entertaining dan anti boring!🙌🏻

Dari berita A-Z, semuanya ada di sini! So, keep informed setiap Senin, Rabu, dan Jumat, only on 107.7 FM or radio.umn.ac.id!💥📇</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/programs gen 14/Banner News.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/programs gen 14/Poster Soda.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">SODA
                                </div>
                                <div class="md:text-xl font-poppins text-center">14.00 -
                                    17.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Ultimafriends, bosen sama hari lo yang gitu-gitu aja?😮‍💨 Kalo iya, berarti lo semua wajib dengerin SODA tiap rabu, nih!🫵🏻

Lo bakal ditemenin sama wujud nyata cowok yang susah ditebak, duo maut Faikar dan Priya!🤣 Dijamin bikin lo ngakak terus sama semua keasbunan mereka, setiap jam 2–5 sore‼️

Eits, jangan lupa juga sama cewe-cewe cantik alias Uptown Girl kita yang bakal kasih kalian cerita-cerita menarik👯‍♀️ Pokoknya nggak SODA, nggak KENA, deh!😎 So, tunggu apa lagi? Langsung aja dengerin SODA di 107.7 FM atau di radio.umn.ac.id!📻

Let’s make your own thrill with SODA!🥤🤙🏻</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/programs gen 14/Banner Soda.webp') }}" />
                    </div>
                </div>

                <div
                    class="flex justify-around tab-content-item text-center flex-wrap md:flex-nowrap p-2 gap-4 md:gap-0">
                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/programs gen 14/Poster Campushere.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">CAMPUSPHERE
                                </div>
                                <div class="md:text-xl font-poppins text-center">12.00 -
                                    14.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Ready to vibe with us? Your daily dose of fun, hot topics, and killer playlists is HERE!

So, grab your headphones because we’re on air every weekday except Wednesday!📻 Catch us on 107.7 FM or stream online at radio.umn.ac.id!🎧
</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/programs gen 14/Banner Campusphere.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/programs gen 14/Poster Sathlete.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">SATHLETE
                                </div>
                                <div class="md:text-xl font-poppins text-center">14.00 -
                                    17.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Yoo, Ultimafriends! Jangan lemes gitu dong, harus semangat!🔥

Karena di SATHLETE, kita bakal bahas seputar dunia olahraga dari yang umum sampai yang EDGY🤯 Pokoknya kita bakal seru-seruan bareng supaya tetep semangat dan happy pastinya!

Tenang aja, Bung Yosan dan Bung Ian selalu siap buat keringetan bareng Ultimafriends setiap hari Kamis jam 2-5 sore di 107.7 FM atau radio.umn.ac.id!🏋🏻‍♂️💥

SATHLETE, Free Your Movement, Get Your Pleasure!</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/programs gen 14/Banner Sathlete.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/programs gen 14/Poster jerit malam.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">Jerit Malam
                                </div>
                                <div class="md:text-xl font-poppins text-center">17.00 -
                                    20.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Ultimafriends, pengen nggak sih dengerin siaran yang ngebahas horor dan kasus kasus di luar nalar buat nemenin malem Jumat lo?🫣😱

Dari cerita horor, teka-teki misterius, sampe kejadian di luar akal, semuanya bakal dikupas habis sama Bagas dan Marva yang siap bikin malam Jumat lo merinding!😨

Nah, kalo kalian beneran penasaran banget, mending langsung dengerin JERIT MALAM💀 setiap hari Kamis jam 5-8 malam cuma di 107.7 FM atau radio.umn.ac.id!

Karena di JERIT MALAM, once you listen to it, you will never forget it!👹</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/programs gen 14/Banner jerit malam.webp') }}" />
                    </div>
                </div>

                <div
                    class="flex justify-around tab-content-item text-center flex-wrap md:flex-nowrap p-2 gap-4 md:gap-0">
					
					<div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/programs gen 14/Poster Campushere.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">CAMPUSPHERE
                                </div>
                                <div class="md:text-xl font-poppins text-center">11.00 -
                                    13.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Ready to vibe with us? Your daily dose of fun, hot topics, and killer playlists is HERE!

So, grab your headphones because we’re on air every weekday except Wednesday!📻 Catch us on 107.7 FM or stream online at radio.umn.ac.id!🎧
</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/programs gen 14/Banner Campusphere.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/programs gen 14/Poster News.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">NEWS FLASH
                                </div>
                                <div class="md:text-xl font-poppins text-center">13.00 -
                                    14.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Ultimafriends, kalian mau stay up to date biar nggak FOMO?🤔 Tenang, NEWS FLASH siap bawain berita rasa cerita yang nggak cuma informatif, tapi juga entertaining dan anti boring!🙌🏻

Dari berita A-Z, semuanya ada di sini! So, keep informed setiap Senin, Rabu, dan Jumat, only on 107.7 FM or radio.umn.ac.id!💥📇</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/programs gen 14/Banner News.webp') }}" />
                    </div>

                    <div class="relative group md:p-5 md:max-w-[33.3%]">
                        <div
                            class="flex justify-center align-middle items-center absolute h-full w-full group-hover:scale-100 top-0 -left-0 rounded-xl z-30 opacity-0 bg-white/95 transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out text-[#021f3a] p-1 md:p-4">
                            <img alt="" class="object-contain rounded-xl h-full"
                                src="{{ asset('images/programs/programs gen 14/Poster Charttoppers.webp') }}" />
                            <div class="w-full flex flex-col container h-full">
                                <div class="font-bold md:text-2xl font-poppins text-center">CHARTTOPPERS
                                </div>
                                <div class="md:text-xl font-poppins text-center">16.00 -
                                    17.00
                                </div>
                                <p class="text-xs md:text-base text-left px-4 max-h-54 overflow-scroll">Ready to fiddle together, Ultimafriends?🤠 Drop by at Outlaw Charttoppers to enjoy your favorite music, knowing what your favorite artists have been doing, and latest updates of Billboard chart!🎶💥

So, what are you waiting for? You’ll only be able to catch Lady on Outlaw Charttoppers every Friday at 2-5 PM, only on 107.7 FM or radio.umn.ac.id!🫵🏻

Catch us now with rambling music from the west! Miss us or don’t miss us!💋
</p>
                            </div>
                        </div>
                        <img alt=""
                            class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl w-full aspect-video"
                            src="{{ asset('images/programs/programs gen 14/Banner Charttoppers.webp') }}" />
                    </div>
                </div>
            </div>
        </div>

        <img src="{{ asset('assets/paper/10.webp') }}"
            class="absolute h-[160%] md:h-[140%] object-cover bottom-0 -z-10" alt="">
    </div>

    {{-- U-NNOUNCERS --}}
    {{-- <div class="w-full my-10 lg:px-32">
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
                            <h1 class="font-love text-2xl text-black font-semibold mb-1">Serenata Silvestra</h1>
                            <h1 class="text-lg font-hellomickeys text-black">"BISAAAA, HARUS BISAAAA HARUS BISAAAAA
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
    </div> --}}

    {{-- ARTICLE --}}
    <div class="font-poppins text-black mb-6 bg-[#103069] shadow-inner relative @if ($posts->count() > 0) block
        @else
        @endif"
        style="box-shadow: inset 4px 4px 4px 0 rgb(0 0 0 / 0.05);">
        <img src="{{ asset('assets/others/papertexture.webp') }}" alt=""
            class="absolute w-full h-full opacity-20 z-0">
        <img src="{{ asset('assets/others/notebook.webp') }}" alt=""
            class="absolute top-12 w-64 md:w-auto md:h-full md:end-24 drop-shadow-[0_10px_10px_rgba(0,0,0,0.5)] rotate-12 md:-rotate-12 brightness-[80%]">
        <img src="{{ asset('assets/others/penungu.webp') }}" alt=""
            class="absolute top-12 w-32 md:w-[20%] drop-shadow-[0_10px_10px_rgba(0,0,0,0.5)] brightness-[80%]">
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
            </a> --}}

            {{-- <a class="no-underline" href="/article/obral-etalase-mimpi">
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
        </div>
    </div>

    {{-- Section 4 --}}
    <div id="section-4" class="md:mt-12 w-full my-12 @if ($partnerships->count() < 1) hidden @endif">
        @if ($partnerships->count() > 0)
            <h1 class="font-poppins text-[#021f3a] text-2xl font-bold w-full text-center">Partnerships</h1>
        @endif
        <div class="flex justify-center align-middle w-full my-2 flex-wrap">
            @foreach ($partnerships as $post)
                <img src="{{ $post->image }}" alt="{{ $post->image }}" class="w-36 md:w-80 my-4 object-contain">
            @endforeach
        </div>
    </div>

    {{-- Section 5 --}}
    <div id="section-5" class="md:mt-12 w-full my-12 @if ($mediapartners->count() < 1) hidden @endif">
        @if ($mediapartners->count() > 0)
            <h1 class="font-poppins text-[#021f3a] text-2xl font-bold w-full text-center">Media Partners</h1>
        @endif
        <div class="flex justify-center align-middle w-full my-2 flex-wrap">
            @foreach ($mediapartners as $post)
                <img src="{{ $post->image }}" alt="{{ $post->image }}" class="w-36 md:w-80 my-4 object-contain">
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
            <!-- U-Podcast Section -->
            <div id="u-podcast" class="mx-4 w-[400px] max-w-[90%]">
                <h1 class="font-poppins text-[#021f3a] font-bold text-center my-2">U-Podcast</h1>
                <iframe class="my-2" style="border-radius:15px"
                    src="https://open.spotify.com/embed/episode/5zOPyOllBf6L1XUA95qiNx?utm_source=generator&theme=0"
                    width="100%" height="80" 
                    allow="encrypted-media; clipboard-write; fullscreen; picture-in-picture"
                    loading="lazy" frameborder="0"></iframe>
                <iframe class="my-2" style="border-radius:15px"
                    src="https://open.spotify.com/embed/show/6ytg0qKpDz9ehq2fjklepU?utm_source=generator"
                    width="100%" height="352" 
                    allow="encrypted-media; clipboard-write; fullscreen; picture-in-picture"
                    loading="lazy" frameborder="0"></iframe>
            </div>
    
            <!-- YouTube Section -->
            <div id="utube" class="mx-4 w-[400px] max-w-[90%]">
                <div id="youtube">
                    <h1 class="font-poppins text-[#021f3a] font-bold text-center my-2">Watch Now!</h1>
                    <iframe class="my-2" src="https://www.youtube.com/embed/-3Ex6m_iapg" 
                        width="100%" height="216" frameborder="0" allowfullscreen loading="lazy"></iframe>
                    <iframe class="my-2" src="https://www.youtube.com/embed/MFApg6pxg6o" 
                        width="100%" height="216" frameborder="0" allowfullscreen loading="lazy"></iframe>
                </div>
            </div>
    
            <!-- TikTok Section -->
            <div id="tiktok" class="mx-4 w-[400px] max-w-[90%]">
                <h1 class="font-poppins text-[#021f3a] font-bold text-center my-2">Tiktok</h1>
                <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@umnradio" 
                    data-unique-id="umnradio" data-embed-from="embed_page" data-embed-type="creator">
                    <section> 
                        <a target="_blank" href="https://www.tiktok.com/@umnradio?refer=creator_embed">
                            @umnradio
                        </a> 
                    </section>
                </blockquote>
                <script async src="https://www.tiktok.com/embed.js"></script>
            </div>
        </div>
    </div>
    

    {{-- <script>
        window.onload = function() {
            document.getElementById('modal').classList.remove('hidden');
        };

        document.getElementById('closeModal').onclick = function() {
            document.getElementById('modal').classList.add('hidden');
        };
    </script> --}}
    {{-- <script>
        window.onload = function() {
            const modalToggle = document.getElementById('toggleModal');
            modalToggle.click();
        };
    </script> --}}
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

    {{-- <script>
        const swiper = new Swiper(".mySwiper", {
        loop: true,
        effect: "fade",
        fadeEffect: {
            crossFade: true
        },
        slidesPerView: 1,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        });
    </script> --}}

    {{-- <script>
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
    </script> --}}

    <script>
        var button = document.getElementById("buttonplay");
        var button2 = document.getElementById("buttonpause");
        var player = document.getElementById("player");
    
        button.addEventListener("click", togglePlayPause);
        button2.addEventListener("click", togglePlayPause);

        function togglePlayPause() {
            if (player.paused) {
                player.play();
                 button.classList.add('hidden');
                button2.classList.remove('hidden');
                button3.classList.add('hidden');
                button4.classList.remove('hidden');
            } else {
                player.pause();
                button2.classList.add('hidden');
                button.classList.remove('hidden');
                button4.classList.add('hidden');
                button3.classList.remove('hidden');
            }
        }
    </script>
@endsection
