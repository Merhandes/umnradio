<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>UMN Radio</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        div::-webkit-scrollbar {
            display: none;
            /* for Chrome, Safari, and Opera */
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body class="h-full bg-white overflow-scroll">
    <x-navigation></x-navigation>

    {{-- SHOW PROGRAM DETAILS HERE --}}
    <div class="w-full h-full overflow-scroll pt-12 md:pt-16 pb-16 md:pb-24">
        <div class="font-poppins text-black relative flex justify-center">
            <img class="w-full h-40 md:h-[400px] object-center object-cover brightness-50"
                src="{{ asset('storage/' . $programdetail->banner_image) }}" alt="">
            <div class="text-white absolute h-full text-center px-2 flex justify-center align-middle items-center">
                <div class="flex flex-col">
                    <h1 class="text-3xl md:text-[40px] font-bold" style="">
                        {{ $programdetail->program_name }}
                    </h1>
                    <div class="md:text-xl pt-2">{{ $programdetail->short_desc }}</div>
                </div>
            </div>
        </div>
        <div class="py-4 px-4 md:px-[10%] flex justify-center flex-wrap pt-10 text-[#021f3a]">
            <img class="md:h-full w-[95%] md:w-[30%] object-contain mb-4 rounded-xl drop-shadow-[2px_6px_4px_rgba(0,0,0,0.5)]"
                src="{{ asset('storage/' . $programdetail->image) }}" alt="" id="poster">
            <div class="flex flex-col md:px-16 justify-center md:w-[60%] gap-5">
                <div class="bg-white rounded-lg drop-shadow-[2px_6px_4px_rgba(0,0,0,0.5)] p-4">
                    <h3 class="text-xl text-center font-poppins md:text-start">
                        @if ($programdetail->slug != 'dice' && $programdetail->slug != 'news-flash')
                            Special
                        @endif Program
                    </h3>
                    <h2 class="text-3xl font-bold text-center md:text-start">{{ $programdetail->program_name }}</h2>
                    <p class="py-4 text-lg">{!! $programdetail->description !!}</p>
                </div>
            </div>
            <div class="w-full flex justify-center md:justify-start flex-wrap md:px-20 md:gap-5">
                <div class="bg-white rounded-lg drop-shadow-[2px_6px_4px_rgba(0,0,0,0.5)] p-4 my-5" id="personnel">
                    <h1 class="w-full text-center font-poppins font-bold text-xl">CREW</h1>
                    @if ($programdetail->penyiar)
                        <p class="py-1 text-lg"><strong>Announcers :</strong> {{ $programdetail->penyiar }}</p>
                    @endif
                    @if ($programdetail->producer)
                        <p class="py-1 text-lg"><strong>Producer :</strong> {{ $programdetail->producer }}</p>
                    @endif
                    @if ($programdetail->visual_creative)
                        <p class="py-1 text-lg"><strong>Visual Creative :</strong>
                            {{ $programdetail->visual_creative }}
                        </p>
                    @endif
                    @if ($programdetail->audio_creative)
                        <p class="py-1 text-lg"><strong>Audio Creative :</strong> {{ $programdetail->audio_creative }}
                        </p>
                    @endif
                    @if ($programdetail->media_affairs)
                        <p class="py-1 text-lg"><strong>Media Affairs :</strong> {{ $programdetail->media_affairs }}
                        </p>
                    @endif
                    @if ($programdetail->music_director)
                        <p class="py-1 text-lg"><strong>Music Director :</strong> {{ $programdetail->music_director }}
                        </p>
                    @endif
                    @if ($programdetail->operator)
                        <p class="py-1 text-lg"><strong>Operator :</strong> {{ $programdetail->operator }}</p>
                    @endif
                </div>
                @if ($programdetail->episodes->count() > 0)
                    <div class="flex justify-center flex-wrap h-fit bg-white rounded-lg drop-shadow-[2px_6px_4px_rgba(0,0,0,0.5)] p-4 my-5">
                        <div class="swiper w-fit"
                            style= "--swiper-pagination-color: #021f3a; --swiper-pagination-bullet-inactive-color: #999999; --swiper-pagination-bullet-inactive-opacity: 1;--swiper-pagination-bullet-horizontal-gap: 6px;
            --swiper-theme-color: #ffffff;">
                            <h1 class="font-poppins text-[#021f3a] font-bold text-center my-2 text-xl">Latest Episodes
                            </h1>
                            <div class="swiper-wrapper">
                                @foreach ($programdetail->episodes as $podcast)
                                    <div class="swiper-slide max-w-[400px]">{!! $podcast->embed_code !!}</div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                            <style>
                                .swiper-button-prev {
                                    color: black;
                                }

                                .swiper-button-next {
                                    color: black;
                                }
                            </style>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>


    <x-audioplayer></x-audioplayer>
    <x-footer></x-footer>
    <script src="{{ asset('js/attachments.js') }}"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper", {
            slidesPerView: 'auto',
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 5000,
            },
        });
    </script>

    <!-- Demo styles -->
    <style>

    </style>
</body>
{{-- <script>
    function getAverageRGB(imgEl) {

        var blockSize = 5, // only visit every 5 pixels
            defaultRGB = {
                r: 0,
                g: 0,
                b: 0
            }, // for non-supporting envs
            canvas = document.createElement('canvas'),
            context = canvas.getContext && canvas.getContext('2d'),
            data, width, height,
            i = -4,
            length,
            rgb = {
                r: 0,
                g: 0,
                b: 0
            },
            count = 0;

        if (!context) {
            return defaultRGB;
        }

        height = canvas.height = imgEl.naturalHeight || imgEl.offsetHeight || imgEl.height;
        width = canvas.width = imgEl.naturalWidth || imgEl.offsetWidth || imgEl.width;

        context.drawImage(imgEl, 0, 0);

        try {
            data = context.getImageData(0, 0, width, height);
        } catch (e) {
            /* security error, img on diff domain */
            return defaultRGB;
        }

        length = data.data.length;

        while ((i += blockSize * 4) < length) {
            ++count;
            rgb.r += data.data[i];
            rgb.g += data.data[i + 1];
            rgb.b += data.data[i + 2];
        }

        // ~~ used to floor values
        rgb.r = ~~(rgb.r / count);
        rgb.g = ~~(rgb.g / count);
        rgb.b = ~~(rgb.b / count);

        return rgb;

    }

    // Function to run getAverageRGB when the page is loaded
    function runOnPageLoad() {
        var imgEl = document.getElementById('poster'); // Change 'your-image-id' to the actual id of your image element
        var averageRGB = getAverageRGB(imgEl);
        var personnel = document.getElementById('personnel')
        personnel.style.backgroundColor = 'rgb(' + averageRGB.r + ',' + averageRGB.g + ',' + averageRGB.b + ')';
        // console.log(averageRGB); // Or do something else with the result
    }

    // Add an event listener for the DOMContentLoaded event
    document.addEventListener('DOMContentLoaded', runOnPageLoad);
</script> --}}

</html>
