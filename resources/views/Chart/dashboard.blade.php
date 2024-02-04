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
    <x-internal-nav></x-internal-nav>

    <div class="pt-10 mx-6 md:mx-20 font-poppins text-black pb-24">
        <h1 class="pt-12 md:pt-24 text-center font-bold mb-6">Charts</h1>
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
        <div class="container w-full mx-auto px-2">
            <div id='table_container' class="p-4 mt-6 lg:mt-0 rounded shadow bg-white">
                <table id="posts_table" class="stripe hover"
                    style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th data-priority="0">Chart ID</th>
                            <th data-priority="1">Name</th>
                            <th data-priority="2">Cover Image</th>
                            <th data-priority="3">Link</th>
                            <th data-priority="4">Status</th>
                            <th data-priority="5s">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($charts as $chart)
                            <tr>
                                <td>{{ $chart->id }}</td>
                                <td>{{ $chart->chart_name }}</td>
                                <td><img src="{{ asset('storage/' . $chart->cover_image) }}" alt=""
                                        class="my-1 object-contain h-32"></td>
                                <td>{{ $chart->link }}</td>
                                <td>{{ $chart->status }}</td>
                                <td>
                                    <div class=" flex flex-wrap">
                                        <a href="/charts/{{ $chart->id }}/edit">
                                            <button
                                                class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-1 px-2 border-b-4 border-yellow-700 hover:border-yellow-500 rounded">
                                                Edit</button>
                                        </a>
                                        <form action="/charts/{{ $chart->id }}/delete" method="post"
                                            class="inline">
                                            @method('delete')
                                            @csrf
                                            <button onclick="return confirm('Are you sure you want to delete chart?')"
                                                type="submit"
                                                class="bg-red-500 hover:bg-red-400 text-white font-bold py-1 px-2 border-b-4 border-red-700 hover:border-red-500 rounded">
                                                Delete</button>
                                        </form>
                                        <form action="/charts/{{ $chart->id }}/publish" method="post"
                                            class="inline">
                                            @method('put')
                                            @csrf
                                            <button onclick="return confirm('Are you sure you want to publish chart?')"
                                                type="submit"
                                                class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                                                Publish</button>
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
                            width: '50px',
                            targets: 0
                        },
                        {
                            width: '200px',
                            targets: 1
                        },
                        {
                            width: '200px',
                            targets: 2
                        },
                        {
                            width: '200px',
                            targets: 3
                        },
                        {
                            width: '100px',
                            targets: 4
                        },
                        {
                            width: '100px',
                            targets: 5
                        }
                    ]
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
</body>

</html>
