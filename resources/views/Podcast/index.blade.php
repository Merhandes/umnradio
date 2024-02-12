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
    <script src="https://kit.fontawesome.com/667eb529ec.js" crossorigin="anonymous"></script>
</head>

<body class="h-full bg-white">
    <x-navigation></x-navigation>

    {{-- SHOW PROGRAMS --}}
    <div class="w-screen md:w-full h-full overflow-scroll pt-16 pb-16 flex justify-center">
        <div class="container md:w-[90%] flex flex-wrap justify-center pt-8 md:p-16 font-poppins gap-5">
            @foreach ($podcasts as $podcast)
                <div class="w-[45%]">
                    {!! $podcast->embed_code !!}
                </div>
            @endforeach
        </div>
    </div>

    <x-audiodefault></x-audiodefault>
    <script src="{{ asset('js/attachments.js') }}"></script>
</body>

</html>
