<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UMN Radio</title>
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> --}}
        
        {{-- <script src="{{ asset('js/tailwind.js') }}"></script> --}}
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://kit.fontawesome.com/667eb529ec.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <script src="{{ asset('js/flowbite/dist/flowbite.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('js/attachments.js') }}"></script>
        @vite('resources/css/app.css')
    </head>
    <body class="composer">
        @include('components.navbar')
            {{-- <div class="container"> --}}
                @yield('container')
            {{-- </div> --}}
        @include('components.audiofooter')
        @include('components.footer')
    </body>
</html>
