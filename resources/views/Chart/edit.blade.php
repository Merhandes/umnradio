<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <script src="https://kit.fontawesome.com/667eb529ec.js" crossorigin="anonymous"></script>
</head>

<body class="composer h-full bg-white">
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
                <!-- <a href="#" class="font-poppins text-base text-white no-underline">About</a>
                    <a href="#" class="font-poppins text-base text-white no-underline">Programs</a> -->
                <a href="/articles" class="font-poppins text-base text-white underline-offset-4">Articles</a>
                <a href="/oprec" class="font-poppins text-base text-white underline-offset-4" hidden>OPREC</a>
            </div>

            <div class="mobile-navbar">
                <div class="fixed left-0 w-full h-48 p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
                    @click.away=" isOpen = false">
                    <div class="flex flex-col space-y-6">
                        <a href="/" class="font-poppins -sm text-black">Home</a>
                        <!-- <a href="#" class="font-poppins text-sm text-black">About</a> -->
                        <a href="/articles" class="text-sm text-black">Articles</a>
                        <a href="/oprec" class="text-sm text-black" hidden>OPREC</a>
                        <!-- <a href="#" class="text-sm text-black">Podcasts</a> -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- POST FORM --}}
    <div class="pt-10 mx-6 md:mx-48 font-poppins text-black pb-24">
        <h1 class="pt-12 md:pt-24 text-center font-bold mb-6">Edit Chart</h1>
        <a href="/charts/dashboard" class="container w-full mx-auto px-2">
            <button
                class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                Show Charts
            </button>
        </a>
        <a href="/songs/dashboard" class="container w-full mx-auto px-2">
            <button
                class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                Show Songs
            </button>
        </a>
        <a href="/charts/new" class="container w-full mx-auto px-2">
            <button
                class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                New Chart
            </button>
        </a>
        <a href="/songs/new" class="container w-full mx-auto px-2">
            <button
                class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                New Song
            </button>
        </a>
        <a href="/charts/add-song" class="container w-full mx-auto px-2">
            <button
                class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                Add Song to Chart
            </button>
        </a>
        @if (session()->has('success'))
            {{-- <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div> --}}
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 my-4 rounded relative w-fit"
                role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        <form id="chartForm" class="w-[90%]" action="/charts/{{ $chart->id }}/update" enctype="multipart/form-data"
            method="post">
            @method('put')
            @csrf
            <!-- Prevent implicit submission of the form -->
            <button type="submit" disabled style="display: none" aria-hidden="true"></button>
            <div class="my-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="chart_name">
                    Chart Name
                </label>
                <input data-index='1'
                    class="@error('chart_name') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="chart_name" id="chart_name" type="text" placeholder="Nama Chart"
                    value="{{ old('chart_name', $chart->chart_name) }}" oninput="previewName(this.value)">
                @error('chart_name')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="link">
                    Playlist Link (Spotify)
                </label>
                <input data-index='3'
                    class="@error('link') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="link" id="link" type="text" placeholder="Link Spotify Chart"
                    value="{{ old('link', $chart->link) }}">
                @error('link')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div class="my-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="cover_image">
                    Cover Image
                </label>
                <input type="hidden" name="old_cover_image" value="{{ $chart->cover_image }}">
                <input type="file" accept="image/*" id="cover_image" name="cover_image" onchange="previewImage()"
                    class="@error('cover_image') border-red-500 @enderror ">
                @error('cover_image')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex items-center justify-between my-4">
                <button
                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Save
                </button>
            </div>
        </form>
        {{-- CHART CARD --}}
        <div
            class="w-[90vw] md:w-[35vw] md:min-w-[300px] flex flex-col justify-center align-middle items-center rounded-lg bg-white drop-shadow-lg">
            <div class="w-full h-32 relative rounded-t-lg flex justify-center">
                <img class="w-full h-full object-cover rounded-t-lg brightness-50 img-preview"
                    src="{{ asset('storage/' . $chart->cover_image) }}" alt="">
                <div class="absolute top-[40%] flex flex-row gap-4">
                    <p id="name_preview" class="text-3xl text-white font-poppins font-bold text-center">
                        {{ $chart->chart_name }}
                    </p>
                    <div class="flex justify-center items-center align-middle hover:cursor-pointer">
                        <i class="fa-brands fa-spotify fa-2xl" style="color:#1DB954;"></i>
                    </div>
                </div>
            </div>
            <a href="/charts/add-song" class="container w-full mx-auto px-2">
                <button
                    class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                    Add Song to Chart
                </button>
            </a>
            {{-- SONG CONTAINER --}}
            <div class="song-container flex flex-col gap-2 justify-center p-4 w-full">
                @php
                    $count = 1;
                @endphp

                @if (count($junctions) > 0)
                    @foreach ($junctions as $junction)
                        {{-- SONG CARD --}}
                        <div
                            class="song w-full flex flex-row items-center align-middle bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] h-24 md:h-40 p-4 rounded-lg gap-2 md:gap-6 relative">
                            @foreach ($songs as $song)
                                @if ($song->id == $junction->song_id)
                                    <div
                                        class="absolute top-0 start-0 bg-[#021f3a] p-3 rounded-tl-lg rounded-br-[30px] drop-shadow-[0_3px_3px_rgba(255,255,255,0.4)]">
                                        <p class="text-sm md:text-md font-poppins text-white">#{{ $count++ }}
                                        </p>
                                    </div>
                                    <img class="h-full aspect-square rounded-lg object-cover"
                                        src="{{ asset('storage/' . $song->cover_image) }}" alt="">
                                    <div
                                        class="h-full flex flex-col lg:justify-center flex-grow overflow-scroll md:overflow-auto text-ellipsis">
                                        <p class="text-lg md:text-2xl text-black font-poppins font-bold">
                                            {{ $song->title }}</p>
                                        <p class="text-sm md:text-md text-gray-800 font-poppins">
                                            {{ $song->artists }}</p>
                                    </div>

                                    <div class="flex flex-col justify-center w-24">
                                        <form action="/charts/junction/{{ $junction->id }}/update" method="post"
                                            class="">
                                            @method('put')
                                            @csrf
                                            <p class="font-bold">Position</p>
                                            <input name="position" min="0" class="w-12 shadow border rounded text-gray-700" type="number"
                                                value="{{ $junction->position }}">
                                            <button type="submit"
                                                class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-1 px-2 border-b-4 border-yellow-700 hover:border-yellow-500 rounded">
                                                Update</button>
                                        </form>

                                        <form action="/charts/junction/{{ $junction->id }}/remove" method="post"
                                            class="">
                                            @method('delete')
                                            @csrf
                                            <button
                                                onclick="return confirm('Are you sure you want to remove song from chart?')"
                                                type="submit"
                                                class="bg-red-500 hover:bg-red-400 text-white font-bold py-1 px-2 border-b-4 border-red-700 hover:border-red-500 rounded">
                                                Delete</button>
                                        </form>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    @endforeach
                @else
                    {{-- SONG CARD --}}
                    <div
                        class="song w-full flex flex-row items-center align-middle bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] h-24 md:h-40 p-4 rounded-lg gap-2 md:gap-6 relative">
                        <div
                            class="absolute top-0 start-0 bg-[#021f3a] p-3 rounded-tl-lg rounded-br-[30px] drop-shadow-[0_3px_3px_rgba(255,255,255,0.4)]">
                            <p class="text-sm md:text-md font-poppins text-white">#0</p>
                        </div>
                        <img class="h-full aspect-square rounded-lg object-cover"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Placeholder_view_vector.svg/310px-Placeholder_view_vector.svg.png"
                            alt="">
                        <div
                            class="h-full flex flex-col lg:justify-center flex-grow overflow-scroll md:overflow-auto text-ellipsis">
                            <p class="text-lg md:text-2xl text-black font-poppins font-bold">SONG NAME (INI MOCKUP)
                            </p>
                            <p class="text-sm md:text-md text-gray-800 font-poppins">artist name, artist name,
                                artist
                                name, artist name, artist name</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    {{-- AUDIO --}}
    <footer id="audiosticky"
        class="fixed bottom-0 w-full z-40 h-16 bg-[#021f3a] flex flex-row gap-16 justify-center items-center transition-all duration-500">
        <button id="buttonplay2"><svg xmlns="http://www.w3.org/2000/svg" height="2em"
                viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <style>
                    svg {
                        fill: #ffffff
                    }
                </style>
                <path
                    d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
            </svg></button>
        <button id="buttonpause2" class="hidden"><svg xmlns="http://www.w3.org/2000/svg" height="2em"
                viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <style>
                    svg {
                        fill: #ffffff
                    }
                </style>
                <path
                    d="M48 64C21.5 64 0 85.5 0 112V400c0 26.5 21.5 48 48 48H80c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H48zm192 0c-26.5 0-48 21.5-48 48V400c0 26.5 21.5 48 48 48h32c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H240z" />
            </svg></button>
        <audio id="player">
            <source src='https://i.klikhost.com/8374/' />
        </audio>
    </footer>

    <script>
        var button3 = document.getElementById("buttonplay2");
        var button4 = document.getElementById("buttonpause2");
        var audio = document.getElementById("player");

        button3.addEventListener("click", function() {
            if (audio.paused) {
                audio.play();
                button3.classList.add('hidden');
                button4.classList.remove('hidden');
            } else {
                audio.pause();
                button4.classList.add('hidden');
                button3.classList.remove('hidden');
            }
        });

        button4.addEventListener("click", function() {
            if (audio.paused) {
                audio.play();
                button3.classList.add('hidden');
                button4.classList.remove('hidden');
            } else {
                audio.pause();
                button4.classList.add('hidden');
                button3.classList.remove('hidden');
            }
        });
    </script>
    <script src="{{ asset('js/attachments.js') }}"></script>
</body>

<script>
    function previewName(value) {
        const name_preview = document.getElementById('name_preview')
        name_preview.innerHTML = value
    }

    function previewImage() {
        const image = document.querySelector('#cover_image')
        const imgPreview = document.querySelector(".img-preview")

        imgPreview.style.display = 'block'
        const oFReader = new FileReader()

        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

    $('#chartForm').on('keydown', 'input', function(event) {
        if (event.which == 13) {
            event.preventDefault();
            var $this = $(event.target);
            var index = parseFloat($this.attr('data-index'));
            $('[data-index="' + (index + 1).toString() + '"]').focus();
        }
    });
</script>

<style>
    .attachment img {
        height: 400px;
        width: auto;
    }

    .attachment {
        display: flex;
        justify-content: center;
    }
</style>

</html>
