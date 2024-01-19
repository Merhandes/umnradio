<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ULTIMACREWS</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body class="h-full bg-white">
    {{-- NAVBAR --}}
    <div x-data="{ isOpen: false }" class="fixed w-full flex justify-between p-3 z-40 bg-[#021f3a] lg:p-4">
        <a class="flex items-center" href="/">
            <img class="h-10 md:h-16 w-auto" src="{{ asset('images/logowhite.webp') }}" alt="">
        </a>

        <div class="flex items-center justify-between">
            <button @click="isOpen = !isOpen" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="pr-4 hidden space-x-6 lg:inline-block">
                <a href="/" class="font-poppins text-base text-white no-underline">Home</a>
            </div>

            <div class="mobile-navbar">
                <div class="fixed left-0 w-full h-48 p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
                    @click.away=" isOpen = false">
                    <div class="flex flex-col space-y-6">
                        <a href="/" class="font-poppins -sm text-black">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ url('/images/backgroundnew.webp') }}" alt="Image"
        class="absolute z-0 h-full w-full object-cover object-top brightness-50" />
    <div class="absolute z-0 h-full w-full bg-black/50 backdrop-blur-sm" />

    {{-- POST FORM --}}
    <div
        class="pt-24 md:pt-36 px-6 md:px-0 mx-6 md:mx-48 font-poppins text-black pb-24 flex justify-center align-middle items-center h-full flex-wrap gap-10 overflow-scroll">
        <a href="/uang-kas"
            class="bg-white text-black rounded-lg p-4 md:aspect-square md:w-96 md:h-96 w-full h-40 font-poppins flex flex-wrap justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <img class="md:w-[50%]" src="{{ url('/images/icon-coin.webp') }}" alt="">
                <h1 class="font-bold text-2xl md:text-3xl text-center">BAYAR UANG KAS</h1>
            </div>
        </a>
        <div
            class="bg-white text-black rounded-lg p-4 md:aspect-square md:w-96 md:h-96 w-full h-40 font-poppins flex flex-wrap justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <img class="md:w-[50%]" src="{{ url('/images/icon-dashboard.webp') }}" alt="">
                <h1 class="font-bold text-2xl md:text-3xl text-center">DASHBOARD BENDAHARA</h1>
            </div>
        </div>
        <div
            class="bg-white text-black rounded-lg p-4 md:aspect-square md:w-96 md:h-96 w-full h-40 font-poppins flex flex-wrap justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <img class="md:w-[50%]" src="{{ url('/images/icon-music.webp') }}" alt="">
                <h1 class="font-bold text-2xl md:text-3xl text-center">DASHBOARD MD</h1>
            </div>
        </div>
        <div
            class="bg-white text-black rounded-lg p-4 md:aspect-square md:w-96 md:h-96 w-full h-40 font-poppins flex flex-wrap justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <img class="md:w-[50%]" src="{{ url('/images/icon-partner.webp') }}" alt="">
                <h1 class="font-bold text-2xl md:text-3xl text-center">DASHBOARD PARTNERSHIP</h1>
            </div>
        </div>
        <div
            class="bg-white text-black rounded-lg p-4 md:aspect-square md:w-96 md:h-96 w-full h-40 font-poppins flex flex-wrap justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <img class="md:w-[50%]" src="{{ url('/images/icon-news.webp') }}" alt="">
                <h1 class="font-bold text-2xl md:text-3xl text-center">DASHBOARD NEWS</h1>
            </div>
        </div>
        <div
            class="bg-white text-black rounded-lg p-4 md:aspect-square md:w-96 md:h-96 w-full h-40 font-poppins flex flex-wrap justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <img class="md:w-[50%]" src="{{ url('/images/icon-user.webp') }}" alt="">
                <h1 class="font-bold text-2xl md:text-3xl text-center">DASHBOARD ADMIN</h1>
            </div>
        </div>
    </div>
</body>

</html>
