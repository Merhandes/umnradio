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
    <div
        class="pt-20 md:pt-36 px-6 md:mx-12 font-poppins text-black pb-24 flex justify-center flex-wrap h-full overflow-scroll gap-5">
        <div class="w-full">
            <a href="/dashboard/segments"
                class="bg-white border-2 border-black text-black rounded-lg px-3 py-2 font-poppins font-bold justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200">Back</a>
        </div>
        <div
            class="bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.25)] w-full rounded-lg flex flex-wrap justify-center items-baseline align-top p-6 h-fit">
            <h2 class="text-2xl font-bold font-poppins">ADD NEW SEGMENT</h2>
            <form action="/dashboard/segments/{{$segment->id}}/update" method="POST" enctype="multipart/form-data" id="segmentForm"
                class="w-full flex flex-wrap justify-start">
                @method('put')
                @csrf
                <div class="gap-4 flex flex-wrap">
                    <div class="w-full">
                        <p>Title</p>
                        <input type="text" name="title" id="title" onchange="previewContent()"
                            class="border-1 border-black py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow w-full"
                            value="{{ old('title', $segment->title) }}">
                        @error('title')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full">
                        <p>Content</p>
                        <textarea name="content" id="content" onchange="previewContent()"
                            class="border-1 border-black py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow w-full">{{ old('content', $segment->content) }}</textarea>
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
                        class="font-bold text-white font-poppins bg-yellow-600 px-2 py-1 rounded disabled:opacity-50"
                        disabled>
                        Update
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
            <h1 class="font-poppins text-[#021f3a] text-2xl font-bold text-center my-2 mb-6" id="titlePreview">{{$segment->title}}</h1>
            <div id="preview" class="w-full block">{!!$segment->content!!}</div>
        </div>
    </div>
@endsection