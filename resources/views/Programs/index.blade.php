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
</head>

<body class="h-full bg-white overflow-scroll">
    <img src="{{asset('assets/others/papertexture.webp')}}" class="fixed w-screen h-screen object-cover opacity-20" alt="">
    <x-navigation></x-navigation>

    {{-- SHOW PROGRAMS --}}
    <div class="w-screen md:w-full h-full overflow-scroll pt-16 pb-24 md:pb-16 flex justify-center">
        <div class="container w-[95%] md:w-4/5 flex flex-col justify-center pt-8 md:p-16 font-poppins gap-6">
            @php
                $count = 0;
            @endphp
            @foreach ($programdetails as $programdetail)
                @if ($count++ % 2 == 0)
                    <div
                        class="w-full flex align-middle items-center flex-wrap justify-center text-[#021f3a] bg-white drop-shadow-[0_3px_3px_rgba(0,0,0,0.4)] rounded-xl py-4">
                        <img class="absolute w-full h-full top-0 object-center object-cover rounded-xl -z-20 opacity-10"
                            src="{{ asset('storage/' . $programdetail->image) }}" alt="">
                        <img class="h-[400px] md:w-[45%] object-center object-cover rounded-xl"
                            src="{{ asset('storage/' . $programdetail->image) }}" alt="">
                        <div class="md:w-2/5 p-8 md:mx-8 flex flex-col justify-center gap-4">
                            <div class="text-4xl font-bold">{{ $programdetail->program_name }}</div>
                            <div class="text-xl font-light">{{ $programdetail->short_desc }}</div>
                            <p class="font-light font-sans max-h-48 text-ellipsis overflow-hidden ...">
                                {!! $programdetail->description !!}</p>
                            <a href="/programs/{{ $programdetail->slug }}">
                                <button
                                    class="bg-transparent hover:bg-[#021f3a] text-[#021f3a] font-semibold hover:text-white py-2 px-4 border border-[#021f3a] hover:border-transparent rounded">DETAILS</button>
                            </a>
                        </div>
                    </div>
                @else
                    <div
                        class="w-full flex align-middle items-center flex-wrap-reverse justify-center text-white bg-[#021f3a] drop-shadow-[0_3px_3px_rgba(0,0,0,0.4)] rounded-xl py-4">
                        <img class="absolute w-full h-full top-0 object-center object-cover rounded-xl -z-20 opacity-10"
                            src="{{ asset('storage/' . $programdetail->image) }}" alt="">
                        <div class="md:w-2/5 p-8 md:mx-8 flex flex-col justify-center gap-4">
                            <div class="text-4xl font-bold">{{ $programdetail->program_name }}</div>
                            <div class="text-xl font-light">{{ $programdetail->short_desc }}</div>
                            <p class="font-light font-sans max-h-48 text-ellipsis overflow-hidden ...">
                                {!! $programdetail->description !!}</p>
                            <a href="/programs/{{ $programdetail->slug }}">
                                <button
                                    class="bg-transparent hover:bg-white text-white font-semibold hover:text-[#021f3a] py-2 px-4 border border-white hover:border-transparent rounded">DETAILS</button>
                            </a>
                        </div>
                        <img class="h-[400px] md:w-[45%] object-center object-cover rounded-xl"
                            src="{{ asset('storage/' . $programdetail->image) }}" alt="">
                    </div>
                @endif
            @endforeach
        </div>
    </div>


    <x-audiodefault></x-audiodefault>
    <script src="{{ asset('js/attachments.js') }}"></script>
</body>

</html>
