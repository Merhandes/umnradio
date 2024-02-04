<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white">

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
    <x-internal-nav></x-internal-nav>
    <img src="{{ url('/images/backgroundnew.webp') }}" alt="Image"
        class="absolute z-0 h-full w-full object-cover object-top brightness-50" />
    <div class="absolute z-0 h-full w-full bg-black/50 backdrop-blur-sm" />

    {{-- POST FORM --}}
    <div
        class="pt-24 md:pt-36 px-6 md:px-0 mx-6 font-poppins text-black pb-24 flex justify-center align-middle items-center h-full flex-wrap gap-10 overflow-scroll">
        <a href="/programs/dashboard"
            class="bg-white text-black rounded-lg p-4 md:aspect-square md:w-96 md:h-96 w-full h-40 font-poppins flex flex-wrap justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <h1 class="font-bold text-2xl md:text-3xl text-center">DASHBOARD PROGRAM</h1>
            </div>
        </a>
        <a href="/charts/dashboard"
            class="bg-white text-black rounded-lg p-4 md:aspect-square md:w-96 md:h-96 w-full h-40 font-poppins flex flex-wrap justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <h1 class="font-bold text-2xl md:text-3xl text-center">DASHBOARD CHART</h1>
            </div>
        </a>
        <a href="/songs/dashboard"
            class="bg-white text-black rounded-lg p-4 md:aspect-square md:w-96 md:h-96 w-full h-40 font-poppins flex flex-wrap justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <h1 class="font-bold text-2xl md:text-3xl text-center">DASHBOARD LAGU</h1>
            </div>
        </a>
        <a href="/podcasts/dashboard"
            class="bg-white text-black rounded-lg p-4 md:aspect-square md:w-96 md:h-96 w-full h-40 font-poppins flex flex-wrap justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <h1 class="font-bold text-2xl md:text-3xl text-center">DASHBOARD PODCAST</h1>
            </div>
        </a>
    </div>
</body>

</html>
