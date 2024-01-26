<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UMN Radio</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
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

    <div class="pt-10 mx-6 md:mx-20 font-poppins text-black pb-24">
        <h1 class="pt-12 md:pt-24 text-center font-bold mb-6">Podcasts</h1>
        <a href="/podcasts" class="container w-full mx-auto px-2">
            <button
                class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                Show Podcasts
            </button>
        </a>
        <a href="/podcasts/new" class="container w-full mx-auto px-2">
            <button
                class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                New Podcast
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
        <div class="container w-full mx-auto px-2">
            <div id='table_container' class="p-4 mt-6 lg:mt-0 rounded shadow bg-white">
                <table id="posts_table" class="stripe hover"
                    style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th data-priority="0">Podcast ID</th>
                            <th data-priority="1">Title</th>
                            <th data-priority="2">Preview</th>
                            <th data-priority="2">Assigned Playlist</th>
                            <th data-priority="5">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($podcasts as $podcast)
                            <tr>
                                <td class="">{{ $podcast->id }}</td>
                                <td class="">{{ $podcast->title }}</td>
                                <td class="">
                                    {!! $podcast->embed_code !!}
                                </td>
                                <td class="">
                                    @if ($podcast->program_id)
                                        @foreach ($programs as $program)
                                            @if ($program->id == $podcast->program_id)
                                                {{ $program->program_name }}
                                            @endif
                                        @endforeach
                                    @else
                                        No Assigned Programs
                                    @endif
                                </td>
                                <td class="">
                                    <div class=" flex flex-wrap">
                                        <a href="/podcasts/{{ $podcast->id }}/edit">
                                            <button
                                                class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-1 px-2 border-b-4 border-yellow-700 hover:border-yellow-500 rounded">
                                                Edit</button>
                                        </a>
                                        <form action="/podcasts/{{ $podcast->id }}/delete" method="post"
                                            class="inline">
                                            @method('delete')
                                            @csrf
                                            <button onclick="return confirm('Are you sure you want to delete podcast?')"
                                                type="submit"
                                                class="bg-red-500 hover:bg-red-400 text-white font-bold py-1 px-2 border-b-4 border-red-700 hover:border-red-500 rounded">
                                                Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--/Card-->
        </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#posts_table').DataTable({
                    responsive: true,
                    autoWidth: false,
                    columnDefs: [{
                            width: '100px',
                            targets: 0
                        },
                        {
                            width: '200px',
                            targets: 1
                        },
                        {
                            width: '400px',
                            targets: 2
                        },
                        {
                            width: '100px',
                            targets: 3
                        },
                        {
                            width: '100px',
                            targets: 4
                        }
                    ]
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
</body>

</html>
