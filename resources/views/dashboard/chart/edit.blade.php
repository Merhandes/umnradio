@extends('dashboard.layouts.main')

@section('container')
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
    
    {{-- POST FORM --}}
    <div class="pt-10 mx-6 md:mx-48 font-poppins text-black pb-24">
        <h1 class="pt-12 md:pt-24 text-center font-bold mb-6">Edit Chart</h1>
        <a href="/dashboard/charts" class="container w-full mx-auto px-2">
            <button
                class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                Show Charts
            </button>
        </a>
        <a href="/dashboard/songs" class="container w-full mx-auto px-2">
            <button
                class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                Show Songs
            </button>
        </a>
        <a href="/dashboard/charts/new" class="container w-full mx-auto px-2">
            <button
                class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                New Chart
            </button>
        </a>
        <a href="/dashboard/songs/new" class="container w-full mx-auto px-2">
            <button
                class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                New Song
            </button>
        </a>
        <a href="/dashboard/charts/add-song" class="container w-full mx-auto px-2">
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
        <form id="chartForm" class="w-[90%]" action="/dashboard/charts/{{ $chart->id }}/update" enctype="multipart/form-data"
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
                    class="@error('chart_name') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
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
                    class="@error('link') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
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
            {{-- <a href="/dashboard/charts/add-song" class="container w-full mx-auto px-2">
                <button
                    class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                    Add Song to Chart
                </button>
            </a> --}}
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
                                        <form action="/dashboard/charts/junction/{{ $junction->id }}/update" method="post"
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

                                        <form action="/dashboard/charts/junction/{{ $junction->id }}/remove" method="post"
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
@endsection