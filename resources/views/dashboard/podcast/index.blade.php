@extends('dashboard.layouts.main')

@section('container')
    <div class="pt-10 mx-6 md:mx-20 font-poppins text-black pb-24">
        <h1 class="pt-12 md:pt-24 text-center font-bold mb-6">Podcasts</h1>
        <a href="/podcasts" class="container w-full mx-auto px-2">
            <button
                class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                Show Podcasts
            </button>
        </a>
        <a href="/dashboard/podcasts/new" class="container w-full mx-auto px-2">
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
                                        <a href="/dashboard/podcasts/{{ $podcast->id }}/edit">
                                            <button
                                                class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-1 px-2 border-b-4 border-yellow-700 hover:border-yellow-500 rounded">
                                                Edit</button>
                                        </a>
                                        <form action="/dashboard/podcasts/{{ $podcast->id }}/delete" method="post"
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
@endsection