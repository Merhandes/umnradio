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
    <div class="w-full h-full overflow-scroll pt-16 pb-24 ">
        <div class="font-poppins text-black relative flex justify-center">
            <img class="w-full h-40 md:h-80 object-top object-cover brightness-50"
                src="{{ asset('storage/' . $programdetail->image) }}" alt="">
            <div class="text-white absolute h-full text-center mt-8 md:mt-32 px-2">
                <h1 class="text-3xl md:text-[40px] font-bold" style="">
                    {{ $programdetail->program_name }}
                </h1>
                <div class="md:text-xl pt-2">{{ $programdetail->short_desc }}</div>
            </div>
        </div>
        <div class="py-4 px-4 md:px-[10%] flex justify-center flex-wrap pt-10 text-[#021f3a]">
            <img class="md:h-full w-[75%] md:w-[30%] object-contain pb-8"
                src="{{ asset('storage/' . $programdetail->image) }}" alt="">
            <div class="flex flex-col md:px-16 justify-center md:w-[60%]">
                <h3 class="text-xl">Program</h3>
                <h2 class="text-3xl font-bold">{{ $programdetail->program_name }}</h2>
                <p class="py-2 text-lg">{{ $programdetail->description }}</p>
                <br>
                <p class="py-1 text-lg"><strong>U-nnouncers :</strong> {{ $programdetail->penyiar }}</p>
                @if ($programdetail->producer)
                    <p class="py-1 text-lg"><strong>Producer :</strong> {{ $programdetail->producer }}</p>
                @endif
                @if ($programdetail->visual_creative)
                    <p class="py-1 text-lg"><strong>Visual Creative :</strong> {{ $programdetail->visual_creative }}
                    </p>
                @endif
                @if ($programdetail->audio_creative)
                    <p class="py-1 text-lg"><strong>Audio Creative :</strong> {{ $programdetail->audio_creative }}</p>
                @endif
                @if ($programdetail->media_affairs)
                    <p class="py-1 text-lg"><strong>Media Affairs :</strong> {{ $programdetail->media_affairs }}</p>
                @endif
                @if ($programdetail->music_director)
                    <p class="py-1 text-lg"><strong>Music Director :</strong> {{ $programdetail->music_director }}</p>
                @endif
            </div>
        </div>
        @if ($programdetail->episodes->count() > 0)
            <div class="px-4 md:px-[10%] mt-6 flex justify-center flex-wrap">
                <div class="swiper w-fit"
                    style= "--swiper-pagination-color: #021f3a; --swiper-pagination-bullet-inactive-color: #999999; --swiper-pagination-bullet-inactive-opacity: 1;--swiper-pagination-bullet-horizontal-gap: 6px;
            --swiper-theme-color: #ffffff;">
                    <h1 class="font-poppins text-[#021f3a] font-bold text-center my-2 text-xl">Episodes</h1>
                    <div class="swiper-wrapper">
                        @foreach ($podcasts as $podcast)
                            @if ($podcast->program_id == $programdetail->id)
                                <div class="swiper-slide max-w-[400px]">{!! $podcast->embed_code !!}</div>
                            @endif
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


    <x-audiodefault></x-audiodefault>
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
        });
    </script>

    <!-- Demo styles -->
    <style>

    </style>
</body>

</html>
