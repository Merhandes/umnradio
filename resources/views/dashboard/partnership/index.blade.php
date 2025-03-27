@extends('dashboard.layouts.main')

@section('container')
    <div class="pt-10 mx-6 md:mx-20 font-poppins text-black pb-24">
        <h1 class="pt-12 md:pt-24 text-center font-bold mb-6">Partnerships</h1>
        <a href="/dashboard/partnerships/create" class="container w-full mx-auto px-2">
            <button
                class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                New Partnership
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
                            <th data-priority="1">No. </th>
                            <th data-priority="2">Image</th>
                            <th data-priority="4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($partnerships as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset(str_replace(["\n", "\r"], '', $post->image)) }}" alt="{{ $post->image }}" class="h-36 md:h-30 my-4">
                                </td>
                                <td>
                                    <div class="">
                                        {{-- <a href="/posts/{{ $post->slug }}">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-1 px-2 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                                                Show</button>
                                        </a> --}}
                                        {{-- <a href="/posts/{{ $post->slug }}/edit">
                                            <button
                                                class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-1 px-2 border-b-4 border-yellow-700 hover:border-yellow-500 rounded">
                                                Edit</button>
                                        </a> --}}
                                        <form action="{{ url('/dashboard/partnerships/' . $post->id . '/delete') }}"
                                            method="POST" class="inline" enctype="multipart/form-data">
                                            @method('delete')
                                            @csrf
                                            <button
                                                onclick="return confirm('Are you sure you want to delete partnership?')"
                                                type="submit"
                                                class="bg-red-500 hover:bg-red-400 text-white font-bold py-1 px-2 border-b-4 border-red-700 hover:border-red-500 rounded">
                                                Delete</button>
                                        </form>
                                        {{-- <form action="{{ url('/logo/delete') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-4">
                                                <label for="logo" class="block text-gray-700 text-sm font-bold mb-2">Delete Logo:</label>
                                                <input type="file" name="logo" id="logo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                @error('errorLogo')
                                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                                                    Delete
                                                </button>
                                            </div>
                                            @if (session('deleteSuccess'))
                                                <p class="text-green-500 text-xs italic mt-3">{{ session('deleteSuccess') }}</p>
                                            @endif
                                        </form> --}}
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
                            width: '300px',
                            targets: 0
                        },
                        {
                            width: '300px',
                            targets: 1
                        },
                        {
                            width: '200px',
                            targets: 2
                        }
                    ]
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
@endsection