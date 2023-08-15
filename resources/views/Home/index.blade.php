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
    {{-- <div class="container">
        <h1>Shalom!</h1>
    </div> --}}



    {{-- Section 3 --}}
    <div id="section-3" class="my-4 mx-4">
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
                    <h3 class="swipe_here md:hidden w-full absolute bottom-0.5 text-center">Swipe Here</h3>
                </div>
                <div class="swiper-slide">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/0bJX6EM2jhGoPebVBmo2WF?utm_source=generator"
                        width="300" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    <div class="invis_layer md:hidden"></div>
                    <h3 class="swipe_here md:hidden w-full absolute bottom-0.5 text-center">Swipe Here</h3>
                </div>
                <div class="swiper-slide">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/3vGDg5BKGBCVMp6ZakNtdy?utm_source=generator"
                        width="300" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    <div class="invis_layer md:hidden"></div>
                    <h3 class="swipe_here md:hidden w-full absolute bottom-0.5 text-center">Swipe Here</h3>
                </div>
                <div class="swiper-slide">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/6lyWx7VS8sqvQz6qVhowTq?utm_source=generator"
                        width="300" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    <div class="invis_layer md:hidden"></div>
                    <h3 class="swipe_here md:hidden w-full absolute bottom-0.5 text-center">Swipe Here</h3>
                </div>
                <div class="swiper-slide">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/7vIo3BQwy24fmZ77AxFMtT?utm_source=generator"
                        width="300" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    <div class="invis_layer md:hidden"></div>
                    <h3 class="swipe_here md:hidden w-full absolute bottom-0.5 text-center">Swipe Here</h3>
                </div>
                <div class="swiper-slide">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/2dmVTR6rAaXGiGCLubKY5m?utm_source=generator"
                        width="300" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    <div class="invis_layer md:hidden"></div>
                    <h3 class="swipe_here md:hidden w-full absolute bottom-0.5 text-center">Swipe Here</h3>
                </div>
                <div class="swiper-slide">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/5pkN7hYqLwuUszAIQ1ErUa?utm_source=generator"
                        width="300" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    <div class="invis_layer md:hidden"></div>
                    <h3 class="swipe_here md:hidden w-full absolute bottom-0.5 text-center">Swipe Here</h3>
                </div>
                <div class="swiper-slide">
                    <iframe style="border-radius:15px"
                        src="https://open.spotify.com/embed/playlist/3Av5uQtPEEC3kzk0LlppEw?utm_source=generator"
                        width="300" height="450" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    <div class="invis_layer md:hidden"></div>
                    <h3 class="swipe_here md:hidden w-full absolute bottom-0.5 text-center">Swipe Here</h3>
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
            padding-top: 25px;
            padding-bottom: 30px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            position: relative;
        }

        @media only screen and (max-width:768px){
            .swiper-slide {
            height: 475px;
        }
        }

        .swiper-slide .invis_layer {
            background-color: rgba(146, 146, 146, 0.9);
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
