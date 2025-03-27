@extends('dashboard.layouts.main')

@section('container')
    <div class="pt-10 mx-6 md:mx-20 font-poppins text-black pb-24">
        <h1 class="pt-12 md:pt-24 text-center font-bold mb-6">Charts</h1>
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
                            <th data-priority="5">Actions</th>
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
                                        <a href="/dashboard/charts/{{ $chart->id }}/edit">
                                            <button class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-1 px-2 border-b-4 border-yellow-700 hover:border-yellow-500 rounded">
                                                Edit
                                            </button>
                                        </a>
                                        <form action="/dashboard/charts/{{ $chart->id }}/delete" method="post"
                                            class="inline">
                                            @method('delete')
                                            @csrf
                                            <button onclick="return confirm('Are you sure you want to delete chart?')"
                                                type="submit"
                                                class="bg-red-500 hover:bg-red-400 text-white font-bold py-1 px-2 border-b-4 border-red-700 hover:border-red-500 rounded">
                                                Delete</button>
                                        </form>
                                        <form action="/dashboard/charts/{{ $chart->id }}/publish" method="post"
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
        </div>
    </div>

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
@endsection