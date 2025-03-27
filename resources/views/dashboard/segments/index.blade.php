@extends('dashboard.layouts.main')

@section('container')
    <style>
        :root {
            color-scheme: only light;
        }

        .dataTables_filter input {
            border: 1px solid;
        }
    </style>

    {{-- POST FORM --}}
    <div class="pt-20 md:pt-36 px-6 md:mx-12 font-poppins text-black pb-24 flex justify-center flex-wrap h-full overflow-scroll gap-5">
        <div class="w-full flex flex-row gap-10">
            <a href="/admin-landing"
                class="bg-white border-2 border-black text-black rounded-lg px-3 py-2 font-poppins font-bold justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200">Back</a>
            @if (session()->has('success'))
                {{-- <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div> --}}
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative w-fit"
                    role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
        </div>
        <div class="bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.25)] w-full rounded-lg flex flex-wrap justify-center items-baseline align-top p-6 h-fit">
            <h2 class="text-2xl font-bold font-poppins">ADD NEW SEGMENT</h2>
            <form action="/dashboard/segments/add" method="POST" enctype="multipart/form-data" id="segmentForm"
                class="w-full flex flex-wrap justify-start">
                @csrf
                <div class="gap-4 flex flex-wrap">
                    <div class="w-full">
                        <p>Title</p>
                        <input type="text" name="title" id="title" onchange="previewContent()"
                            class="border-1 border-black py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow w-full"
                            value="{{ old('title') }}">
                        @error('title')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full">
                        <p>Content</p>
                        <textarea name="content" id="content" onchange="previewContent()"
                            class="border-1 border-black py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow w-full">{{ old('content') }}</textarea>
                        @error('content')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="my-1 flex items-center space-x-2">
                        <input type="checkbox" id="confirmCheckbox" name="confirmCheckbox"
                            class="form-checkbox text-blue-500" onchange="toggleSubmitButton()">
                        <label for="confirmCheckbox" class="text-gray-700">I have inputted the correct data</label>
                    </div>
                    <button type="submit" id="submitButton"
                        class="font-bold text-white font-poppins bg-blue-600 px-2 py-1 rounded disabled:opacity-50"
                        disabled>
                        Submit
                    </button>
                </div>
                <script>
                    function toggleSubmitButton() {
                        // Get the checkbox and the submit button
                        const checkbox = document.getElementById('confirmCheckbox');
                        const submitButton = document.getElementById('submitButton');

                        // Enable or disable the submit button based on the checkbox state
                        submitButton.disabled = !checkbox.checked;
                    }
                </script>
            </form>
            <script>
                function previewContent() {
                    const content = document.getElementById('content');
                    const title = document.getElementById('title');
                    const titlePreview = document.getElementById('titlePreview');
                    const preview = document.getElementById('preview');
                    preview.classList.remove('hidden');
                    preview.classList.add('block');
                    preview.innerHTML = content.value;
                    titlePreview.innerHTML = title.value;
                }

                $('#segmentForm').on('keydown', 'input', function(event) {
                    if (event.which == 13) {
                        event.preventDefault();
                        var $this = $(event.target);
                        var index = parseFloat($this.attr('data-index'));
                        $('[data-index="' + (index + 1).toString() + '"]').focus();
                    }
                });
            </script>
        </div>
        <div class="w-full flex flex-wrap justify-center mt-5">
            <h1 class="text-2xl font-bold font-poppins w-full text-center">PREVIEW</h1>
            <hr class="w-full">
            <h1 class="font-poppins text-[#021f3a] text-2xl font-bold text-center my-2 mb-6" id="titlePreview"></h1>
            <div id="preview" class="hidden w-full"></div>
        </div>
        <div class="bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.25)] w-full rounded-lg flex flex-wrap justify-center items-baseline align-top p-6 h-fit">
            <h2 class="text-center font-poppins text-2xl font-bold h-fit">Segments</h2>
            <div id='table_container' class="p-4 mt-6 lg:mt-0 rounded shadow bg-white w-full">
                <table id="payment_table" class="stripe hover"
                    style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th data-priority="0">ID</th>
                            <th data-priority="1">Title</th>
                            <th data-priority="2">Content</th>
                            <th data-priority="3">Status</th>
                            <th data-priority="4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($segments as $segment)
                            <tr>
                                <td class="text-center">{{ $segment->id }}</td>
                                <td class="text-center">{{ $segment->title }}</td>
                                <td class="text-center">
                                    <p class="w-[200px] max-h-[400px] truncate">{{ $segment->content }}<< /p>/td>
                                <td class="text-center">
                                    {{ $segment->status }}
                                </td>
                                <td class="">
                                    <div class="flex justify-center flex-wrap gap-2">
                                        <a href="/dashboard/segments/{{ $segment->id }}/details"
                                            class="font-bold text-white font-poppins bg-blue-600 hover:bg-blue-300 hover:text-black px-2 py-1 rounded">
                                            Details</a>
                                        <form action="/dashboard/segments/{{ $segment->id }}/publish" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <button href="" type="submit"
                                                class="font-bold text-white font-poppins bg-green-600 hover:bg-green-300 hover:text-black px-2 py-1 rounded">
                                                Publish</button>
                                        </form>
                                        <form action="/dashboard/segments/{{ $segment->id }}/remove" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <button href="" type="submit"
                                                class="font-bold text-white font-poppins bg-yellow-600 hover:bg-yellow-300 hover:text-black px-2 py-1 rounded">
                                                Remove</button>
                                        </form>
                                        <form action="/dashboard/segments/{{ $segment->id }}/delete" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('delete')
                                            <button href="" type="submit" onclick="return confirm('Are you sure you want to delete segment: {{$segment->title}}?')"
                                                class="font-bold text-white font-poppins bg-red-600 hover:bg-red-300 hover:text-black px-2 py-1 rounded">
                                                Delete</button>
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

<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {

        var table = $('#payment_table').DataTable({
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
                ]
            })
            .columns.adjust()
            .responsive.recalc();
    });
</script>
@endsection