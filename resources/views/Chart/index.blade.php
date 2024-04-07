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

    {{-- SHOW CHARTSS --}}
    <div class="w-screen md:w-full h-full overflow-scroll pt-16 pb-16 flex justify-center">
        <div
            class="container md:w-fit grid grid-flow-row-dense md:grid-cols-2 flex-wrap justify-center pt-8 pb-8 md:p-16 font-poppins gap-8">
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
                        <div class="w-full h-32 relative rounded-t-lg flex justify-center">
                            <img class="w-full h-full object-cover rounded-t-lg brightness-50"
                                src="{{ asset('storage/' . $chart->cover_image) }}" alt="">
                            <div class="absolute top-[40%] flex flex-row gap-4">
                                <p id="name_preview" class="text-3xl text-white font-poppins font-bold text-center">
                                    {{ strtoupper($chart->chart_name) }}
                                </p>
                                <a href="{{ $chart->link }}" target="_blank"
                                    class="flex justify-center items-center align-middle hover:cursor-pointer hover:scale-[120%]">
                                    <i class="fa-brands fa-spotify fa-2xl" style="color:#1DB954;"></i>
                                </a>
                            </div>
                        </div>
                        {{-- SONG CONTAINER --}}
                        <div class="song-container flex flex-col gap-2 justify-center p-4 w-full">
                            {{-- SONG CARD --}}
                            @php
                                $song_count = 1;
                            @endphp
                            @foreach ($chart->songs as $song)
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


    <x-audiodefault></x-audiodefault>
    <script src="{{ asset('js/attachments.js') }}"></script>
</body>

</html>
