<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UMN Radio</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body class="composer">
    {{-- Section 1 --}}
    <div>
    <nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Dashboard</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Team</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Projects</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Calendar</a>
          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
          <span class="absolute -inset-1.5"></span>
          <span class="sr-only">View notifications</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
          </svg>
        </button>

        <!-- Profile dropdown -->
        <div class="relative ml-3">
          <div>
            <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
          </div>

          <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <!-- Active: "bg-gray-100", Not Active: "" -->
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
    </div>
  </div>
</nav>
    </div>
    {{-- Section 2--}}
    {{--<div class="container overflow-hidden mx-auto">
            <div id="schedule">
                <h1 class="text-center font-semibold">Weekly Schedule</h1>
                <div class="border-t-2 border-pink-500 w-10 mx-auto mt-4"></div>
                <div class="tabs-group">
                    <div class="tabs-container flex">
                        <div class="tabs">
                            <p>Monday</p>
                        </div>
                        <div class="tabs">
                            <p>Tuesday</p>
                        </div>
                        <div class="tabs">
                            <p>Wednesday</p>
                        </div>
                        <div class="tabs">
                            <p>Thursday</p>
                        </div>
                        <div class="tabs">
                            <p>Friday</p>
                        </div>
            
                        <div class="indicator"></div>
                    </div>
            
                    <div class="tab-content mt-3">
                        <div class="tab-content-item flex justify-around">
                            <div>
                                <img src="{{ asset('assets/NF.webp') }}" alt="News Flash" class="w-20">
                                <p class="-ml-1.5">10.00 - 11.00</p>
                            </div>
                            
                            <div>
                                <img src="{{ asset('assets/SS.webp') }}" alt="SERSAN" class="w-20">
                                <p class="-ml-1.5">11.00 - 14.00</p>
                            </div>
                            
                            <div>
                                <img src="{{ asset('assets/SKOOB.webp') }}" alt="SKOOB" class="w-20">
                                <p class="-ml-1.5">14.00 - 17.00</p>
                            </div>
                        </div>
                        <div class="tab-content-item flex justify-around">
                            <div>
                                <img src="{{ asset('assets/M.webp') }}" alt="Musikalitas" class="w-20">
                                <p class="-ml-1.5">11.00 - 14.00</p>
                            </div>
                            
                            <div>
                                <img src="{{ asset('assets/CT.webp') }}" alt="Campus Troops" class="w-20">
                                <p class="-ml-1.5">15.00 - 17.00</p>
                            </div>
                        </div>
                        <div class="tab-content-item flex justify-around">
                            <div>
                                <img src="{{ asset('assets/SODA.webp') }}" alt="SODA" class="w-20">
                                <p class="-ml-1.5">10.00 - 13.00</p>
                            </div>

                            <div>
                                <img src="{{ asset('assets/NF.webp') }}" alt="News Flash" class="w-20">
                                <p class="-ml-1.5">13.00 - 14.00</p>
                            </div>
                        
                            <div>
                                <img src="{{ asset('assets/K.webp') }}" alt="KAJJA" class="w-20">
                                <p class="-ml-1.5">14.00 - 17.00</p>
                            </div>
                        </div>
                        <div class="tab-content-item flex justify-around">
                            <div>
                                <img src="{{ asset('assets/JM.webp') }}" alt="Jerit Malam" class="w-20">
                                <p class="-ml-1.5">11.00 - 14.00</p>
                            </div>
                            
                            <div>
                                <img src="{{ asset('assets/CT.webp') }}" alt="Campus Troops" class="w-20">
                                <p class="-ml-1.5">15.00 - 17.00</p>
                            </div>
                        </div>
                        <div class="tab-content-item flex justify-around">
                            <div>
                                <img src="{{ asset('assets/BC.webp') }}" alt="BILCIN" class="w-20">
                                <p class="-ml-1.5">10.00 - 13.00</p>
                            </div>

                            <div>
                                <img src="{{ asset('assets/NF.webp') }}" alt="News Flash" class="w-20">
                                <p class="-ml-1.5">13.00 - 14.00</p>
                            </div>
                            
                            <div>
                                <img src="{{ asset('assets/C.webp') }}" alt="Charttopppers" class="w-20">
                                <p class="-ml-1.5">14.00 - 17.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

    {{-- Section 4 --}}
    <div id="section-4" class="w-full my-4 md:mx-4">
        <h1 class="w-full text-center">Instagram Highlights</h1>
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
            <h1 class="text-center my-2">Playlists</h1>
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
                <h1 class="text-center my-2">U-Podcast</h1>
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
                <h1 class="text-center my-2">Tweets</h1>
                <a class="twitter-timeline" data-width="400" data-height="440"
                    href="https://twitter.com/UMNRADIO?ref_src=twsrc%5Etfw">Tweets by UMNRADIO</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div id="utube" class="mx-4 w-[400px] max-w-[90%]">
                <div id="youtube">
                    <h1 class="text-center my-2">Watch Now!</h1>
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
</body>

</html>

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


{{-- <div class="mx-4 w-[326px]">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/Cv_3bGurVw6/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:326px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/Cv_3bGurVw6/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/Cv_3bGurVw6/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by UMN RADIO (@umnradio)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>

            </div>
            <div class="mx-4 w-[326px]">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/Cv6zC8KOkLt/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:326px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/Cv6zC8KOkLt/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/Cv6zC8KOkLt/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by UMN RADIO (@umnradio)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
            </div>
            <div class="mx-4 w-[326px]">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/Cu04lIju-Zi/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:326px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/Cu04lIju-Zi/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/Cu04lIju-Zi/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by UMN RADIO (@umnradio)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
            </div> --}}
            
            <div class="m-10"></div>

            <footer>
                <div class="flex flex-col items-center text-center space-y-3 md:flex-row md:justify-around md:items-start md:text-left md:space-y-0">
                    <div>
                        <img src="{{ asset('assets/umnradio.webp') }}" alt="logo" class="w-20 mt-1">
                    </div>
                    <div class="text-xs">
                        <p>Jalan Scientia Boulevard</p>
                        <p>Universitas Multimedia Nusantara, Gedung B lt. 6</p>
                        <p>Tangerang, Banten 15811, ID</p>
                    </div>
                    <div class="text-xs">
                        <p class="mb-1">Contact Us</p>
                        <div class="flex-col">
                            <a href="http://line.me/ti/p/~@umnradio#~" class="text-black no-underline">
                                <div class="flex">
                                    <img src="{{ asset('assets/line.webp') }}" alt="line" class="w-4 mb-1 mr-1">
                                    <p>Line@</p>
                                </div>
                            </a>

                            <a href="https://twitter.com/UMNRADIO" class="text-black no-underline">
                                <div class="flex">
                                    <img src="{{ asset('assets/twitter.webp') }}" alt="line" class="w-4 mb-1 mr-1">
                                    <p>Twitter</p>
                                </div>
                            </a>

                            <a href="https://www.youtube.com/channel/UCeVl4fsOVkU7yVCurgoq5Lg" class="text-black no-underline">
                                <div class="flex">
                                    <img src="{{ asset('assets/youtube.webp') }}" alt="line" class="w-4 mb-1 mr-1">
                                    <p>Youtube</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="text-xs">
                        <p class="mb-1">Get Our App</p>
                        <a href="https://play.google.com/store/apps/details?id=com.umnradio.umnradio&pcampaignid=web_share"><img src="{{ asset('assets/playstore.webp') }}" alt="playstore" class="w-20"></a>
                    </div>
                </div>
            </footer>
        </div>

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
